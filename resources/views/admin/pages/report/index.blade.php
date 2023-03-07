@extends('admin.layouts.app')

@section('content')
<section class="section dashboard">
   {{-- Alert --}}
   @if (session()->has('failed'))
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     {{ session('failed') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
   
  <div class="card recent-sales">
    <div class="card-body mt-4">
      <p class="fs-4 fw-semibold text-dark">Select auction</p>
      {{-- Table --}}
      @if ($auctions->count())
      <table class="display table table-responsive align-middle">
        <thead>
            <tr>
                <th style="width: 7.5%;">ID</th>
                <th style="width: ">Name</th>
                <th style="width: 20%">Start Date</th>
                <th style="width: 20%">End Date</th>
                <th style="width: 20%">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($auctions as $auction)
          <tr>
            {{-- id, img, name --}}
            <td>{{ $auction->id }}</td>
            <td>
              <img src="/assets/item-img/{{ $auction->item->image }}" 
                  alt="{{ $auction->item->name }}"
                  class="rounded"
                  style="height: 65px; width: 65px; object-fit: cover">
              <span class="ms-1 d-inline-block text-truncate" style="max-width: 265px;">{{ $auction->item->name }}</span>
            </td>
            {{-- Date --}}
            <td>{{ $auction->start_date }}</td>
            <td>{{ $auction->end_date }}</td>
            {{-- actions --}}
            <td>
               <a href="{{ route('report.auction', $auction) }}" class="btn btn-success">
                  <i class="bi bi-printer"></i>
                  Generate Report
               </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- Pagination --}}
    <div class="card-footer border-top-0 pt-0 mx-2">
      {{ $auctions->links() }}
    </div>
    @else
      <p class="text-center fw-medium fs-3 mt-3 mb-4">No auction found.</p>
    </div>
    @endif
  </div>
</section>
@endsection