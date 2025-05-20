<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/femme-de-menage', function () {
    return view('femme-de-menage');
})->name('femme-de-menage');

Route::get('/nounou', function () {
    return view('nounou');
})->name('nounou');

Route::get('/cuisinière', function () {
    return view('cuisiniere');
})->name('cuisinière');

Route::get('/employée-polyvalente', function () {
    return view('employee-polyvalente');
})->name('employée-polyvalente');

Route::get('/Garde-malade', function () {
    return view('Garde-malade');
})->name('Garde-malade');

Route::get('/Chauffeur-Coursier', function () {
    return view('Chauffeur-Coursier');
})->name('Chauffeur : Coursier');

Route::get('/Concierge & gardien', function () {
    return view('Concierge & gardien');
})->name('Concierge & gardien');

Route::get('/Agent-de-sécurité', function () {
    return view('Agent-de-securite');
})->name('Agent de sécurité');



Route::get('/menage-cuisine', function () {
    return view('menage-cuisine');
})->name('menage-cuisine');


Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submit.form');
