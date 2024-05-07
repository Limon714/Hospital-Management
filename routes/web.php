<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'homeredirect']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/dlt_aptmnt/{id}',[HomeController::class,'dlt_aptmnt']);


Route::get('/add_doctor_view',[AdminController::class,'add_doctor_view']);
Route::get('/show_doctor_view',[AdminController::class,'show_doctor_view']);
Route::post('/upload_doctor',[AdminController::class,'upload_doctor']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/cancel/{id}',[AdminController::class,'cancel_appointment']);
Route::get('/delete/{id}',[AdminController::class,'delete_doctor']);










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
