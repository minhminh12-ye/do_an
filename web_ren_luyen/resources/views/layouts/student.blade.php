    {{-- layouts/student.blade.php --}}
    @extends('layouts.main')

    @section('sidebar')
        @yield('logo')
        @yield('icon')
    @endsection

    @section('menu')
        @include('menus.student')
    @endsection

    @section('content')
        @yield('content')
    @endsection
