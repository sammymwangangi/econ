<?php

namespace App\Http\Controllers;

use App\Models\Prod\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Prod\ValueStream;
use App\Models\Prod\Machine;
use App\Models\Prod\Shift;
use App\Models\Prod\Employee;
use App\Models\Prod\AvailabilityLoss;
use App\Models\Prod\Reject;
use App\Models\Prod\Product;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'production_date' => ['required', 'date:Y-m-d', 'after:yesterday'],
            'start' => 'required',
            'end' => 'required',
            'workforce' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $report = new Report();
        $report->production_date = $request->production_date;
        $report->start = $request->start;
        $report->end = $request->end;
        $report->workforce = $request->workforce;
        $report->np_mins = $request->np_mins;
        $report->pm_mins = $request->pm_mins;
        $report->value_stream_id = $request->value_stream_id;
        $report->machine_id = $request->machine_id;
        $report->shift_id = $request->shift_id;
        $report->operator_id = $request->operator_id;
        $report->assis_1 = $request->assis_1;
        $report->assis_2 = $request->assis_2;
        $report->assis_3 = $request->assis_3;
        $report->assis_4 = $request->assis_4;
        $report->assis_5 = $request->assis_5;
        $report->product_1 = $request->product_1;
        $report->pieces = $request->pieces;
        $report->cartons = $request->cartons;
        $report->target_quantity_pcs = $request->target_quantity_pcs;
        $report->availability_loss_id = $request->availability_loss_id;
        $report->availability_loss_mins = $request->availability_loss_mins;
        $report->reject_id = $request->reject_id;
        $report->rejected_pcs = $request->rejected_pcs;
        $report->offcut_kgs = $request->offcut_kgs;
        $report->reject_kgs = $request->reject_kgs;
        $report->trim_waste_kgs = $request->trim_waste_kgs;
        $report->save();

        return redirect()->route('prod.index')
            ->withSuccessMessage('Report redorded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prod\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prod\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prod\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prod\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');
  
        return view('products.create-step-one',compact('product'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);
  
        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }
  
        return redirect()->route('products.create.step.two');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');
  
        return view('products.create-step-two',compact('product'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);
  
        return redirect()->route('products.create.step.three');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');
  
        return view('products.create-step-three',compact('product'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $product = $request->session()->get('product');
        $product->save();
  
        $request->session()->forget('product');
  
        return redirect()->route('products.index');
    }
}
