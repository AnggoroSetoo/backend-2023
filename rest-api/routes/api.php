<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# mengimport controller Student
use App\Http\Controllers\StudentController;
#Auth
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

#bungkus route dengan middleware sanctum
Route::middleware('auth:sanctum')->group(function () {
    # Method GET, route /students
    Route::get('/students', [StudentController::class, 'index']);
    # Create student
    Route::post('/students', [StudentController::class, 'store']);
    # Update student
    Route::put('/students/{id}', [StudentController::class, 'update']);
    # Delete student
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    Route::get('/students/{id}', [StudentController::class, 'show']);
});

# untuk register dan login pake auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// # Route animals
// Route::get('/animals', [AnimalController::class, 'index']);
// Route::post('/animals', [AnimalController::class, 'store']);
// Route::put('/animals/{id}', [AnimalController::class, 'update']);
// Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);
