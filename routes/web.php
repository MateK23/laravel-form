<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('hi');
});

Route::get("/formtosendpostmethod",function(){
	return view("guests.form");
});


Route::post("/testrequest",function(Request $request){
	$data=[
		"name"=>$request->post()["name"],
		"surname"=>$request->post()["surname"],
		"address"=>$request->post()["address"],
		"biography"=>$request->post()["biography"],
		"bday"=>$request->post()["bday"],
	];
	return view("guests.table",["newdata"=>$data]);

})->name("posttest");


Route::get("/parameter/{id}",function($id){
	return $id;
})->name("gettest");