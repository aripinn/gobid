@extends('admin.layouts.app')

@section('content')
<section class="section dashboard">
  <div class="card recent-sales">
    <div class="card-body mt-4">
      <p class="fs-4 fw-semibold text-dark">Select item for auction</p>
      {{-- Table --}}
      @if ($items->count())
      <table id="tablePengguna" class="display table table-responsive align-middle">
        <thead>
            <tr>
                <th style="width: 7.5%;">ID</th>
                <th style="width: 30%">Item</th>
                <th style="width: 30%">Description</th>
                <th style="width: 15%">Starting Price</th>
                <th style="width: ">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
          <tr>
            {{-- id, img, name --}}
            <td>{{ $item->id }}</td>
            <td>
              <img src="/assets/item-img/{{ $item->image }}" 
                  alt="{{ $item->name }}"
                  class="rounded"
                  style="height: 65px; width: 65px; object-fit: cover">
              <span class="ms-1 d-inline-block text-truncate" style="max-width: 240px;">{{ $item->name }}</span>
            </td>
            {{-- desc, price --}}
            <td>
              <textarea cols="32" rows="3" class="border-0" style="resize: none" readonly>{{ $item->description }}</textarea>
            </td>
            <td>@rupiah($item->start_price)</td>
            {{-- actions --}}
            <td>
              <div class="d-flex justify-content-start gap-2">
                <form action="{{ route('auctions.store', $item->id) }}" method="POST" class="d-inline-block">
                  @csrf
                  <input type="hidden" name="item_id" value="{{ $item->id }}">
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to start an auction with this item?')">
                    <i class="bi bi-check2-circle"></i>
                    Select
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- Pagination --}}
    <div class="card-footer border-top-0 pt-0 mx-2">
      {{ $items->links() }}
    </div>
    @else
      <p class="text-center fw-medium fs-3 mt-3 mb-4">No item found.</p>
    </div>
    @endif
  </div>
</section>
@endsection