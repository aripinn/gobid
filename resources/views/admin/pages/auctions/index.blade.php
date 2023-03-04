@extends('admin.layouts.app')

@section('content')
<section class="section dashboard">
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

  {{-- Start new auction --}}
  <div class="pb-3">
      <a href="{{ route('auctions.create') }}" class="btn btn-primary button-create">Start new auction</a>
  </div>

  @if ($auctions->count())
  {{ $auctions->links() }}
  <div class="row justify-content-start g-3">
      @foreach ($auctions as $auction)
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
        <div class="card shadow-sm w-100 col text-decoration-none text-black">
          {{-- Image --}}
          <img src="/assets/item-img/{{ $auction->item->image }}"
                class="col-md-auto card-img-top"
                alt="{{ $auction->item->name }}"
                style="height: 200px; object-fit: cover"/>
          <div class="card-body flex-column p-2 pt-1">
            {{-- Status --}}
            @switch($auction->status)
              @case('open')
                  <div class="badge bg-warning fw-normal">Ongoing</div>
                  @break
              @case('close')
                  <div class="badge bg-success fw-normal">Closed</div>
                  @break
              @case('failed')
                  <div class="badge bg-danger fw-normal">Failed</div>  
                  @break
            @endswitch
            {{-- ID --}}
            <p class="fw-semibold mb-0" style="font-size: 12px">
              ID {{ $auction->id }}
            </p>
            {{-- Name --}}
            <p class="fw-medium mb-0 truncate" style="height: 48px" title="{{ $auction->item->name }}">
              {{ $auction->item->name }}
            </p>
            {{-- Detail --}}
            <a href="{{ route('auctions.show', $auction) }}" class="btn btn-sm btn-primary w-100 mt-1 fw-semibold">Detail</a>
          </div>
        </div>  
      </div>
      @endforeach
    </div>
    <div class="me-5 mt-0">
      {{ $auctions->links() }}
    </div>
  @else
    <p class="text-center fs-3 my-5">No auction found.</p>
  @endif
</section>
@endsection