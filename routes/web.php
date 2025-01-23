<?php
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Teams\TeamsController;
use Illuminate\Support\Facades\Route;

Route::get('/equipes/1', function () {
    return view('teams/summary');
});

Route::get('/', [DashboardController::class, 'index']);

Route::get('/equipes', [TeamsController::class, 'index']);