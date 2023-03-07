@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('items.update', $item) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group my-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $item->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $item->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="start_price">Starting Price</label>
                    <input type="number" class="form-control @error('start_price') is-invalid @enderror" id="start_price" name="start_price" value="{{ old('start_price', $item->start_price) }}">
                    @error('start_price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="form-group my-3">
                    <label for="auction_end_time">Auction End Time</label>
                    <input type="datetime-local" class="form-control @error('auction_end_time') is-invalid @enderror" id="auction_end_time" name="auction_end_time" value="{{ old('auction_end_time') }}">
                    @error('auction_end_time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="form-group my-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
