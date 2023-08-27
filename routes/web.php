<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


$tasks = [
   
];

Route::get("/", function () use ($tasks) {
   return view("tasks", ["tasks" => $tasks]);
});

Route::post("/add", function (Request $request) use ($tasks) {
   dd($request->all());
   return view("tasks", ["tasks" => $tasks]);
});
