@extends('layouts.app')

@section('title', 'All Auction')
@section('app')

{{-- content auctions --}}
{{-- Headline --}}
<div class="container p-0">
    <div class="d-flex justify-content-between align-items-center px-3 mb-3">
        <div class="Headline_home text-light d-flex justify-content text-align-left py-3">
            <h1 class="H1_ijo">Auctions</h1>
        </div>
        <div class="browese">
          <a href="/" class="btn btn-outline-success btn-block fw-bold">
            Back to Home
          </a>
        </div>
    </div>
</div>
{{-- Search --}}
<div class="container">
  <div class="card bg-success-subtle border-success p-1 my-3 mb-4">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari Hewan lelang yang anda inginkan" aria-label="Search">
            <button class="btn btn-success d-flex" type="submit"><img src="{{ asset('assets/icons/feather_FFFFFF/search.svg') }}">
              <span class="ms-1">
                  Search
              </span>
            </button>
        </form>
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
    </div>
  </div>
</section>
@endsection 