@extends('layouts.admin')
@section('main')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('/js/sweetalert.min.js')}}"></script>

<!--Event Page Index-->
  <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
          <div class="container" style="background-color: #D8BFD8;">
        <h3 class="far fa-calendar-check" style="color:black;"> Event Calendar</h3>
        <div id='calendar' style="font-size: 20px;color:black;"></div>
    </div>
      </div>
  </div>
    </div>

    <!--Add Event Modal Center -->
<div class="modal fade" id="addEvent" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addEventCalendar">Add Event</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form action="{{ url('admin/events') }}" method="post">
            @csrf

            <div class="form-group col-md-8 col-md-offset-2">
                <label for="name">Enter Start Date:</label>
                <input type="date" class="form-control" name="start" class="date"/>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label for="name">Enter End Date:</label>
                <input type="date" class="form-control" name="end" class="date"/>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label for="name">Enter Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Event" required autofocus>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Event Description" required></textarea>
            </div>

            <div class="form-group col-md-2 col-md-offset-2">
                <label for="backgroundColor">Select Color</label>
                <input type="color" class="form-control" name="backgroundColor" required>
            </div>

            <div class="form-group col-md-8 col-md-offset-2">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>

        </form>

              </div>
            </div>
          </div>

    <!-- Scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    <script>
        $(document).ready(function() {

            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({

                //Put your options and callbacks here
                //Make the event dragable, resizabe, change opacity
                editable: true,
                dragOpacity: .60,
                eventTextColor: '#000000',
                events : [

                    @foreach($events as $event)
                    {
                        id : '{{ $event->id }}',
                        title : "{!! $event->title !!}",
                        start : "{!! $event->start !!}",
                        end : '{{ $event->end }}',
                        backgroundColor : '{{  $event->backgroundColor }}',
                        url : '{{ route('events.edit', $event->id) }}',
                        ajax : true,
                    },
                    @endforeach
                ],
                //Show the event entry form when a day is clicked
                {{--  dayClick: function(date, jsEvent, view) {
                    //Change background color of day when it is clicked
                    $(this).css('background-color', '#bed7f3');
                    //Get the date that was clicked
                    var date_clicked =  date.format();
                    //Redirect to the new event entry form
                    window.location.href = "{{URL::to('events')}}" + "/" + date_clicked;
                },  --}}
                eventClick: function(event, jsEvent, view) {
                    $(this).css('background-color', '#ff0000');
                },
                eventDragStart: function(event, jsEvent, view) {
                    $(this).css('background-color', '#00ff00');
                },
                // drop on a new date and submit to database
                eventDrop: function(event, delta, revertFunc, jsEvent, view) {

                    swal({
                        title: "You moved the event. Save it?",
                        text: "You can move it as mush as you want.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then(function(willDelete){
                        if (willDelete) {
                            swal("Moved. Your event has been rescheduled.", {
                            icon: "success",
                            });

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                dataType: 'json',
                                type:'POST',
                                url: '{{ route('events.update', $event->id) }}',
                                data:{
                                        id:event.id,
                                        start:event.start.format(),
                                        end:event.end.format(),
                                    },
                                success: function(data){
                                },
                            });
                        } else {
                            swal("Your event has not been rescheduled.");
                            revertFunc();
                        }
                    });
                },
                eventResize: function(event, delta, revertFunc){
                    swal({
                        title: "Changed Timeline. Save it?",
                        text: "You can expand it as far as you need to.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then(function(willDelete){
                        if (willDelete) {
                            swal("Moved! Your event has been rescheduled!", {
                            icon: "success",
                            });

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                dataType: 'json',
                                type:'POST',
                                url: '{{ route('events.update', $event->id) }}',
                                data:{
                                        id:event.id,
                                        start:event.start.format(),
                                        end:event.end.format()
                                    },
                                success: function(data){
                                },
                            });

                        } else {
                            swal("Your event has not been rescheduled.");
                            revertFunc();
                        }
                    });
                },
            })
        });
    </script>
@endsection

