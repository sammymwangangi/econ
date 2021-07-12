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
use App\Http\Controllers\WikiController;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Recap;
use App\Models\Task;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $chart = (new LarapexChart)->areaChart()
    ->setTitle('Taks During June 2021')
    ->setSubtitle('In Progress Tasks vs Complete Tasks')
    ->addData('In Progress tasks', Task::ofStatus('In Progress')->inRandomOrder()->limit(6)->pluck('id')->toArray())
    ->addData('Complete tasks', Task::ofStatus('Complete')->inRandomOrder()->limit(6)->pluck('id')->toArray())
    ->setXAxis(['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'])
    ->setGrid(false, '#3F51B5', 0.1)
    ->setColors(['#FFC107', '#303F9F'])
    ->setMarkers(['#FF5722', '#E040FB'], 7, 10);

    $chart_options = [
        'chart_title' => 'Tasks by dates',
        'chart_type' => 'bar',
        'report_type' => 'group_by_date',
        'model' => 'App\Models\Task',
        'group_by_field' => 'created_at',
        'group_by_period' => 'day',
        'continuous_time' => true, // show continuous timeline including dates without data
    ];
    $chart1 = new LaravelChart($chart_options);

    return view('dashboard', compact('chart', 'chart1'));
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/projects', function () {
    return view('projects');
})->name('projects');

Route::middleware(['auth:sanctum', 'verified'])->get('/taskmanager/my-tasks', function () {
    return view('tasks.my-tasks');
})->name('my-tasks');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('wiki', categories::class);
    Route::resource('categories', PostController::class);
    Route::resource('settings', GeneralController::class);
    Route::resource('comments', CommentsController::class);
    Route::resource('taskmanager/projects', ProjectController::class);
    Route::resource('taskmanager/tasks', TasksController::class);
    Route::get('taskmanager/notifications', Notifications::class);
    Route::get('taskmanager/daily_recap', Recap::class)->name('tasks.daily_recap');
    Route::get('wiki', WikiController::class, 'index')->name('wiki.index');
    Route::get('taskmanager/task-kanban', function () {
        return view('task-kanban');
    });
  });

Route::get('/taskmanager', [ManagerController::class, 'index'])->name('manager.index')->middleware('auth');

// Route::get('taskmanager/projects1', Projects::class);

Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
