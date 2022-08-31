<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
//get 網址
// return 取得的頁面內容
//<a href="檔案實際位置">   網址名稱 隨便你取    <a>
// <a href=" return('檔名') ">   get/f3_url  <a>


Route::get('/f1', function () {
    $myArr = [1,2,3,4,5];
    dd($myArr);
    return view('f1');
});

Route::get('/hello', function () {
    // $myArr = [1,2,3,4,5];
    // dd($myArr);
    return view('f1');
});

// Route::get('/student', [TestController::class, 'index']);

Route::get('/f2', function () {
    return view('test');
});

Route::get('/get/{name}/{num}', [TestController::class, 'getByurl']);


// Route::get('/student', function () {
//     // $myArr = [7,8,9,10,11];
//     // dd($myArr);
//     // dd(./);
//     return view('Student');
// });

// use App\Http\Controllers\PhotoController;
 
// Route::resource('photos', PhotoController::class);

// Route::resources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);

use App\Http\Controllers\bikeController;
 
Route::resource('bikes', bikeController::class);

