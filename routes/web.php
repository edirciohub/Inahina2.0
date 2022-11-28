<?php

use App\Http\Controllers\Admin\Agent\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Supervisors\SupervisorsController;
use App\Http\Controllers\User\NavioController;
use App\Http\Controllers\Message\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/message',[MessageController::class, 'index']);


Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    });

    Route::get('/dashboard',[DashboardController::class, 'show']);

//    Users Cruds

   Route::get('/role-register',[DashboardController::class, 'registered']);
   Route::post('/role-create', [DashboardController::class, 'create']);
   Route::get('/role-edit/{id}',[DashboardController::class, 'edit']);
   Route::put('/role-register-update/{id}',[DashboardController::class, 'update']);
   Route::delete('/role-delete/{id}',[DashboardController::class, 'delete']);

//   Supervisors Cruds

    Route::get('/supervisors-register', [SupervisorsController::class, 'registered']);
    Route::post('/supervisors-create', [SupervisorsController::class, 'create']);
    Route::get('/supervisors-edit/{id}', [SupervisorsController::class, 'edit']);
    Route::put('/supervisors-register-update/{id}', [SupervisorsController::class, 'update']);
    Route::delete('/supervisors-delete/{id}', [SupervisorsController::class, 'delete']);

//    Agents Cruds

    Route::get('/agents-register', [AgentController::class, 'registered']);
    Route::post('/agents-create', [AgentController::class, 'create']);
    Route::get('/agents-edit/{id}', [AgentController::class, 'edit']);
    Route::put('/agents-register-update/{id}', [AgentController::class, 'update']);
    Route::delete('/agents-delete/{id}', [AgentController::class, 'delete']);

//   Navios Cruds

   Route::get('/navios-register',[NavioController::class, 'index']);
   Route::post('/save-navios',[NavioController::class, 'create']);
   Route::get('/navios-edit/{id}',[NavioController::class, 'edit']);
   Route::put('navio-update/{id}',[NavioController::class, 'update']);
   Route::delete('navio-delete/{id}',[NavioController::class, 'delete']);

});
