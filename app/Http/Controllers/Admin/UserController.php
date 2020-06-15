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
            $image = $request->avater->store('avater','public');
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
        }
        return redirect('admin/users')->with($alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('admin.profile.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::all();
        $salaries = Salary::all();
        $countries = Country::all();

        $user = User::findOrFail($id);
        return view('admin.user.edit_user', compact('departments','salaries','countries','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();

        if($request->file('avater')){
            $image = $request->avater->store('avater','public');
            $data['avater'] = $image;
        }

        $update = $user->update($data);

        if ($update) {
            $alert = [
                'alert-type' => 'success',
                'message' => 'User updated successfully'
            ];
        }else{
            $alert = [
                'alert-type' => 'error',
                'message' => 'Someting went wrong'
            ];
        }
        return redirect('admin/users')->with($alert);

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