@extends('layouts.auth')
@section('title', 'Register')

@section('app')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">

      {{-- Register Card --}}
      <div class="col-md-10 col-lg-5">
        <div class="card border-light shadow px-5 py-4">
          <h1 class="mb-4 fw-bold text-center">Register</h1>
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name input -->
            <div class="form-floating mb-3">
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter username">
              <label class="form-label" for="name">Name<span class="text-danger">*</span></label>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
  
            <!-- Username input -->
            <div class="form-floating mb-3">
              <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Enter username"/>
              <label class="form-label" for="username">Username<span class="text-danger">*</span></label>
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
  
            <!-- Password input -->
            <div class="form-floating mb-3">
              <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password"/>
              <label class="form-label" for="password">Password<span class="text-danger">*</span></label>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
  
            <!-- Phone input -->
            <div class="form-floating mb-3">
              <input type="number" name="phone" id="phone" class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Enter phone number"/>
              <label class="form-label" for="phone">Phone Number<span class="text-danger">*</span></label>
              @error('phone')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            {{-- Buttons --}}
            <div class="text-center pt-2">
              <button type="submit" class="btn btn-primary btn-lg d-flex justify-content-center align-items-center gap-2 fw-semibold mx-auto" style="padding-left: 2rem; padding-right: 2rem;">
                <span>Register</span>
                <iconify-icon inline icon="jam:write"></iconify-icon>
              </button>
              <p class="small mt-3 pt-1 fw-semibold">Already have an account?
                <a href="{{ route("login") }}" class="link-primary text-decoration-none">Login</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection