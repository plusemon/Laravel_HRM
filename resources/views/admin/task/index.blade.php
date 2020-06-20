@extends('layouts.admin')
@section('main')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Task Tables</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>

            <li class="breadcrumb-item active" aria-current="page">Task</li>
        </ol>
    </div>

    <div class="row">
        <!--Task DataTable with Hover Section-->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="{{ url('admin/task/create') }}"><button type="button"
                            class="btn btn-success" data-toggle="modal">Add New Task</button></a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>User</th>
                                <th>Subject</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td> {{ $task->user->name }} ({{ $task->user->id }})</td>
                                    <td>{{ $task->subject }}</td>
                                    <td>{{ $task->duration }}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>
                                        @if($task->status == 'Pending')
                                            <form
                                                action="{{ url('admin/task/') }}/{{ $task->id }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="Compeleted">
                                                <input type="hidden" name="id" value="{{ $task->id }}">
                                                <button type="submit" class="btn btn-primary">Compelete</button>
                                            </form>
                                        @else
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#updateTask" id="#updateTaskBoard"
                                                data-subject="{{ $task->subject }}"
                                                data-description="{{ $task->description }}"><i
                                                    class="fas fa-user-edit">Update</i></button>
                                        @endif
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteTask" id="#deleteTaskBoard"
                                            data-task_id="{{ $task->id }}"><i class="fas fa-trash">Delete</i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
</div>
<!---Container Fluid-->
</div>
</div>
</div>

<!--Update Task Modal Center -->
<div class="modal fade" id="updateTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form action="{{ url('admin/task') }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="updateTaskBoard">Update Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="mb-3 font-weight-bold">Subject</label>
                        <input name="subject" id="subject" class="form-control  mb-3" type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label class="mb-3 font-weight-bold">Duration</label>
                        <select class="form-control mb-3 font-weight-bold">
                            <option>1 Week</option>
                            <option>1 Month</option>
                            <option>3 Month</option>
                            <option>6 Month</option>
                            <option>1 Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-3 font-weight-bold">Description</label>
                        <textarea rows="8" textarea class="form-control mb-3" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mb-3 font-weight-bold">Status</label>
                        <select name="status" class="form-control mb-3 font-weight-bold" placeholder="Status">
                            <option>Completed</option>
                            <option>Pending</option>
                            <option>Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Delete Task Modal Center -->
<div class="modal fade" id="deleteTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTaskName">Delete Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/task/destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <input type="hidden" name="task_id" id="task_id">
                    Are You Sure,You Want To Delete This Task?
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

{{-- /*-----Task Modal Update Scripts-----*/ --}}
<script>
    $('#updateTask').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var subject = button.data('subject')
        var description = button.data('description')
        var modal = $(this)
        modal.find('.modal-body #subject').val(subject);
        modal.find('.modal-body #description').val(description);
    });

    // delete task
    $('#deleteTask').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var task_id = button.data('task_id')
        var modal = $(this)
        modal.find('.modal-title').text('Delete Task Name')
        modal.find('.modal-body #task_id').val(task_id);
    });

</script>

@endsection
