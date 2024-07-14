@extends('layouts.master')
@section('content')
<ol class="breadcrumb bg-light-lighten p-2 mt-3">
    <li class="breadcrumb-item active" aria-current="page"><i class="uil-home-alt me-1"></i> Home</li>
</ol>
<div class="row mt-3">
    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Issued Book</h5>
                        <h3 class="my-2 py-1">9,184</h3>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <i class="icofont icofont-ui-folder" style="font-size: 50px"></i>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Student</h5>
                        <h3 class="my-2 py-1">3,254</h3>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <i class="icofont icofont-group-students" style="font-size: 50px"></i>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Open project</h5>
                        <h3 class="my-2 py-1">861</h3>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="deals-chart" data-colors="#727cf5"></div>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Staffs</h5>
                        <h3 class="my-2 py-1">253</h3>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Users Overview</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>

                <div class="mt-3 mb-4 chartjs-chart" style="height: 207px;">
                    <canvas id="project-status-chart" data-colors="#0acf97,#727cf5,#fa5c7c"></canvas>
                </div>

                <div class="row text-center mt-2 py-2">
                    <div class="col-sm-4">
                        <div class="my-2 my-sm-0">
                                <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                            <p class="text-muted mb-0">Completed</p>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="my-2 my-sm-0">
                                <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                            <p class="text-muted mb-0"> In-progress</p>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="my-2 my-sm-0">
                                <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                            <h3 class="fw-normal">
                                <span>10%</span>
                            </h3>
                            <p class="text-muted mb-0"> Behind</p>
                        </div>

                    </div>
                </div>
                <!-- end row-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h4 class="header-title">Messages</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>

                <p><b>107</b> Tasks completed out of 195</p>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Coffee detail page - Main Page</a></h5>
                                    <span class="text-muted font-13">Due in 3 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br/>
                                    <span class="badge badge-warning-lighten">In-progress</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 fw-normal">Logan R. Cohn</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Drinking bottle graphics</a></h5>
                                    <span class="text-muted font-13">Due in 27 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br/>
                                    <span class="badge badge-danger-lighten">Outdated</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">App design and development</a></h5>
                                    <span class="text-muted font-13">Due in 7 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br/>
                                    <span class="badge badge-success-lighten">Completed</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 fw-normal">Scot M. Smith</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 fw-normal">78h 05min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Poster illustation design</a></h5>
                                    <span class="text-muted font-13">Due in 5 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br/>
                                    <span class="badge badge-warning-lighten">In-progress</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 fw-normal">John P. Ritter</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 fw-normal">26h 58min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h4 class="header-title">Activity Overview</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>

                <div dir="ltr">
                    <div class="mt-3 chartjs-chart" style="height: 320px;">
                        <canvas id="task-area-chart" data-bgColor="#727cf5" data-borderColor="#727cf5"></canvas>
                    </div>
                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection
