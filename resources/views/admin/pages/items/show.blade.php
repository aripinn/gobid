@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $item->name }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                <img src="/images/{{ $item->image }}" alt="{{ $item->name }}" class="w-100">
                </div>
                <div class="col-md-8">
                    <p>{{ $item->description }}</p>
                    <p>Starting Price: {{ $item->starting_price }}</p>
                    <p>Auction End Time: {{ $item->auction_end_time->format('d M Y, H:i:s') }}</p>
                    <p>Current Highest Bid: {{ $item->highest_bid ? $item->highest_bid->amount : 'No bids yet.' }}</p>

                    {{-- <form method="POST" action="{{ route('bids.store') }}"> --}}
                        {{-- @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <div class="form-group">
                            <label for="amount">Place Bid:</label>
                            <input type="number" name="amount" id="amount" class="form-control" min="{{ $item->highest_bid ? $item->highest_bid->amount + 1 : $item->starting_price }}" value="{{ old('amount') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Bid</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
