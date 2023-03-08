@extends('layouts.app')

@section('title', $title)
@section('app')
<div class="container p-0">
    <div class="px-3 my-4">
      <h2 class="text-dark mt-4 fw-semibold">All Auctions</h2>
    </div>
</div>

{{-- Search --}}
{{-- <div class="container">
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
</div> --}}

{{-- Cards --}}
@if ($auctions->count())
<section>
  <div class="container">
    <div class="row row-cols-2 justify-content-start g-3 mb-3">
      @foreach ($auctions as $auction)
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
        <a class="card shadow-sm w-100 col text-decoration-none text-black" href="/auction/{{ $auction->id }}" title="{{ $auction->item->name }}">
          {{-- Image --}}
          <img src="/assets/item-img/{{ $auction->item->image }}" class="col-md-auto card-img-top" alt="{{ $auction->item->name }}" style="height: 200px; object-fit: cover"/>
          <div class="card-body flex-column pt-1">
            {{-- Status --}}
            @switch($auction->status)
              @case('open')
                <div class="badge bg-primary fw-normal">Ongoing</div>
                @break
              @default
                <div class="badge bg-danger fw-normal">Closed</div>
            @endswitch
            {{-- Name --}}
            <p class="card-title fw-medium mb-0 truncate">
              {{ $auction->item->name }}
            </p>
            {{-- Current Bid --}}
            <div class="row">
              <div class="col-2 mt-2">
                <iconify-icon icon="icon-park:gavel" width="34" flip="horizontal"></iconify-icon>
              </div>
              <div class="col ms-2">
                <span class="card-text text-muted" style="font-size: 12px">
                  @if($auction->status == 'open')
                  Current Bid
                  @else
                  Final Bid
                  @endif
                </span><br>
                <span class="card-text fw-bold fs-6">
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
    {{ $auctions->links() }}
  </div>
</section>
@else
  <p class="text-center fs-3 my-5">No auction found.</p>
@endif
@endsection 