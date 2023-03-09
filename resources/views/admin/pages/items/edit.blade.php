@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('items.update', $item) }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group my-3">
                    <label for="name" class="fw-medium">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $item->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="description" class="fw-medium">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $item->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="start_price" class="fw-medium">Starting Price</label>
                    <input type="number" class="form-control @error('start_price') is-invalid @enderror" id="start_price" name="start_price" value="{{ old('start_price', $item->start_price) }}">
                    @error('start_price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="image" class="form-label fw-medium">Image</label>
                    @if ($item->image)
                        <img src="{{ asset('assets/item-img/'.$item->image) }}" class="img-preview img-fluid col-sm-4 mb-3 rounded d-block">
                    @else
                        <img class="img-preview img-fluid col-sm-4 mb-3 rounded">
                    @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

@push('addon-script')
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endpush