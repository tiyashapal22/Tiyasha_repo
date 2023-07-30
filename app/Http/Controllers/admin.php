<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Shipping;
use App\Models\Payment;

class admin extends Controller
{
    public function design(){
        return view("design");
    }
    public function addproduct(){
        return view("addproduct");
    }
    public function savedetails(Request $r){
        $proname=$r->pname;
        $proprice=$r->pprice;
        $fl=$r->file("pimage");
        if(isset($fl)){
            $fn=time().$fl->getClientOriginalName();
            $fl->move("image",$fn);
        }
        $obj=new Product();
        $obj->pname=$proname;
        $obj->pprice=$proprice;
        $obj->pimage=$fn;
        $obj->save();
        return redirect(url('/viewproduct'));
    }
    public function viewproduct(){
        $obj=Product::all();
        return view("viewproduct")->with(["data"=>$obj]);
    }
    public function editproduct(Request $r){
        $id=$r->eid;
        $obj=Product::find($id);
        return view("editproduct")->with(["data"=>$obj]);
    }
    public function updateproduct(Request $r)
    {
        $id=$r->editid;
        $proname=$r->pname;
        $proprice=$r->pprice;
        $fl=$r->file("pimage");
        if(isset($fl))
        {
            $fn=time().$fl->getClientOriginalName();
            $fl->move("image",$fn); 
        }
        $obj=Product::find($id);
        $obj->pname=$proname;
        $obj->pprice=$proprice;
        if(isset($fl))
        {
            $delimage=$obj->pimage;
            unlink("image/".$delimage);
            $obj->pimage=$fn;
        }
        $obj->update();
        return redirect(url('/viewproduct'));
    }
    public function deleteproduct(Request $r){
        $id=$r->did;
        $obj=Product::find($id);
        unlink("image/".$obj->pimage);
        $obj->delete();
        return redirect(url('/viewproduct'));
    }
    public function subcart(Request $r){
      $name=$r->proname;
      $price=$r->proprice;
      $quantity=$r->proqty;
      $cal=$quantity*$price;
      $obj=new Cart();
      $obj->proname=$name;
      $obj->proprice=$price;
      $obj->proqty=$quantity;
      $obj->total=$cal;
      $obj->save();
      return redirect(url('/viewcart'));
    }
    public function viewcart(){
        $obj1=Cart::all();
        return view("viewcart")->with(["data"=>$obj1]);
    }
    public function shipping(){
      return view("shipping");
    }
    public function saveaddress(Request $r){
        $name=$r->name;
        $add=$r->address;
        $phone=$r->phone;
        $obj=new Shipping();
        $obj->name=$name;
        $obj->address=$add;
        $obj->phone=$phone;
        $obj->save();
        return redirect(url('/'));
      }
      public function Payment(){
        return view("payment");
      }
      public function Donation(Request $r){
        $name=$r->pname;
        $phone=$r->pnumber;
        $amount=$r->pamount;
        $obj=new Payment();
        $obj->payname=$name;
        $obj->payphone=$phone;
        $obj->payamount=$amount;
        $obj->save();
        return redirect(url('/'));
      }
}

