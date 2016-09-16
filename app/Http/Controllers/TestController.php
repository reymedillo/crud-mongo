<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{

    protected function getIndex() {
    	$emp = \App\Employee::all();

    	//\Log::info($emp);

    	return view('test.index', [
        'emp' => $emp->toArray()
    	]);
    }

}
