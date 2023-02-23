@extends('layouts.app')

@section('title', 'No auction found for ""')
@section('app')

<section>
    {{-- content auctions --}}
    {{-- Headline --}}
    <div class="container p-0">
        <div class="d-flex justify-content-between align-items-center px-3 mb-3">
            <div class="Headline_home text-light d-flex justify-content text-align-left py-3">
                <h1 class="H1_ijo">Auctions</h1>
            </div>
            <div class="browese">
                <a href="/home" class="btn btn-outline-success btn-block fw-bold">
                    Back Home<img src="">
                </a>
            </div>
        </div>
    </div>
{{-- Search --}}
<div class="container">
    <div class="card bg-success-subtle border-success p-1 my-3 mb-4">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari Hewan lelang yang anda inginkan" aria-label="Search">
            <a href="#" class="btn btn-success d-flex" type="submit"><img src="{{ asset('assets/icons/feather_FFFFFF/search.svg') }}">
                <span class="ms-1">
                    Search
                </span>
            </a>
        </form>
    </div>
</div>
{{-- image --}}
<div class="d-flex m-5">
    <img src="{{ asset('assets/img/ups_lelang.png')}}" class="img-fluid mx-auto" alt="...">
    </div>
  </div>
</section>
@endsection 