<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Country;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
class CountryController extends Controller
{
    /*-----Country Index Show Called This GET Route-----*/
    public function index()
    {
        //
        $countries=Country::orderBy('id','ASC')->get();
        return view('admin.system.country.index',['countries'=>$countries]);
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

    /*-----Country Store Called This Post Route-----*/
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'country_name' => 'required|unique:countries|regex:/^[a-zA-Z\s]*$/|min:3',
        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Country Field Is Required Only Minimum 3 Letters Allow,Duplicate Values Are Not Allow');
            return redirect('/admin-system-country')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $countries=Country::create($request->only('country_name'));
             toast('Country Added Successfully!','success');
            //Alert::success('Saved', 'Salary Added Successfully')->toToast();
            //Alert::success('Post Created', 'Successfully');
            return redirect('/admin-system-country')->with('success','Your Post as been submited!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /*-----Country Update Called This Post Route-----*/
    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'country_name' => 'required|unique:countries|regex:/^[a-zA-Z\s]*$/|min:3',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Country Field Is Required Only Minimum 3 Letters Allow,Duplicate Values Not Allow');
            return redirect('/admin-system-country')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('country_id');
            $countries=Country::find($id);
            $countries->country_name=$request->input('country_name');
            $countries->save();
            toast('Country Update Successfully!', 'success');
            return redirect('/admin-system-country')->with('Success', 'Country Update Successfully');
        }
    }

    /*-----Country Destroy Called This Post Route-----*/
    public function destroy(Request $request)
    {
        //
        $id=$request->get('country_id');
        $countries=Country::find($id);
        $countries->delete();
        toast('Country Deleted Successfully', 'success');
        return redirect('/admin-system-country')->with('salary','Country Deleted Successfully');
    }
}
