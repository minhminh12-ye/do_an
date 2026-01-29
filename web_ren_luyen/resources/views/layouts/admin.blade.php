    {{-- layouts/admin.blade.php --}}
    @extends('layouts.main')

    @section('sidebar')
        @yield('logo')
        @yield('icon')
    @endsection

    @section('menu')
        @include('menus.admin')
    @endsection

    @section('content')
        @yield('content')
    @endsection
