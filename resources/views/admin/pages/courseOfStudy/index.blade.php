@extends('layouts.master')
@section('content')
    <!-- Center modal -->
    <button id="addCourses" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add course of study</button>
    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Add course of study</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('save.courses') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="example-select" class="form-label">Department</label>
                            <select class="form-select @error('department')
                            is-invalid
                            @enderror" name="department">
                                <option hidden>-- select department --</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->uuid }}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="department" hidden id=""> --}}
                            @error('department')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Course of study:</label>
                            <input type="text" id="simpleinput" name="courseOfStudy" class="form-control @error('courseOfStudy')
                                is-invalid
                            @enderror" value="{{ old('courseOfStudy') }}">
                            @error('courseOfStudy')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="simpleinput" class="form-label">Short name:</label>
                            <input type="text" id="simpleinput" name="shortName" class="form-control @error('shortName')
                                is-invalid
                            @enderror" value="{{ old('shortName') }}">
                            @error('shortName')
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
    <div class="mt-2">
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Department</th>
                <th>Course of study</th>
                <th>Short name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $sn => $course)
                <tr>
                    <td>{{ $sn+1 }}</td>
                    <td>{{ $course->couseOfStudy->department_name ?? '' }}</td>
                    <td>{{ $course->course_of_study }}</td>
                    <td>{{ $course->short_name }}</td>
                    <td>
                        @if ($course->status=='1')
                            <span class="badge badge-success-lighten rounded-pill">Active</span>
                        @else
                            <span class="badge badge-danger-lighten rounded-pill">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-outline-secondary" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $course->uuid ?>"><i class="icofont icofont-edit"> Edit</i></button>
                        <div class="modal fade" id="editmodal<?php echo $course->uuid ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myCenterModalLabel">Edit Department</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('update.courses', $course->uuid) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Department</label>
                                                <input type="text" name="department" value="{{ $course->couseOfStudy->department_name }}" class="form-control @error('department')
                                                    is-invalid
                                                @enderror" value="" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Course of study</label>
                                                <input type="text" name="courseOfStudy" value="{{ $course->course_of_study }}" class="form-control @error('courseOfStudy')
                                                    is-invalid
                                                @enderror">
                                            </div>
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Short name</label>
                                                <input type="text" name="shortName" value="{{ $course->short_name }}" class="form-control @error('shortName')
                                                    is-invalid
                                                @enderror">
                                            </div>
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Status</label>
                                                <select class="form-select" name="status">
                                                    <option hidden value="{{ $course->status }}">@if ($course->status == "1")
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
            $('#addCourses').click();
        });
    </script>
@endif
@endsection
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
