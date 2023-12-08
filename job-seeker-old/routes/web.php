<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobSeekerController;

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

Route::get('/home', [JobSeekerController::class, 'home']);

Route::get('/login', [JobSeekerController::class, 'login']);

Route::get('/', function () {
    header("Location: /home");
    exit;
});
