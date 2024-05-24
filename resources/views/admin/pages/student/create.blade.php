@extends('layouts.master')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light-lighten p-2 mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="uil-home-alt"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('create.student') }}">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
<form action="{{ route('save.student') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="simpleinput" class="form-label">Full name:</label>
                <input type="text" name="fullName"id="simpleinput" class="form-control shadow @error('fullName')
                    is-invalid
                @enderror">
                @error('fullName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="simpleinput" class="form-label">Email:</label>
                <input type="text" name="email" id="simpleinput" class="form-control shadow @error('email')
                    is-invalid
                @enderror">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <div class="input-group input-group-merge">
                    <input type="password" name="password" id="password" class="form-control @error('password')
                        is-invalid
                    @enderror" placeholder="Enter your password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>
                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="simpleinput" class="form-label">CGPA:</label>
                <input type="text" id="simpleinput" name="cgpa" class="form-control shadow @error('cgpa')
                    is-invalid
                @enderror">
                @error('cgpa')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Single Date Picker -->
            <div class="mb-3">
                <label class="form-label">Date of birth:</label>
                <input type="text" class="form-control date shadow @error('dob')
                    is-invalid
                @enderror" name="dob" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                <input type="text" name="dob" class="form-control" hidden id="">
                @error('dob')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="simpleinput" class="form-label">Phone number:</label>
                <input type="text" id="simpleinput" name="phone_number" class="form-control shadow @error('phone_number')
                    is-invalid
                @enderror">
                @error('phone_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="example-readonly" class="form-label">Library id:</label>
                <input type="text" id="example-readonly" name="libary_id" class="form-control shadow" readonly="" value="Generated after registration">
            </div>
            <div class="mb-3">
                <label for="example-select" class="form-label">Course of study:</label>
                <select class="form-select shadow @error('courseOfStudy')
                    is-invalid
                @enderror" name="courseOfStudy" id="example-select">
                    <option hidden>-- select department--</option>
                    <option>Male</option>
                </select>
                <input type="text" name="courseOfStudy" class="form-control" hidden id="">
                @error('courseOfStudy')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="example-select" class="form-label">Level:</label>
                <select class="form-select shadow @error('level')
                    is-invalid
                @enderror" name="level" id="example-select">
                    <option hidden>-- select levels--</option>
                    <option>Male</option>
                </select>
                <input type="text" name="level" class="form-control" hidden id="">
                @error('level')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="example-select" class="form-label">Department:</label>
                <select class="form-select shadow @error('department')
                    is-invalid
                @enderror" name="department" id="example-select">
                    <option hidden>-- select department--</option>
                    <option>Male</option>
                </select>
                <input type="text" name="department" class="form-control" hidden id="">
                @error('department')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="example-select" class="form-label">Gender:</label>
                <select class="form-select shadow @error('gender')
                    is-invalid
                @enderror" name="gender" id="example-select">
                    <option hidden>-- select gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <input type="text" name="gender" class="form-control" hidden id="">
                @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="example-fileinput" class="form-label">Upload profile picture:</label>
                <input type="file" id="example-fileinput" name="picture" class="form-control shadow @error('picture')
                    is-invalid
                @enderror">
                @error('picture')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <button class="btn btn-secondary shadow mb-3" type="submit">Save</button>
</form>
@endsection