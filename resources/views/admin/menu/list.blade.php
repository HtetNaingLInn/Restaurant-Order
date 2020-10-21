@extends('admin.layouts.master')

@section('title','Menu Item List')

@section('content')

<div class="container-fluid">
    <a href="{{Route('dashboard')}}">
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
                    <h3 class="text-danger text-bold card-title">Restaurant's Menu Item List</h3>
                </div>




        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{Route('menu.create')}}">
                        <button class="btn btn-info mb-4 btn-sm">
                            <i class="fas fa-plus-circle"></i>&nbsp;Add New Item</button>
                     </a>
                </div>
                <div class="col-md-4">
                    <div class="btn-group float-right" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Category
                        </button>
                        <div class="dropdown-menu bg-info" aria-labelledby="btnGroupDrop1">
                            @foreach ($category as $data)
                        <a class="dropdown-item bg-info" href="{{Route('menu.category',$data->id)}}">
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
                @foreach ($menus as $menu)


                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header bg-info">
                            <span class="text-bold">{{$menu->name}}</span>

                            </div>
                            <div class="card-body">
                            <div class="image">
                                <img src="{{asset('/menu/'.$menu->image)}}" alt="" style="width: 50%" class="image img-size-64 img-rounded">
                            </div>
                            </div>
                            <div class="card-footer">
                                <span>{{$menu->price}}</span>
                            <a href="{{Route('menu.destroy',$menu->id)}}">
                                    <button class="btn btn-info btn-sm  float-right swalDefaultInfo"><i class="far fa-trash-alt"></i></button>
                                </a>
                            <a href="{{Route('menu.edit',$menu->id)}}">
                                    <button class="btn btn-info btn-sm float-right mr-2"><i class="fas fa-edit"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>


        </div>
    </div>


</div>

@endsection
