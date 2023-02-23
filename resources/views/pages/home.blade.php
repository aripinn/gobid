@extends('layouts.app')

@section('title', 'Home')
@section('app')

{{-- content home --}}

{{-- Banner --}}
<section>
  <div class="container">
    <div id="homeCarousel" class="carousel slide shadow-sm rounded-3 " data-bs-ride="carousel">
      <div class="carousel-inner my-4 rounded-3 md-4">
        <div class="carousel-item active">
          <img src="{{ asset('assets/img/Banner1.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/Banner2.png') }}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
 </div>
</section>
{{-- Headline --}}
<div class="container p-0">
  <div class="d-flex justify-content-between align-items-center px-3 mb-3">
      <div class="d-flex justify-content text-align-left py-3">
          <h2 class="text-dark">Ongoing Auctions</h2>
      </div>
      <div class="browse">
        <a href="/auctions">
          <a href="auctions" class="btn btn-outline-dark btn-block fw-bold">
              Browse More
          </a>
        </a>
      </div>
  </div>
</div>
{{-- Cards --}}
<section>
<div class="container">
    <div class="row row-cols-2 justify-content-center g-3 mb-5">
    {{-- card --}}
      <div class="col-sm-2">
        <a class="card_produk w-100 col text-decoration-none text-black" href="/auction">
          <div class="card shadow-sm">
            {{-- img produk --}}
              <img src="{{ asset('assets/img/produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
              <div class="card-body flex-column">
                {{-- time auction --}}
                <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold">
                  <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
                  <span class="ms-1">1 hari</span>
                </div>
                {{-- Nama Barang --}}
                <p class="nama-barang card-text fw-medium mb-1">Kambing</p>
                {{-- alert Bid --}}
                <div class="col-sm fw-bold">
                  <img clas="Alert_auction" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}">
                  <span class="ms-1 text-danger">Bid saat ini</span>
                </div>
                {{-- harga lelang --}}
                <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
              </div>
          </div>
        </a>  
      </div>
  {{-- Cards --}}
    {{-- card --}}
    <div class="col-sm-2">
      <a class="card_produk w-100 col text-decoration-none text-black" href="/auction">
        <div class="card shadow-sm">
          {{-- img produk --}}
            <img src="{{ asset('assets/img/produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
            <div class="card-body flex-column">
              {{-- time auction --}}
              <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"><img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}"><span class="ms-1">1 hari</span></div>
              {{-- Nama Barang --}}
              <p class="nama-barang card-text fw-medium mb-1">Kambing</p>
              {{-- alert Bid --}}
              <div class="col-sm fw-bold"> <img clas="Alert_auction" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}"><span class="ms-1 text-danger">Bid saat ini</span></div>
              {{-- harga lelang --}}
              <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
            </div>
        </div>
      </a>  
    </div>
    {{-- card --}}
    <div class="col-sm-2">
      <a class="card_produk w-100 col text-decoration-none text-black" href="/auction">
        <div class="card shadow-sm">
          {{-- img produk --}}
            <img src="{{ asset('assets/img/produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
            <div class="card-body flex-column">
              {{-- time auction --}}
              <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"><img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}"><span class="ms-1">1 hari</span></div>
              {{-- Nama Barang --}}
              <p class="nama-barang card-text fw-medium mb-1">Kambing</p>
              {{-- alert Bid --}}
              <div class="col-sm fw-bold"> <img clas="Alert_auction" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}"><span class="ms-1 text-danger">Bid saat ini</span></div>
              {{-- harga lelang --}}
              <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
            </div>
        </div>
      </a>  
    </div>
    {{-- card --}}
    <div class="col-sm-2">
      <a class="card_produk w-100 col text-decoration-none text-black" href="/auction">
        <div class="card shadow-sm">
          {{-- img produk --}}
            <img src="{{ asset('assets/img/produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
            <div class="card-body flex-column">
              {{-- time auction --}}
              <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"><img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}"><span class="ms-1">1 hari</span></div>
              {{-- Nama Barang --}}
              <p class="nama-barang card-text fw-medium mb-1">Kambing</p>
              {{-- alert Bid --}}
              <div class="col-sm fw-bold"> <img clas="Alert_auction" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}"><span class="ms-1 text-danger">Bid saat ini</span></div>
              {{-- harga lelang --}}
              <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
            </div>
        </div>
      </a>  
    </div>
    {{-- card --}}
    <div class="col-sm-2">
      <a class="card_produk w-100 col text-decoration-none text-black" href="/auction">
        <div class="card shadow-sm">
          {{-- img produk --}}
            <img src="{{ asset('assets/img/produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
            <div class="card-body flex-column">
              {{-- time auction --}}
              <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"><img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}"><span class="ms-1">1 hari</span></div>
              {{-- Nama Barang --}}
              <p class="nama-barang card-text fw-medium mb-1">Kambing</p>
              {{-- alert Bid --}}
              <div class="col-sm fw-bold"> <img clas="Alert_auction" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}"><span class="ms-1 text-danger">Bid saat ini</span></div>
              {{-- harga lelang --}}
              <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
            </div>
        </div>
      </a>  
    </div>
    {{-- card --}}
    <div class="col-sm-2">
      <a class="card_produk w-100 col text-decoration-none text-black" href="/auction">
        <div class="card shadow-sm">
          {{-- img produk --}}
            <img src="{{ asset('assets/img/produk_sample.png') }}" class="col-md-auto card-img-top width-350px" alt=""/>
            <div class="card-body flex-column">
              {{-- time auction --}}
              <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold"><img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}"><span class="ms-1">1 hari</span></div>
              {{-- Nama Barang --}}
              <p class="nama-barang card-text fw-medium mb-1">Kambing</p>
              {{-- alert Bid --}}
              <div class="col-sm fw-bold"> <img clas="Alert_auction" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}"><span class="ms-1 text-danger">Bid saat ini</span></div>
              {{-- harga lelang --}}
              <p class="harga-barang card-text fw-bold fs-5">Rp.1.000.000</p>
            </div>
        </div>
      </a>  
    </div>
    </div>
  </div>
</section>
@endsection 