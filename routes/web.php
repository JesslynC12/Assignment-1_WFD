<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrganizerController;

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
    return view('base.base');
});
Route::resource('organizers', OrganizerController::class);
Route::resource('categories', CategoryController::class);
Route::resource('events', EventController::class);

// Route::get('/events', [EventController::class, 'list'])->name('events.list');
// Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
