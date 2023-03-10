@extends('layouts.app')

@section('title', 'My Bid')
@section('app')
<div class="container" style="min-height:90vh">
	<div class="row d-flex mb-5">

		{{-- Search --}}
		{{-- <div class="card border-dark p-1 mt-4">
			<form action="/mybid" class="d-flex">
				<input class="form-control me-2" type="text" name="search" placeholder="Search" value="{{ request('search') }}">
				<button class="btn btn-primary d-flex" type="submit">
				<iconify-icon icon="ic:outline-search" style="color: white;" width="24"></iconify-icon>
				<span class="ms-1">Search</span>
				</button>
			</form>
		</div> --}}

		{{-- Table --}}
		<div class="card shadow-sm mt-4">
			<div div class="table-responsive">
				<table class="table caption-top align-middle">
					<h5 class="fw-semibold fs-3 ms-2 my-3">My Bid</h5>
				@if ($bids->count())

					<thead>
						<tr>
							<th class="fw-semibold" style="width: 7.5%">ID</th>
							<th class="fw-semibold" style="width: ">Auction</th>
							<th class="fw-semibold" style="width: 15%">Bid Amount</th>
							<th class="fw-semibold" style="width: 20%">Bid Time</th>
							<th class="fw-semibold" style="width: 15%">Result</th>
						</tr>
					</thead>
					
					<tbody class="fw-medium">
						@foreach ($bids as $bid)
						<tr>
							<td>{{ $bid->auction->id }}</td>
							<td>
								<a href="/auction/{{ $bid->auction->id }}" class="text-decoration-none text-dark">
									<img src="/assets/item-img/{{ $bid->auction->item->image }}" 
										alt="{{ $bid->auction->item->name }}"
										class="rounded"
										style="height: 75px; width: 75px; object-fit: cover">
									<span class="ms-2">{{ $bid->auction->item->name }}</span>
								</a>
							</td>
							<td>@rupiah($bid->bid_amount)</td>
							<td>{{ $bid->created_at }}</td>
							<td>
								@switch($bid->result)
								@case('ongoing')
									<div class="badge bg-warning text-white px-3">
										<div class="d-flex align-items-center fw-medium fs-6">
											<iconify-icon icon="ic:outline-access-time" style="color: white;" height="22"></iconify-icon>
											<span class="ms-1">Ongoing</span>
										</div>
									</div>
									@break
								@case('win')
									<div class="badge bg-primary text-white px-3">
										<div class="d-flex align-items-center fw-medium fs-6">
											<iconify-icon icon="fluent:gavel-24-regular" style="color: white;" height="22"></iconify-icon>
											<span class="ms-1">Win</span>
										</div>
									</div>
									@break
								@case('lose')
									<div class="badge bg-danger text-white px-3">
										<div class="d-flex align-items-center fw-medium fs-6">
											<iconify-icon icon="fluent:gavel-24-regular" style="color: white;" height="22"></iconify-icon>
											<span class="ms-1">Lose</span>
										</div>
									</div>
								@break
								@endswitch
							</td>
						</tr>
						@endforeach
					</tbody>

				@else
				<p class="text-center fw-medium fs-3 mt-3 mb-4">No bids found.</p>
				@endif

				</table>
			</div>
		</div>

		{{-- Pagination --}}
		@if ($bids->count())
		<div class="mt-3">
			{{ $bids->links() }}
		</div>
		@endif
		
	</div>
</div>
@endsection