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
    return view('welcome');
});

// Route::get('/about', function () {
//     return "Hi About Page";
// });

// Route::get('/contact', function () {
//     return "Hi Contact Page";
// });

// route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number " . $id . " " . $name;
// });

// route::get('admin/posts/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     return "this url is " . $url;
// }));

// route::get('/post/{id}', 'App\Http\Controllers\PostController@index');

// route::resource('posts', 'App\Http\Controllers\PostController');

// route::get('/contact', 'App\Http\Controllers\PostController@contact');

// route::get('post/{id}/{name}/{password}', 'App\Http\Controllers\PostController@show_post');

// route::get('/read', function () {
//     $results = DB::select('select * from posts where id = ?', [1]);

//     foreach ($results as $post) {
//         return $post->title;
//     }
// });


route::get('/update', function () {
    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);
    return $updated;
});
