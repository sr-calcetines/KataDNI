<?php

use App\Http\Controllers\LettersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/assign/{id}',[LettersController::class, 'assignLetterToNumber'])->name('apiassign');