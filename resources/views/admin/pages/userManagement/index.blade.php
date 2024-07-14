@extends('layouts.master')
@section('content')
    <!-- Center modal -->
    <button id="addCourses" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add User <i class="fas fa-plus"></i></button>

    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Add User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="example-select" class="form-label">Name:</label>
                            <input type="text" id="simpleinput" name="name" class="form-control @error('name')
                            is-invalid
                        @enderror">
                        </div>

                        <div class="mb-3">
                            <label for="example-select" class="form-label">Phone number:</label>
                            <input type="text" id="simpleinput" name="phoneNumber" class="form-control @error('name')
                            is-invalid
                        @enderror">
                        </div>

                        <div class="mb-3">
                            <label for="example-select" class="form-label">Email:</label>
                            <input type="text" id="simpleinput" name="email" class="form-control @error('name')
                            is-invalid
                        @enderror">
                        </div>

                        <div class="mb-3">
                            <label for="example-select" class="form-label">Select role:</label>
                            <!-- Multiple Select -->
                            <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                            </select>
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
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Assign Role</th>
                    <th>Assign Permission</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    </div>

@endsection
