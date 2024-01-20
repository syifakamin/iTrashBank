<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminController\guideRecycleController;
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

//Route for auth (Login, Register, Forget Password. etc)
require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard/guiderecycle', [guideRecycleController::class, 'show'])->name('guide.show');
});

//Group Route for Admin dashboard
Route::middleware('auth', 'verified')->group(function () {


    Route::get('dashboard/guiderecycle', [guideRecycleController::class, 'show'])->name('guide.show');
});
