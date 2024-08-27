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

                    <div class="mb-3 mt-3" id="test">
                        <label for="example-select" class="form-label">Faculty:</label>
                        <select class="form-select @error('faculty')
                        is-invalid
                        @enderror" name="faculty" id="faculty">
                            @foreach ($facultys as $faculty)
                                <option hidden>-- select department --</option>
                                <option value="{{ $faculty->uuid }}">{{ $faculty->faculty_name }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="department" hidden id=""> --}}
                        @error('faculty')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3" id="test1">
                        <label for="example-select" class="form-label">Department:</label>
                        <select class="form-select @error('department')
                        is-invalid
                        @enderror" name="department" id="department">
                            {{-- @foreach ($departments as $dapartment)
                                <option hidden>-- select faculty --</option>
                                <option value="{{ $dapartment->uuid }}">{{ $dapartment->department_name }}</option>
                            @endforeach --}}
                            <div id>

                            </div>
                        </select>
                        @error('department')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Phone Number:</label>
                            <input type="text" name="phoneNumber" class="form-control @error('phoneNumber')
                                is-invalid
                            @enderror" maxlength="11" data-toggle="maxlength" value="{{ old('phoneNumber') }}">
                            @error('phoneNumber')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Resedential address:</label>
                            <input type="text" name="resedentialAddress" class="form-control @error('resedentialAddress')
                                is-invalid
                            @enderror" maxlength="150" data-toggle="maxlength" value="{{ old('resedentialAddress') }}">
                            @error('resedentialAddress')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Next of kin phone number:</label>
                            <input type="text" name="nokPhoneNumber" class="form-control @error('nokPhoneNumber')
                                is-invalid
                            @enderror" maxlength="11" data-toggle="maxlength" value="{{ old('nokPhoneNumber') }}">
                            @error('nokPhoneNumber')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
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
                            <input type="text" name="dob" class="form-control @error('dob')
                                is-invalid
                            @enderror" data-toggle="input-mask" data-mask-format="00/00/0000" value="{{ old('dob') }}">
                            <span class="font-10 text-muted">e.g "DD/MM/YYYY"</span>
                            @error('dob')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <!-- Inline-->

                    <div class="mt-2">
                        <label class="form-label">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="customRadio3" name="gender" value="M" class="form-check-input">
                            <label class="form-check-label" for="customRadio3">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="customRadio4" name="gender" value="F" class="form-check-input">
                            <label class="form-check-label" for="customRadio4">Female</label>
                        </div><br>
                        @error('gender')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div id="cardCollpase1" class="collapse pt-2 show">
                        <div>
                            <label class="form-label">Email Address:</label>
                            <input type="email" value="{{ Auth::guard('student')->user()->email_address }}" name="emailAddress" class="form-control" maxlength="50" data-toggle="maxlength">
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-2 show">
                        <label for="example-fileinput" class="form-label">Profile picture:</label>
                        <input type="file" name="profileImage" id="example-fileinput" class="form-control @error('profileImage')
                            is-invalid
                        @enderror">
                        @error('profileImage')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Next of kin name:</label>
                            <input type="text" name="nokName" class="form-control @error('nokName')
                                is-invalid
                            @enderror" maxlength="50" data-toggle="maxlength" value="{{ old('nokName') }}">
                            @error('nokName')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div id="cardCollpase1" class="collapse pt-3 show">
                        <div>
                            <label class="form-label">Next of kin address:</label>
                            <input type="text" name="nokAddress" class="form-control @error('nokAddress')
                                is-invalid
                            @enderror" maxlength="150" data-toggle="maxlength" value="{{ old('nokAddress') }}">
                            @error('nokAddress')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function(){

        $('#test').change(function()
        {
            if($(this).val() != null)
            {
                $('#test1').show();
            }
        });
        $('#test1').hide();

      $('#faculty').change(function(){
        var faculty_id = $(this).val();
        $('#department').html('');
        $.ajax({
          url: 'faculty_has_department/'+ faculty_id,
          method: 'GET',
          success:function (res){
          //  console.log(res);
              $('#department').html(res);

          }
        });
      });
    })
</script>

@endsection

