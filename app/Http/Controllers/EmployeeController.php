<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function employeeInfo()
    {
        $employees = Employee::select('name','salary')->get();
        return response()->json([
            'status' => true,
            'data' => $employees
        ]);
    }
}
