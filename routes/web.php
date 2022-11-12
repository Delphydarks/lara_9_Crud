<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('add','addnotes');
// Route::post('add',[NotesController::class,'addData']);
Route::get('user-note',[NotesController::class,'index']);
Route::get('add-note',[NotesController::class,'addNote']);
Route::post('save-note',[NotesController::class,'saveNote']);
// to accept the passed Id ,
Route::get('edit-note/{id}',[NotesController::class,'editNote']);
Route::post('update-note',[NotesController::class,'updateNote']);

Route::get('delete-note/{id}',[NotesController::class,'deleteNote']);