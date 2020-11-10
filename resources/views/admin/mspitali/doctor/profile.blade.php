@extends('admin.adminpanel.dashboard')

@section('content')
<div class="row">
         <div class="col-sm-7 col-6">
                        <h4 class="page-title">Doctor/Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                    </div>
                </div>
                @foreach ($profile as $profile )
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="{{asset('image/'.$profile->image)}}" alt=""></a>
                                    </div>
                                </div>

                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$profile->fullname }}</h3>
                                             
                                                    
                                            
                                                <small class="text-muted">{{$profile->depart->name }}</small>
                                                <div class="staff-id">{{ $profile->phNo }}</div>
                                                
                                            </div>
                                          
                                             <div class="staff-msg"  class="btn btn-primary">Status: @if ($profile->status==1) Active @else No Active @endif</a></div>
                                         

                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#">{{$profile->phone }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#">{{$profile->user->email }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text">{{ $profile->birthday }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">{{ $profile->country }}/{{ $profile->city }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text">{{ $profile->gender }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Messages</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                          
                        <div class="card-box mb-0">
                            <h3 class="card-title">Education</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                   @foreach ($profile->education as $ed )
                                            
                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                     
                                      
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                                <a href="#/" class="name">{{ $ed->education }}</a>
                                                <span class="time">{{ $ed->star_date}} / {{ $ed->end_date }}</span>
                                            </div>
                                        </div>
                                         
                                    </li>
                                     @endforeach
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
						</div>
						
					</div>
				</div>
                 @endforeach
            </div>
            </div>
            @endsection
