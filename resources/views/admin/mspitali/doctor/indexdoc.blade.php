@extends('admin.adminpanel.dashboard') 
@section('content')

<div class="row">
    <div class="col-lg-12 ">
      <ol class="breadcrumb homebar"> 
        <li><i class="fa fa-home"></i> Home /  </a></li>
        <li><i class="fa fa-user-md"></i>  Doctors</li>
      </ol>  
</div>
<div class="col-sm-12  text-right">
    <a href="{{ action('Administrator\ModuliSpitali\\DoctorController@addFormular') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
</div>
</div>
<br>
<div class="dash-widget">
    <span class="dash-widget-bg1"><i class="fa fa-plus" aria-hidden="true"></i></span>
    <div class="dash-widget-info float-center">
        <form method="GET">
            <div class="input-group col-md-6" style="left:230px;">
                <input type="search" placeholder="Search doctor by name ?" name="q" aria-describedby="button-addon5" class="form-control">
                <div class="input-group-append">
                  <button id="button-addon5 " type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
    </div>
    
    <div class="dash-widget-info text-right">
        <h3>{{$count }}</h3>
        <span class="widget-title1"> Total Doctor<i class="fa fa-check" aria-hidden="true"></i></span>
     </div>
    </div>
    @if(Session::has('q'))
    <div class="alert alert-primary" role="alert">No result by 
  {{ Session::get('q')}}
</div>
@endif
   
          <div class="row doctor-grid">
            @foreach ($doctors as $doctor )
            <div class="col-md-4 col-sm-4 col-lg-3">
                <div class="profile-widget" style="border-top: 1px solid #17a2b8;">
                    @if($doctor->status == 1)
                    <span class="badge badge-info float-left">Online</span>
                    @else 
                    <span class="badge badge-danger float-left">Offline</span>
                    @endif

                    <div class="doctor-img">
                        <a class="avatar" href="profile.html"><img alt="" src="{{ asset('images/' . $doctor->image) }}" /></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ action('Administrator\ModuliSpitali\\DoctorController@edit',$doctor->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="{{action('Administrator\ModuliSpitali\\DoctorController@deleteDoctor',$doctor->id)}}" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{!! action('Administrator\ModuliSpitali\\DoctorController@profiledoctor', $doctor->id) !!}">{{ $doctor->fullname }}</a></h4>
                    <div class="doc-prof">{{$doctor->depart->name}}</div>
                    <div class="user-country"><i class="fa fa-map-marker"></i> {{ $doctor->country }}/{{ $doctor->city }}</div>
                    <br/>
                    
                </div>
            </div>
            @endforeach
        </div>
        @include('admin.paginate', ['result' => $doctors, 'type' =>'Dotors'])
 @endsection