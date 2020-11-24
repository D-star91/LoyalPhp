<?php

use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Homecontroller::class,"index"]) ->name("home");
Route::post("/",[Homecontroller::class,"useremail"]) ->name("useremail");
Route::get("/Bible",[Homecontroller::class,"Bible"]) ->name("bible");
Route::get("/Book",[Homecontroller::class,"Book"]) ->name("book");
Route::get("/Contact",[Contactcontroller::class,"Contact"]) ->name("contact");
Route::post("/Contact",[Contactcontroller::class,"usercontact"]) ->name("usercontact");
Route::get("/About",[Homecontroller::class,"About"]) ->name("about");