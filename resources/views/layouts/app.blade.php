<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>

<body>
@include('partials.header')

<div class="container py-4">
    @yield('content')
</div>

@include('partials.footer')

</body>
</html>

