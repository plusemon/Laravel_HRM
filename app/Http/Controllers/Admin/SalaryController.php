<?php

namespace App\Http\Controllers\Admin;
use Session;

use App\User;
use App\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SalaryController extends Controller
{

   /*-----Salary Index Show Called This GET Route-----*/
    public function index()
    {
        $salaries = Salary::all();
        return view('admin.salary.index', compact('salaries'));
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


    /*-----Salary Data Store Called This POST Route-----*/
    public function store(Request $request)
    {
        //

        $validator=Validator::make($request->all(), [
            'amount' => 'required|unique:salaries|integer|min:4',
        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Salary Field Is Required Only Minimum 4 Digits Allow,Duplicate Values Are Not Allow');
            return redirect('admin/salaries')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $salary=Salary::create($request->all());
             toast('Salary Added Successfully!','success');
            //Alert::success('Saved', 'Salary Added Successfully')->toToast();
            //Alert::success('Post Created', 'Successfully');
            return redirect('admin/salaries')->with('success','Your Post as been submited!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */

    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salary  $salary
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
        //
    }


    /*-----Salary Data Update Called This POST Route-----*/
    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'amount' => 'required|unique:salaries|integer|min:4',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Salary Field Is Required Only Minimum 4 Digits Allow,Duplicate Values Not Allow');
            return redirect('admin/salaries')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('salary_id');
            $salaries=Salary::find($id);
            $salaries->amount=$request->input('amount');
            $salaries->save();
            toast('Salary Update Successfully!', 'success');
            return redirect('admin/salaries')->with('Success', 'Salary Update Successfully');

        }

    }

    /*-----Salary Data Delete Called This POST Function-----*/
    public function destroy(Request $request)
    {
        $id=$request->get('salary_id');
        $salaries=Salary::find($id);
        $salaries->delete();
        toast('Salary Deleted Successfully', 'success');
        return redirect('admin/salaries')->with('salary','Salary Deleted Successfully');
    }

}
