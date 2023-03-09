@extends('layouts.app')

@section('title', $title)
@section('app')
<section>
  <div class="container">
    <div class="card mb-5 my-5 border-0">
      <div class="row g-0">
        {{-- img --}}
        <div class="col-10 col-md-5 pe-4 mx-auto">
          <div class="w-100 ratio ratio-1x1 overflow-hidden rounded-3">
              <div class="w-100">
                  <img src="/assets/item-img/{{ $auction->item->image }}" alt="{{ $auction->item->image }}" class="h-100">
              </div>
          </div>
        </div>
        {{-- Info --}}
        <div class="col d-flex ps-4">
          <div class="card-body p-0">
            <h5 class="card-title fw-bold fs-3 mb-2">{{ $auction->item->name }}</h5>

            {{-- Status --}}
            @switch($auction->status)
              @case('open')
                <div class="badge bg-primary fw-normal fs-6 mb-2">Ongoing</div>
                @break
              @default
                <div class="badge bg-danger fw-normal fs-6 mb-2">Closed</div>
            @endswitch

            {{-- Current bid --}}
            <div class="d-flex align-items-center">
              <iconify-icon icon="icon-park:gavel" width="32" flip="horizontal"></iconify-icon>
              <span class="ms-1 text-black-50 fw-semibold">
                @if($auction->status == 'open')
                Current Bid
                @else
                Final Bid
                @endif
              </span>
            </div>
            <p class="fw-bold fs-4 mb-2">
              @if ($bids->count())
                @rupiah($auction->bid->max('bid_amount'))
              @else
                @rupiah($auction->item->start_price)
              @endif
            </p>

            <p class="fw-semibold mb-2">ID {{ $auction->id }}</p>
            <p class="fw-semibold mb-1 fs-6">Description</p>
            <p class="">{{ $auction->item->description }}</p>

            {{-- Submit Bid --}}
            <hr>
            
            {{-- Alert --}}
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('failed') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @error('bid_amount')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            {{-- Form --}}
            @switch($auction->status)
              @case('open')
                <h5 class="fw-semibold fs-3 mb-3">Bid Now</h5>
                <form action="{{ route('auction-store',$auction) }}" method="POST">
                  @csrf
                  <div class="input-group input-group-lg">
                    <span class="input-group-text">Rp</span>
                  @auth
                    @can('Member')
                    <input type="number" name="bid_amount" placeholder="Enter your bid amount" class="form-control">
                    <button type="submit" class="btn btn-primary text-light fw-semibold" value="{{ old('bid_amount') }}">Submit Bid</button>
                    @else
                    <input type="number" name="bid_amount" placeholder="You're not allowed to join this auction" class="form-control text-center" disabled>
                    <button type="submit" class="btn btn-primary text-light fw-semibold" disabled>Submit Bid</button>
                    @endcan
                  @else
                    <input type="number" name="bid_amount" placeholder="You need to login first" class="form-control text-center" disabled>
                    <button type="submit" class="btn btn-primary text-light fw-semibold" disabled>Submit Bid</button>
                  @endauth
                  </div>
                </form>
                @break
              @case('failed')
                <h5 class="fw-semibold fs-3 mb-3">Winner</h5>
                <p class="fs-5 fst-italic">No one wins</p>
                @break
              @case('close')
                <h5 class="fw-semibold fs-3 mb-2">Winner</h5>
                <span class="fs-4">
                  <i class="bi bi-person-circle"></i>
                  {{ $bids->first()->user->name }}
                </span>
                @break
            @endswitch
          </div>
        </div>
      </div>
    </div>

    {{-- Bid History --}}
    <section>
      <div class="container">
        <div class="row d-flex mb-5">
          <div class="card shadow-sm">
            <div class="table-responsive">
              
              <table class="table caption-top">
                <h5 class="fw-semibold fs-3 ms-2 my-3">Bid History</h5>
                @if ($bids->count())
                <thead>
                  <tr>
                    <th scope="col" style="width: 7.5%">#</th>
                    <th scope="col" style="width: 30%">Bidder</th>
                    <th scope="col" style="width: 30%">Bid Amount</th>
                    <th scope="col"> Bid Time</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bids as $bid)
                  <tr class="{{ ($loop->iteration == 1) ? 'table-active' : '' }}">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $bid->user->name }}</td>
                    <td><span>@rupiah($bid->bid_amount)</span></td>
                    <td>{{ $bid->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
                @else
                <p class="text-center fw-medium fs-3 mt-3 mb-4">No bids in this auction yet</p>
                @endif
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
@endsection