<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <style type="text/css">
        .flasher {
            padding: 1em;
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <div class="container">
        @if (Session::get('flash_message'))
            <div class="flasher">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        <div class="col-md-6">
            @yield('content')
        </div>
        </div>
    </body>
</html>