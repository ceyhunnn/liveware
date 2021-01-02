<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Post;
use App\Http\Livewire\Blog;
use App\Http\Livewire\Dblog;
use App\Http\Livewire\Contact;
use App\Http\Livewire\User;
use App\Http\Livewire\Student;
use App\Http\Livewire\Image;






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

Route::get('post',Post::class);
Route::get('blog',Blog::class);
Route::get('dblog',Dblog::class);
Route::get('contact',Contact::class);
Route::get('user',User::class);
Route::get('students',Student::class);
Route::get('image',Image::class);
