<?php

use App\Livewire\HomeComponent;
use App\Livewire\PropertyComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home.index');

Route::get('/property', PropertyComponent::class)->name('property');

//https://www.youtube.com/watch?v=pqeM9QA7I9I&list=PLz_YkiqIHesvxr_f-P-MitN0wnkfXCdd1&index=1
