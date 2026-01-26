<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); 
});


Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/teams', function () {
        return view('admin.teams.index');
    })->name('teams.index');

    Route::get('/teams/create', function () {
        return view('admin.teams.create');
    })->name('teams.create');

});