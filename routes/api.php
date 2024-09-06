<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TodoController;
use Dedoc\Scramble\Scramble;

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

// Register Scramble routes for API Documentation
Scramble::registerUiRoute('documentation');
Scramble::registerJsonSpecificationRoute('documentation.json');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('todo', [TodoController::class, 'index']);

// Route::domain('docs.example.com')->group(function () {
//     Scramble::registerUiRoute('api');
//     Scramble::registerJsonSpecificationRoute('api.json');
// });
