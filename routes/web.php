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
use ArielMejiaDev\LarapexCharts\LarapexChart;
// use App\Http\Livewire\Projects;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $chart = (new LarapexChart)->areaChart()
    ->setTitle('Taks During June 2021')
    ->setSubtitle('In Progress Tasks vs Complete Tasks')
    ->addData('In Progress tasks', Task::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
    ->addData('Complete tasks', Task::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
    ->setXAxis(['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'])
    ->setGrid(false, '#3F51B5', 0.1)
    ->setColors(['#FFC107', '#303F9F'])
    ->setMarkers(['#FF5722', '#E040FB'], 7, 10);

    return view('dashboard', compact('chart'));
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
