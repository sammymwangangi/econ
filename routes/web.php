<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\CKEditorController;
use App\Models\Project;
use App\Models\Task;
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
    $projects = Project::all();
    $tasks = Task::all();
    return view('dashboard', compact('projects','tasks'));
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects', function () {
    return view('projects');
})->name('projects');

Route::middleware(['auth:sanctum', 'verified'])->get('/taskmanager/my-tasks', function () {
    return view('tasks.my-tasks');
})->name('my-tasks');

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

Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
