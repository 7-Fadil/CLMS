@extends('layouts.master')
@section('content')
<button id="addBookCategory" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add Book Category <i class="fas fa-plus"></i></button>

<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Create Book</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.bookCategory') }}" method="POST">
                    @csrf
                    <label for="simpleinput" class="form-label">Book Category Name:</label>
                    <input type="text" id="simpleinput" name="bookCategory" class="form-control @error('bookCategory')
                        is-invalid
                    @enderror">
                    @error('bookCategory')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <hr>
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
                <th>s/n</th>
                <th>Book Category Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($bookCategorys as $sn => $bookCategory)
                <tr>
                    <td>{{ $sn+1 }}</td>
                    <td>{{ $bookCategory -> book_category_name }}</td>
                    <td>
                        @if ($bookCategory -> is_active == '1')
                            <span class="badge badge-success-lighten rounded-pill">Active</span>
                        @else
                            <span class="badge badge-danger-lighten rounded-pill">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
            {{-- <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr> --}}
        </tbody>
    </table>
</div>

@if ($errors->any())
    <script>
        $(function(){
            $('#addBookCategory').click()
        });
    </script>
@endif

@endsection
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
