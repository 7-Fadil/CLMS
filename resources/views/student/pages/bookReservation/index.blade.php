@extends('student.layout.main')
@section('content')
<form action="{{ route('store.book.reservation') }}" method="post">
    @csrf
    <button type="button" id="bookReservation" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Book reserve <i class="fas fa-plus"></i></button>

    <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-top">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="topModalLabel">Book Reservation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <label for="simpleinput" class="form-label">Book title:</label>
                    <input type="text" id="book_title" class="form-control @error('book_title')
                        is-invalid
                    @enderror" name="book_title">
                    @error('book_title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Author:</label>
                        <input type="text" id="book_author" class="form-control @error('book_author')
                            is-invalid
                        @enderror" name="book_author">
                        @error('book_author')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Reservaton Date:</label>
                        <input type="date" id="reservation_date" class="form-control @error('reservation_date')
                            is-invalid
                        @enderror" name="reservation_date">
                        @error('reservation_date')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Number of Copies:</label>
                        <input type="text" id="num_copies" class="form-control @error('num_copies')
                            is-invalid
                        @enderror" name="num_copies">
                        @error('num_copies')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Reservation Duration:</label>
                        <select name="reservation_duration" class="form-control" id="reservation">
                            <option hidden>-- duration --</option>
                            <option value="3">3 days</option>
                            <option value="7">7 days</option>
                            <option value="14">14 days</option>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Additional Notes:</label>
                        <textarea class="form-control" name="notes" id="example-textarea" rows="3"></textarea>
                    </div>

                    <div class="mt-2">
                        <label for="simpleinput" class="form-label">Book Format:</label>
                        <select name="book_format" class="form-control @error('book_format')
                            is-invalid
                        @enderror" id="book_format">
                        @error('book_format')
                            {{ $message }}
                        @enderror
                            <option hidden>-- book format --</option>
                            <option value="hardcover">Hardcover</option>
                            <option value="hardcover">Ebook</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Reserve Book</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="row">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 slideDown mt-1 show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Error - </strong> {{ $error }}!
            </div>
            @endforeach
        @endif

        @foreach ($reservedBooks as $reservedBook)
            <div class="col-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="header-title"></h4> --}}
                        <div class="tab-content">
                            <div class="tab-pane show active" id="disabled-items-preview">
                                <div class="text-muted">
                                    <ul class="list-group">
                                        <li class="list-group-item disabled" aria-disabled="true"><i class="uil-cloud-computing me-1"></i> Reserve book</li>
                                        <li class="list-group-item"><strong>Book title:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->book_title }}</span></li>
                                        <li class="list-group-item"><strong>Author:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->author }}</span></li>
                                        <li class="list-group-item"><strong>Reservation data:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->reservation_date }}</span></li>
                                        <li class="list-group-item"><strong>Number of copies:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->numbers_of_copies }}</span></li>
                                        <li class="list-group-item"><strong>Reservation duration:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->reservation_duration }}</span></li>
                                        <li class="list-group-item"><strong>Notes:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->notes }}</span></li>
                                        <li class="list-group-item"><strong>Book format:</strong> <span class="badge badge-outline-secondary">{{ $reservedBook->book_format }}</span></li>
                                    </ul>
                                </div>
                            </div> <!-- end preview-->

                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>
        @endforeach
    </div>

</form>
{{-- @if ($errors->any())
    <script>
        $(document).ready(function()
        {
            $('#bookReservation').click();
        });
    </script>
@endif --}}

@endsection

