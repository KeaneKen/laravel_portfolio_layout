<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'My Laravel App') }} — @yield('title', 'Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Shared styles across all pages */
        .hero {
            padding: 6rem 0;
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
        }
        .feature-icon {
            width: 72px;
            height: 72px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: #f1f5f9;
            font-size: 28px;
        }
        footer {
            padding: 2rem 0;
            background: #0f172a;
            color: #cbd5e1;
        }
        a.brand {
            font-weight: 600;
            color: #0f172a;
            text-decoration: none;
        }
        /* Blog post styling */
        .post { padding: 1.25rem 0; }
        .post + .post { border-top: 1px solid rgba(15,23,42,0.06); margin-top: 1rem; padding-top: 1.5rem; }
        .post-thumb { width: 100%; height: 180px; object-fit: cover; display: block; }
        @media (min-width: 768px) {
            .post-thumb { height: 160px; }
        }
        /* Page-specific styles */
        @yield('styles')
    </style>
</head>
<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
