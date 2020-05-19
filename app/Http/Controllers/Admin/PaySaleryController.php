<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Salary;
use App\PaySalery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaySaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.salary.pay_salary', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Salary::create($request->all());
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaySalery  $paySalery
     * @return \Illuminate\Http\Response
     */
    public function show(PaySalery $paySalery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaySalery  $paySalery
     * @return \Illuminate\Http\Response
     */
    public function edit(PaySalery $paySalery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaySalery  $paySalery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaySalery $paySalery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaySalery  $paySalery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaySalery $paySalery)
    {
        //
    }
}
