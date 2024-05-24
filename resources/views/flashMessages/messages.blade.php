@if ($message = Session::get('warning'))
<!-- Basic Toast -->
<div class="toast fade show mt-1" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="brand-logo" height="12" class="me-1" />
        <strong class="me-auto">Hyper</strong>
        <small>11 mins ago</small>
        <button type="button" class="ms-2 mb-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-warning">
        {{ $message }}
    </div>
</div> <!--end toast-->
@endif

@if ($message = Session::get('success'))
<!-- Basic Toast -->
<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Success - </strong> {{ $message }}
</div>
<!--end toast-->
@endif

@if ($message = Session::get('error'))
<!-- Basic Toast -->
<div class="toast fade show mt-1" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="brand-logo" height="12" class="me-1" />
        <strong class="me-auto">Hyper</strong>
        <small>Now</small>
        <button type="button" class="ms-2 mb-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body text-danger">
        {{ $message }}
    </div>
</div> <!--end toast-->
@endif