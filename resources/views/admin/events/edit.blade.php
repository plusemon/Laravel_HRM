@extends('layouts.admin')
  @section('main')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Event</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url('events')}}">Event Calendar</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Event</li>
            </ol>
          </div>

<!--Event Page Edit-->
<div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
    <div class="container">
        <h2>Edit Event</h2>
        <hr>
        <div>
            <form action="{{ route('events.update', $event->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group col-md-8 col-md-offset-2">
                    <label for="name">Edit Event:</label>
                    <input type="text" class="form-control" id="name" name="title" value="{{ $event->title }}">
                </div>
                <div class="form-group col-md-8 col-md-offset-2">
                    <label for="description">Edit Description:</label>
                    <textarea class="form-control" id="description" name="description">{{ $event->description }}</textarea>
                </div>
                <div class="form-group col-md-2 col-md-offset-2">
                    <label for="backgroundColor">Edit Color</label>
                    <input type="color" class="form-control" name="backgroundColor" value="{{ $event->backgroundColor }}">
                </div>
                <div class="form-group col-md-7 col-md-offset-2">
                    <button type="submit" class="btn btn-warning btn-lg">Update</button>
                </div>
            </form>
        </div>
        <div class="col-md-10 col-md-offset-2">
            <form action="{{ url('admin/events', $event->id) }}" method="post">
             @csrf
             @method('DELETE')
                <input type="submit" class="btn btn-danger btn-lg" value="Delete">
            </form>
        </div>
          </div>
</div>
</div>
</div>
</div>
@endsection
