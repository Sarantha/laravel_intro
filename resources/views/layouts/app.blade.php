<!DOCTYPE html>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>UI - Laravel Intro</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @if(Request::is('/'))
                @include('inc.showcase')
            @endif
            <div class="row">
                <div class="col-md-8">
                    @include('inc.messages')
                    @yield('content')
                </div>
                <div class="col-md-4">
                     @include('inc.sidebar')
                </div>
            </div>
        </div> 
    </body>
</HTML>