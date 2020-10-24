@extends('admin.layouts.master')
@section('title',$table->name)

@section('content')

<div class="container-fluid">
    <a href="{{Route('dashboard')}}">
        <button class="btn btn-info my-2 btn-sm">
            <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
     </a>
    <h2 class="float-right text-bold text-secondary mr-4">Table {{$table->name}}</h2>
     <div class="row">
        <div class="col-md-10 col-sm-10">
            <div class="row">
                @foreach ($menu as $data)


                <div class="col-md-2 col-sm-2 border-right mb-2">



                    <img src="{{asset('/menu/'.$data->image)}}" alt="" class="image img-rounded img-fluid">

                   <div class="mt-3">
                    <span>{{$data->name}}</span>
                    <p>Price : <b>{{$data->price}}</b></p>
                   </div>




            </div>
            @endforeach
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
          <div class="nav flex-column nav-tabs nav-tabs-right h-100">
            <a class="nav-link" href="{{Route('dashboard.menu',$table->id)}}">
                <button class="btn btn-info btn-block">All</button>
                </a>
            @foreach ($category as $data)
          <a class="nav-link" href="{{Route('dashboard.category',[$data->id,$table->id])}}">
          <button class="btn btn-info btn-block">{{$data->name}}</button>
          </a>
            @endforeach
          </div>
        </div>
      </div>
</div>


@endsection
