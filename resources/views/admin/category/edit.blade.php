@extends('admin.layouts.master')

@section('title','Edit Category')

@section('content')

        <div class="container">


             <div class="col-md-8 offset-2">
                <a href="{{Route('category.index')}}">
                    <button class="btn btn-info my-2 btn-sm">
                        <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
                 </a>
                <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <i class="fas fa-edit"></i> &nbsp;Edit Category Name</h4>
                    </div>


                <form role="form" method="POST" action="{{Route('category.update',$category->id)}}">
                        @csrf

                      <div class="card-body">
                        @include('admin.message.error')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="name" value="{{$category->name}}">
                        </div>
                      </div>


                      <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right btn-sm">
                            <i class="fas fa-save"></i>&nbsp; Save
                          </button>

                      </div>
                    </form>
                  </div>

                </div>
        </div>

@endsection
