{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- userName -->
            <div>
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- phone Address -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Telepon')" />

                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.auth')
@section('judul', 'Register')

@section('app')

<div class="bg w-100">
  {{-- <!-- Headline --> --}}
  <div class="Headline text-light d-flex justify-content-center">
    <h1 class="H1_orange py-3">Buat akun Terlebih dahulu !</h1>
  </div>
    
  {{-- <!-- Register card --> --}}
  <section class="d-flex justify-content-center">
        <div class="col-lg-6 mb-1">
          <div class="card shadow-sm mb-5">
            <div class="card-body">
              <form action="{{ route('register') }}" method="POST">
                @csrf
                {{-- <!-- Name input --> --}}
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name">
                  <label for="floatingInput">Name</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('assets/icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan nama asli anda </p>
  
                {{-- <!-- Username input --> --}}
                <div class="form-floating mb-2">
                  <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username">
                  <label for="floatingInput">Username</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('assets/icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan username</p>
  
                {{-- <!-- Notlpn input --> --}}
                <div class="form-floating mb-2">
                  <input type="number" class="form-control" id="floatingInput" name="phone" placeholder="nomertlp">
                  <label for="floatingInput">Nomer Telepone</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('assets/icons/feather_BBBBBB/alert-circle.svg') }}"> Masukan no telepone</p>
  
  
                {{-- <!-- Password input --> --}}
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" id="floatingInput" name="password" placeholder="password">
                  <label for="floatingInput">Password</label>
                </div>
                <p class="small mt-1 pt-1 fw-regular text-muted"><img src="{{ asset('assets/icons/feather_BBBBBB/alert-circle.svg') }}"> Password menggunakan huruf kapital </p>
  
                
                {{-- <!-- Submit & back button --> --}}
                <div class="container p-0">
                  <div class="d-flex w-100 gap-2 flex-column flex-md-row">
                      <button type="submit" class="col-12 col-md-6 btn btn-success btn-block text-light py-3 fw-bold">Sign up <img src="{{ asset('assets/icons/feather_white/log-in.svg') }}"></button>
                      <a href="/login" class="col-12 col-md-6 btn btn-outline-success py-3 fw-bold">Back <img src="{{ asset('assets/icons/feather_328D2A/corner-up-left.svg') }}"></a>
                  </div>
                  <p class="small mt-1 pt-1 fw-semibold">Already have an account?
                    <a href="/login" class="link-success">Login</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
  </section>

</div>


@endsection