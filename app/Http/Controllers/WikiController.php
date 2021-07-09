<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WikiController extends Controller
{
    public function __invoke(){
        return view('wiki');
    }
}
