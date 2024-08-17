@extends('layouts.master')
@section('content')
    <!-- Center modal -->
    <button id="addCurriculum" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add curriculum <i class="fas fa-plus"></i></button>
    <a href="" class="btn btn-outline-info">Bulk upload <i class="fas fa-cloud"></i></a>
    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Create curriculum</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('create.curriculum') }}" method="POST">
                        @csrf
                        <div class="mb-3" id="test">
                            <label for="example-select" class="form-label">Department</label>
                            <select class="form-select @error('department')
                            is-invalid
                            @enderror" name="department" id="department">
                                @foreach ($department as $departments)
                                    <option hidden>-- select department --</option>
                                    <option value="{{ $departments->uuid }}">{{ $departments->department_name }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="department" hidden id=""> --}}
                            @error('department')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3" id="test1">
                            <label for="example-select" class="form-label">Course of study</label>
                            <select class="form-select @error('courseOfStudy')
                            is-invalid
                            @enderror" name="courseOfStudy" id="courseOfStudy">
                            </select>
                            {{-- <input type="text" name="department" hidden id=""> --}}
                            @error('courseOfStudy')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Course title:</label>
                            <input type="text" id="simpleinput" name="courseTitle" class="form-control @error('courseTitle')
                                is-invalid
                            @enderror" value="{{ old('courseTitle') }}">
                            @error('courseTitle')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Course code:</label>
                            <input type="text" id="simpleinput" name="courseCode" class="form-control @error('courseCode')
                                is-invalid
                            @enderror" value="{{ old('courseCode') }}">
                            @error('courseCode')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary">Save</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="mt-3">
        <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Course of study</th>
                    <th>Course title</th>
                    <th>Course code</th>
                    <th>Status</th>
                    <th>Level</th>
                    <th>Session</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $sn => $fetch)
                    <tr>
                        <td>{{ $sn+1 }}</td>
                        <td>{{ $fetch->curriculum->course_of_study }}</td>
                        <td>{{ $fetch->course_title }}</td>
                        <td>{{ $fetch->course_code }}</td>
                        <td>
                            @if ($fetch->status == 0)
                                <span class="badge badge-warning-lighten rounded-pill">Inactive</span>
                            @else
                                <span class="badge badge-success-lighten rounded-pill">Active</span>
                            @endif
                        </td>
                        <td>
                            <span class="text-mute" type="button"  data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $fetch->uuid ?>"> Edit
                                <i class="fas fa-edit"></i></span>
                            <div class="modal fade" id="editmodal<?php echo $fetch->uuid ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myCenterModalLabel">Edit Curriculum</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('edit.curriculum', $fetch->uuid) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Course of study</label>
                                                    <input type="text" name="courseOfStudy" value="{{ $fetch->curriculum->course_of_study }}" class="form-control @error('courseOfStudy')
                                                        is-invalid
                                                    @enderror" @readonly(true)>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Course title</label>
                                                    <input type="text" name="courseTitle" value="{{ $fetch->course_title }}" class="form-control @error('shortName')
                                                        is-invalid
                                                    @enderror">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Course code</label>
                                                    <input type="text" name="courseCode" value="{{ $fetch->course_code }}" class="form-control @error('shortName')
                                                        is-invalid
                                                    @enderror">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Status</label>
                                                    <select class="form-select" name="status">
                                                        <option hidden value="{{ $fetch->status }}">@if ($fetch->status == "1")
                                                            Active
                                                        @else
                                                            Inactive
                                                        @endif</option>
                                                        <option value="1">Activate</option>
                                                        <option value="0">Deactivate</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-secondary">Update</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($errors->any())
    <script>
        $(function() {
            $('#addCurriculum').click();
        });
    </script>
@endif
@endsection
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>

    $(document).ready(function(){
        $('#department').change(function(){
            var department_id = $(this).val();
            $('#courseOfStudy').html('');
            $.ajax({
                url: '../course-of-study/'+ department_id,
                method: 'GET',
                success:function (res){
                //  console.log(res);
                    $('#courseOfStudy').html(res);
                }
            });
        });

        $('#test').change(function(){
            if($(this).val() != null)
            {
                $('#test1').show();
            }
        });
        $('#test1').hide();
    });
</script>
