<?php
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Teams\TeamsController;
use App\Http\Controllers\Drivers\DriversController;
use App\Http\Controllers\Seasons\SeasonsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/equipes', [TeamsController::class, 'index']);

Route::get('/equipes/{id?}', [TeamsController::class, 'team']);

Route::get('/pilotos', [DriversController::class, 'index']);

Route::get('/campeonatos', [SeasonsController::class, 'index']);

Route::post('/seasons/filter', [SeasonsController::class, 'filter']);

Route::post('/seasons/getdata', [SeasonsController::class, 'getdata']);


