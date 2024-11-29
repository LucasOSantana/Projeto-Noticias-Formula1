<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard/dashboard');
});

Route::get('/equipes', function () {
    return view('teams/teams');
});

Route::get('/equipes/1', function () {
    return view('teams/summary');
});