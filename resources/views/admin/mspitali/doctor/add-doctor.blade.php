@extends('admin.adminpanel.dashboard')
@section('content')
<div class="row">
    <h4 class="page-title">Doctors/Add Doctor</h4>
</div>
<br />
<div class="col-md-12">
    <form method="POST" action="{{ action('Administrator\ModuliSpitali\\DoctorController@addDoctor') }}">
        @csrf
        <div class="card-box">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Personal Details</h4>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Full Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="name" name="fullname" />
                            @error('fullname')
                            <label class="error" style="color: red" >{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" id="email" name="email" />
                            @error('email')
                            <label class="error" style="color: red">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="password" name="password" />
                            @error('password')
                            <label class="error" style="color: red">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Birthday:</label>
                        <div class="col-lg-9">
                            <input type="date" class="form-control datetimepicker" name="birthday" />
                            @error('phNo')
                            <label class="error" style="color: red">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row gender-select">
                        <label class="col-lg-3 col-form-label">Gender:</label>
                        <div class="form-check-inline">
                            <label class="form-check-label"> <input type="radio" name="gender" id="gender" value="male" class="form-check-input" />Male </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label"> <input type="radio" name="gender" id="gender" value="female" class="form-check-input" />Female </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="card-title">Profesion details</h4>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Department:</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control select" name="depart" id="depart">
                                        @foreach ($depart as $dep)
                                        <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @error('depart')
                        <label class="error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">PhNo:</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="phNo" id="phNo" />
                            @error('phNo')
                            <label class="error" style="color: red">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Phone:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="phone" id="phone" />
                            @error('phone')
                            <label class="error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Photo:</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control" name="image" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Bio:</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" rows="3" cols="15" name="biography"></textarea>
                            <br />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="m-b-20">
                                        <select class="form-control select" name="country">
                                            <option value="Kosova">Kosova</option>
                                            <option value="Albania">Albania</option>
                                        </select>
                                    </div>
                                    @error('country')
                                    <label class="error" style="color: red" >{{ $message }}</label>
                                    @enderror
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="doctor_active" value="1" checked />
                                            <label class="form-check-label" for="doctor_active">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" value="0" />

                                            Inactive
                                        </div>
                                    </div>
                                    @error('status')
                                    <label class="error" style="color: red">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="City" class="form-control m-b-20" name="city" id="city" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection
