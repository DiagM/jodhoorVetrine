<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\EmailController;
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

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/project1', function () {
    return view('project1');
})->name('project1');
Route::get('/comingsoon', function () {
    return view('comingsoon');
})->name('comingsoon');
Route::get('/metamed', function () {
    return view('metamed');
})->name('metamed');
Route::get('/xi', function () {
    return view('xi');
})->name('xi');

Route::post('/video/submit', [VideoController::class, 'submit'])->name('video.submit');
Route::post('/send-email', [EmailController::class,'sendEmail'])->name('send.email');
