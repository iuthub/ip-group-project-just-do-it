<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Factory;
use App\Food;
use App\Customer;
use App\Order;
use Validator;

class orderSystem extends Controller
{
    public function createFood($obj){
        return Food::create([
            'category'=>$obj->get('category'),
            'name'=>$obj->get('name'),
            'price'=>$obj->get('price'),
        ]);
    }

    public function createCustomer($obj){
        return Customer::create([
            'name'=>$obj->get('name'),
            'phoneNumber'=>$obj->get('tel'),
            'latitude'=>$obj->filled('latitude')?$obj->get('latitude'):"-",
            'longitude'=>$obj->filled('longitude')?$obj->get('longitude'):"-",
            'comment'=>$obj->filled('comment')?$obj->get('comment'):"-",
        ]);
    }

    public function createOrder($obj, $customer_id){
        foreach($obj->all() as $key => $value){
            if(Food::where('id', '=', $key)->exists()){
                Order::create([
                    'customers_id'=>$customer_id,
                    'foods_id'=>$key,
                    'value'=>$value,
                ]);
            }
        }
    }


    public function selectAll(){
        return Food::all();
    }

    public function menu(){
        $Category = Food::select('category')->orderBy('created_at')->groupBy('category')->get();
        $Table = array();
        foreach($Category as $category){
            array_push($Table, $category);
            array_push($Table, Food::select('id', 'name','price')->where('category', 'LIKE',$category->category)->get());
        }
        return $Table;
    }

    public function getMenu(){
        return view('pages.menu', ['Table'=>$this->menu()]);
    }

    public function getOrder(){

        return view('pages.order', ['Table'=>$this->menu()]);
    }

    public function postOrder(Request $req){
        $order = array();
        $priceSum = 0;
        foreach($req->all() as $index => $value){
            if($index !== "_token" && filter_var($value, FILTER_VALIDATE_INT) === false){
                return redirect()->route('pages.order')->withErrors(['Enter valid inputs']);
            }
            
            if($value>0){
                $result = Food::select('id', 'name','price')->where('id', '=',$index)->first();
                $priceSum += $result->price * $value;
                $result->{"value"}=$value;
                array_push($order, $result);
            }
        }
        if($priceSum<=0)
            return redirect()->route('pages.order')->withErrors(['Enter valid inputs']);
        return view('pages.orderConfirmation',['Table' => $order, 'priceSum' => $priceSum]);
    }

    public function getOrderConfirmation(Request $req){
        return redirect()->route('getOrder');
    }

    public function postOrderConfirmation(Request $req){
        $comment = $req->filled('comment')?"exists":"no";
        $latitude = $req->filled('latitude')?"exists":"no";
        $longitude = $req->filled('longitude')?"exists":"no";

        if(!(($latitude == "exists" && $longitude == "exists") || $comment == "exists"))
            return redirect()->route('pages.order')->withErrors(['Enter delivery place or allow for geolocation from browser']);
        
        if(strlen($req->get('name'))<=3 || strlen($req->get('name'))>=45)
            return redirect()->route('pages.order')->withErrors("Error with name length (minimum is 3 and maximum is 45)");
        

        if(strlen($req->get('tel')) != 13)
            return redirect()->route('pages.order')->withErrors("Phone number length must be 13 characters");

        if($req->get('tel')[0] != '+' || $req->get('tel')[1] != '9' || $req->get('tel')[2] != '9' || $req->get('tel')[3] != '8')
            return redirect()->route('pages.order')->withErrors("Enter valid phone number");
        
        if(!(ctype_digit(substr($req->get('tel'), 1))))
            return redirect()->route('pages.order')->withErrors("Enter valid phone number");
        
        $customer = $this->createCustomer($req);
        $this->createOrder($req, $customer->id);
        return redirect()->route('indexPage')->withInfo('Your order has been accepted');
    }
}
