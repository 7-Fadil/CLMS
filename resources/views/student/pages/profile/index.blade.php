@extends('student.layout.main')
@section('content')
<form action="{{ route('save.studentProfile') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <!-- Portlet card -->
            <div class="card mb-md-0 mb-3">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                        <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h5 class="card-title mb-0">Applicant Profile</h5>
                    <hr>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">First name:</label>
                            <input type="text" name="firstname" class="form-control" maxlength="12" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Surname:</label>
                            <input type="text" name="surname" class="form-control" maxlength="12" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Matric Number:</label>
                            <input type="text" name="matricNumber" class="form-control" maxlength="11" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Faculty:</label>
                            <input type="text" name="faculty" class="form-control" maxlength="12" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Department:</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="department" data-toggle="select2">
                                <optgroup label="Select Department">
                                    @foreach ($departments as $department)
                                    <option value="{{ $department->uuid }}">{{ $department->department_name }}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Phone Number:</label>
                            <input type="text" name="phoneNumber" class="form-control" maxlength="11" data-toggle="maxlength">
                        </div>
                    </div>

                </div>
            </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-md-6">
            <!-- Portlet card -->
            <div class="card mb-md-0 mb-3">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                        <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h5 class="card-title mb-0">Applicant Profile</h5>
                    <hr>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Othername:</label>
                            <input type="text" name="otherName" class="form-control" maxlength="12" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Date of Birth:</label>
                            {{-- <input type="text" class="form-control" maxlength="150" data-toggle="maxlength"> --}}

                            <input type="text" name="dob" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                            <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Email Address:</label>
                            <input type="email" name="emailAddress" class="form-control" maxlength="50" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <label for="example-fileinput" class="form-label">Profile picture:</label>
                        <input type="file" name="profileImage" id="example-fileinput" class="form-control">
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Level:</label>
                            <input type="text" name="level" class="form-control" maxlength="4" data-toggle="maxlength">
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <button type="submit" style="width: 100%;" class="btn btn-secondary mt-2">Save</button>
                </div>
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->
</form>


@endsection

