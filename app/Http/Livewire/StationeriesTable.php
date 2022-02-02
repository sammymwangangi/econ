<?php

namespace App\Http\Livewire;

use App\Models\Stationery;
use App\Models\Prod\Machine;
use App\Models\Prod\Shift;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;

class StationeriesTable extends LivewireDatatable
{
    public $model = Stationery::class;
    public $hideable = 'inline';
    public $exportable = true;

    public function builder()
    {
        return Stationery::query();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),

            Column::name('machines.name')
                ->filterable($this->machines->pluck('name'))
                ->label('CELL'),
            
            Column::name('shifts.name')
                ->filterable($this->shifts->pluck('name'))
                ->label('SHIFT'),

            NumberColumn::name('manpower')
                ->filterable()
                ->alignRight()
                ->label('MANPOWER')
                ->unsortable(),

            NumberColumn::name('target_output')
                ->filterable()
                ->alignRight()
                ->label('TARGET OUTPUT'),

            NumberColumn::name('total_output')
                ->filterable()
                ->alignRight()
                ->label('TOTAL OUTPUT'),

            NumberColumn::name('mencell')
                ->filterable()
                ->alignRight()
                ->label('MENCELL'),

            NumberColumn::name('reels_consumed')
                ->filterable()
                ->alignRight()
                ->label('REELS CONSUMED (KGS)'),

            NumberColumn::name('off_cut_defects')
                ->filterable()
                ->alignRight()
                ->label('OFF CUT DEFECTS (KGS)'),

            NumberColumn::name('trim_waste')
                ->filterable()
                ->alignRight()
                ->label('TRIM WASTE (KGS)'),

            NumberColumn::name('rejects_rework')
                ->filterable()
                ->alignRight()
                ->label('REJECTS & REWORK (KGS)'),

            NumberColumn::name('shift_kgs')
                ->filterable()
                ->alignRight()
                ->label('SHIFT KGS OF PRODUCTION'),
        ];
    }

    public function getMachinesProperty()
    {
        return Machine::pluck('name');
    }

    public function getShiftsProperty()
    {
        return Shift::pluck('name');
    }
}