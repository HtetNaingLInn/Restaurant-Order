@extends('admin.layouts.master')

@section('title','Role')

@section('content')


    <div class="container">
    <div class="col-md-10 offset-1">
        <a href="{{Route('dashboard')}}">
            <button class="btn btn-info my-2 btn-sm">
                <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
         </a>
    </div>
     @if (session('status'))

     <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

            {{session('status')}}
      </div>

     @endif


          <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                  <h2 class="card-title text-danger text-bold">Restaurant's User List</h2>


                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-responsive-md">
                    <thead>
                      <tr>
                        <th style="width: 20%">No</th>
                        <th style="width: 20%">Name</th>
                        <th style="width: 20%">User List</th>
                        <th style="width: 40%"  >Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($role as $data)


                      <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->name}}</td>
                      <td>
                        <a href="{{Route('user.role',$data->id)}}"
                            type="button"  class="btn btn-secondary btn-sm  ">
                                 <i class="fas fa-user"></i>
                         </a>
                      </td>
                        <td>
                            <a href="{{Route('role.edit',$data->id)}}"
                                type="button"  class="btn btn-info btn-sm  ">
                                     <i class="far fa-edit"></i>
                             </a>
                        <a href="{{Route('role.destroy',$data->id)}}"
                               type="button"  class="btn btn-info btn-sm swalDefaultInfo ">
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


@endsection
