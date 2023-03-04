@extends('admin.layouts.app')

@section('content')
<div class="row">
  <!-- Columns -->
  <div class="col-lg-12">
    <div class="row">

      <!-- Auction Card -->
      <div class="col-sm-6 col-md-4">
        <div class="card info-card sales-card pt-3">
          <div class="card-body">
            <h5 class="card-title">Auctions</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-box-seam"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $auctions->where('status', 'open')->count() }}</h6>
                <span class="text-muted small pt-2">Items being auctioned</span>
              </div>
            </div>
          </div>

        </div>
      </div><!-- End Auction Card -->

      <!-- Members Card -->
      <div class="col-sm-6 col-md-4">

        <div class="card info-card customers-card pt-3">

          <div class="card-body">
            <h5 class="card-title">Members</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $members->count() }}</h6>
                <span class="text-muted small pt-2">Active members</span>
              </div>
            </div>

          </div>
        </div>

      </div><!-- End Members Card -->

      <!-- Bids Card -->
      <div class="col-sm-12 col-md-4">
        <div class="card info-card revenue-card pt-3">

          <div class="card-body">
            <h5 class="card-title">Today's Bids</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-cash"></i>
              </div>
              <div class="ps-3">
                {{-- <h6>{{ $bids->where('created_at', today())->count() }}</h6> --}}
                <h6>
                  {{ $bids->where('created_at', '>=', today())
                          ->where('created_at', '<', today()->addDay())
                          ->count() }}
                  </h6>
                <span class="text-muted small pt-2">Bids submitted today</span>
              </div>
            </div>
          </div>

        </div>
      </div><!-- End Bids Card -->

      
    </div>
  </div><!-- End columns -->
  
  <!-- Latest Bid -->
  <div class="col-lg-12">
    <div class="card top-selling overflow-auto">

      <div class="card-body pt-3">
        <h5 class="card-title">Latest Bids</h5>

        @if ($bids->count())
        <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col" style="width: 20%">Bidder</th>
              <th scope="col" style="width: 35%">Item</th>
              <th scope="col" style="width: 20%">Bid Amount</th>
              <th scope="col" style="width: ">Bid Time</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bids->take(20) as $bid)
            <tr>
              <td class="link-dark">{{ $bid->user->name }}</td>
              <td><a href="/auction/{{ $bid->auction_id }}" class="link-dark fw-semibold">
                <img src="/assets/item-img/{{ $bid->auction->item->image }}"
                  alt="{{ $bid->auction->item->name }}"
                  class="rounded me-1"
                  style="height: 35px; width: 35px; object-fit: cover">
                {{ $bid->auction->item->name }}
              </a></td>
              <td>@rupiah($bid->bid_amount)</td>
              <td>{{ $bid->created_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

        @else
        <p class="text-center fw-medium fs-3 mt-3 mb-5">No bids found.</p>
        @endif
      </div>

    </div>
    
  </div><!-- End Latest Bid -->
</div>
@endsection