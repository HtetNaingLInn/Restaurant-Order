@extends('admin.layouts.master')

@section('title',$category->name)

@section('content')

    <div class="container">
        <a href="{{Route('category.index')}}">
            <button class="btn btn-info my-2 btn-sm">
                <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
         </a>
        <div class="card">
            <div class="card-header">
            <h4 class="text-danger text-bold">{{$category->name}} 's Menus</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)


                      <tr>
                      <td><img src="{{asset('/menu/'.$menu->image)}}" alt="" class="image img-rounded img-size-50"></td>
                      <td>{{$menu->name}}</td>
                      <td>{{$menu->price}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
