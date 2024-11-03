@extends('layouts.auth', ['title' => 'Si17s'])

@section('content')

<div class="col-lg-4 mx-auto">
    <div class="card">
        <div class="card-body p-0 bg-black auth-header-box rounded-top">
            <div class="text-center p-3">
                <a href="{{ route('any', 'home')}}" class="logo logo-admin">
                    <img src="/images/logo-lpse.png" height="50" alt="logo" class="auth-logo">
                </a>
                <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Si17s</h4>
                <p class="text-muted fw-medium mb-0">Sistem Informasi 17 Standar</p>
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
                </div><!--end form-group-->

                <div class="form-group mb-0 row">
                    <div class="col-12">
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                        </div>
                    </div><!--end col-->
                </div> <!--end form-group-->
            </form><!--end form-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->

@endsection

{{-- forget password --}}
 {{-- <div class="col-sm-6 text-end">
                        <a href="{{ route('second', ['auth', 'recover-pw'])}}" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                    </div><!--end col--> --}}



{{-- edited --}}
{{-- @extends('layouts.auth', ['title' => 'Si17s'])

@section('content')

<div class="row">
    <!-- Bagian Kiri dengan Logo dan Ilustrasi -->
    <div class="col-lg-6 d-flex align-items-center justify-content-center bg-light">
        <div class="text-center p-3">
            <img src="/images/logo-amang.png" height="100" alt="Amang Logo" class="mb-3">
            <h1 class="fw-bold">Si17s</h1>
            <p class="text-muted">Sistem Informasi 17 Standar</p>
            <img src="/images/illustration.png" alt="Ilustrasi" class="img-fluid">
        </div>
    </div>

    <!-- Bagian Kanan dengan Form Login -->
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <h4 class="mb-4 fw-semibold text-center">Si17s</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if (sizeof($errors) > 0)
                    @foreach ($errors->all() as $error)
                    <p class="text-danger mb-3">{{ $error }}</p>
                    @endforeach
                    @endif

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>

                    <div class="form-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection --}}
