<?php

use App\Models\Post;
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
//    $post = new Post();
//    $post->title = 'test title';
//    $post->content = 'test content';
//    $post->save();

    Post::create([
        'title'=>'test title',
        'content'=>'test content',
    ]);
});
