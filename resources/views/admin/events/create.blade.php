@extends('layouts.admin')
  @section('main')

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Event</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url('events')}}">Event Calendar</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Event</li>
            </ol>
          </div>


<!--Event Page Create-->
<div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
    <div class="container">
        <h2>Create a new Event</h2>
        <hr />
        <form action="{{ url('admin/events') }}" method="post">
            @csrf()
            <input type="hidden" name="start" class="date" value="{{ $date }}" />
            <input type="hidden" name="end" class="date" value="{{ $date }}" />
            <div class="form-group col-md-8 col-md-offset-2">
                <label for="name">Enter Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Event" required autofocus>
            </div>
            <div class="form-group col-md-8 col-md-offset-2">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Event Description" required></textarea>
            </div>
            <div class="form-group col-md-2 col-md-offset-2">
                <label for="backgroundColor">Color</label>
                <input type="color" class="form-control" name="backgroundColor" required>
            </div>
            <div class="form-group col-md-8 col-md-offset-2">
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </form>
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection
