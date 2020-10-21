@extends('admin.layouts.master')

@section('title',$menu->name)

@section('content')

<div class="container">


    <div class="col-md-8 offset-2">
       <a href="{{Route('menu.index')}}">
           <button class="btn btn-info my-2 btn-sm">
               <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
        </a>
       <div class="card card-info">
           <div class="card-header">
             <h4 class="card-title">
                <i class="fas fa-edit"></i>&nbsp;Edit Item</h4>
           </div>


       <form role="form" method="POST" action="{{Route('menu.update',$menu->id)}}" enctype="multipart/form-data">
               @csrf

             <div class="card-body">
               @include('admin.message.error')
               <div class="form-group">
                 <label for="name">Name</label>
               <input type="text" class="form-control" placeholder="Enter Item Name" name="name" value="{{$menu->name}}">
               </div>

             <div class="form-group">
                <label for="customFile">Custom File</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
              <input type="number" class="form-control" placeholder="Enter Item Price" name="price" value="{{$menu->price}}" >
              </div>

              <div class="form-group">
                <label>Please Select Category</label>
                <select class="form-control" name="category[]" multiple aria-selected="true">
                  @foreach ($categories as $category)


                <option data-select2-id="75" value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
              </div>






            </div>

             <div class="card-footer">
               <button type="submit" class="btn btn-info float-right btn-sm swalDefaultSuccess">
                   <i class="fas fa-save"></i>&nbsp; Save
                 </button>

             </div>
           </form>
         </div>

       </div>
</div>

@endsection
