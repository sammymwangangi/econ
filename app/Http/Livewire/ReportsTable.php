<?php

namespace App\Http\Livewire;

use App\Models\Prod\Report;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ReportsTable extends LivewireDatatable
{
    public $model = Report::class;

    public function builder()
    {
        return Report::query();
    }

    public function columns()
    {
        return [
            DateColumn::name('production_date')
                ->label('DATE')
                ->filterable()
                ->hide(),

            TimeColumn::name('start')
                ->label('START HOUR')
                ->filterable()
                ->hide(),

            Column::name('workforce')
                ->defaultSort('asc')
                ->searchable()
                ->filterable(),

            NumberColumn::name('workforce')
                ->defaultSort('asc')
                ->searchable()
                ->filterable(),

            Column::name('machine.name')
                ->label('Machine')
                ->searchable()
                ->filterable($this->machines),

        ];
    }
}
