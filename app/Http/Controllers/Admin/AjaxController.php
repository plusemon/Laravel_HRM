<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Department;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller{

    // get designation by department
    public function designation(Request $data){
        if($data){
            $department = $data->department;
            $designation = Department::where('name',$department)->first();
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

    // for event time encrement
    public function event(Request $request){
        // return $request->all();
        $event = Event::find($request->id);
        $event->update($request->all());
        //Was it an ajax POST request or standard form POST request?
        if($request->ajax):
            return response()->json($event);
        else:
            toast('Event Update Successfully!','success');
            return redirect('admin/events');
        endif;
    }








}
