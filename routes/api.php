<?php

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use App\Http\Controllers\Api\LoginController as Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts', PostV1::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts', PostV2::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [Log::class,
    'login']);
