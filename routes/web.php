<?php

use App\Models\Domain;
use App\Http\Livewire\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\AdminQuizController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', App::class)->middleware(['role:user']);
    Route::resource('admin', AdminController::class)->middleware(['role:admin']);
    Route::resource('quiz', AdminQuizController::class)->middleware(['role:admin']);
    // Route::prefix('/admin')->name('admin.')->group(function () {
    // });
});

// Route::resource('domains', DomainController::class);
// Route::resource('creatures', CreatureController::class);
Route::post('/update-point', [QuizController::class, 'updatePoint'])->name('update.point');

require __DIR__ . '/auth.php';
