<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/User;

class GeneralController extends Controller
{
    public function welcome(){
        $user = Auth::find(id);
        return view('vendor.jetstream.components.welcome', compact('user'))
    }
}
