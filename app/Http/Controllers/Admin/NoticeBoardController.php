<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\NoticeBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class NoticeBoardController extends Controller
{
    /*-----Notice Board Index Show Called This GET Route-----*/
    public function index()
    {
        //
        $notice_boards=NoticeBoard::orderBy('id','ASC')->get();
        return view('admin.notice.index',['notice_boards'=>$notice_boards]);
    }

    /*-----ADD Notice Board Index Show Called This GET Route-----*/
    public function create()
    {

        return view('admin.notice.create');
    }

    /*-----ADD Notice Board Store Called This POST Route-----*/

    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'notice_title' =>
            'required|unique:notice_boards|regex:/^[a-zA-Z\s]*$/|min:4',
            'notice_description' => 'required|max:1024',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Notice Boards Field Is Required Only Minimum 4 Character Allow,Duplicate Values Are Not Allow');
            return back()->withErrors($validator)->withInput();
        }

        else {

            $notice_boards=new NoticeBoard();
            $notice_boards->notice_title = $request->input('notice_title');
            $notice_boards->notice_description = $request->input('notice_description');
            $notice_boards->Save();
            toast('Notice Boards Added Successfully!','success');
            return redirect('/admin/notice')->with('success','Your Post as been submited!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function show(NoticeBoard $noticeBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NoticeBoard  $noticeBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(NoticeBoard $noticeBoard)
    {
        //
    }

   /*-----Notice Board UPDATE Called This POST Route-----*/

    public function update(Request $request)
    {
        //
        $validator=Validator::make($request->all(), [
            'notice_title' => 'required|regex:/^[a-zA-Z\s]*$/|min:4',
            'notice_description' => 'required|max:1024',

        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Notice Boards Field Is Required Only Minimum 4 Character Allow,Duplicate Values Are Not Allow');
            return redirect('admin-notice-index')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            $id=$request->get('notice_id');
            $notice_boards=NoticeBoard::find($id);
            $notice_boards->notice_title = $request->input('notice_title');
            $notice_boards->notice_description = $request->input('notice_description');
            $notice_boards->Save();
            toast('Notice Boards Update Successfully!','success');
            return redirect('admin/notice')->with('success','Your Post as been submited!');
        }
    }

    /*-----Notice Board Delete Called This POST Route-----*/
    public function destroy(Request $request)
    {
        //
        $id=$request->get('notice_id');
        $notice_boards=NoticeBoard::find($id);
        $notice_boards->delete();
        toast('Notice Boards Deleted Successfully', 'success');
        return redirect('admin/notice')->with('salary','Notice Boards Deleted Successfully');
    }
}
