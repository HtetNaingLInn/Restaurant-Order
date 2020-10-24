@extends('admin.layouts.master')

@section('title','Admin Control')

@section('content')

    <div class="container-fluid mt-3">
        <div class="row">
            @foreach ($table as $data)

            @if ($data->status == 0)
            <div class="col-md-3 col-sm-3">

                <div class="small-box bg-info">

                    <div class="inner">
                    <h2 class="text-bold">Table</h2>
                    <h4 class=" text-bold">{{$data->name}}</h4>

                    </div>
                 <a href="{{Route('dashboard.menu',$data->id)}}">
                    <div class="text-center icon">
                        <i class="fas fa-plus-circle"></i>
                    </div>
                    </a>
                    <div class="small-box-footer">
                       <span class="text-bold"> Available</span>
                        </div>
                  </div>

        </div>

        @else




    <div class="col-md-3 col-sm-3">

        <div class="small-box bg-secondary">

            <div class="inner">
            <h2 class="text-dark text-bold">Table</h2>
            <h4 class=" text-dark text-bold">{{$data->name}}</h4>

            </div>

            <div class="text-center icon">
                <i class="fas fa-plus-circle"></i>
            </div>

            <div class="small-box-footer">
                <span class="text-dark text-bold">Not Available</span>
                </div>
          </div>

    </div>

            @endif

            @endforeach
        </div>


    </div>


@endsection
