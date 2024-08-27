@extends('student.layout.main')
@section('content')
    <!-- Top modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Borrow book <i class="fas fa-book"></i></button>

<form action="{{ route('save.borrow') }}" method="post">
    @csrf
    <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-top">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="topModalLabel">Borrow a book</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <label for="simpleinput" class="form-label">Book title:</label>
                    {{-- <select name="" id=""></select> --}}
                    <input type="text" id="book_title" class="form-control" name="book_title" list="books">
                    <datalist id="books">
                        @foreach ($books as $book)
                            <option value="{{ $book->books_name }}">{{ $book->uuid }}</option>
                        @endforeach
                    </datalist>
                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Student id</label>
                        <input type="text" class="form-control" @readonly(true) value="{{ Auth::guard('student')->user()->matric_number }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Borrow</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>

<div class="mt-3" id="table">
    <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>s/n</th>
                <th>Book Name</th>
                <th>ISBN no</th>
                <th>Author</th>
                <th>Book img</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($borrowedBook as $sn => $borrowed)
                {{-- {{ $borrowed->student->first_name }} --}}
                <tr>
                    <td>{{ $sn+1 }}</td>
                    <td>{{ $borrowed->books->books_name }}</td>
                    <td>{{ $borrowed->books->isbn_number }}</td>
                    <td>{{ $borrowed->books->author }}</td>
                    <td>
                        <!-- Avatar Medium -->
                        <div class="avatar-md">
                            <span class="avatar-title bg-secondary rounded-circle center">
                                <img src="{{ url($borrowed->books->book_img) }}" class="img-fluid img-thumbnail rounded-circle" alt="book image">
                            </span>
                        </div>
                    </td>
                    <td>{{ $borrowed->books->books->book_category_name }}</td>
                    <td>
                        <span class="badge bg-secondary text-light rounded-pill">Borrowed</span>
                    </td>
                    <td>
                        <a href="#" class="action-icon"> <i class="mdi mdi-download"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

