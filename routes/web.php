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
Route::get('haydar', 'brain@index');
Route::get('nishan', 'brain@index1');
Route::get('rifat', function () {
    return view('doly.rifat');
});
Route::get('dhaka', ['uses'=>function () {
    return view('doly.rifat');
},'middleware'=>'checkage']);