{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.auth')
@section('judul', 'Login')

@section('app')
{{-- Background --}}
<div class="bg w-100">
  {{-- Canvas --}}
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class=" d-flex justify-content-center align-items-center h-100 overflow-y-hidden">
          {{-- Image --}}
          <div class="col-lg-5 d-none d-md-block">
            <img src="{{ asset('assets/img/ilustrasi_petani.png') }}" class="img-fluid" style="object-fit:cover max-height: 400px" alt="Ilustrasi_petani">
          </div>
    
          {{-- Login Card --}}
          <div class="col-md-8 col-lg-5 offset-xl-1">
            {{-- Headline --}}
            <div class="Headline text-light d-flex justify-content text-align-left py-3">
              <h1 class="H1_orange">Login Terlebih dahulu !</h1>
            </div>
            {{-- Head line --}}
            <div class="card shadow-sm">
              <div class="card-body">
                  <form action="{{ route('login') }}" method="POST">
                    @csrf
                      {{-- <!-- Username input --> --}}
                      <div class="form-floating mb-2">
                          <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username" autofocus>
                          <label for="floatingInput">Username</label>
                      </div>
                      <p class="small mt-1 pt-1 fw-regular text-muted"><img
                              src="{{ asset('assets/icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan username</p>
  
                      {{-- <!-- Password input --> --}}
                      <div class="form-floating mb-2">
                          <input type="password" class="form-control" name="password" id="floatingInput"
                              placeholder="password">
                          <label for="floatingInput">Password</label>
                      </div>
                      <p class="small mt-1 pt-1 fw-regular text-muted"><img
                              src="{{ asset('assets/icons/feather_BBBBBB/alert-circle.svg') }}"> Password menggunakan huruf kapital </p>
  
                      {{-- <!-- Login & Sign button --> --}}
                      <div class="container p-0">
                          <div class="d-flex w-100 gap-2 flex-column flex-md-row">
                              <button type="submit"
                                  class="col-12 col-md-6 btn btn-success btn-block text-light py-3 fw-bold">
                                  <span class="ms-2">Login</span> 
                                  <img src="{{ asset('assets/icons/feather_white/log-in.svg') }}">
                              </button>
                              <a href="{{ route('register') }}" class="col-12  col-md-6 btn btn-outline-success py-3 fw-bold">Registrasi</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection