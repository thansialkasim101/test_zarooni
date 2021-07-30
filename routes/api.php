<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TransationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/employeeRegister', [EmployeeController::class, 'employeeRegister']);
Route::post('/addRoute', [RouteController::class, 'addRoute']);
Route::post('/addTransation', [TransationController::class, 'addTransation']);
Route::get('/getTransationDetails', [TransationController::class, 'getTransationDetails']);
Route::get('/getEmpolyeeDetails', [EmployeeController::class, 'getEmpolyeeDetails']);



