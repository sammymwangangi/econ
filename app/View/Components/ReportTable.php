<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Prod\Report;

class ReportTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $reports = Report::all();
        return view('components.report-table', compact('reports'));
    }
}
