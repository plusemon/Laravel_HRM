@extends('layouts.manager')
@section('manager')

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          	<h5>View Events</h5>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="employee">Dashboard</a></li>
              <li class="breadcrumb-item">View Events</li>
            </ol>
          </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('/js/sweetalert.min.js')}}"></script>

<!--View Events Page Index-->
  <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
          <div class="container" style="background-color: #D8BFD8;">
        <h3 class="far fa-calendar-check" style="color:black;"> Events Calendar</h3>
        <div id='calendar' style="font-size: 20px;color:black;"></div>
    </div>
      </div>
  </div>
    </div>
        
    <!-- Scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    
@endsection    

