<!doctype html>
<html lang="en">

<head>
    
    @include('layouts.head')

</head>

<body>
    {{-- NAVBAR --}}

    @include('layouts.navbar')
    
    {{-- END NAVBAR --}}

    {{-- CONTENT --}}

    @yield('home')
    @yield('module')
    @yield('category')
    @yield('userprofile')

    {{-- END CONTENT --}}


    {{-- FOOTER --}}
    
    @include('layouts.footer')

    {{-- END FOOTER --}}
</body>

</html>
