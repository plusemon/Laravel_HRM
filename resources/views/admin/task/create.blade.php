@extends('layouts.admin')
@section('main')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Task</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            <li class="breadcrumb-item">Task Tables</li>
            <li class="breadcrumb-item active" aria-current="page">Add Task</li>
        </ol>
    </div>
</div>
<!-- Task Page Section-->
<div class="col-lg-12">
    <!-- Form Basic -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary fas fa-trophy"> Add Task</h6>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/task') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">User</span>
                        </div>
                        <select class="form-control col-lg-6" name="user_id" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">({{ $user->id }}) {{ $user->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Subject</span>
                        </div>
                        <input name="subject" type="text" class="form-control col-lg-6 font-weight-bold" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Duration</span>
                        </div>
                        <select class="form-control col-lg-6 font-weight-bold" name="duration">
                            <option>1 Week</option>
                            <option>1 Month</option>
                            <option>3 Month</option>
                            <option>6 Month</option>
                            <option>1 Year</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea name="description" rows="8" textarea class="form-control col-lg-6" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success col-2 mb-3 ml-3">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
