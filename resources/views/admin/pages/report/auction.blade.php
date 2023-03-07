<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Auction Report</title>
      <style>
          /* Your styles here */
          body {
              font-family: sans-serif;
              font-size: 12px;
          }
          h1, h2 {
              color: #333;
          }
          table {
              width: 100%;
              border-collapse: collapse;
              margin-bottom: 20px;
          }
          th, td {
              padding: 10px;
              text-align: left;
              border-bottom: 1px solid #ddd;
          }
          th {
              background-color: #f2f2f2;
          }
      </style>
  </head>
  <body>
    {{-- Header --}}
    <div style="float: left; width: 50%;">
      <h1>Auction Report</h1>
    </div>

    <div style="float: Right">
      <img src="data:image/png;base64, {{ base64_encode(file_get_contents(public_path('assets/img/GoBid.png'))) }}"
          style="height: 40px; margin-top: 12px">
    </div>
    <div style="clear: both;"></div>

    {{-- Details --}}
    <div style="float: left; width: 25%;">
      <img src="data:image/png;base64, {{ base64_encode(file_get_contents(public_path('assets/item-img/'.$auction->item->image))) }}"
          style="width: 90%; border-radius: 5%;">
    </div>

    <div style="float: left; width: 35%;">
      <p><strong>Auction ID:</strong> {{ $auction->id }}</p>
      <p><strong>Item ID:</strong> {{ $auction->item->id }}</p>
      <p><strong>Name:</strong> {{ $auction->item->name }}</p>
      <p><strong>Description:</strong> {{ $auction->item->description }}</p>
    </div>

    <div style="float: right; width: 35%;">
      <p><strong>Auction Start Date:</strong> {{ $auction->start_date }}</p>
      <p><strong>Auction End Date:</strong> {{ $auction->end_date }}</p>
      <p><strong>Starting price:</strong> @rupiah($auction->item->start_price)</p>
      <p><strong>Final bid:</strong> @rupiah($auction->end_price)</p>
      <p><strong>Winner:</strong> {{ $auction->user->name }}</p>
    </div>

    <div style="clear: both;"></div>

    {{-- Bids --}}
    <h2>Bid History</h2>
    <table>
        <thead>
            <tr>
                <th style="width: 7.5%">#</th>
                <th style="width: 30%">Bidder Name</th>
                <th style="width: 22.5%">Bid Amount</th>
                <th style="width: 27.5%">Bid Time</th>
                <th style="width: ">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bids as $bid)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $bid->user->name }}</td>
                <td>@rupiah($bid->bid_amount)</td>
                <td>{{ $bid->created_at }}</td>
                <td>
                  @switch($bid->result)
                    @case('win')
                      <span style="color: green; font-weight: bold">Win</span>
                      @break
                    @case('lose')
                      <span style="color: red; font-weight: bold">Lose</span>
                      @break
                  @endswitch
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html>
