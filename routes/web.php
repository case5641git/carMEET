<?php

use App\Http\Controllers\EventController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EventController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/events', [EventController::class, 'eventList'])->name('events');
Route::get('/events/detail', function () {
    return view('event.event-detail');
})->name('event_detail');
Route::get('/events/regist', function () {
    return view('event.event-regist');
})->name('event_regist');
Route::get('/events/edit', function () {
    return view('event.event-edit');
})->name('event_edit');
Route::get('/method/organiz', function () {
    return view('how-to-organiz');
})->name('how_to_organiz');
Route::get('/method/join', function () {
    return view('how-to-join');
})->name('how-to-join');
Route::post('/store',[EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('event.show');