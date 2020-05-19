@extends('layouts.employee')
  @section('employee')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Award Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Award</li>
            </ol>
          </div>
    <div class="row">
            <!--Award DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Awardee Name</th>
                        <th>Award</th>
                        <th>Gift</th>
                        <th>For The Month</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>1</td>
                        <td>Customer Support</td>
                        <td>
                          </button>
                      <a href="#"><button type="button" class="btn btn-success"><li class="far fa-eye">View</li></button></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@endsection

