@extends('admin.layouts.master')

@section('title','Table Control')

@section('content')


    <div class="container">
    <a href="{{Route('dashboard')}}">
        <button class="btn btn-info my-2 btn-sm">
            <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
     </a>

      <div class="row">
          <div class="col-md-4">

            <div class="card card-info">
                <div class="card-header">
                  <h4 class="card-title">
                    <i class="fas fa-plus-circle"></i> &nbsp;Add New Table</h4>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
            <form role="form" method="POST" action="{{Route('table.store')}}">
                    @csrf

                  <div class="card-body">
                    @include('admin.message.error')
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" placeholder="Enter Table Name" name="name">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right swalDefaultSuccess btn-sm">
                        <i class="fas fa-save"></i>&nbsp; Save
                      </button>

                  </div>
                </form>
              </div>

          </div>
          <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h2 class="card-title text-danger text-bold">Restaurant's Table List</h2>


                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-responsive-md">
                    <thead>
                      <tr>
                        <th style="width: 30%">No</th>
                        <th style="width: 30%">Name</th>

                        <th style="width: 40%"  >Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($table as $data)


                      <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->name}}</td>
                        <td>

                        <a href="{{Route('table.destroy',$data->id)}}"
                               type="button"  class="btn btn-outline-danger btn-sm swalDefaultInfo ">
                                    <i class="far fa-trash-alt"></i>

                            </a>

                        </td>
                      </tr>
                      @endforeach

                    </tbody>


                  </table>

                </div>

                <!-- /.card-body -->
              </div>

            </div>

          </div>
      </div>


@endsection
