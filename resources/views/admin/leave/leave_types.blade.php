@extends('layouts.admin')
  @section('main')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Leave Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">Leave Manage</li>
              <li class="breadcrumb-item active" aria-current="page">Leave Types</li>
            </ol>
          </div>
        </div>
    <div class="row">
            <!--Leave Type DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addLeave"
                    id="#addLeaveTypes">Add New Leave Type</button>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Leave Types</th>
                        <th>Number Of Leave</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach($leave_types as $leaveTypes)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $leaveTypes -> leave_typ }}</td>
                        <th>{{ $leaveTypes -> num_leaves }}</th>
                        <th>{{ $leaveTypes -> created_at }}</th>
                        <td>

                          <button data-leave_types_id="{{$leaveTypes->id}}" data-leave_typ="{{$leaveTypes->leave_typ}}" data-num_leaves="{{$leaveTypes->num_leaves}}"
                          type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateLeave"
                          id="#updateLeaveTypes">
                          <i class="fas fa-user-edit">Update</i></button>


                            <button type="submit" class="btn btn-danger" data-leave_types_id="{{$leaveTypes->id}}" data-toggle="modal" data-target="#deleteLeave"
                                id="#deleteLeaveTypes">Delete</button>

                    	</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

  <!--Add Salary Modal Center -->
<div class="modal fade" id="addLeave" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addLeaveTypes">Add Leave Types</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{url('admin/leave_types')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                   <input name="leave_typ" class="form-control  mb-3" type="text" placeholder="Add Leave Types">
                   <input name="num_leaves" class="form-control  mb-3" type="Number" placeholder="Number Of Leave">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
              </div>
            </div>
          </div>

          <!--Update Leave Type Modal Center -->
 <div class="modal fade" id="updateLeave" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateLeaveTypes">Update Leave</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <form action="{{url('admin/leave_types/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="modal-body">
                <input type="hidden" name="leave_types_id" id="leave_types_id">
                  <input name="leave_typ" id="leave_typ" class="form-control  mb-3" type="text" placeholder="Update Leave Types">
                  <input name="num_leaves" id="num_leaves" class="form-control  mb-3" type="number" placeholder="Update Number Of Leaves">
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
          </form>
  </div>
  </div>
</div>

<!--Delete Leave Type Modal Center -->
      <div class="modal fade" id="deleteLeave" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteLeaveTypes">Delete Leave Type</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="{{ url ('admin/leave_types/destroy') }}"
                  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                      <input type="hidden" name="leave_types_id" id="leave_types_id">
                      Are You Sure,You Want To Delete This Leave Type?
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
              </form>
        </div>
      </div>
    </div>
          <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection


@section('scripts')

    <script>
        /*-----Update Leave Types Modal Update Scripts-----*/
        $('#updateLeave').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var leave_typ = button.data('leave_typ');
        var num_leaves = button.data('num_leaves');
        var leave_types_id = button.data('leave_types_id');
        var modal = $(this);
        modal.find('.modal-title').text('Update Leave Types');
        modal.find('.modal-body #leave_typ').val(leave_typ);
        modal.find('.modal-body #num_leaves').val(num_leaves);
        modal.find('.modal-body #leave_types_id').val(leave_types_id);
        });

        /*-----Delete Leave Types Modal Delete Scripts-----*/
        $('#deleteLeave').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('leave_types_id');
                var modal = $(this);
                modal.find('.modal-title').text('Delete Notice');
                modal.find('.modal-body #leave_types_id').val(id);
        });
    </script>


@endsection
