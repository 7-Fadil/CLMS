@extends('student.layout.main')
@section('content')

<div class="alert alert-secondary" role="alert">
    <marquee behavior="slide" direction="left">
        Enter search keywords, e.g. book title 'C++', 'The Great Gatsby', or author name 'Fadil','Abdulhameed'. Select a category like 'Fiction'. 'Biography', or 'Romance'. Use 13-digit ISBN number like <small>'978-3-23-124254-1'</small>
    </marquee>
</div>

<div class="app-search dropdown d-none d-lg-block">
    <form action="{{ route('search.catalog') }}" method="GET">
        @csrf
        <div class="input-group">
            <select name="search_by" id="" class="form-control">
                <option value="" hidden>Search By</option>
                <option value="books_name">Name</option>
                <option value="category">Category</option>
                <option value="author">Author</option>
                <option value="isbn_number">ISBN</option>
            </select>
            <input type="text" name="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
            <span class="mdi mdi-magnify search-icon"></span>
            <button class="input-group-text btn-secondary" type="submit">Search</button>
        </div>
    </form>
</div>

<div class="row mt-3">
    @foreach ($books as $book)
    {{-- {{ $book->borrowedBooks }} --}}
            <div class="col-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="header-title"></h4> --}}
                        <div class="tab-content">
                            <div class="tab-pane show active" id="disabled-items-preview">
                                <div class="text-muted">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true"><i class="fas fa-book me-1"></i> Book</li>
                                        <li class="list-group-item"><strong>Book title:</strong> <span class="badge badge-outline-secondary">{{ $book->books_name }}</span></li>
                                        <li class="list-group-item"><strong>Author:</strong> <span class="badge badge-outline-secondary">{{ $book->author }}</span></li>
                                        <li class="list-group-item"><strong>ISBN:</strong> <span class="badge badge-outline-secondary">{{ $book->isbn_number }}</span></li>
                                        <li class="list-group-item"><strong>Author:</strong> <span class="badge badge-outline-secondary">{{ $book->author }}</span></li>
                                        <li class="list-group-item"><strong>Books category:</strong> <span class="badge badge-outline-secondary">{{ $book->books->book_category_name }}</span></li>
                                        <li class="list-group-item"><strong>Status:</strong> <span class="badge badge-outline-secondary">
                                            @if ($book->is_active == '1')
                                            {{ 'Available' }}
                                            @else
                                            {{ 'Borrower' }}
                                            @endif
                                        </span></li>
                                        <li class="list-group-item">
                                            <small>
                                                @if ($book ->is_active == 1)
                                                    <a href="{{ route('download.book', $book->id) }}" class="btn btn-outline-secondary" @disabled(true)>Download <i class="fas fa-download"></i></a>
                                                @endif
                                            </small>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>
        @endforeach
</div>

@endsection
