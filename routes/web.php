<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;

Route::get('/', [ExamController::class, 'index']);
Route::get('/exam/{id}', [ExamController::class, 'show'])->name('exam.show');
