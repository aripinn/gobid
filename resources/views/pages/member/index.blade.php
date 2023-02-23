this is home
<br>
@foreach ($users as $user)
    $auctions = {{ $user->auctions}}
@endforeach