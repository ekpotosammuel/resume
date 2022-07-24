<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Route::get('/', 'HomeController@index'); 

/*
|--------------------------------------------------------------------------
| PROJECT
|--------------------------------------------------------------------------
*/
// Route::post('/add', [ExperienceController::class, 'store']);    Route::get('/', [ExperienceController::class, 'index'])->name('project');
    

Route::get('/project', [ExperienceController::class, 'index'])->name('project');
Route::get('/showForm', [ExperienceController::class, 'showForm'])->name('show');
Route::post('/store', [ExperienceController::class, 'store'])->name('add');

// Route::group(['prefix' => 'project'], function() {
//     Route::get('/', [ExperienceController::class, 'index'])->name('project');
//     Route::get('/add', [ExperienceController::class, 'showForm']);
//     Route::post('/add', [ExperienceController::class, 'store'])->name('add');



// });




/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'profile'], function() {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::put('/{profile}', [ProfileController::class, 'update'])->name('edit');

});

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store']);
// Route::get('contact', [ContactController::class, 'index'])->name('contact');
