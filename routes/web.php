<?php

use App\Http\Livewire\ArticleDetail;
use App\Http\Livewire\Blog\AddBlog;
use App\Http\Livewire\Blog\ShowArticle;
use App\Http\Livewire\Books;
use App\Http\Livewire\Contact;
use App\Http\Livewire\EditArticle;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\MediaGallery;
use App\Http\Livewire\MediaUpload;
use App\Http\Livewire\Partner;
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

Route::get('/', Home::class)->name('home');
Route::get('contact', Contact::class)->name('contact');
Route::get('partenaires', Partner::class)->name('partenaires');
Route::get('books', Books::class)->name('books');
Route::get('auth/admin/login', Login::class)->name('login');
Route::get('/articles/{slug}', ArticleDetail::class)->name('articles.show');

Route::get('/add-articles', AddBlog::class)->name('add-blog');
Route::get('/blog', ShowArticle::class)->name('blog');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {});
Route::get('/admin/articles/{id}/edit', EditArticle::class)
    ->middleware('auth') // Protection via auth middleware
    ->name('admin.articles.edit');

Route::get('/media/upload', MediaUpload::class)->name('media.upload')->middleware('auth');
Route::get('/media/gallery', MediaGallery::class)->name('media.gallery');
