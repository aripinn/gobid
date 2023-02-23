@extends('layouts.app')

@section('title', 'My Bid')
@section('app')
<section>
{{-- Search --}}
<div class="container">
    <div class="card border-dark p-1 my-3 mb-4">
    <form action="" method="post" class="d-flex">
        @csrf
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary d-flex" type="submit">
        <iconify-icon icon="ic:outline-search" style="color: white;" width="24"></iconify-icon>
        <span class="ms-1">Search</span>
        </button>
    </form>
    </div>
</div>
{{-- Card --}}
<div class="container">
    <div class="card shadow-sm p-3 mb-5">
        <div class="row border-bottom mb-3 d-flex">
            <div class="col-7 d-flex align-items-top gap-3">
                {{-- foto --}}
                <div class="col-sm-1">
                        <img src="{{ asset('assets/img/produk_sample.png') }}" class="rounded img-fluid" alt="...">
                </div>
                {{-- Left content --}}
                <div class="">
                    {{-- Nama product --}}
                    <p class="mb-2">Kambing</p>
                    {{-- Nama pemilik --}}
                    <div class="fw-medium fs-6"> 
                        <img clas="" src="{{ asset('assets/icons/feather_328D2A/user icon.svg') }}">
                        <span class="ms-1">Nama Pemilik</span>
                    </div>
                </div>
            </div>
            {{-- Right elements --}}
            <div class="col-5">
            {{-- Alert situation --}}
                {{-- masih berlangsung --}}
                <div class="badge text-bg-warning text-warning mb-2 fw-bold">
                    <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
                    <span class="ms-1">17:00:01 WIB</span>
                </div>
                {{-- Menang --}}
                {{-- <div class="badge text-bg-success text-success mb-2 fw-bold">
                    <img src="{{ asset('assets/icons/feather_20_328D2A/mingcute_auction.svg') }}">
                    <span class="ms-1">Anda Menang</span>
                </div> --}}
                {{-- Kalah --}}
                {{-- <div class="badge text-bg-danger text-danger mb-2 fw-bold">
                    <img src="{{ asset('assets/icons/feather_FF1221/mingcute_auction.svg') }}">
                    <span class="ms-1">Anda Kalah</span>
                </div> --}}
                {{-- Price --}}
                <h4><img clas="" src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                    <span class="ms-1 fw-bold fs-6">RP.1.000.000</span>
                </h4>
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="row border-bottom mb-3 d-flex">
            <div class="col-7 d-flex align-items-top gap-3">
                {{-- foto --}}
                <div class="col-sm-1">
                        <img src="{{ asset('assets/img/produk_sample.png') }}" class="rounded img-fluid" alt="...">
                </div>
                {{-- Left content --}}
                <div class="">
                    {{-- Nama product --}}
                    <p class="mb-2">Kambing</p>
                    {{-- Nama pemilik --}}
                    <div class="fw-medium fs-6"> 
                        <img clas="" src="{{ asset('assets/icons/feather_328D2A/user icon.svg') }}">
                        <span class="ms-1">Nama Pemilik</span>

                        </div>
                    </div>
                    </div>

                    {{-- Right elements --}}
                    <div class="col-5">
                    {{-- Alert situation --}}
                        {{-- masih berlangsung --}}
                        {{-- <div class="badge text-bg-warning text-warning mb-2 fw-bold">
                            <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
                            <span class="ms-1">17:00:01 WIB</span>
                        </div> --}}
                        {{-- Menang --}}
                        <div class="badge text-bg-success text-success mb-2 fw-bold">
                            <img src="{{ asset('assets/icons/feather_20_328D2A/mingcute_auction.svg') }}">
                            <span class="ms-1">Anda Menang</span>
                        </div>
                        {{-- Kalah --}}
                        {{-- <div class="badge text-bg-danger text-danger mb-2 fw-bold">
                            <img src="{{ asset('assets/icons/feather_FF1221/mingcute_auction.svg') }}">
                            <span class="ms-1">Anda Kalah</span>
                        </div> --}}
                        {{-- Price --}}
                        <h4><img clas="" src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1 fw-bold fs-6">RP.1.000.000</span>
                        </h4>
                    </div>     
                </div>

                {{-- Row 2 --}}
                <div class="row border-bottom mb-3 d-flex">
                    <div class="col-7 d-flex align-items-top gap-3">
                        {{-- foto --}}
                        <div class="col-sm-1">
                                <img src="{{ asset('assets/img/produk_sample.png') }}" class="rounded img-fluid" alt="...">
                        </div>
                        {{-- Left content --}}
                        <div class="">
                            {{-- Nama product --}}
                            <p class="mb-2">Kambing</p>
                            {{-- Nama pemilik --}}
                            <div class="fw-medium fs-6"> 
                                <img clas="" src="{{ asset('assets/icons/feather_328D2A/user icon.svg') }}">
                                <span class="ms-1">Nama Pemilik</span>
                            
                        </div>
                    </div>
                </div>
                
                {{-- Right elements --}}
                <div class="col-5">
                    {{-- Alert situation --}}
                        {{-- masih berlangsung --}}
                        {{-- <div class="badge text-bg-warning text-warning mb-2 fw-bold">
                            <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
                            <span class="ms-1">17:00:01 WIB</span>
                        </div> --}}
                        {{-- Menang --}}
                        {{-- <div class="badge text-bg-success text-success mb-2 fw-bold">
                            <img src="{{ asset('assets/icons/feather_20_328D2A/mingcute_auction.svg') }}">
                            <span class="ms-1">Anda Menang</span>
                        </div> --}}
                        {{-- Kalah --}}
                        <div class="badge text-bg-danger text-danger mb-2 fw-bold">
                            <img src="{{ asset('assets/icons/feather_FF1221/mingcute_auction.svg') }}">
                            <span class="ms-1">Anda Kalah</span>
                        </div>
                        {{-- Price --}}
                        <h4><img clas="" src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1 fw-bold fs-6">RP.1.000.000</span>
                        </h4>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
@endsection