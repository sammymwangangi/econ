<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class MyTaskTable extends LivewireDatatable
{
    public $model = Task::class;

    public function builder()
    {
        return Task::where('tasks.user_id', '=', Auth::user()->id)
            ->where('tasks.assigned_to', '=', Auth::user()->id)
            ->where('status', '=', 'No Progress');
    }

    public function columns()
    {
        return [
            NumberColumn::name('id'),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('tasks.table-actions', ['id' => $id, 'name' => $name]);
            }),
            Column::name('name'),

            Column::name('user.name')
                ->label('CREATED_BY'),

            Column::name('project.name')
                ->label('PROJECT'),

            Column::name('priority'),

            Column::name('status'),

            DateColumn::name('start_at')
                ->label('STARTING DATE'),

            DateColumn::name('end_at')
                ->label('DUE DATE'),

            DateColumn::name('created_at'),

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
