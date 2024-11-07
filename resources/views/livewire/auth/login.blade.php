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
            <form wire:submit.prevent="login" class="my-4">
                @if (session()->has('error'))
                    <p class="text-danger mb-3">{{ session('error') }}</p>
                @endif
            
                @error('credentials')
                    <p class="text-danger mb-3">{{ $message }}</p>
                @enderror
            
                <div class="form-group mb-2">
                    <label class="form-label" for="email">Username</label>
                    <input type="email" wire:model="email" class="form-control" placeholder="Enter your email">
                </div><!--end form-group-->
            
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" wire:model="password" class="form-control" placeholder="Enter your password">
                </div><!--end form-group-->
            
                <div class="form-group row mt-3">
                    <div class="col-sm-6">
                        <div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" wire:model="remember" type="checkbox" id="customSwitchSuccess">
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
