<?php

use Source\Http\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\AppointmentController;

$num = "([\d]+)";
$str = "([\w-]+)";

//Admin Routes
Route::get("dashboard",[DashboardController::class,"index"]);


//Web Routes
Route::get("",[HomeController::class,"index"]);

Route::get("about-us",[AboutController::class,"index"]);

Route::get("gallery",[GalleryController::class,"index"]);

Route::get("services",[ServicesController::class,"index"]);

Route::get("appointment",[AppointmentController::class,"index"]);
Route::post("appointment/send",[AppointmentController::class,"send"]);

Route::get("contact-us",[ContactController::class,"index"]);
Route::post("contact-us/send",[ContactController::class,"send"]);
