<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<!-- Top Navigation -->
@include('app.partials.top-navigation')

<!-- Sidebar -->
@include('app.partials.sidebar')

<!-- Main Content -->
@yield('main')
@stack('scripts')
</body>
</html>
