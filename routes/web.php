<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


Route::redirect('/', '/tasks/view'); 


Route::get('/tasks/view', [TasksController::class, 'viewAllTasks']); 
Route::get('/tasks/viewOne/{id}', [TasksController::class, 'showOneTask']);

Route::get('/tasks/create', [TasksController::class, 'createTaskForm']); 
Route::post('/tasks/create',[TasksController::class, 'createTask']);

Route::get('/tasks/edit/{id}', [TasksController::class, 'showEditTaskForm']);
Route::match(['put', 'post'], '/tasks/edit/{id}', [TasksController::class, 'editTask']);

Route::get('/tasks/delete/{id}', [TasksController::class, 'deleteTask']);