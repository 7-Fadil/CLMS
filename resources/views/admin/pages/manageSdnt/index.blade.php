@extends('layouts.master')
@section('content')
    <!-- Center modal -->
    <button id="addCurriculum" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Add student <i class="fas fa-plus"></i></button>
    <a href="" class="btn btn-outline-info">Bulk upload <i class="fas fa-cloud"></i></a>
    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Create student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf

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
                    <th>Matric number</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>Phone number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $sn => $profile)
                    {{-- {{ $profile }} --}}
                    <tr>
                        <td>{{ $sn+1 }}</td>
                        <td>{{ $profile->firstname.' '.$profile->surname.' '.$profile->othername }}</td>
                        <td>{{ $profile->matric_number }}</td>
                        <td>{{ $profile->faculty->faculty_name }}</td>
                        <td>{{ $profile->department->department_name }}</td>
                        <td>{{ $profile->phone_number }}</td>
                        <td>
                            @if ($profile -> status == 0)
                                <span class="badge badge-success-lighten rounded-pill">Active</span>
                            @else
                                <span class="badge badge-warning-lighten rounded-pill">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <span type="button" class="action-icon mdi mdi-eye" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"></span>
                            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">{{ $profile->matric_number }}</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="card-body">
                                                                    <table class="table table-bordered table-centered mb-0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="table-user" rowspan="2">
                                                                                    <img src="assets/images/users/avatar-6.jpg" alt="profile picture" class="me-2 rounded-circle" />
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> firstname.' '.$profile -> surname.' '.$profile->othername }}
                                                                                    </div>
                                                                                    <span class="text-muted">name</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> gender }}
                                                                                    </div>
                                                                                    <span class="text-muted">gender</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> matric_number }}
                                                                                    </div>
                                                                                    <span class="text-muted">matric number</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> faculty -> faculty_name }}
                                                                                    </div>
                                                                                    <span class="text-muted">faculty</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> phone_number }}
                                                                                    </div>
                                                                                    <span class="text-muted">phonr number</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> department -> department_name }}
                                                                                    </div>
                                                                                    <span class="text-muted">department</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> birth_date }}
                                                                                    </div>
                                                                                    <span class="text-muted">Date of birth</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> email_address }}
                                                                                    </div>
                                                                                    <span class="text-muted">email address</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> nok_name }}
                                                                                    </div>
                                                                                    <span class="text-muted">nok name</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> disability ?? '' }}
                                                                                    </div>
                                                                                    <span class="text-muted">disability</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> nok_address }}
                                                                                    </div>
                                                                                    <span class="text-muted">nok address</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> nok_phone_number }}
                                                                                    </div>
                                                                                    <span class="text-muted">nok phone number</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> state_id ?? '' }}
                                                                                    </div>
                                                                                    <span class="text-muted">state</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                                                                        {{ $profile -> level ?? '' }}
                                                                                    </div>
                                                                                    <span class="text-muted">level</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div> <!-- end card-body-->
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row-->
                                                    </div> <!-- end card-->
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
