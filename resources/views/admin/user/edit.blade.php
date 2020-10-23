@extends('admin.layouts.master')

@section('title','Edi User')

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
                <i class="fas fa-edit text-info"></i>&nbsp;&nbsp;Edit User Information</h3>
           </div>


           <form role="form" method="POST" action="{{Route('user.update',$user->id)}}" enctype="multipart/form-data">
               @csrf

               <div class="card-body">


                @include('admin.message.error')

         <div class="row">
        <div class="col-md-6 border-right">
                        <div class="form-group">
                  <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Enter User Name" name="name" value="{{$user->name}}" required>
                </div>
                <div class="form-group">
                    <label for="customFile">Upload Profile</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
               <div class="form-group">
                 <label for="email">Email</label>
               <input type="email" class="form-control" placeholder="Enter User Email" name="email" value="{{$user->email}}" required>
               </div>
               <div class="form-group">
                 <label for="password">Password</label>
               <input type="password" class="form-control" placeholder="Enter User Password" name="password" required>
               </div>
               <div class="form-group">
                <label for="password">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Enter User Password again" name="password_confirmation" required>
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

                        <div class="form-group">
                            <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone" value="{{$user->user_detail->phone}}">
                          </div>
                        <div class="form-group">
                            <label>NRC</label>
                        <input type="text" class="form-control" placeholder="Enter NRC Number" name="nrc" value="{{$user->user_detail->nrc}}" >
                          </div>
                          <div class="form-group">
                            <label>Age</label>
                          <input type="number" class="form-control" placeholder="Enter User Age" name="age" value="{{$user->user_detail->age}}">
                          </div>
                          <div class="form-group">
                            <label>Salary</label>
                          <input type="number" class="form-control" placeholder="Enter User Salary" name="salary" value="{{$user->user_detail->salary}}">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                          <input type="text" class="form-control" placeholder="Enter User Address" name="address" value="{{$user->user_detail->address}}">
                          </div>
                          <div class="form-group">
                            <label>Remark</label>
                            <textarea class="form-control"  rows="2" name="remark" placeholder="Enter Remark"></textarea>
                          </div>
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
