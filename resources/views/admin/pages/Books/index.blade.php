@extends('layouts.master')
@section('content')
<button id="addCurriculum" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add Book <i class="fas fa-plus"></i></button>

<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Create Book</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('save.books') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="simpleinput" class="form-label">Book name:</label>
                    <input type="text" id="simpleinput" name="bookName" class="form-control @error('bookName')
                        is-invalid
                    @enderror">
                    @error('bookName')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">ISBN number:</label>
                        <input type="text" id="simpleinput" name="isbnNumber" class="form-control @error('isbnNumber')
                            is-invalid
                        @enderror">
                        @error('isbnNumber')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Author name:</label>
                        <input type="text" id="simpleinput" name="authorName" class="form-control @error('authorName')
                            is-invalid
                        @enderror">
                        @error('authorName')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Book image:</label>
                        <input type="file" id="example-fileinput"" name="bookImg" class="form-control @error('isbnNumber')
                            is-invalid
                        @enderror">
                        @error('bookImg')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Category:</label>
                        <select class="form-select" name="booksCategory">
                            {{-- <option hidden>-- select category --</option> --}}
                            @foreach ($bookCategorys as $bookCategory)
                                <option value="{{ $bookCategory->uuid }}">{{ $bookCategory->book_category_name }}</option>
                            @endforeach
                        </select>
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
                <th>Book Name</th>
                <th>ISBN no</th>
                <th>Author</th>
                <th>Book img</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>
                    <span class="account-user-avatar">
                        <img src="{{ asset('assets/images/users/avatar-blank.jpg') }}" alt="user-image" class="rounded-circle">
                    </span>
                </td>
                <td>2011/04/25</td>
                <td>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>
                    <span class="account-user-avatar">
                        <img src="{{ asset('assets/images/users/avatar-blank.jpg') }}" alt="user-image" class="rounded-circle">
                    </span>
                </td>
                <td>2011/07/25</td>
                <td>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
