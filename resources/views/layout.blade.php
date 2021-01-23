<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LaraBlog</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top text-white" style="background: rgb(74, 87, 100);color: rgb(240,249,255);">
        <div class="container"><a class="navbar-brand text-light" href="/">LaraBlog.</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-uppercase" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::path() === '/' ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'clients' ? 'active' : '' }}" href="/clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'careers' ? 'active' : '' }}" href="/careers">Careers</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'about' ? 'active' : '' }}" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'contact' ? 'active' : '' }}" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield ('header')
    
    @yield ('content')

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>