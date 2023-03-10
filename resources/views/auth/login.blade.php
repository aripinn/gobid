@extends('layouts.auth')
@section('title', 'Login')

@section('app')
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        {{-- Image --}}
        <div class="col-md-6 col-lg-4">
          <img src="{{ asset('assets/img/GoBid.svg') }}"
            class="img-fluid" alt="GoBid">
        </div>
  
        {{-- Login Card --}}
        <div class="col-md-8 col-lg-6 offset-lg-1">
          {{-- Register success alert --}}
          @if (session()->has('registerSuccess'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('registerSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
  
          {{--Login failed alert --}}
          @if (session()->has('loginFailed'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginFailed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
  
          <div class="card border-light shadow px-5 py-4">
            <h1 class="mb-4 fw-bold">Login</h1>
            <form action="/login" method="post">
              @csrf
              <!-- Username input -->
              <div class="form-floating mb-4">
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Enter username" autofocus/>
                <label class="form-label" for="username">Username</label>
                @error('username')
                <div class="invalid-feeddback text-danger">
                  {{ $message }}
                </div>
                @enderror
              </div>
    
              <!-- Password input -->
              <div class="form-floating mb-3">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password"/>
                <label class="form-label" for="password">Password</label>
                @error('password')
                <div class="invalid-feeddback text-danger">
                  {{ $message }}
                </div>
                @enderror
              </div>
    
              {{-- Buttons --}}
              <div class="text-center text-lg-start pt-2">
                <button type="submit" class="btn btn-primary btn-lg d-flex justify-content-center align-items-center gap-1 fw-semibold" style="padding-left: 2rem; padding-right: 2rem;">
                  <span>Login</span>
                  <iconify-icon inline icon="material-symbols:login"></iconify-icon>
                </button>
                <p class="small mt-3 pt-1 fw-semibold">Don't have an account?
                  <a href="{{ route('register') }}" class="link-primary text-decoration-none">Register</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection