<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title') | GoBid</title>
</head>
<body>
    <div class="container-fluid px-5">
        @yield('app')
    </div>
    
    @include('includes.footer')

    {{-- Bootstrap --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</body>
</html>