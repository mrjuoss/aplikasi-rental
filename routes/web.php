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

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/test', function () {
        $name = request('name');
        //return "test ".$name;
        return view('test', ['name' => $name]);
    });
    Route::get('/post/{title}', 'PostController@show');

//    Route::get('/post/{title}', function ($title) {
//        $posts = [
//            'my-first-post' => 'Hello, this is my first blog post',
//            'my-second-post' => 'Now I am getting the hang of thus blogging thing'
//        ];
//        if (! array_key_exists($title, $posts))
//        {
//            abort(404, 'Sorry, that post was not found');
//        }
//        return view ('post', [
//           'post' => $posts[$title] /** OR add Ternry -> ?? 'Nothing here yet' */
//        ]);
//    });

    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::get('produk', 'ProdukController@index');
    Route::get('produk/tambah', 'ProdukController@tambah');
});
