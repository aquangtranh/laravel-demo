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

Route::get('/', function () {
    //code lay data từ database , xử lí logic

    return view('welcome');
});

//route for user
Route::group([
    'prefix' => 'frontend',
    'as' => 'frontend.',
    // 'namespace' => 'Admin',
    // 'middleware' => 'isAdmin'
], function(){
    Route::get('/nguoidung', 'UserController@index')->name('users.index');
    Route::get('/users/{id?}', 'UserController@show')->name('users.show');
    Route::get('/users/{id}/friends/{friendID}', 'UserController@showFriend')->name('users.show-friend');
});

// route for admin
// Route::group(function(){
//     Route::get('/admin/dashboard', 'AdminController@index')->name('admin.index');
//     Route::get('/admin/category', 'AdminController@category')->name('admin.category');
// });

Route::get('/users/{id}/password-reset', 'UserController@resetPassword')->name('users.reset-pass')->middleware('signed');

Route::get('get-signed-url', function(){
    // $url = \URL::signedRoute('users.reset-pass', 1);
    $url = \URL::temporarySignedRoute(
        'users.reset-pass',
        \Carbon\Carbon::now()->addMinutes(1),
         1
    );
    dd($url);
});

Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');