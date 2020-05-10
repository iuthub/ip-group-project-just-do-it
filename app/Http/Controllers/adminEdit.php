<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Order;
use DB;

class adminEdit extends Controller
{
    public function createFood($obj){
        return Food::create([
            'category'=>$obj->get('category'),
            'name'=>$obj->get('name'),
            'price'=>$obj->get('price'),
        ]);
    }

    public function getCategoryColumn(){
        $result = array();
        $column = Food::select('category')->groupBy('category')->get()->toArray();
        foreach($column as $key)
            array_push($result, $key['category']);
        return $result;
    }
    public function getAdminEdit(Request $req){
        return redirect()->route('getAddFood');
    }
    public function getAddFood(Request $req){
        return view('admin.addFood', ['category' => $this->getCategoryColumn()]);
    }

    public function postAddFood(Request $req){
        $food = Food::Where('name', '=', $req->get('name'))->first();
        if($food !== null)
            return redirect()->route('getAddFood')->withErrors("Food with this name exists");
        $result = $this->createFood($req);

        if ($req->hasFile('img')) {
            $image = $req->file('img');
            $name = $result->id.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/food_img');
            $image->move($destinationPath, $name);
        }
        return redirect()->route('getAddFood')->withInfo("Data created");
    }

    public function getModify(Request $req){
        return view('admin.modify', ["Food"=> Food::all()]);
    }

    public function postModify(Request $req){
        $counter = 0;
        $request = array();
        foreach($req->all() as $key => $value)
            array_push($request,$value);

        $db = array();
        foreach(Food::all() as $value){
            array_push($db,$value->id);
            array_push($db,$value->name);
            array_push($db,$value->category);
            array_push($db,$value->price);
        }

        for($k=0; $k<count($request); $k=$k+4){
            $id = 0;
            if(!(array_key_exists($k, $request) && array_key_exists($k, $db)))
                return redirect()->route('getModify')->withInfo("Modified successfully");
            if(intval($request[$k]) == $db[$k])
                $id = $db[$k];
            else
                return redirect()->route('getModify')->withErrors("Invalid data");

            if(empty($request[$k+1]) || empty($request[$k+2]) || empty(intval($request[$k+3])))
                return redirect()->route('getModify')->withErrors("Invalid data, names or price can not be undefined");

            if($request[$k+1] != $db[$k+1])
                DB::update('update foods set name = ? where id = ?',[$request[$k+1], $id]);

            if($request[$k+2] != $db[$k+2])
                DB::update('update foods set category = ? where id = ?',[$request[$k+2], $id]);

            if(intval($request[$k+3]) != $db[$k+3])
                DB::update('update foods set price = ? where id = ?',[intval($request[$k+3]), $id]);
        }
        return redirect()->route('getModify')->withInfo("Modified successfully");
    }

    public function getDelete(Request $req){
        return view("admin.deleteFood", ['Food'=>Food::select('name')->groupBy('name')->get()->toArray()]);
    }

    public function postDelete(Request $req){
        if(count($req->toArray()) == 1)
            return redirect()->route('postDelete')->withErrors("Choose food for deletion");
        $deletion = Food::where('name', $req->get('food'));
        $order = Order::where('foods_id', $deletion->get()->first()->id)->get();
        if(count($order) != 0){
            return redirect()->route('postDelete')->withErrors("There is order for this food");
        }
        $deletion->delete();
        return redirect()->route('getDelete')->withInfo("Deleted successfully");
    }
}
