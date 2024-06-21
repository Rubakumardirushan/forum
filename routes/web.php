<?php

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
use App\Http\Controllers\Auth\SocialiteController;

Route::get('auth/github', [SocialiteController::class, 'redirectToGitHub'])->name('auth.github');
Route::get('auth/github/callback', [SocialiteController::class, 'handleGitHubCallback']);

Route::get('/', function () {
    return view('welcome');
});
