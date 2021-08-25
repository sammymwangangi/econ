<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prod\AvailabilityLoss;
use App\Models\Prod\Employee;
use App\Models\Prod\Machine;
use App\Models\Prod\Product;
use App\Models\Prod\Shift;
use App\Models\Prod\ValueStream;
use App\Models\Prod\Reject;

class ProdController extends Controller
{
    public function index()
    {
        $value_streams = ValueStream::all();
        $machines = Machine::all();
        $shifts = Shift::all();
        $products = Product::all();
        $employees = Employee::all();
        $availability_losses = AvailabilityLoss::all();
        $rejects = Reject::all();
        return view('prod.index', compact('value_streams','machines','shifts','products','employees','availability_losses','rejects'));
    }
}
