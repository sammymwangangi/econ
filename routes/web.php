<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;
// use App\Http\Livewire\Projects;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'wiki' => PostController::class,
    'categories' => CategoryController::class,
    'settings' => GeneralController::class,
    'comments' => CommentsController::class,
    'taskmanager/projects' => ProjectController::class,
    'taskmanager/tasks' => TasksController::class,
]);

Route::get('/taskmanager', [ManagerController::class, 'index'])->name('manager.index');

// Route::get('taskmanager/projects1', Projects::class);