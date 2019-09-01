<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<div id="app">
    <header>
        <div class="style">
            <div class="container-fluid">
                <div class="navbar is-info">
                    <div class="navbar-menu">
                        <div class="navbar-start pos">
                            <a href="http://sport.local/" class="navbar-item">Home</a>
                            <a href="http://sport.local/sports" class="navbar-item">Sport</a>
                            <a href="http://sport.local/news" class="navbar-item">News</a>
                            <a href="http://sport.local/shops" class="navbar-item">Shops</a>
                            <a href="http://sport.local/practises" class="navbar-item">Practise<fa icon="coffee"></fa></a>
                            <a href="" class="navbar-item">About</a>
                            @if(auth()->user())
                                <a href="/sports/logout" class="navbar-item">logout</a>
                            @else
                                <a href="/sports/login" class="navbar-item">login</a>
                            @endif
                        </div>
                        <div class="navbar-end">
                            <div class="div" style="align-self: center">
                                <input class="input is-rounded is-small" type="text" placeholder="search">
                            </div>
                            <a href="" class="navbar-item">search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div style="margin-left: 30px; margin-top: 2em;min-height: calc(100vh - 207px)" >
        @yield('content')
    </div>
    <footer class="footer">
        <div class="content has-text-centered">
            <p>This is all about sport footer</p>
        </div>
    </footer>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
