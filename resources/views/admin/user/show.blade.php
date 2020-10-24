@extends('admin.layouts.master')

@section('title',$user->name)

@section('content')

        <div class="container-fluid col-md-10 offset-1">
            <a href="{{Route('user.index')}}">
                <button class="btn btn-info my-2 btn-sm">
                    <i class="fas fa-arrow-circle-left"></i>&nbsp;Back</button>
             </a>

                <div class="card-header">
                    <h3 class="card-title text-bold text-info float-right">
                    <i class="fas fa-user-circle text-info"></i>&nbsp;&nbsp;{{$user->name}}'s Information Detail</h3>
                  </div>
                  <div class="card-body">
                    <div class="card bg-light">
                        <div class="card-header text-muted text-bold">
                         {{$user->role->name}}
                        </div>

                        <div class="card-body pt-0 mt-3">
                          <div class="row">
                            <div class="col-7">
                            <h2 class="lead"><b>{{$user->name}}</b></h2>
                              <p class="text-muted text-sm"><b>About: </b> {{$user->user_detail->remark}} </p>
                              <p class="text-muted text-sm"><b>Salary: </b> {{$user->user_detail->salary}} </p>
                              <p class="text-muted text-sm"><b>Age: </b> {{$user->user_detail->age}} </p>
                              <p class="text-muted text-sm"><b>NRC: </b> {{$user->user_detail->nrc}} </p>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small my-2"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone :&nbsp;  {{$user->user_detail->phone}} kyats</li>
                                <li class="small my-2"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address  :&nbsp;  {{$user->user_detail->address}} </li>

                              </ul>
                            </div>
                            <div class="col-5 text-center">
                            <img src="{{asset('/user/'.$user->image)}}" alt="" class="img-circle img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                        @if (Auth::user()->role->name== 'admin')


                        <a href="{{Route('user.destroy',$user->id)}}" class="btn btn-sm btn-outline-danger">
                              <i class="fas fa-trsah"></i> Delete
                            </a>
                            @endif
                          </div>
                        </div>
                     </div>
                  </div>

        </div>
@endsection
