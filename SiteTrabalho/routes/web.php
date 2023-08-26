<?php

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
    return View("paginas.index");
});

Route::get('/about', function () {
    return View("paginas.about");
});

Route::get('/services', function () {
    return View("paginas.services");
});

Route::get('/team', function () {
    return View("paginas.team");
});

Route::get('/contact', function () {
    return View("paginas.contact");
});

Route::get('/portfolio', function () {
    return View("paginas.portfolio");
});

Route::get('/pricing', function () {
    return View("paginas.pricing");
});
