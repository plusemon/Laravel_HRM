@extends('layouts.admin')
  @section('admin')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Department Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">System Manage</li>
              <li class="breadcrumb-item active" aria-current="page">Department</li>
            </ol>
          </div>
        </div>
    <div class="row">
            <!-- Department DataTable with Hover  Section-->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addDepartment"
                    id="#addDepartmentName">Add New Department</button>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Department Name</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Department Name</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>

                      @php($i=1)
                      @foreach($departments as $departments)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $departments-> dept_name }}</td>
                        <td>{{ $departments-> created_at }}</td>

                        <td><button data-dept_id="{{ $departments->id }}" data-dept_name="{{ $departments->dept_name }}" data-first_desgn="{{ $departments->first_desgn }}" data-second_desgn="{{ $departments->second_desgn }}" type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateDepartment"
                      id="#updateDepartmentName"><i class="fas fa-user-edit">Update</i></button>
                    <button data-dept_id="{{ $departments->id }}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteDepartment"
                      id="#deleteDepartmentName"><i class="fas fa-trash">Delete</i></button>
                      </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                 <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>

    </div>
  </div>


  <!--Add Department Modal Center -->
<div class="modal fade" id="addDepartment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addDepartmentName">Add Department</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{url('admin/departments')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="modal-body">
                   <input name="dept_name" class="form-control  mb-3" type="text" placeholder="Add Department Name">
                   <input name="first_desgn" class="form-control  mb-3" type="text" placeholder="Add Designation 1">
                   <input name="second_desgn" class="form-control  mb-3" type="text" placeholder="Add Designation 2">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>
              </form>
              </div>
            </div>
          </div>

          <!--Update Department Modal Center -->
            <div class="modal fade" id="updateDepartment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateDepartmentName">Update Department</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        <form action="{{url('admin/departments/update')}}"method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="modal-body">
              <input type="hidden" name="dept_id" id="dept_id">
              <label class="font-weight-bold">Department Name</label>
              <input name="dept_name" id="dept_name" class="form-control  mb-3" type="text" placeholder="Update Department Name">
              <label class="font-weight-bold">Designation 1</label>
              <input name="first_desgn" id="first_desgn" class="form-control  mb-3" type="text" placeholder="Update Designation 1">
              <label class="font-weight-bold">Designation 2</label>
              <input name="second_desgn" id="second_desgn" class="form-control  mb-3" type="text" placeholder="Update Designation 2">
         </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning">Update</button>
            </div>
      </form>
      </div>
    </div>
  </div>

  <!--Delete Department Modal Center -->
      <div class="modal fade" id="deleteDepartment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteDepartmentName">Delete Salary Amount</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="{{url('admin/departments/destroy')}}" method="POST" enctype="multipart/form-data">
                  @csrf()
                  @method('DELETE')
                    <div class="modal-body">
                      <input type="hidden" name="dept_id" id="dept_id">
                      Are You Sure,You Want To Delete This Department?
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




