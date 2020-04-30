<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class order extends Controller
{   
    public function create($obj){
        return Food::create([
            'category'=>$obj->get('category'),
            'name'=>$obj->get('name'),
            'price'=>$obj->get('price'),
        ]);
    }

    public function selectAll(){
        return Food::all();
    }

    public function getMenu(){
        //$Table=$this->selectAll();
        $Category = Food::select('category')->groupBy('category')->get();
        $Table = array();
        foreach($Category as $category){
            //return strval($category);
            array_push($Table, $category);
            array_push($Table, Food::select('name','price')->where('category', 'LIKE',$category->category)->get());
        }

        return view('pages.menu', ['Table'=>$Table]);
    }

    public function postOrder(Request $req){
        //$this->create($req);
        
        //return $req->get('name');
    }
}
