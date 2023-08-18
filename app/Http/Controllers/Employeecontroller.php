<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employeecontroller extends Controller
{
    public function index() {
        return view('employee.lest');
    }
    public function create() {
      
        return view('employee.create');
    }
}
