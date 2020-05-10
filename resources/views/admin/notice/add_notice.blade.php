@extends('layouts.admin')
  @section('admin')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Notice</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">Notice Board</li>
              <li class="breadcrumb-item active" aria-current="page">Add Notice</li>
            </ol>
          </div>
        </div>
        <!-- Awards Page Section-->
   
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4 align-self-xl-center">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  		<h6 class="m-0 font-weight-bold text-primary fas fa-trophy"> Add Notice</h6>	
                </div>
                <div class="card-body align-items-center justify-content-between">

                  <form action="admin-notice-insert" method="POST" enctype="multipart/form-data">
                    @csrf()

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Title</span>
                    </div>
                    <input name="notice_title" class="form-control col-lg-6 font-weight-bold form-control-lg">
                  </div>

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Description</span>
                    </div>
                    <textarea name="notice_description" rows="8" textarea class="form-control col-lg-6 form-control-lg" aria-label="With textarea"></textarea>
                  </div>

                    <button type="submit" class="btn btn-success col-2">Submit</button>
                  </form>
                </div>
              </div>
          </div>
    @endsection
