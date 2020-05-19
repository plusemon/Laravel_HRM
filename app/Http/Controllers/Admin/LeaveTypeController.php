<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\LeaveType;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LeaveTypeController extends Controller
{

    /*-----LeaveType Index Show Called This GET Route-----*/
    public function index()
    {

        $leave_types=LeaveType::orderBy('id','ASC')->get();
        return view('admin.leave.leave_types',['leave_types'=> $leave_types]);
    }

    /*-----LeaveType Store Called This POST Route-----*/
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'leave_typ' => 'required|unique:leave_types|regex:/^[a-zA-Z\s]*$/|min:4',
            'num_leaves' => 'required|integer',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Leave Type Field Is Required Only Minimum 4 Letters Allow,Duplicate Values Are Not Allow');
            return redirect('admin/leave_types')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $leave_types=new LeaveType();
            $leave_types->leave_typ = $request->input('leave_typ');
            $leave_types->num_leaves = $request->input('num_leaves');
            $leave_types->Save();
            toast('Leave Type Added Successfully!','success');
            return redirect('admin/leave_types')->with('success','Your Post as been submited!');

        }
    }

    /*-----LeaveType Update Called This POST Route-----*/
    public function update(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'leave_typ' => 'required|regex:/^[a-zA-Z\s]*$/|min:4',
            'num_leaves' => 'required|integer',


        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Leave Type Field Is Required Only Minimum 4 Letters Allow,Second Field Only Number Allows');
            return redirect('admin/leave_types')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('leave_types_id');
            $leave_types=LeaveType::find($id);
            $leave_types->leave_typ = $request->input('leave_typ');
            $leave_types->num_leaves = $request->input('num_leaves');
            $leave_types->Save();
            toast('Leave Type Update Successfully!','success');
            return redirect('admin/leave_types')->with('leave_types','Your Post as been submited!');
        }
    }

    /*-----LeaveType Delete Called This POST Route-----*/
    public function destroy(Request $request)
    {
        // dd($request->all());
        $leave_types=LeaveType::findOrFail($request->leave_types_id);
        $leave_types->delete();
        toast('Leave Type Deleted Successfully', 'success');
        return redirect('admin/leave_types')->with('leave_types','Leave Type Deleted Successfully');
    }
}
