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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/route/hello', function () {
    return '<h1>Hello from Route!</h1>';
});

Route::get('/view/hello', function () {
    return view('message.hello');
});

Route::get('/view/var', function () {
    return view('message.var', ['variable' => 'Hello from web.php']);
});

// 下記の方法でも可
Route::get('/view/var', function () {
    $data = ['variable' => 'Hello from web.php'];
    return view('message.var', $data);
});
