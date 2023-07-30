<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\front;
use App\Http\Controllers\ExcelController;

Route::get("/",[admin::class,"design"]);
Route::get("/addproduct",[admin::class,"addproduct"]);
Route::post("/savedetails",[admin::class,"savedetails"]);
Route::get("/viewproduct",[admin::class,"viewproduct"]);
Route::get("/editproduct/{eid}",[admin::class,"editproduct"]);
Route::post("/updateproduct",[admin::class,"updateproduct"]);
Route::get("/deleteproduct/{did}",[admin::class,"deleteproduct"]);
Route::get("/dashboard",[front::class,"frontend"]);
Route::post("/subcart",[admin::class,"subcart"]);
Route::get("/viewcart",[admin::class,"viewcart"]);
Route::get("/shipping",[admin::class,"shipping"]);
Route::post("/saveaddress",[admin::class,"saveaddress"]);
Route::get("/payment",[admin::class,"payment"]);
Route::post('/donation',[admin::class,"donation"]);
Route::get('/excel',[ExcelController::class,'index']);
Route::post("/submitexcel",[ExcelController::class,"submitexcel"]);