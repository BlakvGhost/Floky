<?php

use App\Http\Controllers\WelcomeController;
use Floky\Http\Requests\Request;
use Floky\Routing\Route;

Route::get('/', function() {
   
    echo "Welcome To Floky";
});

Route::get('/contact/{id}', [WelcomeController::class, 'index']);
