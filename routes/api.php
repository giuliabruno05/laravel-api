<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route :: prefix('/v1') -> group(function(){
    
    Route :: get('/project-api',[ProjectController :: class, 'projectApi']);
    Route :: get('/project-index',[ProjectController :: class, 'projectIndex']);
});


