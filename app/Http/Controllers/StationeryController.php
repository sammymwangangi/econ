<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Stationery;
use App\Models\Prod\Machine;
use App\Models\Prod\Shift;

class StationeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stationeries = Stationery::all();
        $machines = Machine::all();
        $shifts = Shift::all();
        
        return view('prod.stationery', compact('stationeries','machines','shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'production_date' => ['required', 'date:Y-m-d', 'after:yesterday'],
            'manpower' => ['required'],
            'target_output' => 'required',
            'total_output' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $stationery = new Stationery();
        $stationery->manpower = $request->manpower;
        $stationery->target_output = $request->target_output;
        $stationery->total_output = $request->total_output;
        $stationery->machine_id = $request->machine_id;
        $stationery->shift_id = $request->shift_id;
        $stationery->mencell = $request->mencell;
        $stationery->status = $request->status;
        $stationery->reels_consumed = $request->reels_consumed;
        $stationery->off_cut_defects = $request->off_cut_defects;
        $stationery->rejects_rework = $request->rejects_rework;
        $stationery->trim_waste = $request->trim_waste;
        $stationery->shift_kgs = $request->shift_kgs;
        $stationery->save();

        return redirect()->route('stationeries.index')
            ->withSuccessMessage('Record Submitted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
