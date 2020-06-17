<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $payments = Payment::all();
        return view('admin.salary.pay_salary', compact('users','payments'));
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
        // Check if Payment exists
        $user_payments = Payment::where('user_id', $request->user_id)->where('month', $request->month)->first();
        if ($user_payments) {
            $alert = [
                'alert-type' => 'error',
                'message' => 'Payment already exist'
            ];
            return back()->with($alert);
        }else{
            $user = User::find($request->user_id);
            $data = $request->all();
            $data['salary'] = $user->salary;

            $save = Payment::create($data);
            if ($save) {
                $alert = [
                    'alert-type' => 'success',
                    'message' => 'User Payment update successfully'
                ];

            }else{
                $alert = [
                    'alert-type' => 'error',
                    'message' => 'Someting went wrong'
                ];
            }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $payment = Payment::findOrFail($request->payment_id);
        $payment->status = $request->status;
        $payment->save();
        toast('Payment Updated Successfully', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       $payment = Payment::find($request->payment_id)->first()->delete();
       toast('Payment Deleted Successfully', 'success');
       return back();
    }
}
