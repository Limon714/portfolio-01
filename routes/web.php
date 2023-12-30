<?php

use App\Http\Controllers\HomeController;
use App\Livewire\About;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'Home'])->name('homepage');
Route::post('/admin',[HomeController::class,'Homepost'])->name('home');
Route::get('/admin',Dashboard::class)->name('dashboard');
Route::get('/admin/about',About::class)->name('aboutpage');
Route::post('/admin/about',[About::class,'about'])->name('about');

