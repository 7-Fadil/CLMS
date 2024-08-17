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
                            <label class="form-label">Name:</label>
                            <input type="text" name="firstname" value="{{ Auth::guard('student')->user()->first_name }}" readonly class="form-control" maxlength="20" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Surname:</label>
                            <input type="text" name="surname" value="{{ Auth::guard('student')->user()->surname ?? null }}" readonly class="form-control" maxlength="20" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Matric Number:</label>
                            <input type="text" name="matricNumber" class="form-control" value="{{ Auth::guard('student')->user()->matric_number }}" @readonly(true)>
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
                            <label class="form-label">Other name:</label>
                            @if (Auth::guard('student')->user()->other_name == null)
                                <input type="text" name="othersName" class="form-control" maxlength="20" data-toggle="maxlength">
                            @else
                                <input type="text" name="othersName" value="{{ Auth::guard('student')->user()->other_name ?? null }}" readonly class="form-control" maxlength="20" data-toggle="maxlength">
                            @endif
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Date of Birth:</label>
                            <input type="text" name="dob" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                            <span class="font-10 text-muted">e.g "DD/MM/YYYY"</span>
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-2 show">
                        <div>
                            <label class="form-label">Email Address:</label>
                            <input type="email" value="{{ Auth::guard('student')->user()->email_address }}" name="emailAddress" class="form-control" maxlength="50" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-2 show">
                        <label for="example-fileinput" class="form-label">Profile picture:</label>
                        <input type="file" name="profileImage" id="example-fileinput" class="form-control">
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Level:</label>
                            <select class="form-select" name="level" id="example-select">
                                <option hidden>--select level--</option>
                                <option value="100_level">1oo Level</option>
                                <option value="200_level">2oo Level</option>
                                <option value="300_level">300 Level</option>
                                <option value="400_level">400 Level</option>
                                <option value="500_level">500 Level</option>
                            </select>
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Disability Status:</label>
                            <select name="disability" id="example-select" class="form-select">
                                <option hidden>--Disability--</option>
                                <option value="normal">Normal</option>
                                <option value="blindness">Blindness</option>
                                <option value="deafness">Deafness</option>
                            </select>
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

