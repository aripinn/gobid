@extends('admin.layouts.app')

@section('content')
<section>
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

  <div class="container">
    <div class="card mb-5 p-4">
      <div class="row g-0">

        {{-- img --}}
        <div class="col-10 col-md-3 pe-4 mx-auto">
          <div class="w-100 ratio ratio-1x1 overflow-hidden rounded-3">
              <div class="w-100">
                  <img src="/assets/item-img/{{ $auction->item->image }}" alt="{{ $auction->item->image }}" class="h-100">
              </div>
          </div>
        </div>

        {{-- Info --}}
        <div class="col-12 col-md-9 d-flex ps-4">
          <div class="card-body p-0">
            <h5 class="card-title fw-bold fs-3 mb-2">{{ $auction->item->name }}</h5>
            
            {{-- Status --}}
            @switch($auction->status)
              @case('open')
                <div class="badge bg-warning fw-normal fs-6 mb-2">Ongoing</div>
                @break
              @case('close')
                <div class="badge bg-success fw-normal fs-6 mb-2">Closed</div>
                @break
              @case('failed')
                <div class="badge bg-danger fw-normal fs-6 mb-2">Failed</div>  
                @break
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

            <div class="row">
              <div class="col-6">
                <p class="fw-semibold mb-2">ID {{ $auction->id }}</p>
                <p class="fw-semibold mb-1 fs-6">Description</p>
                <p class="">{{ $auction->item->description }}</p>
              </div>

              <div class="col-5 offset-1">
                @if ($auction->status == 'close')
                  <p class="fw-semibold mb-1 fs-6">Winner</p>
                  <p class="fw-normal mb-2">{{ $bids->first()->user->name }}</p>
                @endif
                <p class="fw-semibold mb-1 fs-6">Start Date</p>
                <p class="fw-normal mb-2">{{ $auction->start_date }}</p>
                @if ($auction->status != 'open')
                  <p class="fw-semibold mb-1 fs-6">End Date</p>
                  <p class="fw-normal mb-2">{{ $auction->end_date }}</p>
                @endif
              </div>
            </div>

            {{-- Buttons --}}
            <div class="d-flex justify-content-end mt-3 gap-2">

              {{-- Delete --}}
              @if (!$bids->count())
              <form action="{{ route('auctions.destroy', $auction->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this auction?')">
                      <i class="bi bi-trash3"></i>
                      Delete
                  </button>
              </form>

              {{-- Edit Item --}}
              @endif
              <a class="btn btn-primary" href="{{ route('items.edit', $auction->item) }}">
                  <i class="bi bi-box-seam"></i>
                  Edit Item
              </a>

              <form action="{{ route('auctions.update', $auction) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                @switch($auction->status)
                  {{-- Close --}}
                  @case('open')
                    <input type="hidden" name="status" value="open">
                    <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure want to close this auction? After closing, this auction cannot receive any bids.')">
                      <i class="bi bi-x-lg"></i>
                      Close
                    </button>
                    @break
                      
                  {{-- Reopen --}}
                  @case('failed')
                    <input type="hidden" name="status" value="failed">
                    <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure want to reopen this auction?')">
                      <i class="bi bi-arrow-clockwise"></i>
                      Reopen
                    </button>
                    @break
                  
                  @case('close')
                    <a class="btn btn-success" href="{{ route('report.auction', $auction) }}">
                      <i class="bi bi-printer"></i>
                      Generate Report
                    </a>
                  @break
                @endswitch
              </form>
            </div>
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