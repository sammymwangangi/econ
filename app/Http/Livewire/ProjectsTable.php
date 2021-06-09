<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProjectsTable extends LivewireDatatable
{
    public $model = Project::class;

    public function columns()
    {
        //
    }
}