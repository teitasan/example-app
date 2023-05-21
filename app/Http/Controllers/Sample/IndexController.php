<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;

class IndexController extends Controller
{
    public function show (){

        $sample = Sample::find(1);
        return view('index',['sample' => $sample]);
   }
}