<?php
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/', [App\Http\Controllers\UserPanelController::class, 'index'])->name('home');

Route::put('/blog-update/{blog}', [App\Http\Controllers\BackendController::class, 'blogUpdate'])->name('blogUpdate');

Route::delete('/blog-delete/{blog}', [App\Http\Controllers\BackendController::class, 'blogDelete'])->name('blogDelete');
Route::get('/blog-edit/{blog}', [App\Http\Controllers\BackendController::class, 'blogEdit'])->name('blogEdit');

Route::get('/blog/{blog}', [App\Http\Controllers\BackendController::class, 'show'])->name('show');
Route::get('/blog-index', [App\Http\Controllers\BackendController::class, 'index'])->name('index');
Route::get('/blog-create', [App\Http\Controllers\BackendController::class, 'create'])->name('create');
Route::post('/blog-insert', [App\Http\Controllers\BackendController::class, 'blogInsert'])->name('blogInsert');



