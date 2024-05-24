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
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Open project</h5>
                        <h3 class="my-2 py-1">9,184</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                        </p>
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
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                        </p>
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
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Issued Book</h5>
                        <h3 class="my-2 py-1">861</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            {{-- <div id="deals-chart" data-colors="#727cf5"></div> --}}
                            <i class="icofont icofont-book" style="font-size: 50px"></i>
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
                        <h3 class="my-2 py-1">$253k</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            {{-- <div id="booked-revenue-chart" data-colors="#0acf97"></div> --}}
                            <i class="icofont icofont-users" style="font-size: 50px;"></i>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection