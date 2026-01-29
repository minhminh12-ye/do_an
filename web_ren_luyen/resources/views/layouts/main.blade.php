    <!DOCTYPE html>
    <html lang="vi">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
    <div class="container">

        <div class="sidebar">
            <div class="icon-strip">
                @yield('logo')
                @yield('icon')
            </div>
        </div>

        <div class="main">

        <div class="menu-strip">
            @yield('menu')
        </div>

        <div class="content">
            @yield('content')
        </div>

        </div>
    </div>
    </body>
    </html>
