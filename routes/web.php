<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'Home'])->name('home');
Route::post('/admin',[HomeController::class,'Homepost'])->name('home');
Route::get('/admin',Dashboard::class)->name('dashboard');

