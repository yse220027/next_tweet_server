<?php

use App\Http\Controllers\Api\TweetController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegistUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

//ルーティングのURL：「/api/xxxx」
// TweetController
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/tweet/add', [TweetController::class, 'add']);
    Route::post('/regist/store', [RegistUserController::class, 'store']);
});


// AuthController
Route::post('/auth', [AuthController::class, 'auth']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});