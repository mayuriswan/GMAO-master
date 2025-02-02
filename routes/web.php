<?php

use App\Http\Controllers\Api\ClientController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\testController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('test',[testController::class ,'index'])->name('test.post'); 
Route::post('/clients',[ClientController::class ,'index'])->name('clients.index'); 
Route::put('/clients/{client}',[ClientController::class ,'update'])->name('clients.update'); 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->resource('clients',ClientController::class);