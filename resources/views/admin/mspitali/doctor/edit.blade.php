@extends('admin.adminpanel.dashboard')
 @section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style>
    body {
        background-color: #eee;
  
    }
    .job-detail {
        border: 1px solid #ececec;
        border-radius: 6px;
        background-color: #fff;
    }
    .form-button .nice-select {
        width: 100%;
        height: 39px;
        line-height: 37px;
        color: #6b757d;
        margin-bottom: 1rem;
        border: solid 1px #e9e9e9;
    }

    .resume-user {
        position: relative;
        width: 100px;
        height: 100px;
        line-height: 100px;
        font-size: 66px;
        border-radius: 50px;
        top: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        background-color: #e9e9e9;
        color: #ff4f6c;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        text-align: center;
    }
    
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
    .btn-circle.btn-lg {
        width: 50px;
        height: 50px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33;
        border-radius: 25px;
    }
    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        font-size: 24px;
        line-height: 1.33;
        border-radius: 35px;
    }
    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        margin-top: 50%;
    }
</style>

<div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html"> Home /  </a></li>  
        <li><i class="fa fa-file-text-o"></i> General Information</li>
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
                                <input id="frist_name" name="frist_name" type="text" class="form-control resume" placeholder="{{$doctor->fullname}}" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="middle-name" class="text-muted">Profession</label>
                                <input id="middle-name" name="departId" value="{{$doctor->depart->id}}" type="text" class="form-control resume" placeholder="{{$doctor->depart->name}}" />
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
                                <input id="birthday" type="text" name="birthday" class="form-control resume" placeholder="{{$doctor->birthday}}" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="General" class="text-muted">Gender</label>
                                <div class="form-button">
                                    <select class="nice-select" name="gender">
                                        <option data-display="General">{{$doctor->gender}}</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group app-label">
                                <label for="marital-status" class="text-muted">Marital Status</label>
                                <div class="form-button">
                                    <select class="nice-select">
                                        <option data-display="Status">Status</option>
                                        <option value="1">Single</option>
                                        <option value="2">Married</option>
                                    </select>
                                </div>
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
                                                <input id="birthday" type="text" name="city" class="form-control resume" placeholder="{{$doctor->city}}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="date-of-birth" class="text-muted">State</label>
                                                <input id="birthday" type="text" name="state" class="form-control resume" placeholder="{{$doctor->country}}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="date-of-birth" class="text-muted">Phone</label>
                                                <input id="birthday" type="text" name="phone" class="form-control resume" placeholder="{{$doctor->phone}}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group app-label">
                                                <label for="address">Biography</label>
                                                <textarea id="address" rows="4" name="biography" class="form-control resume" placeholder="{{$doctor->biography }}"></textarea>
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
                                   <a href="{{action('Administrator\ModuliSpitali\\DoctorController@deleteWorkDoctor',$education->id)}}" 
                                      
                                       class="bbtn btn-warning btn-circle float-right text-center" 
                                     ></a>
                                    <button type="button"  class="btn btn-warning btn-circle float-right text-center"><i class="fa fa-edit "></i></button>
                                    <br />
                                    <br />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="university/college" class="text-muted">University/College</label>
                                                <input id="university" name="university" type="text" class="form-control resume" placeholder="{{$education->education }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group app-label">
                                                <label for="degree/certification" class="text-muted">Degree</label>
                                                <input id="degree" type="text" name="degree" class="form-control resume" placeholder="{{$education->degree}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group app-label">
                                                <label for="graduation" class="text-muted">Graduation</label>
                                                <input id="graduation" name="gradtion" type="text" class="form-control resume" placeholder="{{$education->graduation }}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group app-label">
                                                <label for="end_date" class="text-muted">Start Date</label>
                                                <input id="start_date" name="start_data" type="number" class="form-control resume" placeholder="{{$education->end_date}}" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group app-label">
                                                <label for="end_date" class="text-muted">End Date</label>
                                                <input id="end_date" type="number" name="end_data" class="form-control resume" placeholder="{{$education->end_date}}" />
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
                                <div class="custom-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="company-name" class="text-muted">Company Name</label>
                                                <input id="company-name" name="company" type="text" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group app-label">
                                                <label for="job-position" class="text-muted">Job Position</label>
                                                <input id="job-position" name="positiob" type="text" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group app-label">
                                                <label for="location" class="text-muted">Location</label>
                                                <input id="job-position" name="positiob" type="text" class="form-control resume" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group app-label">
                                                        <label for="date-from" class="text-muted">Date From</label>
                                                        <input id="date-from" type="text" class="form-control resume" placeholder="01-Jan-2018" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group app-label">
                                                        <label for="date-to" class="text-muted">Date To</label>
                                                        <input id="date-to" type="text" class="form-control resume" placeholder="31-March-2019" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group app-label">
                                                <label for="addition-information-1">Addition Information</label>
                                                <textarea id="addition-information-1" rows="4" class="form-control resume" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-5">Skills</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail mt-2 p-4">
                                <button type="button" class="btn btn-success btn-circle float-right"><i class="fa fa-plus"></i></button>
                                <div class="custom-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group app-label">
                                                <label for="skills" class="text-muted">Skills</label>
                                                <input id="skills" type="text" class="form-control resume" placeholder="HTML, CSS, PHP, javascript, ..." />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group app-label">
                                                <label for="skill proficiency" class="text-muted">Skill proficiency</label>
                                                <input id="skill proficiency" type="text" class="form-control resume" placeholder="75%" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom mt-5" value="Submit Resume" />
                            </div>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

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
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are sure to delete this ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
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
                </div>
            </div>
        </div>
    </div>
</div>
