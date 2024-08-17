@extends('layouts.master', ['title' => 'books'])
@section('content')
<button id="addFaculty" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add Faculty <i class="fas fa-plus"></i></button>

<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Create Faculty</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.faculty') }}" method="POST">
                    @csrf
                    <label for="simpleinput" class="form-label">Faculty name:</label>
                    <input type="text" id="simpleinput" name="facultyName" class="form-control @error('facultyName')
                        is-invalid
                    @enderror">
                    @error('facultyName')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Short Code:</label>
                        <input type="text" id="simpleinput" name="shortName" class="form-control @error('shortName')
                            is-invalid
                        @enderror">
                        @error('shortName')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <hr>

                    <button type="submit" class="btn btn-secondary">Save</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<a href="" class="btn btn-outline-info">Bulk upload <i class="fas fa-cloud"></i></a>

<div class="mt-3">
    <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>s/n</th>
                <th>Faculty Name</th>
                <th>Short Code</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
            @foreach ($facultys as $sn => $faculty)
                <tr>
                    <td>{{ $sn+1 }}</td>
                    <td>{{ $faculty->faculty_name }}</td>
                    <td>{{ $faculty->faculty_short_code_name }}</td>
                    <td>
                        @if ($faculty->is_active == 1)
                            <span class="badge badge-success-lighten rounded-pill">Active</span>
                        @else
                        <span class="badge badge-danger-lighten rounded-pill">In-active</span>
                        @endif
                    </td>
                    <td>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
        <tbody>
        </tbody>
    </table>
</div>


@endsection
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
@if ($errors->any())
    <script>
        $(function() {
            $('#addFaculty').click();
        });
    </script>
@endif

