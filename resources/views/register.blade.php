@extends('layouts.auth')
@section('title', 'Register')

@section('app')
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center text-center h-100">
  
        {{-- Register Card --}}
        <div class="col-md-10 col-lg-5">
          <div class="card border-light shadow px-5 py-4">
            <h1 class="mb-4 fw-bold">Register</h1>
            <form>
              <!-- Name input -->
              <div class="form-floating mb-3">
                <input type="text" id="name" class="form-control"
                  placeholder="Enter username" required/>
                <label class="form-label" for="name">Name</label>
              </div>
    
              <!-- Username input -->
              <div class="form-floating mb-3">
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
    
              <!-- Phone input -->
              <div class="form-floating mb-3">
                <input type="text" id="phone" class="form-control"
                  placeholder="Enter phone number" required/>
                <label class="form-label" for="phone">Phone Number</label>
              </div>
    
              <!-- Role select -->
              <div class="form-floating mb-3">
                <select type="text" id="role" class="form-select" required>
                    <option selected>Select role</option>
                    <option value="member">Member</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                </select>
                <label class="form-label" for="role">Role</label>
              </div>

              {{-- Buttons --}}
              <div class="text-center text-lg-start pt-2">
                <button type="button" class="btn btn-primary btn-lg d-flex justify-content-center align-items-center gap-2 fw-semibold" style="padding-left: 2rem; padding-right: 2rem;">
                  <span>Register</span>
                  <iconify-icon inline icon="jam:write"></iconify-icon>
                </button>
                <p class="small mt-3 pt-1 fw-semibold">Already have an account?
                  <a href="/login" class="link-primary">Login</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection