@extends('layouts.admin')
  @section('admin')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">User Manage</li>
              <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
          </div>
      </div>
      

          <div class="row">
            <div class="col-lg-6">
              <!-- Form Personal Details Section -->
              <div class="card mb-4 ml-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Details</h6>
                </div>
                
                <div class="card-body">
                  <form>
                    <!-- Form Image Section -->
              <div class="col-lg-12">
                    <div class="profile-img">
                            <img src="img/avatar.svg" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                                Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
              </div>
                    <div class="form-group">
                      <label for="">User Name</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label>Father's Name</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label>Date of Birth</label>
                      <div class="fas fa-calendar"></div>
                      <input type="Date" name="date" class="form-control">
                    </div>


                    <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Blood Group</label>
                      <select class="form-control">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea type="name" rows="4" class="form-control"
                        placeholder="User Name"></textarea>
                    </div>

              </div>
          </div>
  </div>

    <!-- Company Details Section -->
      <div class="col-lg-6">
              <div class="card mb-4 ml-3">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Company Details</h6>
                </div>
                <div class="card-body">

                    <div class="form-group">
                      <label for="">User ID</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label for="">User Type</label>
                      <select class="form-control">
                        <option>Admin</option>
                        <option>Manager</option>
                        <option>Employee</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label for="">Confirm Password</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label>NID Number</label>
                      <input type="name" class="form-control"
                        placeholder="User Name">
                    </div>

                    <div class="form-group">
                      <label>Department</label>
                      <select class="form-control">
                        <option>A+</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Desgnation</label>
                      <select class="form-control">
                        <option>A+</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Salary</label>
                      <select class="form-control">
                        <option>A+</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Country</label>
                      <select class="form-control">
                        <option>A+</option>
                      </select>
                    </div>


                    <div class="form-group">
                      <label>Date of Joining</label>
                      <div class="fas fa-calendar"></div>
                      <input type="Date" name="date" class="form-control">
                    </div>

                    </div>
                  
                
                <div class="form-group col-lg-12 ml-5">
                  <button type="submit" class="btn btn-primary p-2 w-50 ml-5">Submit  </button>
              </div>
      </div>
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