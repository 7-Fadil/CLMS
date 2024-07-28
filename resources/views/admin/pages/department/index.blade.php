@extends('layouts.master')
@section('content')
    <!-- Center modal -->
<button id="addDepartmentBtn" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add Department <i class="fas fa-plus"></i></button>
<a href="" class="btn btn-outline-info">Bulk upload <i class="fas fa-cloud"></i></a>
<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Department</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.department') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Department</label>
                        <input type="text" id="simpleinput" name="department" class="form-control @error('department')
                            is-invalid
                        @enderror">
                        @error('department')
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
                <th>Faculty</th>
                <th>Department</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($departments as $sn => $item)
                <tr>
                    <td>{{ $sn+1 }}</td>
                    <td>{{ $item -> facultyName ?? null }}</td>
                    <td>{{ $item->department_name }}</td>
                    <td>
                        @if ($item->status == "1")
                            <span class="badge badge-success-lighten rounded-pill">Active</span>
                        @else
                        <span class="badge badge-danger-lighten rounded-pill">In-active</span>
                        @endif
                    </td>
                    <td>
                        <span class="text-mute" type="button"  data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $item->uuid ?>"> Edit
                        <i class="fas fa-edit"></i></span>
                        <div class="modal fade" id="editmodal<?php echo $item->uuid ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myCenterModalLabel">Edit Department</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('edit.department', $item->uuid) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Department</label>
                                                <input type="text" name="department" value="{{ $item->department_name }}" class="form-control @error('department')
                                                    is-invalid
                                                @enderror" value="" readonly>
                                                <div class="mb-3">
                                                    <label for="example-select" class="form-label">Status</label>
                                                    <select class="form-select" name="status">
                                                        <option hidden value="{{ $item->status }}">@if ($item->status == "1")
                                                            Active
                                                        @else
                                                            Inactive
                                                        @endif</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">De-activate</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Update</button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- Danger Header Modal -->
                        <span class="text-danger" type="button" data-bs-toggle="modal" data-bs-target="#danger-header-modal<?php echo $item->uuid ?>">Delete
                        <i class="fas fa-trash"></i>
                        </span>
                        <div id="danger-header-modal<?php echo $item->uuid ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-colored-header bg-danger">
                                        <h4 class="modal-title" id="danger-header-modalLabel">Danger Zone</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div>
                                    <form action="{{ route('delete.department', $item->uuid) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <div class="modal-body">
                                            <p>Are you sure you want to <strong>DELETE</strong>this record!</p>
                                            <div class="mb-3">
                                                <label for="simpleinput" class="form-label">Department</label>
                                                <input type="text" name="yearDate" class="form-control @error('yearName')
                                                    is-invalid
                                                @enderror" value="{{ $item->department_name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Nop</button>
                                            <button type="submit" class="btn btn-danger">Yes!</button>
                                        </div>
                                    </form>
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
            $('#addDepartmentBtn').click();
        });
    </script>
@endif
@endsection
