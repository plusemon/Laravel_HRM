@extends('layouts.admin')
  @section('admin')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Award Categories</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="admin-award-index">Award</a></li>
              <li class="breadcrumb-item active" aria-current="page">Award Categories</li>
            </ol>
          </div>
        </div>
    <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAwardCategories"
                    id="#addAwardCategoriesModal">Add Award Categories</button>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Award Categories</th>
                        <th>Description</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php($i=1)
                      @foreach($award_categories as $awardCategories)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $awardCategories->award_category }}</td>
                        <th>{{ $awardCategories->award_description }}</th>
                        <td>{{ $awardCategories->created_at }}</td>
                        <td><button data-award_category_id="{{ $awardCategories-> id }}" data-award_category="{{ $awardCategories-> award_category }}"
                        data-award_description="{{ $awardCategories-> award_description }}" type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAwardCategories"
                      id="#updateAwardCategoriesModal"><i class="fas fa-user-edit">Update</i></button>
                    <button data-award_category_id="{{ $awardCategories-> id }}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAwardCategories"
                      id="#deleteAwardCategoriesModal"><i class="fas fa-trash">Delete</i></button>
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



  <!--Add Award Categories Modal Center -->
<div class="modal fade" id="addAwardCategories" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addAwardCategoriesModal">Add Leave Types</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="admin-award-categories-insert" method="POST" enctype="multipart/form-data">
                @csrf()

                <div class="modal-body">
                   <input name="award_category" class="form-control  mb-3" type="text" placeholder="Add Award Categories" required>

                   <textarea name="award_description" rows="8" class="form-control  mb-3" type="text" placeholder="Add Description" required></textarea>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Save</button>
                </div>

              </form>

              </div>
            </div>
          </div>

          <!--Update Award Categories Modal Center -->
  
          	<div class="modal fade" id="updateAwardCategories" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateAwardCategoriesModal">Update Leave</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        <form action="admin-award-categories-update" method="POST" enctype="multipart/form-data">
                @csrf()

          <div class="modal-body">
              <input type="hidden" name="award_category_id" id="award_category_id">
              <input name="award_category" id="award_category" class="form-control  mb-3" type="text" placeholder="Update Award Categories">
              <textarea name="award_description" id="award_description" rows="8" class="form-control  mb-3" type="text" placeholder="Update Description"></textarea>
          </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning">Update</button>
            </div>

  </form>
  </div>
  </div>
</div>
<!--Delete Award Categories Modal Center -->
      <div class="modal fade" id="deleteAwardCategories" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteAwardCategoriesModal">Delete Give an Award</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="admin-award-categories-delete" method="POST" enctype="multipart/form-data">
                    @csrf()
                    <div class="modal-body">
                      <input type="hidden" name="award_category_id" id="award_category_id">
                      Are You Sure,You Want To Delete This Award Categories?
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

