<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    protected function getIndex() {
        $emp = \App\Employee::all();
        //\Log::info($emp);

        return view('test.index', [
        'emp' => $emp
        ]);
    }

    protected function postIndex(Request $request) {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'name'  => 'required'
        ]);

        if($validator->fails()) {
            return redirect('/employee')->withErrors($validator->errors());
        }

        $employee = new \App\Employee();
        $employee->email = $request->input('email');
        $employee->name  = $request->input('name');

        if($employee->save()) {
            return redirect('/employee');
        } else {
            return redirect('/employee');
        }
    }

    protected function deleteIndex($id) {
        $employee = \App\Employee::find($id);

        if($employee->delete()) {
            return redirect('/employee');
        } else {
            return redirect('/employee');
        }
    }

    protected function viewIndex($id) {
        $employee = \App\Employee::find($id);
        return redirect('/employee')->with('name', $employee->name)->with('email', $employee->email)->with('id', $employee->id);
    }

    protected function postViewIndex($id, Request $request) {
        $employee = \App\Employee::find($id);

        $employee->email = $request->input('email');
        $employee->name  = $request->input('name');

        if($employee->save()) {
            return redirect('/employee');
        } else {
            return redirect('/employee');
        }
    }

}
