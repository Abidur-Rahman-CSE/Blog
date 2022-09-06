<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserPanelController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes(['verify' => true]);

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [UserPanelController::class, 'index'])->name('home');
Route::get('/blog/{blog}', [UserPanelController::class, 'show'])->name('blog_show');
Route::post('/give-comment/{id}', [CommentController::class, 'store'])->name('give-comment');





Route::group(['prefix'=>'admin'], function(){

    Route::get('/blog-index', [BackendController::class, 'index'])->name('index');
    Route::get('/blog/{blog}', [BackendController::class, 'show'])->name('show');
    Route::get('/blog-create', [BackendController::class, 'create'])->name('create');
    Route::post('/blog-insert', [BackendController::class, 'blogInsert'])->name('blogInsert');
    Route::get('/blog-edit/{blog}', [BackendController::class, 'blogEdit'])->name('blogEdit');
    Route::put('/blog-update/{blog}', [BackendController::class, 'blogUpdate'])->name('blogUpdate');
    Route::delete('/blog-delete/{blog}', [BackendController::class, 'blogDelete'])->name('blogDelete');
});





