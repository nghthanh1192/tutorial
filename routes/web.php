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
    return view('welcome');
});

Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('usercontroller/path', [
    'middleware' => 'First',
    'uses' => 'UserController@showPath',
]);

Route::resource('my', 'MyController');

// Route::controller('test', 'ImplicitController');

class MyClass {
    public $foo = 'bar';
}
Route::get('/myclass', 'ImplicitController@index');

Route::get('register', function() {
    return view('register');
});
Route::post('user/register', 'UserRegistration@postRegister');