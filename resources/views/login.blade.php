@extends('layouts.auth')
@section('title', 'Login')

@section('app')
<section class="vh-100">
  <div class="container-fluid px-5 h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-4">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="GoBid">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-6 offset-xl-1">
        <div class="card border-light shadow px-5 py-4">
          <h1 class="mb-4 fw-bold">Login</h1>
          <form>
            <!-- Email input -->
            <div class="form-floating mb-4">
              <input type="email" id="email" class="form-control"
                placeholder="Enter username" />
              <label class="form-label" for="email">Username</label>
            </div>
  
            <!-- Password input -->
            <div class="form-floating mb-3">
              <input type="password" id="password" class="form-control form-control"
                placeholder="Enter password" />
              <label class="form-label" for="password">Password</label>
            </div>
  
            <div class="text-center text-lg-start pt-2">
              <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small mt-2 pt-1 mb-0 fw-semibold">Don't have an account? <a href="/register"
                  class="link-primary">Register</a></p>
            </div>
          </form>
        </div>
          
      </div>
    </div>
  </div>
</section>
@endsection