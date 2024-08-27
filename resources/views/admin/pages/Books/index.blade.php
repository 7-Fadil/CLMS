@extends('layouts.master', ['title' => 'books'])
@section('content')
<button id="addBook" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add Book <i class="fas fa-plus"></i></button>

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

                    <div class="mb-3 mt-2">
                        <label class="form-label">Book Category</label>
                            <select class="form-select
                            @error('booksCategory')
                                is-invalid
                            @enderror" name="booksCategory">
                                @foreach ($bookCategorys as $bookCategory)
                                    <option hidden>-- select Book Category --</option>
                                    <option value="{{ $bookCategory->uuid }}">{{ $bookCategory->book_category_name }}</option>
                                @endforeach
                            </select>
                            @error('booksCategory')
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
    {{-- <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
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
                @foreach ($books as $sn => $book)
                    <tr>
                        <td>{{ $sn+1 }}</td>
                        <td>{{ $book->books_name }}</td>
                        <td>{{ $book->isbn_number }}</td>
                        <td>{{ $book->author }}</td>
                        <td>
                            @if ($book->book_img !== null)
                                <img src="{{ asset($book->book_img) }}" alt="Book Image">
                            @else
                                {{ 'Book image not available' }}
                            @endif
                        </td>
                        <td>{{ $book->books->book_category_name }}</td>
                        <td>
                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table> --}}
    <div class="row">
        @foreach ($books as $sn => $book)
            <div class="col-2">
                <div class="card d-block">
                    <!-- Avatar Medium -->
                    <div class="avatar-lg">
                        <span class="avatar-title bg-success rounded-circle center">
                            <img class="img-fluid avatar-lg" src="{{ asset($book->book_img) }}" alt="Card image cap">
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->books_name }}</h5>
                        <small class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur similique laboriosam eos autem delectus, earum perspiciatis eius ipsam temporibus adipisci soluta eaque nisi. Mollitia aliquid laboriosam dicta aliquam eaque earum?.</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@if ($errors->any())
<script>
    $(function()
    {
        $('#addBook').click()
    })
</script>
@endif

@endsection

