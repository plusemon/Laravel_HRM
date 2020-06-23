@extends('layouts.admin')
@section('main')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Salery Payment</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            <li class="breadcrumb-item">Salary</li>
            <li class="breadcrumb-item active" aria-current="page">Payment Salary</li>
        </ol>
    </div>
</div>

<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPayment" id="#addPaymentBoard">Pay
    Salary</button>
</div>
<div class="row">
    <!--Attandence DataTable with Hover Section-->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <h5>Payment Details</h5>
                    <thead class="thead-light">
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Department</th>
                            <th>Month</th>
                            <th>Salery</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($payments as $payment)
                            <tr>
                                <td>{{ $payment->user->id }}</td>
                                <td>{{ $payment->user->name }}</td>
                                <td>{{ $payment->user->department }}</td>
                                <td>{{ $payment->month }}</td>
                                <td>{{ $payment->salary }}</td>
                                <td>{{ $payment->status }}</td>
                                <td>
                                    <button data-payment_id="{{ $payment->id }}" data-target="#updatePayment" id="#updatePaymentBoard" type="button" class="btn btn-warning" data-toggle="modal">Update</button>
                                    <button data-id="{{ $payment->id }}" data-target="#deletePayment" id="#deletePaymentBoard" type="button" class="btn btn-danger" data-toggle="modal">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    <h3>No payment found..</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Pay Salary Modal Center -->
<div class="modal fade" id="addPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPaymentBoard">Pay Salary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/payment') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>User ID</label>
                        <div class="fas fa-user"></div>
                        <select class="form-control" name="user_id" id="user_id">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Month</label>
                        <select class="form-control" name="month" required>
                            <option value="">Select Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="paid">Paid</option>
                            <option value="pending">Pending</option>
                            <option value="reject">Reject</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Payment</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--Update Salary Modal Center -->
<div class="modal fade" id="updatePayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="updatePaymentBoard">Update Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin/payment/update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="modal-body">
                    <input type="hidden" name="payment_id" id="payment_id">
                    <select class="form-control" name="status">
                        <option value="paid">Paid</option>
                        <option value="pending">Pending</option>
                        <option value="reject">Reject</option>
                    </select>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


<!--Delete Payment Modal Center -->
      <div class="modal fade" id="deletePayment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deletePaymentBoard">Delete Payment</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{url('admin/payment/destroy')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <input type="hidden" name="payment_id" id="payid">
                        Are You Sure,You Want To Delete This Payment?
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
    $('#updatePayment').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var payment_id = button.data('payment_id')
        var modal = $(this)
        modal.find('.modal-body #payment_id').val(payment_id);

    });

    $('#deleteSalary').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var payment_id = button.data('id')
        var modal = $(this)
        modal.find('.modal-title').text('Delete Payment')
        modal.find('.modal-body #payid').val(payment_id);

    });
</script>

@endsection
