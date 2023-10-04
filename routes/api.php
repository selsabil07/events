<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\adminController;
use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\EventManagerController;
use App\Models\Admin;

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


// routes/api.php

//  Route::group(['prefix' => 'V1' , 'namespace' => 'App\Http\Controllers\API\V1' ] ,function () {
    
//  Route::apiResource('/posts', adminController::class);

 

Route::get('register', function(){
    return view('index');
});

Route::post('register', [AuthController::class , 'register']);


// Route::get('user', function () {
//     return Admin::all();
// });

