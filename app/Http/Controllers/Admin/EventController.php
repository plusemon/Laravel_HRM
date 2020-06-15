<?php

namespace App\Http\Controllers\Admin;
use DateTime;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create($date)
    {
       return view('admin.events.create', compact('date'));
    }

    public function add(Request $request)
    {
        return 'Add method in the eventcontroller';
    }

    public function store(Request $request)
    {

        $validator=Validator::make($request->all(), [
            'title' => 'required|regex:/^[a-zA-Z\s]*$/|min:2',
            'description' => 'required|min:2',


        ]);

        if ($validator->fails()) {
            Alert::error('Oops!','The Event Field Is Required Only Minimum 2 Letters Allow');
            return redirect('admin/events')
                        ->withErrors($validator)
                        ->withInput();
        }
        //Since all new events will start and end at same time by default:
        elseif($request->start === $request->end){

            $event = new Event();
            $event->title = $request->title;
            $event->description = $request->description;
            $event->start = $request->start;
            //Can't create an event with start and end of same date
            $event->end = new DateTime($request->end);
            $event->end->modify("+24 hours");
            $event->backgroundColor = $request->backgroundColor;

            if($event->save()):
                toast('Event Added Successfully!','success');
                return redirect()->route('events.index');
            else:
                return view('create_error');
            endif;
        }
        else {

            $events=new Event();
            $events->title = $request->input('title');
            $events->description = $request->input('description');
            $events->start = $request->input('start');
            $events->end = $request->input('end');
            $events->backgroundColor = $request->input('backgroundColor');
            $events->Save();
            toast('Event Added Successfully!','success');
            return redirect('admin/events')->with('success','Your Post as been submited!');

        }
    }

     public function edit($id)
    {
        $event = event::findOrFail($id);
        return view('admin.events.edit')->with('event', $event);
    }

    public function update(Request $request, event $event)
    {
        // dd($request->all());
        $event = Event::findOrFail($request->id)->update($request->all());
        //Was it an ajax POST request or standard form POST request?
        if($request->ajax):
            return response()->json($event);
        else:
            toast('Event Update Successfully!','success');
            return redirect()->route('events.index');
        endif;
    }

    public function destroy(Event $event)
    {
        $event->delete();
        toast('Event Deleted Successfully!','success');
        return redirect()->route('events.index');
    }
}
