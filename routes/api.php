<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractArticleController;

Route::apiResource('contract-articles', ContractArticleController::class);
