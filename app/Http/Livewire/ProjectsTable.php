<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Models\Team;
use Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProjectsTable extends LivewireDatatable
{
    public $model = Project::class;
    public $hideable = 'select';
    public $exportable = true;

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('projects.table-actions', ['id' => $id, 'name' => $name]);
            }),
            Column::name('name')
                ->filterable()
                ->searchable(),

            Column::name('user.name')
                ->filterable()
                ->label('CREATED_BY'),

            Column::name('tasks.id:count')
                ->filterable()
                ->label('TASK COUNT')
                ->alignRight(),

            DateColumn::name('created_at')
                ->filterable(),

        ];

    }
    public function getUsersProperty()
    {
        return User::all();
    }
    public function getTasksProperty()
    {
        return Task::all();
    }
}
