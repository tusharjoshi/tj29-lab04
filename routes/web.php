<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    $userList = User::all();
    return view('welcome', ["userList" => $userList]);
});

Route::resource('category', CategoryController::class);
