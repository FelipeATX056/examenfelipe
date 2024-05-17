<?php

use App\Http\Controllers\CamionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('camionero.index');
});

Route::get('/camionero-tabla',[CamionController::class,'index'])->name('camionero.index');

Route::get('/camionero-create',[CamionController::class,'create'])->name('camionero.create');
Route::post('/camionero-store',[CamionController::class,'store'])->name('camionero.store');

Route::get('/camionero-edit/{id}',[CamionController::class,'edit'])->name('camionero.edit');
Route::put('/camionero-update/{id}',[CamionController::class,'update'])->name('camionero.update');

Route::delete('/camionero-delete/{id}',[CamionController::class,'destroy'])->name('camionero.destroy');