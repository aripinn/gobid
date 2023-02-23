@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Add New Item
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="starting_price">Starting Price</label>
                    <input type="number" class="form-control @error('starting_price') is-invalid @enderror" id="starting_price" name="starting_price" value="{{ old('starting_price') }}" required>
                    @error('starting_price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="auction_end_time">Auction End Time</label>
                    <input type="datetime-local" class="form-control @error('auction_end_time') is-invalid @enderror" id="auction_end_time" name="auction_end_time" value="{{ old('auction_end_time') }}" required>
                    @error('auction_end_time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
