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
            NumberColumn::name('id'),

            Column::name('name')->searchable(),

            Column::name('user.name')
                ->filterable($this->users->pluck('name'))
                ->label('USER'),

            Column::name('project.name')
                ->filterable($this->projects->pluck('name'))
                ->label('PROJECT'),

            Column::name('assigned_to'),
            Column::name('priority'),
            Column::name('status'),

            DateColumn::name('start_at')->label('STARTS DATE'),
            DateColumn::name('end_at')->label('DUE DATE'),
            DateColumn::name('created_at'),

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