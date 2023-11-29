<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CourseController::class, "index"]);

Route::post('/enroll',[ApplicationController::class, "new_application"]);

Route::get('/admin',[AdminController::class, "index"]);

Route::get('/application/{id_application}/confirm',[ApplicationController::class, "confirm"]);

Route::post("/course/create",[CourseController::class, "create"]);

Route::post('/category/create',[CategoryController::class, "create"]);

Route::get("/registration",[HomeController::class,"indexReg"])->name("reg");

Route::get("/login",[HomeController::class,"indexLogin"])->name("login");

Route::get("/logout",[HomeController::class,"logout"])->name("logout");

Route::post("/registration",[HomeController::class,"registration"])->name("registration");
 
Route::post("/auth",[HomeController::class,"login"])->name("auth");

Route::get("/home",[HomeController::class,"index"])->name("home");

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/course/{course}', [CategoryController::class, 'courses']);