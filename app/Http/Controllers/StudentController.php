<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function index(){
      return view('student');
    }

    public function result(){
      $student_data = DB::table('tbl_student_info')
                        ->select('*')
                        ->where('std_name', 'like', '%'.$_POST["search"].'%')
                        ->get();

      return $student_data;
    }
}
