@extends('layouts.master')
@section('content')
<!-- Center modal -->
<button id="addYearBtn" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add year</button>
<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Registration year</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('year.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="simpleinput" class="form-label">Year</label>
                        <input type="text" id="simpleinput" name="yearName" class="form-control @error('yearName')
                            is-invalid
                        @enderror">
                        @error('yearName')
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

<table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Year</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($years as $sn => $item)
        <tr>
            <td>{{ $sn+1 }}</td>
            <td>{{ $item->year_name ?? 'No record' }}</td>
            <td>
                @if ($item->is_active == '1')
                    <span class="badge badge-success-lighten rounded-pill">Active</span>
                @else
                    <span class="badge badge-danger-lighten rounded-pill">Inactive</span>
                @endif
            </td>
            <td>

                <i class="icofont icofont-edit text-secondary" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $item->uuid ?>"> Edit</i>

                <div class="modal fade" id="editmodal<?php echo $item->uuid ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myCenterModalLabel">Edit registration year</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('update.year', $item->uuid) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Year</label>
                                        <input type="text" name="date" class="form-control @error('yearName')
                                            is-invalid
                                        @enderror" value="{{ $item->year_name }}" readonly>
                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option hidden value="{{ $item->is_active }}">@if ($item->is_active == "1")
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
                    &nbsp; &nbsp;
                <!-- Danger Header Modal -->
                <i class="icofont icofont-trash text-danger" data-bs-toggle="modal" data-bs-target="#danger-header-modal<?php echo $item->uuid ?>"> Delete</i>

                <div id="danger-header-modal<?php echo $item->uuid ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-colored-header bg-danger">
                                <h4 class="modal-title" id="danger-header-modalLabel">Danger Zone</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                            </div>
                            <form action="{{ route('delete.year', $item->uuid) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="modal-body">
                                    <p>Are you sure you want to <strong>DELETE</strong>this record!</p>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Year</label>
                                        <input type="text" name="yearDate" class="form-control @error('yearName')
                                            is-invalid
                                        @enderror" value="{{ $item->year_name }}" readonly>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Nop! </button>
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

@if($errors->any())
    <script>
        $(function() {
            $('#addYearBtn').click();
        });
    </script>
@endif
@endsection
