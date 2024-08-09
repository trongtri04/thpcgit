<!doctype html>
<html lang="en">

<head>
    @include('parts.head')
</head>

<body>
    <div class="wrapper">
        @include('parts.header')


    </div>
    <!-- content -->
    @yield('content')


    <!-- footer -->
    @include('parts.footer')
</body>

</html>