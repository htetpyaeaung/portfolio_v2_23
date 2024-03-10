<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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
    return view('app');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', [ProjectsController::class, 'processProjects']);

Route::get('/cara-integration', function () {
    return view('cara');
});
Route::get('/mis-thermofisher', function () {
    return view('thermo');
});
Route::get('/portfolio-ocstudio', function () {
    return view('ocportfolio');
});
Route::get('/nuber', function () {
    return view('nuber');
});
Route::get('/sawater', function () {
    return view('sawater');
});


Route::get('/tail', function () {
    return view('app');
});

