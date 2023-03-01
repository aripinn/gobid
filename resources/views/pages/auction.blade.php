@extends('layouts.app')

{{-- @section('title', {{ $auction->item->name }}) --}}
@section('title', $title)
@section('app')
<section>
  <div class="container">
    {{-- Auction Detail --}}
    <div class="card mb-5 my-5 border-0">
      <div class="row g-0">
        {{-- img --}}
        <div class="col-md-5 pe-4">
          <img src="/assets/item-img/{{ $auction->item->image }}" class=" col-md-auto rounded w-100" alt="{{ $auction->item->image }}" style="height: 516px; object-fit: cover">
        </div>
        {{-- Info --}}
        <div class="col d-flex ps-4">
          <div class="card-body p-0">
            <h5 class="card-title fw-bold fs-3 mb-3">{{ $auction->item->name }}</h5>
            {{-- <div class="time-auction  badge text-bg-warning text-warning mb-2 fw-bold mb-2"> <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
              <span class="ms-1">1 hari</span>
            </div> --}}
            <div class="d-flex align-items-center">
              <iconify-icon icon="icon-park:gavel" width="32" flip="horizontal"></iconify-icon>
              <span class="ms-1 text-black-50 fw-semibold">Current Bid</span>
            </div>
            <p class="fw-bold fs-4 mb-2">
              @if ($auction->bid->max('bid_amount') != null)
                @rupiah($auction->bid->max('bid_amount'))
              @else
                @rupiah($auction->item->start_price)
              @endif
            </p>
            {{-- <div class="fw-bold mb-2"> 
              <img clas="" src="{{ asset('assets/icons/feather_328D2A/user icon.svg') }}">
              <span class="ms-1">Nama Pemilik</span>
            </div> --}}
            <p class="fw-semibold mb-2">ID {{ $auction->id }}</p>
            <p class="fw-semibold mb-1 fs-6">Description</p>
            <p class="">{{ $auction->item->description }}</p>

            {{-- Submit Bid --}}
            <hr>
            <h5 class="fw-semibold fs-3 mb-3">Bid Now</h5>
            @can('Member')
            <form action="#" method="POST">
              @csrf
              <div class="input-group input-group-lg">
                <span class="input-group-text">Rp</span>
                <input type="number" placeholder="Enter your bid amount" class="form-control">
                <button type="submit" class="btn btn-primary text-light fw-semibold">Submit Bid</button>
              </div>
            </form>
            @else
            <div class="input-group input-group-lg">
              <span class="input-group-text">Rp</span>
              <input type="number" placeholder="You can't join this auction" class="form-control text-center" disabled>
              <button type="submit" class="btn btn-primary text-light fw-semibold" disabled>Submit Bid</button>
            </div>
            @endcan
          </div>
        </div>
      </div>
    </div>

    {{-- Bid History --}}
    <section>
      <div class="container">
        {{-- <h5 class="m-2">Bid History</h5> --}}
        <div class="row d-flex mb-5">
          <div class="card shadow-sm">
            <div class="table-responsive">
              
              <table class="table caption-top">
                <h5 class="fw-semibold fs-3 ms-2 my-3">Bid History</h5>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bidder</th>
                    <th scope="col">Time</th>
                    <th scope="col">Bid</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-active">
                    <th scope="row">1</th>
                    {{-- Bidder --}}
                    <td>Mark</td>
                    {{-- Date Time --}}
                    <td>06/11/2023  17:00:01 WIB</td>
                    {{-- Bid --}}
                    <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                      <span class="ms-1">RP.2.000.000.00</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    {{-- Bidder --}}
                    <td>Makmur</td>
                    {{-- Date Time --}}
                    <td>06/11/2023  17:00:01 WIB</td>
                    {{-- Bid --}}
                    <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                      <span class="ms-1">RP.1.000.000.00</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    {{-- Bidder --}}
                    <td>Mark</td>
                    {{-- Date Time --}}
                    <td>06/11/2023  17:00:01 WIB</td>
                    {{-- Bid --}}
                    <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                      <span class="ms-1">RP.000</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    {{-- Bidder --}}
                    <td>Mark</td>
                    {{-- Date Time --}}
                    <td>06/11/2023  17:00:01 WIB</td>
                    {{-- Bid --}}
                    <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                      <span class="ms-1">RP.000</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    {{-- Bidder --}}
                    <td>Mark</td>
                    {{-- Date Time --}}
                    <td>06/11/2023  17:00:01 WIB</td>
                    {{-- Bid --}}
                    <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                      <span class="ms-1">RP.000</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
@endsection