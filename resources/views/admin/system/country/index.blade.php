@extends('layouts.admin')
  @section('main')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Country Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">System Manage</li>
              <li class="breadcrumb-item active" aria-current="page">Country</li>
            </ol>
          </div>
        </div>
    <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCountry"
                    id="#addCountryName">Add New Country</button>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Country Name</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @php($i=1)
                      @foreach($countries as $countries)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$countries->name}}</td>
                        <td>{{$countries->created_at}}</td>
                        <td><button data-country_id="{{$countries->id}}" data-name="{{$countries->name}}" data-created_at="{{$countries->created_at}}" type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateCountry"
                      id="#updateCountryName"><i class="fas fa-user-edit">Update</i></button>
                    <button data-country_id="{{$countries->id}}" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCountry"
                      id="#deleteCountryName"><i class="fas fa-trash">Delete</i></button>
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



  <!--Add Country Modal Center -->
<div class="modal fade" id="addCountry" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addCountryName">Add Country</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{url('admin/countries')}}"method="POST" enctype="multipart/form-data">
                @csrf

                  <div class="modal-body">
                      <input name="name" class="form-control  mb-3" type="text" placeholder="Add Country Name">
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                  </div>

              </form>
              </div>
            </div>
          </div>

          <!--Update Country Modal Center -->
            <div class="modal fade" id="updateCountry" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateCountryName">Update Country</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <form action="{{url('admin/countries/update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
          <div class="modal-body">
            <input type="hidden" name="country_id" id="country_id">
            <label class="font-weight-bold">Country Name</label>
            <input name="name" id="name" class="form-control  mb-3" type="text" placeholder="Update Country Name">
        </div>

      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Update</button>
    </div>

  </form>
  </div>
  </div>
</div>
<!--Delete Country Modal Center -->
      <div class="modal fade" id="deleteCountry" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteCountryName">Delete Country</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form action="{{url('admin/countries/destroy')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('DELETE')
                    <div class="modal-body">
                      <input type="hidden" name="country_id" id="country_id">
                      Are You Sure,You Want To Delete This Country?
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
/*-----Country Modal Update Scripts-----*/
    <script>
    $('#updateCountry').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var country_id = button.data('country_id')
        var name = button.data('name')
        var created_at = button.data('created_at')
        var modal = $(this)
        modal.find('.modal-title').text('Update Country Name')
        modal.find('.modal-body #country_id').val(country_id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #created_at').val(created_at);
    });
        /*-----Country Modal Delete Scripts-----*/
    $('#deleteCountry').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var country_id = button.data('country_id')
        var modal = $(this)
        modal.find('.modal-title').text('Delete Country Name')
        modal.find('.modal-body #country_id').val(country_id);
    });
</script>
@endsection
