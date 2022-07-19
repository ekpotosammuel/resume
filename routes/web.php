<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;

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

// Route::get('/contact', function () {
//     return view('contact.contact');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', 'HomeController@index'); 

Route::get('project', [ExperienceController::class, 'index'])->name('project');
// Route::get('profile', [ProfileController::class, 'index'])->name('profile');


Route::group(['prefix' => 'profile'], function() {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::put('/{profile}', [ProfileController::class, 'update'])->name('edit');

});

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store']);
// Route::get('contact', [ContactController::class, 'index'])->name('contact');
