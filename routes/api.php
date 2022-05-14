<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

//Passa a rota que será enviada a requisição para a Api.
Route::post('/search', [ApiController::class, 'search'])->name('api.search');
