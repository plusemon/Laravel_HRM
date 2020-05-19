@extends('layouts.admin')
  @section('admin')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Salary Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">System</li>
              <li class="breadcrumb-item active" aria-current="page">Salary</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSalary"
                    id="#addSalaryAmount">Add Salary</button>
                </div>



                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">

                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Salary</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach($salaries as $salary)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $salary-> salary_amount }}</td>
                        <td>{{ $salary-> created_at }}</td>
                        <td>
                          <button data-salary_id="{{ $salary->id }}" data-salary_amount="{{ $salary-> salary_amount }}" data-created_at="{{ $salary-> created_at }}" data-target="#updateSalary" id="#updateSalaryAmount" type="button" class="btn btn-warning" data-toggle="modal"
                      ><i class="fas fa-user-edit">Update</i></button>
                    <button data-salary_id="{{ $salary->id }}" data-target="#deleteSalary" id="#deleteSalaryAmount" type="button" class="btn btn-danger" data-toggle="modal"
                      ><i class="fas fa-trash">Delete</i>
                    </button>
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
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


<!--Add Salary Modal Center -->
<div class="modal fade" id="addSalary" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addSalaryAmount">Add Salary</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <form action="{{url('admin/salaries')}}" method="POST" enctype="multipart/form-data">
                  @csrf()
                  <div class="modal-body">
                   <input name="salary_amount" class="form-control  mb-3" type="text" placeholder="Add Salary">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>

              </div>
            </div>
          </div>

<!--Update Salary Modal Center -->
  <div class="modal fade" id="updateSalary" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

          <div class="modal-header">
              <h5 class="modal-title" id="updateSalaryAmount">Update Salary</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <form action="{{url('admin/salaries/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')

              <div class="modal-body">
               <input type="hidden" name="salary_id" id="salary_id">
                <label class="font-weight-bold">Salary Amount</label>
                <input name="salary_amount" id="salary_amount" class="form-control  mb-3" type="text" placeholder="Update Name">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
<!--Delete Salary Modal Center -->
      <div class="modal fade" id="deleteSalary" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteSalaryAmount">Delete Salary Amount</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="{{url('admin/salaries/destroy')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('DELETE')
                    <div class="modal-body">
                      <input type="hidden" name="salary_id" id="salary_id">
                      Are You Sure,You Want To Delete This Salary Amount?
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
              </form>
            </div>
          </div>
        </div>

@endsection
