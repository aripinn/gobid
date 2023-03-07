@extends('admin.layouts.app')

@section('content')
<section class="section dashboard">
  <div class="card recent-sales">
    <div class="card-body mt-4">
      {{-- Alert --}}
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      {{-- Add new --}}
      <div class="pb-3">
        <a href="{{ route('items.create') }}" class="btn btn-primary button-create">Add new item</a>
      </div>
      {{-- Table --}}
      @if ($items->count())
      <table id="tablePengguna" class="display table table-responsive align-middle">
        <thead>
            <tr>
                <th style="width: 7.5%;">ID</th>
                <th style="width: 27.5%">Item</th>
                <th style="width: 25%">Description</th>
                <th style="width: 15%">Starting Price</th>
                <th style="width: 12.5%">Availability</th>
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
              <span class="ms-1 d-inline-block text-truncate" style="max-width: 210px;">{{ $item->name }}</span>
            </td>
            {{-- desc, price --}}
            <td>
              <textarea cols="30" rows="3" class="border-0" style="resize: none" readonly>{{ $item->description }}</textarea>
            </td>
            <td>@rupiah($item->start_price)</td>
            {{-- availability --}}
            <td>
              @isset($item->auction->status)
                @switch($item->auction->status)
                @case('close')
                  <div class="badge bg-danger p-2 fw-normal" style="font-size: 14px">Sold</div>
                  @break
                @default
                  <div class="badge bg-warning p-2 fw-normal" style="font-size: 14px">Auctioned</div>
                  @break
                @endswitch
              @else
                <div class="badge bg-success p-2 fw-normal" style="font-size: 14px">Available</div>
              @endisset
            </td>
            {{-- actions --}}
            <td>
              <div class="d-flex justify-content-start gap-2">
                {{-- edit --}}
                <a href="{{ route('items.edit', $item) }}" class="btn btn-primary">
                  <i class="bi bi-pencil-square"></i>
                </a>
                {{-- delete --}}
                @isset($item->auction->status)
                @else
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this item?')">
                    <i class="bi bi-trash3"></i>
                  </button>
                </form>
                @endisset
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