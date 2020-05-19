<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Salary;
use App\Country;
use App\Department;
use PhpParser\Builder\Use_;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.view_user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $departments = Department::all();
        $salaries = Salary::all();
        $countries = Country::all();
        return view('admin.user.add_user', compact('departments', 'salaries', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        if($request->file('avater')){
            $image = $request->avater->store('/avater');
            $data['avater'] = $image;
        }


        $saved = User::create($data);

        if ($saved) {
            $alert = [
                'alert-type' => 'success',
                'message' => 'User has been added successfully'
            ];
        }else{
            $alert = [
                'alert-type' => 'error',
                'message' => 'Someting went wrong'
            ];
            return redirect()->back()->with($alert);
        }
        return redirect('/admin-user-view')->with($alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.user.view_user_profile', compact('id'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user.edit_user', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
