<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class front extends Controller
{
    public function frontend(){
        $obj=Product::all();
        return view("frontend")->with(["data"=>$obj]);
    }
}
