<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use Illuminate\Http\Request;

class AjaxController extends Controller{

    // get designation by department
    public function designation(Request $data){
        if($data){
            $department = $data->department;
            $designation = Department::where('dept_name',$department)->first();
            if($designation){
                return response()->json($designation);
            }
        }
    }

    // check if email already exist
    public function checkEmail(Request $data){
        if($data){
            $email = $data->email;
            $email = User::where('email',$email)->first();
            if($email){
                return response()->json($email->email);
            }
        }
    }


    // check if email already exist
    public function checkId(Request $data){
        if($data){
            $id = $data->id;
            $id = User::where('id',$id)->first();
            if($id){
                return response()->json($id->id);
            }
        }
    }










}
