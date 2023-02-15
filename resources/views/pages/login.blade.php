@extends('layouts.auth')
@section('title', 'Login')

@section('app')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      {{-- Image --}}
      <div class="col-md-9 col-lg-6 col-xl-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="GoBid">
      </div>

      {{-- Login Card --}}
      <div class="col-md-8 col-lg-6 col-xl-6 offset-xl-1">
        <div class="card border-light shadow px-5 py-4">
          <h1 class="mb-4 fw-bold">Login</h1>
          <form>
            <!-- Username input -->
            <div class="form-floating mb-4">
              <input type="text" id="username" class="form-control"
                placeholder="Enter username" required/>
              <label class="form-label" for="username">Username</label>
            </div>
  
            <!-- Password input -->
            <div class="form-floating mb-3">
              <input type="password" id="password" class="form-control"
                placeholder="Enter password" required/>
              <label class="form-label" for="password">Password</label>
            </div>
  
            {{-- Buttons --}}
            <div class="text-center text-lg-start pt-2">
              <button type="button" class="btn btn-primary btn-lg d-flex justify-content-center align-items-center gap-1 fw-semibold" style="padding-left: 2rem; padding-right: 2rem;">
                <span>Login</span>
                <iconify-icon inline icon="material-symbols:login"></iconify-icon>
              </button>
              <p class="small mt-3 pt-1 fw-semibold">Don't have an account?
                <a href="/register" class="link-primary">Register</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection