<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function index(){
      return view('student');
    }

    public function result(request $request){
      if ($request->ajax()) {
        $output = "";
        $student_data = DB::table('tbl_student_info')
                        ->where('std_roll',$request->search)
                        ->orWhere('std_email',$request->search)
                        ->orWhere('std_phone',$request->search)
                        ->get();

        if ($student_data) {
          foreach ($student_data as $key => $data) {
            $output .=
                  '<tr>'.
                    '<td>Student ID</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->id.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Name</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_name.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Fathers name</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_fname.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Mothers name</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_mname.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Email</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_email.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Phone</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_phone.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Address</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_address.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Roll</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_roll.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Session</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_session.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Result</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_result.'</td>'.
                  '</tr>'.
                  '<tr>'.
                    '<td>Student Position</td>'.
                    '<td>:</td>'.
                    '<td>'.$data->std_position.'</td>'.
                  '</tr>';
          }
        }
      }
      return $output;
    }
}
