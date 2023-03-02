@extends('layouts.app')

@section('title', 'Home')
@section('app')

{{-- content home --}}

{{-- Banner --}}
<section>
  <div class="container">
    <div id="homeCarousel" class="carousel slide shadow-sm rounded-3 " data-bs-ride="carousel">
      <div class="carousel-inner mt-4 rounded-3 md-4">
        <div class="carousel-item active">
          <img src="{{ asset('assets/img/Banner1.png') }}" class="d-block w-100" alt="Let's GoBid">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/img/Banner2.png') }}" class="d-block w-100" alt="Discover Auctions">
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

{{-- Heading --}}
<div class="container p-0">
  <div class="d-flex justify-content-between align-items-center px-3 my-4">
    <h2 class="text-dark fw-semibold">Ongoing Auctions</h2>
    <a href="/auctions" class="btn btn-outline-dark btn-block fw-bold fs-5">
      Browse More
    </a>
  </div>
</div>
{{-- Cards --}}
@if ($auctions->count())
<section>
<div class="container">
  <div class="row row-cols-2 justify-content-start g-3 mb-5">
    @foreach ($auctions as $auction)
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
      <a class="card shadow-sm w-100 col text-decoration-none text-black" href="/auction/{{ $auction->id }}" title="{{ $auction->item->name }}">
        {{-- Image --}}
        <img src="/assets/item-img/{{ $auction->item->image }}" class="col-md-auto card-img-top" alt="{{ $auction->item->name }}" style="height: 250px; object-fit: cover"/>
        <div class="card-body flex-column">
          {{-- Time --}}
          {{-- <div class="time-auction col-sm badge text-bg-warning text-warning mb-2 fw-bold">
            <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
            <span class="ms-1">1 hari</span>
          </div> --}}
          {{-- Name --}}
          <p class="card-title fw-medium mb-1 fs-5 truncate">
            {{ $auction->item->name }}
          </p>
          {{-- Current Bid --}}
          <div class="row">
            <div class="col-1 mt-2">
              <iconify-icon icon="icon-park:gavel" width="36" flip="horizontal"></iconify-icon>
            </div>
            <div class="col ms-3">
              <span class="card-text text-muted" style="font-size: 14px">Current Bid</span><br>
              <span class="card-text fw-bold fs-5">
                @if ($auction->bid->count())
                  @rupiah($auction->bid->max('bid_amount'))
                @else
                  @rupiah($auction->item->start_price)
                @endif
              </span>
            </div>
          </div>
        </div>
      </a>  
    </div>
    @endforeach
  </div>
  </div>
</section>
@else
<p class="text-center fs-3 my-5">No auction found.</p>
@endif
@endsection 