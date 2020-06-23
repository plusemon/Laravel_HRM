@extends('layouts.employee')
@section('main')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Request Leave</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="employee">Dashboard</a></li>
            <li class="breadcrumb-item">Request Leave</li>
        </ol>
    </div>
</div>


<div class="row">

    <!--Leave Request with Hover Section-->
    <div class="col-lg-12">
        <div class="card mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addLeave"
                  id="#addLeave">Add Leave Request</button>
              </div>

            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <h5>Request Leave Details</h5>
                    <thead class="thead-light">
                        <tr>
                            <th>User Name</th>
                            <th>Leave Types</th>
                            <th>Duration</th>
                            <th>Dates</th>
                            <th>Created On</th>
                            <th>Leave Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leaves as $leave)
                            <tr>
                                <td>{{ $leave->user->name }}</td>
                                <td>{{ $leave->types }}</td>
                                <td>{{ $leave->duration }}</td>
                                <td>{{ $leave->dates }}</td>
                                <td>{{ $leave->created_at }}</td>
                                <td>{{ $leave->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


<!--Add Leave Request Modal Center -->
<div class="modal fade" id="addLeave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLeaveTitle">Add Leave Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <form action="{{ url('employee/leave') }}" method="POST" id="leaveForm">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}" id="">
                    <div class="form-group">
                        <label>Leave Types</label>
                        <select class="form-control" name="types" id="types">
                            <option value="">Select Leave Type</option>
                            @foreach($types as $type)
                                <option id="max_leave" data-max="{{ $type->num_leaves }}" value="{{ $type->leave_typ }}">{{ $type->leave_typ }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p id="max_show" class="text-info" style="display: none;">Note: Maximum <span id="max_num">%</span> Days</p>
                    <div class="form-group">
                        <label>Leave Dates</label>
                        <div class="fas fa-calendar"></div>
                        <input type="date" name="dates" id="dates" class="form-control" required>
                    </div>
                    <p id="max_show2" class="text-danger" style="display: none;">Maximum <span id="max_num2">%</span> Days Allowed!</p>

                    <div class="form-group">
                        <button id="addbtn" type="submit" class="btn btn-success">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


@endsection

@section('scripts')

{{--  /*-----Leave Modal Update Scripts-----*/  --}}
<script>

    $('#leaveForm').on('submit', function (event) {
        var getmax = $('#max_leave').data('max');
        var selmax = $('#dates').val();
        var gmax = selmax.split(', ');
        if(gmax.length > getmax){
            $('#max_num2').html(getmax);
            $('#max_show2').fadeIn();

            event.preventDefault();
        }
        if(selmax.length > 1){
        }else{
            event.preventDefault();
        }
    });


    $('#types').on('change', function (event) {
        var max = $('#max_leave').data('max');
        $('#max_show').fadeIn();
        $('#max_num').html(max);
    });

    $('#dates').on('change', function (event) {
        var getmax = $('#max_leave').data('max');
        var selmax = $('#dates').val();
        var selmax = selmax.split(', ');
        if(selmax.length > getmax){
            $('#max_num2').html(getmax);
            $('#max_show2').fadeIn();
            }else{
            $('#max_show2').fadeOut();
        }
    });

    $("#dates").flatpickr({
        mode: "multiple",
        dateFormat: "Y-m-d",
        minDate: new Date().fp_incr(1),
    });

</script>
@endsection
