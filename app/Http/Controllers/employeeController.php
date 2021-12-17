<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        $employees = Employee::where('salary', '>', $request->salary)->where('name', 'like', '%' . $request->name . '%')->orderBy('bonus')->limit(3)->get();
        dd($employees->toArray());
    }

    public function get(Request $request)
    {
        $employee = Employee::find($request->id);
        dd($employee->toArray());
    }
}
