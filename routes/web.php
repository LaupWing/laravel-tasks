<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get("/", function () {
   $tasks = Session::get("tasks", []);
   return view("tasks", ["tasks" => $tasks]);
});

Route::post("/add", function (Request $request) {
   $tasks = Session::get("tasks", []);
   logger($tasks);
   if (!empty($task)) {
      $tasks = Session::get("tasks", []);
      $tasks[] = $request->todo;
      Session::put("tasks", $tasks);
  }
   return view("tasks", ["tasks" => $tasks]);
});
