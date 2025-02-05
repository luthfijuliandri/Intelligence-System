<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('viewmhs', [MahasiswaController::class, 'viewmhs'])->name('viewmhs');
Route::get('viewmhs/addmhs', [MahasiswaController::class, 'addmhs'])->name('addmhs');
Route::post('viewmhs/submit', [MahasiswaController::class, 'submit'])->name('submit');
Route::get('viewmhs/editmhs/{id}', [MahasiswaController::class, 'editmhs'])->name('editmhs');
Route::post('viewmhs/updatemhs/{id}', [MahasiswaController::class, 'updatemhs'])->name('updatemhs');
Route::post('viewmhs/deletemhs/{id}', [MahasiswaController::class, 'deletemhs'])->name('deletemhs');