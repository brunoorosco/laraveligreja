<?php

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

Route::get('/tes', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('admin.dashboard');
});

// Route::group([
//     'middleware' => ['auth'],
//     'prefix' => 'admin',
//     'namespace' => 'Admin',
//     'name' => 'admin.'
// ], function () {
//     Route::get('/', function () {
//         return 'admin';
//     })->name('dashboard');

//     Route::get('/dashboard', function () {
//         return 'dashboard';
//     })->name('dashboard');

//     Route::get('/relatorio', function () {
//         return 'relatorio';
//     })->name('relatorio');
// });


// Route::middleware([])->group(function () {
//     Route::get('/entrar', function () {
//         return 'login';
//     })->name('web.login');

//     Route::get('/cadastrar', function () {
//         return 'cadastrar';
//     })->name('web.cadastrar');

//     Route::get('/recuperar', function () {
//         return 'recuperar';
//     })->name('web.recuperar');

//     Route::get('/senha/{email}/{forget}', function () {
//         return 'senha';
//     })->name('web.senha');

//     Route::post('/login', function () {
//         return 'login';
//     })->name('web.login');

//     Route::post('/register', function () {
//         return 'register';
//     })->name('web.register');

//     Route::post('/forget', function () {
//         return 'forget';
//     })->name('web.forget');

//     Route::post('/reset', function () {
//         return 'reset';
//     })->name('web.reset');
// });

