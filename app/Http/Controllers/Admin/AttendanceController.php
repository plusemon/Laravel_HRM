<?php

namespace App\Http\Controllers\Admin;

use App\Attendance;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('date')) {

            $attendances = Attendance::where('att_date',$request->date)->get();
            $att_date = $request->date;
            if($attendances->all()){
                return view('admin.attendance.index', compact('attendances','att_date'));

            }else{
                $alert = [
                    'alert-type' => 'info',
                    'message' => 'Attendance Not found!'
                ];
                $attendances = [];
                return back()->with($alert);
            }



        }else{
            $attendances = [];
            $att_date = '';
            return view('admin.attendance.index', compact('attendances','att_date'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.attendance.create', compact('users'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = Attendance::where('att_date', $request->att_date)->first();
        if($check){
            $alert = [
                'alert-type' => 'error',
                'message' => 'Attendance Already Taken, you can edit now!'
            ];
        return back()->with($alert);
        }else{
            foreach($request->user_id as $id){
                $data = [
                    'att_date' => $request->att_date,
                    'user_id' => $id,
                    'attendance' => $request->attendance[$id],
                ];
                Attendance::Create($data);
            }
            $alert = [
                'alert-type' => 'success',
                'message' => 'Attendance Taken successfully'
            ];
        return back()->with($alert);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show method';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $att_date = $id;
        $attendances = Attendance::where('att_date',$att_date)->get();
        return view('admin.attendance.edit',compact('attendances','att_date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        $attendance->attendance = $request->attendance;
        $attendance->save();

        $alert = [
            'alert-type' => 'success',
            'message' => 'Attendance updated successfully'
        ];
        return back()->with($alert);
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
