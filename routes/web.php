<?php

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
Auth::routes();
//管理平台路由
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {return view('welcome');});
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/menu', 'Menu\MenuController@menuList')->name('menu');

});


// 中间件类
Route::get('profile', function () {
    // 只有认证过的用户可进入...
})->middleware('auth.basic');




//纯路由类
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('foo', function () {
//     return 'Hello World';
// });
// Route::get('/user', 'User@index');
// Route::resources([
//     'photos' => 'Photo',
//     'posts' => 'Post'
// ]);
