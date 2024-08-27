@extends('student.layout.main')
@section('content')
<div class="row">
    @foreach ($borrowedBooks as $borrowedBook)
    {{-- {{ $borrowedBook }} --}}
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
                            <li class="list-group-item"><strong>Title:</strong> {{ $borrowedBook->books->books_name }}</li>
                            <li class="list-group-item"><strong>Author:</strong> {{ $borrowedBook->books->author }}</li>
                            <li class="list-group-item"><strong>ISBN:</strong> {{ $borrowedBook->books->isbn_number }}</li>
                            <li class="list-group-item"><strong>Due date:</strong> {{ $borrowedBook->due_date }}</li>
                            <li class="list-group-item"><strong>Days overdue:</strong> {{ $borrowedBook->due_date }}</li>
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
