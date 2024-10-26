<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

// Route for the resume view
Route::get('/', [ResumeController::class, 'show'])->name('resume.show');


