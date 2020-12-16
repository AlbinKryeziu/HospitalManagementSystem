@extends('admin.adminpanel.dashboard')
 @section('content')
<div class="row">
    <div class="col-lg-12 ">
      <ol class="breadcrumb homebar"> 
        <li><i class="fa fa-home"></i> Home / </a></li>
        <li><i class="fa fa-user-md"></i>  General Information</li>
      </ol>  
</div>
</div>
<div class="row">
    <div class="col-lg-12">
       
        <div class="job-detail mt-2 p-4">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark">General Information</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="resume-user mb-5">{{substr($doctor->fullname, 0,1 )}}</div>
                </div>
            </div>
            <div class="custom-form">
                <form method="Post" action="{{action('Administrator\ModuliSpitali\\DoctorController@store' ,$doctor->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="frist-name" class="text-muted">First Name</label>
                                <input id="frist_name" name="frist_name" disabled type="text" class="form-control resume" placeholder="{{$doctor->fullname}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="middle-name" class="text-muted">Profession</label>
                                <input id="middle-name" name="departId" disabled value="{{$doctor->depart->name}}" type="text" class="form-control resume" placeholder="{{$doctor->depart->name}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="surname-name" class="text-muted">Age</label>
                                <input
                                    id="surname-name"
                                    type="text"
                                    name="age"
                                    class="form-control"
                                    disabled
                                    data-toggle="tooltip"
                                    data-placement="left"
                                    title="Tooltip on left"
                                    placeholder="{{ \Carbon\Carbon::parse( $doctor->birthday )->age }}"
                                />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="date-of-birth" class="text-muted">Date Of Birth</label>
                                <input id="birthday" type="text"  disabled name="birthday" class="form-control resume" placeholder="{{$doctor->birthday}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="General" class="text-muted" disabled >Gender</label>
                                <input id="gender" type="text"  disabled name="birthday" class="form-control resume" placeholder="{{$doctor->gender}}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="General" class="text-muted" disabled >Country</label>
                                <input id="gender" type="text"  disabled name="birthday" class="form-control resume" placeholder="{{$doctor->country}}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-5">Contact Information</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <div class="custom-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="date-of-birth" class="text-muted">City</label>
                                                <input id="birthday" type="text" disabled name="city" class="form-control resume" placeholder="{{$doctor->city}}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="date-of-birth" class="text-muted">State</label>
                                                <input id="birthday" type="text" disabled name="state" class="form-control resume" placeholder="{{$doctor->country}}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="date-of-birth" class="text-muted">Phone</label>
                                                <input id="birthday" type="text" disabled name="phone" class="form-control resume" placeholder="{{$doctor->phone}}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group app-label">
                                                <label for="address">Biography</label>
                                                <textarea id="address" rows="4" disabled name="biography" class="form-control resume" placeholder="{{$doctor->biography }}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-5">Education Details</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <button type="button" class="btn btn-info btn-circle float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>                            
                                <div class="custom-form">
                                    @php $d=1; @endphp 
                                    @forelse($doctor->education as $education)
                                    <span class="badge badge-pill badge-secondary">Education <strong>(@php echo $d++; @endphp) </strong></span>
                                    <br>
                                    <br>
                                   <a href="{{action('Administrator\ModuliSpitali\\DoctorController@deleteEducationDoctor', $education->id)}}" 
                                      
                                       class="bbtn btn-warning btn-circle float-right text-center" 
                                     ><i class="fa fa-trash "></i></a>
                                    <button type="button"  class="btn btn-warning btn-circle float-right text-center"><i class="fa fa-edit "></i></button>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="university/college" class="text-muted">University/College</label>
                                                <input id="university" name="university" disabled type="text" class="form-control resume" placeholder="{{$education->education }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group app-label">
                                                <label for="degree/certification" class="text-muted">Degree</label>
                                                <input id="degree" type="text" name="degree" disabled  class="form-control resume" placeholder="{{$education->degree}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="graduation" class="text-muted">Graduation</label>
                                                <input id="graduation" name="gradtion" disabled type="text" class="form-control resume" placeholder="{{$education->graduation }}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group app-label">
                                                <label for="end_date" class="text-muted">Start Date</label>
                                                <input id="start_date" name="start_data"  disabled type="number" class="form-control resume" placeholder="{{$education->end_date}}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group app-label">
                                                <label for="end_date" class="text-muted">End Date</label>
                                                <input id="end_date" type="number" disabled name="end_data" class="form-control resume" placeholder="{{$education->end_date}}" />
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="well"> No result for education of {{$doctor->fullname}}</div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-5">Work Experience</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <button type="button" class="btn btn-info btn-circle float-right" data-toggle="modal" data-target="#addwork"><i class="fa fa-plus"></i></button>     
                                @php $w=1; @endphp     
                                @forelse($doctor->workExperince as $work)                  
                                <div class="custom-form">
                                     <span class="badge badge-pill badge-secondary">Education <strong>(@php echo $w++; @endphp) </strong></span>
                                     <br>
                                     <br>
                                    <a href="{{action('Administrator\ModuliSpitali\\DoctorController@deleteWorkDoctor', $work->id)}}" 
                                       
                                        class="bbtn btn-warning btn-circle float-right text-center" 
                                      ><i class="fa fa-trash "></i></a>
                                     <button type="button"  class="btn btn-warning btn-circle float-right text-center"><i class="fa fa-edit "></i></button>
                                     <br />
                                     <br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="company-name" class="text-muted">Company Name</label>
                                                <input id="company-name" name="company" disabled type="text" class="form-control resume" placeholder="{{ $work->company }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="job-position" class="text-muted">Job Position</label>
                                                <input id="job-position" name="positiob"  disabled type="text" class="form-control resume" placeholder="{{ $work->position }}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group app-label">
                                                <label for="location" class="text-muted">Location</label>
                                                <input id="job-position" name="positiob"  disabled type="text" class="form-control resume" placeholder="{{ $work->start_date }}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group app-label">
                                                        <label for="date-from" class="text-muted">Date From</label>
                                                        <input id="date-from" type="text" disabled class="form-control resume" placeholder="{{ $work->start_date }}" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group app-label">
                                                        <label for="date-to" class="text-muted">Date To</label>
                                                        <input id="date-to" type="text" disabled  class="form-control resume" placeholder="{{ $work->end_date }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="well"> No result for work of {{$doctor->fullname}}</div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new education</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="Post" action="{{action('Administrator\ModuliSpitali\\DoctorController@addDoctorEducation',$doctor->id)}}">
                                    @csrf
                                    <span class="badge badge-pill badge-secondary">Education </span>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="university/college" class="text-muted">University/College</label>
                                                <input id="university" name="university" type="text" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group app-label">
                                                <label for="degree/certification" class="text-muted">Degree</label>
                                                <input id="degree" type="text" name="degree" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="graduation" class="text-muted">Graduation</label>
                                                <input id="graduation" name="gradtion" type="text" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group app-label">
                                                <label for="end_date" class="text-muted">Start Date</label>
                                                <input id="start_date" name="start_data" type="date" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group app-label">
                                                <label for="end_date" class="text-muted">End Date</label>
                                                <input id="end_date" type="date" name="end_data" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
          
                    {{-- modal two --}}
                   
                    <div class="modal fade" id="addwork" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new Work experience</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="Post" action="{{ action('Administrator\ModuliSpitali\\DoctorController@addWorkDoctor', $doctor->id)}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group app-label">
                                                    <label for="university/college" class="text-muted">Company Name</label>
                                                    <input id="company" name="company" type="text" class="form-control resume" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group app-label">
                                                    <label for="degree/certification" class="text-muted">Job Position</label>
                                                    <input id="degree" type="text" name="position" class="form-control resume" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group app-label">
                                                    <label for="graduation" class="text-muted">Location</label>
                                                    <input id="graduation" name="location" type="text" class="form-control resume" placeholder="" />
                                                </div>
                                            </div>
                    
                                            <div class="col-lg-4">
                                                <div class="form-group app-label">
                                                    <label for="end_date" class="text-muted">Date From</label>
                                                    <input id="start_date" name="date_from" type="date" class="form-control resume" placeholder="" />
                                                </div>
                                            </div>
                    
                                            <div class="col-lg-4">
                                                <div class="form-group app-label">
                                                    <label for="end_date" class="text-muted">Date to</label>
                                                    <input id="end_date" type="date" name="date_to" class="form-control resume" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endsection
  