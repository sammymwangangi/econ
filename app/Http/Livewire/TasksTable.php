<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TasksTable extends LivewireDatatable
{
    public $model = Task::class;
    public $hideable = 'select';
    public $exportable = true;

    public function builder()
    {
        return Task::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->filterable(),

            Column::name('name')
                ->filterable()
                ->searchable(),

            Column::name('user.name')
                ->filterable()
                ->searchable()
                ->label('USER'),

            Column::name('project.name')
                ->filterable()
                ->searchable()
                ->label('PROJECT'),
            Column::name('assigned_to')
                ->filterable()
                ->searchable(),
            Column::name('priority')->filterable(['None', 'Low', 'Medium', 'High'])->searchable(),
            Column::name('status')->filterable(['No Progress', 'In Progress', 'Complete'])->searchable(),

            DateColumn::name('start_at')
                ->filterable()
                ->label('STARTING DATE'),
            DateColumn::name('end_at')
                ->filterable()
                ->label('DUE DATE'),
            DateColumn::name('created_at')
                ->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('tasks.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }

    public function getUsersProperty()
    {
        return User::all();
    }
    public function getProjectsProperty()
    {
        return Project::all();
    }
}