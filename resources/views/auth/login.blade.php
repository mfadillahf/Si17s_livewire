@extends('layouts.auth', ['title' => 'Si17s'])

@section('content')

<div class="col-lg-4 mx-auto">
    <div class="card">
        <div class="card-body p-0 bg-black auth-header-box rounded-top">
            <div class="text-center p-3">
                <a href="{{ route('any', 'livewire.dashboard')}}" class="logo logo-admin">
                    <img src="/images/logo-lpse.png" height="50" alt="logo" class="auth-logo">
                </a>
                <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Si17s</h4>
                <p class="text-muted fw-medium mb-0">Sign in to continue to Si17s</p>
            </div>
        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ route('login')}}" class="my-4">
                @csrf
                @if (sizeof($errors) > 0)
                @foreach ($errors->all() as $error)
                <p class="text-danger mb-3">{{ $error }}</p>
                @endforeach
                @endif

                <div class="form-group mb-2">
                    <label class="form-label" for="email">Username</label>
                    <input type="email" class="form-control" id="example-email" name="email" value="user@demo.com" placeholder="Enter your email">
                </div><!--end form-group-->

                <div class="form-group">
                    <label class="form-label" for="example-password">Password</label>
                    <input type="password" class="form-control" name="password" value="password" id="example-password" placeholder="Enter your password">
                </div><!--end form-group-->

                <div class="form-group row mt-3">
                    <div class="col-sm-6">
                        <div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                            <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                        </div>
                    </div><!--end col-->
                    <div class="col-sm-6 text-end">
                        <a href="{{ route('second', ['auth', 'recover-pw'])}}" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                    </div><!--end col-->
                </div><!--end form-group-->

                <div class="form-group mb-0 row">
                    <div class="col-12">
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                        </div>
                    </div><!--end col-->
                </div> <!--end form-group-->
            </form><!--end form-->
            <div class="text-center  mb-2">
                <p class="text-muted">Don't have an account ? <a href="{{ route('second', ['auth', 'register'])}}" class="text-primary ms-2">Free Resister</a></p>
                <h6 class="px-3 d-inline-block">Or Login With</h6>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="d-flex justify-content-center align-items-center thumb-md bg-blue-subtle text-blue rounded-circle me-2">
                    <i class="fab fa-facebook align-self-center"></i>
                </a>
                <a href="" class="d-flex justify-content-center align-items-center thumb-md bg-info-subtle text-info rounded-circle me-2">
                    <i class="fab fa-twitter align-self-center"></i>
                </a>
                <a href="" class="d-flex justify-content-center align-items-center thumb-md bg-danger-subtle text-danger rounded-circle">
                    <i class="fab fa-google align-self-center"></i>
                </a>
            </div>
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->

@endsection