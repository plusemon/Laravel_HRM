<?php

namespace App\Http\Controllers\Admin;
use Session;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
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


    /*-----Country Store Called This Post Route-----*/
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'name' => 'required|unique:countries|regex:/^[a-zA-Z\s]*$/|min:3',
        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Country Field Is Required Only Minimum 3 Letters Allow,Duplicate Values Are Not Allow');
            return redirect('admin/countries')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $countries = Country::create($request->all());
             toast('Country Added Successfully!','success');
            //Alert::success('Saved', 'Salary Added Successfully')->toToast();
            //Alert::success('Post Created', 'Successfully');
            return redirect('admin/countries')->with('success','Your Post as been submited!');
        }
    }



    /*-----Country Update Called This Post Route-----*/
    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'name' => 'required|unique:countries|regex:/^[a-zA-Z\s]*$/|min:3',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Country Field Is Required Only Minimum 3 Letters Allow,Duplicate Values Not Allow');
            return redirect('admin/countries')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id = $request->get('country_id');
            $countries=Country::find($id);
            $countries->name=$request->input('name');
            $countries->save();
            toast('Country Update Successfully!', 'success');
            return redirect('admin/countries')->with('Success', 'Country Update Successfully');
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
        return redirect('admin/countries')->with('salary','Country Deleted Successfully');
    }
}
