{{-- @auth
//Show when user is already authenticated
<ul>
    <li></li>
</ul>
@else
//show to guest
<ul>
    <li></li>
</ul>
@endauth --}}

{{-- To show user's name --}}
{{-- {{ auth()->user()->name }} --}}

{{-- For logout --}}
{{-- <form action="/logout" method="get">
    @csrf
    <button type="submit"></button>
</form> --}}