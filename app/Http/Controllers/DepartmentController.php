<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
class DepartmentController extends Controller
{
    /*-----Department Index Show Called This GET Route-----*/
    public function index()
    {
        //
        $departments=Department::orderBy('id','ASC')->get();
        return view('admin.system.department.index',['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /*-----Department Store Show Called This POST Route-----*/
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'dept_name' => 'required|unique:departments|regex:/^[a-zA-Z\s]*$/|min:2',
            'first_desgn' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',
            'second_desgn' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',


        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Department Field Is Required Only Minimum 2 Character Allow,Duplicate Values Are Not Allow');
            return redirect('/admin-system-department')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $departments=new Department();
            $departments->dept_name = $request->input('dept_name');
            $departments->first_desgn = $request->input('first_desgn');
            $departments->second_desgn = $request->input('second_desgn');
            $departments->Save();
            $message = toast('Department Added Successfully!','success');
            return redirect('/admin-system-department')->withMessage('success','Your Post as been submited!');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /*-----Department Update Show Called This POST Route-----*/
    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'dept_name' => 'required|unique:departments|regex:/^[a-zA-Z\s]*$/|min:2',
            'first_desgn' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',
            'second_desgn' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',


        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Department Field Is Required Only Minimum 2 Letters Allow,Duplicate Values Not Allow');
            return redirect('/admin-system-department')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('dept_id');
            $departments=Department::find($id);
            $departments->dept_name = $request->input('dept_name');
            $departments->first_desgn = $request->input('first_desgn');
            $departments->second_desgn = $request->input('second_desgn');
            $departments->Save();
            toast('Department Update Successfully!','success');
            return redirect('/admin-system-department')->with('success','Your Post as been submited!');
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
        return redirect('/admin-system-department')->with('salary','Department Deleted Successfully');

    }
}
