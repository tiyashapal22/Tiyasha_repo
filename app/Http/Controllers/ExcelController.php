<?php

namespace App\Http\Controllers;

use  App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Student;

class ExcelController extends Controller
{
    public function index(){
        return view("student");
    }
    public function submitexcel(Request $request){
    
        Excel::import(new StudentImport, $request->file('excel'));
        
        return redirect('/excel')->with('message', 'Data Inserted!');
    }
}
