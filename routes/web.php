<?php


use App\Livewire\Login;
use App\Livewire\Visit;
use App\Livewire\Register;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Dashboard::class)->name('home');
Route::get('/home', Dashboard::class)->name('home');
Route::get('/dashboard', Dashboard::class)->name('home');

Route::get('/visits', Visit::class)->name('visits');

Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
// Route::post('/logout', Visit::class);
