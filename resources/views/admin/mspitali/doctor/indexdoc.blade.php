@extends('admin.adminpanel.dashboard')

@section('content')
<div class="row">

                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    <div class="col-sm-8 col-6 text-right m-b-5">
                        <a href="{{ route('Spitali.addformular') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
                <br>
                
<div class="col-md-4 col-sm-4 col-lg-4 col-xl-12">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
                          
                                
                        
								<h3>{{$count }}</h3>
                                 
								<span class="widget-title1"> Total Doctor<i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                   
                 
				<div class="row doctor-grid">
                   @foreach ($doctor as $doctor )
                <div class="col-md-4 col-sm-4  col-lg-3">
                 
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="profile.html"><img alt="" src="{{asset('image/'.$doctor->image)}}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="edit-doctor.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{ $doctor->fullname }}</a></h4>
                            <div class="doc-prof">{{$doctor->depart->name}}</div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{ $doctor->country }}/{{ $doctor->city }}
                            </div>
                            <br>
                             	<td><form action="{{ route('Spitali.profiledoctor') }}" method="POST"><input type="hidden" value="{{ $doctor->id }}" name="id"><button value="submit" class="btn btn-success" style="background-color: #17a2b8; border:#17a2b8; padding: 4px 4px;"><i class="material-icons">&#xE147;</i>@csrf</form></td>
                            </div>
                          
                         </div>
                        
                           @endforeach
                      
               
                   
                   
@endsection