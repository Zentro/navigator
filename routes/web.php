<?php

use App\Http\Controllers\Profile\ProfileEditController;
use App\Http\Controllers\Profile\ProfileSetupController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'setup'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileEditController::class, 'edit'])->middleware('setup')->name('profile.edit');
    Route::patch('/profile', [ProfileEditController::class, 'update'])->middleware('setup')->name('profile.update');
    Route::delete('/profile', [ProfileEditController::class, 'destroy'])->middleware('setup')->name('profile.destroy');
    Route::get('/profile/setup', [ProfileSetupController::class, 'create'])->name('profile.setup');
    Route::patch('/profile/setup', [ProfileSetupController::class, 'update'])->name('profile.setup.update');
});

require __DIR__.'/auth.php';



Route::get('/quoteform', function () {
    return view('quoteform');
})->middleware(['auth', 'verified'])->name('quoteform');



use App\Http\Controllers\HistoryController;

Route::get('/quotehistory', [HistoryController::class, 'showHistory'])
    ->name('fuelquotehistory');

use App\Http\Controllers\FormController;

Route::get('/quoteform', [FormController::class, 'showForm'])->name('quoteform.show');
Route::post('/quoteform/submit', [FormController::class, 'submit'])->middleware(['auth', 'verified'])->name('quoteform.submit');