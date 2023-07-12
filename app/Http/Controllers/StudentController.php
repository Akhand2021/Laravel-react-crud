<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Helper\UserService; 

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }
    public function Register(Request $request)
    {
        $response = (new UserService($request->email, $request->password,$request->name,))->register($request->devicename);
        return response()->json($response);
    }
    public function Login(Request $request)
    {
        $response = (new UserService($request->email, $request->password))->login($request->devicename);
        return response()->json($response);
    }
}
