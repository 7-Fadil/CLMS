@extends('layouts.master')
@section('content')
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Borrow book <i class="fas fa-book"></i></button>

<form action="{{ route('borrowe.book') }}" method="post">
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
                    <input type="text" id="book_title" class="form-control @error('book_title')
                    is-invalid
                    @enderror" name="book_title" list="books">
                    @error('book_title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <datalist id="books">
                        @foreach ($books as $book)
                            <option value="{{ $book->books_name }}">{{ $book->uuid }}</option>
                        @endforeach
                    </datalist>
                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Student id:</label>
                        <input type="text" name="studentId" class="form-control @error('studentId')
                        is-invalid
                        @enderror" @readonly(false) value="">
                        @error('studentId')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
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

<div class="row mt-3">
    @foreach ($borrowedBooks as $borrowedBook)
        <div class="col-4">
            <div class="card d-block">
                <!-- Avatar Medium -->
                <div class="avatar-lg">
                    <span class="avatar-title bg-success rounded-circle center">
                        <img class="img-fluid avatar-lg" src="{{ asset($borrowedBook->book_img) }}" alt="Book image cap">
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $borrowedBook->books_name }}</h5>
                    <small class="card-text">
                        <ul class="list-group list-group-flush">
                            {{--


                            <li class="list-group-item"><strong>Days overdue:</strong> {{ $borrowedBook->due_date }}</li> --}}
                            <li class="list-group-item"><strong>Title:</strong> {{ $borrowedBook->books->books_name ?? null }}</li>
                            <li class="list-group-item"><strong>Author:</strong> {{ $borrowedBook->books->author ?? null }}</li>
                            <li class="list-group-item"><strong>ISBN:</strong> {{ $borrowedBook->books->isbn_number ?? null }}</li>
                            <li class="list-group-item"><strong>Author:</strong> {{ $borrowedBook->student_id ?? null }}</li>
                            <li class="list-group-item"><strong>Due date:</strong> {{ $borrowedBook->due_date }}</li>
                            <li class="list-group-item">
                                <button type="button" class="btn btn-success btn-sm">Renew <i class="fas fa-redo-alt"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm">Pay Fine <i class="fas fa-fire"></i></button>
                            </li>
                        </ul>
                    </small>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
