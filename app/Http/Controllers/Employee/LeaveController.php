<?php

namespace App\Http\Controllers\employee;

use App\Leave;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::where('user_id', Auth::id())->get();
        return view('employee.request_leave.index', compact('leaves'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // $user=$request->user_id;
        // $types=$request->types;
        $start=date($request->start);
        $end=date($request->end);
        $duration=$end-$start;
        return $duration;


        $save = Leave::create($request->all());
        if($save){
            $alert = [
                'alert-type' => 'sucess',
                'message' => 'Leave request send succesfully'
            ];
        }else{
            $alert = [
                'alert-type' => 'error',
                'message' => 'Someting went wrong'
            ];
        }
        return back()->with($alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(leave $leave)
    {
        //
    }
}
