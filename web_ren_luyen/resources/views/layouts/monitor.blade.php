    {{-- layouts/student.blade.php --}}
    @extends('layouts.main')

    @section('sidebar')
        @yield('logo')
        @yield('icon')
    @endsection

    @section('menu')
        @include('menus.monitor')
    @endsection

    @section('content')
        @yield('content')
    @endsection
