@extends('admin.layouts.master')

@section('title','Add Item')

@section('content')

<div class="container">


    <div class="col-md-12">
       <a href="{{Route('user.index')}}">
           <button class="btn btn-info my-2 btn-sm">
               <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
        </a>
       <div class="card">
           <div class="card-header">
             <h3 class="card-title text-bold text-info">
                <i class="fas fa-plus-circle text-info"></i>&nbsp;&nbsp;Add New User</h3>
           </div>


       <form role="form" method="POST" action="{{Route('user.store')}}" enctype="multipart/form-data">
               @csrf

             <div class="card-body">
                 <div class="row">
                     <div class="col-md-6 border-right">
                        @include('admin.message.error')
                        <div class="form-group">
                          <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Enter User Name" name="name" required>
                        </div>

                      <div class="form-group">
                         <label for="customFile">Custom File</label>
                         <div class="custom-file">
                           <input type="file" class="custom-file-input" name="image">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                         </div>
                       </div>
                       <div class="form-group">
                         <label for="email">Email</label>
                       <input type="email" class="form-control" placeholder="Enter User Email" name="email" required>
                       </div>
                       <div class="form-group">
                         <label for="password">Password</label>
                       <input type="email" class="form-control" placeholder="Enter User Password" name="password" required>
                       </div>

                       <div class="form-group">
                         <label>Please Select User Role</label>
                         <select class="form-control" name="role">
                             <option data-select2-id="75" class="bg-dark">select one role</option>
                           @foreach ($role as $data)
                         <option data-select2-id="75" value="{{$data->id}}">{{$data->name}}</option>
                         @endforeach
                         </select>
                       </div>
                     </div>
                     <div class="col-md-6">


                     </div>
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
