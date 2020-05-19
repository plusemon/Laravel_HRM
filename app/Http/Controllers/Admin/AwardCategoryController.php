<?php

namespace App\Http\Controllers\Admin;
use Session;

use App\AwardCategory;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AwardCategoryController extends Controller
{
    /*-----AwardCategory Index Show Called This GET Route-----*/
    public function index()
    {
        //
        $award_categories=AwardCategory::orderBy('id','ASC')->get();
        return view('admin.award.add_award_categories',['award_categories'=>$award_categories]);

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

    /*-----AwardCategory Store Called This POST Route-----*/
    public function store(Request $request)
    {

        //database error missing award_categories show database syntex this
        $validator = Validator::make($request->all(), [
        'award_category'=>'required|unique:award_categories|regex:/^[a-zA-Z\s]*$/|min:4',
        'award_description' => 'required|max:800',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Award Categories Field Is Required Only Minimum 4 Letters Allow,Duplicate Values Are Not Allow');
            return redirect('/award_categories')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $award_categories=new AwardCategory();
            $award_categories->award_category = $request->input('award_category');
            $award_categories->award_description = $request->input('award_description');
            $award_categories->Save();
            toast('Award Categories Added Successfully!','success');
            return redirect('/award_categories')->with('success','Your Post as been submited!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AwardCategory  $awardCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AwardCategory $awardCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AwardCategory  $awardCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AwardCategory $awardCategory)
    {
        //
    }

    /*-----AwardCategory Update Called This POST Route-----*/
    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'award_category' => 'required|regex:/^[a-zA-Z\s]*$/|min:4',
            'award_description' => 'required|max:800',


        ]);

        if ($validator->fails()) {
            Alert::error('Oops!', 'The Award Categories Field Is Required Only Minimum 4 Letters Allow,Duplicate Values Not Allow');
            return redirect('/award_categories')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('award_category_id');
            $award_categories=AwardCategory::find($id);
            $award_categories->award_category = $request->input('award_category');
            $award_categories->award_description = $request->input('award_description');
            $award_categories->Save();
            toast('Award Categories Update Successfully!','success');
            return redirect('/award_categories')->with('success','Your Post as been submited!');
        }
    }

    /*-----AwardCategory Destroy Called This POST Route-----*/
    public function destroy(Request $request)
    {
        //
        $id=$request->get('award_category_id');
        $award_categories=AwardCategory::find($id);
        $award_categories->delete();
        toast('Award Categories Deleted Successfully', 'success');
        return redirect('/award_categories')->with('salary','Department Deleted Successfully');
    }
}
