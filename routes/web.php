<?php

use App\Http\Controllers\CreatureController;
use App\Http\Controllers\DomainController;
use App\Http\Livewire\App;
use App\Models\Domain;
use Illuminate\Support\Facades\Route;

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

Route::get('/', App::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->group(function () {
});
Route::resource('domains', DomainController::class);
Route::resource('creatures', CreatureController::class);

require __DIR__.'/auth.php';
