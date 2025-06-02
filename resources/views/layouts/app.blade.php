<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SheHer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN (for quick use) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased text-gray-900">
    {{-- Flash Message --}}
    @if (session('status'))
        <div class="alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Halaman Konten --}}
    @yield('content')
</body>
</html>
