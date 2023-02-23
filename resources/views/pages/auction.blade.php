@extends('layouts.app')

{{-- @section('title', {{ $auction->item->name }}) --}}
@section('title', 'Auction Name')
@section('app')
    {{-- Content Detail --}}
    <section>
        <div class="container">
          {{-- Over View Produk --}}
            <div class="card mb-5 my-5 border-0 d-flex">
                <div class="row g-4">
                  {{-- Foto Produk --}}
                  <div class="col-md-5">
                    <img src="{{ asset('assets/img/produk_sample.png') }}" class="img-fluid rounded" alt="...">
                  </div>
                  {{-- Informasi detail produk --}}
                  <div class="col d-flex">
                    <div class="card-body p-0">
                      {{-- Nama produk --}}
                      <h5 class="card-title fs-3 mb-3">Kambing</h5>
                      {{-- time auction --}}
                      <div class="time-auction  badge text-bg-warning text-warning mb-2 fw-bold mb-2"> <img src="{{ asset('assets/icons/feather_FFB800/clock.svg') }}">
                        <span class="ms-1">1 hari</span>
                      </div>
                      {{-- alert Bid --}}
                      <div class="fw-bold"><img clas="waktu_auction mb-2" src="{{ asset('assets/icons/feather_FF1221/tabler_hammer.svg') }}">
                        <span class="ms-1 text-danger">Bid saat ini</span>
                      </div>
                      {{-- Harga Bid --}}
                      <p class="harga-barang card-text fw-bold fs-3 mb-2">Rp.1.000.000</p>
                      {{-- ID Barang --}}
                      <p class="id_barang fw-semibold mb-3">ID 12345</p>
                      {{-- Nama pemilik --}}
                      <div class="fw-bold mb-2"> 
                        <img clas="" src="{{ asset('assets/icons/feather_328D2A/user icon.svg') }}">
                        <span class="ms-1">Nama Pemilik</span>
                      </div>
                      {{-- Desc produk--}}
                      {{-- Headline --}}
                        <p class="informasi_produk fw-semibold mb-1 card-text fs-6">Informasi Produk</p>
                      {{-- Desc --}}
                        <p class="desc-text col-md-9"><small class="text-muted">Kambing Etawa, Jantan, Usia 2 Bulan, Kondisi Sehat  Worem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan Etiam eu turpis molestie.</small></p>
                      {{-- Line --}}
                        <hr>
                      {{-- Head line --}}
                      <h5 class="card-title fs-3">Lelang sekarang</h5>
                      <p class="text-muted">Masukan Bid Anda dengan benar</p>
                      {{-- Submit Bid --}}
                      <form action="#" method="POST">
                        <div class="container p-0">
                          <div class="d-flex w-100 gap-4 flex-column flex-md-row">
                            <div class="input-group">
                                @csrf
                                <span class="input-group-text">Rp</span>
                                <input type="number" placeholder="000" class="form-control">
                              </div>
                                <button type="submit" class="col-12 col-md-4 btn btn-success btn-block text-light fw-bold">Masukan penawaran<img src=""></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

          {{-- History Auction --}}
          <section>
            <div class="container">
              <div class="history_lelang row d-flex mb-5">
                <div class="card shadow-sm">
                  <div class="table-responsive">

                    <table class="table caption-top">
                      <h5 class="m-2">Bidder Leaderboard</h5>
                      <thead class="text-success">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Bidder</th>
                          <th scope="col">Time</th>
                          <th scope="col">Bid</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-active">
                          <th scope="row">1</th>
                          {{-- Bidder --}}
                          <td>Mark</td>
                          {{-- Date Time --}}
                          <td>06/11/2023  17:00:01 WIB</td>
                          {{-- Bid --}}
                          <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1">RP.2.000.000.00</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          {{-- Bidder --}}
                          <td>Makmur</td>
                          {{-- Date Time --}}
                          <td>06/11/2023  17:00:01 WIB</td>
                          {{-- Bid --}}
                          <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1">RP.1.000.000.00</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          {{-- Bidder --}}
                          <td>Mark</td>
                          {{-- Date Time --}}
                          <td>06/11/2023  17:00:01 WIB</td>
                          {{-- Bid --}}
                          <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1">RP.000</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          {{-- Bidder --}}
                          <td>Mark</td>
                          {{-- Date Time --}}
                          <td>06/11/2023  17:00:01 WIB</td>
                          {{-- Bid --}}
                          <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1">RP.000</span>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          {{-- Bidder --}}
                          <td>Mark</td>
                          {{-- Date Time --}}
                          <td>06/11/2023  17:00:01 WIB</td>
                          {{-- Bid --}}
                          <td><img src="{{ asset('assets/icons/feather_328D2A/ph_money.svg') }}">
                            <span class="ms-1">RP.000</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    </section>
@endsection