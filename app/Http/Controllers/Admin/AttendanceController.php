<?php

namespace App\Http\Controllers\Admin;

use App\Attendance;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $today = date('Y-m-d');
        $today_att = Attendance::where('att_date', $today)->get();

        if ($request->has('date')) {
            $attendances = Attendance::where('att_date', $request->date)->get();
            $att_date = $request->date;
            if ($attendances->all()) {
                return view('admin.attendance.index', compact('attendances', 'att_date'));
            }else {
                $alert = [
                    'alert-type' => 'info',
                    'message' => 'Attendance Not found!'
                ];
                $attendances = [];
                $att_date = '';
                return view('admin.attendance.index', compact('attendances', 'att_date'))->with($alert);
            }
        } elseif ($today_att->all()) {
            $attendances = $today_att;
            $att_date = $today;
            return view('admin.attendance.index', compact('attendances', 'att_date'));
        } else {
            $attendances = [];
            $att_date = '';
            return view('admin.attendance.index', compact('attendances', 'att_date'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = date('Y-m-d');
        $check = Attendance::where('att_date', $today)->where('attendance','!=','Leave')->first();
        // return $check;
        if($check){
            $alert = [
                'alert-type' => 'info',
                'message' => 'Today attendances already taken, you can edit now!'
            ];
            return redirect('/admin/attendance/'.$today.'/edit')->with($alert);
        }

        $leaves = Attendance::where('att_date',$today)->where('attendance','Leave')->pluck('user_id');
        if(count($leaves) == 0){
            $users = User::where('status',1)->get()->skip(Auth::id());
        }else{
            $users = User::where('id','!=',$leaves)->get();
        }
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
        $this->validate($request,[
            'user_id' =>'required'
        ]);

        $today = date('Y-m-d');
        $check = Attendance::where('att_date', $today)->where('attendance','!=','Leave')->first();
        // return $check;
        if($check){
            $alert = [
                'alert-type' => 'error',
                'message' => 'Attendance Already Taken, you can edit now!'
            ];
        return back()->with($alert);
        }else{
            foreach($request->user_id as $id){
                $data = [
                    'att_date' => $today,
                    'user_id' => $id,
                    'attendance' => $request->attendance[$id],
                ];
                // return $data;
                Attendance::Create($data);
            }
            $alert = [
                'alert-type' => 'success',
                'message' => 'Attendance Taken successfully'
            ];
        return redirect('/admin/attendance')->with($alert);

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
        // $attendances = Attendance::where('att_date',$att_date)->where('attendance','!=','Leave')->get();
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
