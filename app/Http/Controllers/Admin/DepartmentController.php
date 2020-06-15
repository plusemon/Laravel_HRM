<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /*-----Department Index Show Called This GET Route-----*/
    public function index()
    {
        //
        $departments=Department::all();
        return view('admin.system.department.index',['departments'=>$departments]);
    }


    /*-----Department Store Show Called This POST Route-----*/
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:departments|regex:/^[a-zA-Z\s]*$/|min:2',
            'deg1' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',
            'deg2' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Department Field Is Required Only Minimum 2 Character Allow,Duplicate Values Are Not Allow');
            return back()->withErrors($validator)->withInput();
        }

        else {

            $departments= new Department();
            $departments->name = $request->input('name');
            $departments->deg1 = $request->input('deg1');
            $departments->deg2 = $request->input('deg2');
            $departments->Save();
            toast('Department Added Successfully!','success');
            return redirect('admin/departments')->with('success','Your Post as been submited!');

        }

    }

    /*-----Department Update Show Called This POST Route-----*/
    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',
            'deg1' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',
            'deg2' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',


        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Department Field Is Required Only Minimum 2 Letters Allow,Duplicate Values Not Allow');
            return redirect('admin/departments')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('dept_id');
            $departments=Department::find($id);
            $departments->name = $request->input('name');
            $departments->deg1 = $request->input('deg1');
            $departments->deg2 = $request->input('deg2');
            $departments->Save();
            toast('Department Update Successfully!','success');
            return redirect('admin/departments')->with('success','Your Post as been submited!');
        }
    }

    /*-----Department Delete Show Called This POST Route-----*/
    public function destroy(Request $request)
    {
        //

        $id=$request->get('dept_id');
        $departments=Department::find($id);
        $departments->delete();
        toast('Department Deleted Successfully', 'success');
        return redirect('admin/departments')->with('salary','Department Deleted Successfully');

    }
}
