@extends('admin.layouts.master')

@section('title',)

@section('content')

<div class="container-fluid">
    <a href="{{Route('menu.index')}}">
        <button class="btn btn-info my-2 btn-sm">
            <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
     </a>
     @if (session('status'))

     <div class="alert alert-info alert-dismissible col-md-8 offset-2">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

            {{session('status')}}
      </div>

     @endif
    <div class="card">


                <div class="card-header">
                <h3 class="text-danger text-bold card-title">{{$role->name}} User</h3>
                </div>




        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{Route('user.create')}}">
                        <button class="btn btn-info mb-4 btn-sm">
                            <i class="fas fa-plus-circle"></i>&nbsp;Add New User</button>
                     </a>
                </div>
                <div class="col-md-4">
                    <div class="btn-group float-right" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Role
                        </button>
                        <div class="dropdown-menu bg-info" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item bg-info" href="{{Route('user.index')}}">All
                            @foreach ($roles as $data)
                        <a class="dropdown-item bg-info" href="{{Route('user.role',$data->id)}}">
                                {{$data->name}}
                            </a>
                            @endforeach

                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search ">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit" id="button-addon2">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                                <div class="row">
                                    @foreach ($user as $data)


                                    <div class="col-md-4">
                                        <div class="card bg-light">
                                            <div class="card-header text-muted border-bottom-0 text-bold">
                                             {{$data->role->name}}
                                            </div>
                                            <div class="card-body pt-0">
                                              <div class="row">
                                                <div class="col-7">
                                                <h2 class="lead"><b>{{$data->name}}</b></h2>
                                                  <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                  <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                                  </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                <img src="{{asset('/user/'.$data->image)}}" alt="" class="img-circle img-fluid">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-footer">
                                              <div class="text-right">
                                              <a href="{{Route('user.edit',$data->id)}}" class="btn btn-sm bg-teal ">
                                                  <i class="fas fa-edit"></i> Edit
                                                </a>
                                            <a href="{{Route('user.show',$data->id)}}" class="btn btn-sm btn-outline-primary">
                                                  <i class="fas fa-info-circle"></i> More Info
                                                </a>
                                              </div>
                                            </div>
                                         </div>
                         </div>
                     @endforeach
             </div>

        </div>
    </div>


</div>

@endsection
