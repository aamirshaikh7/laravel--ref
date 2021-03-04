<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LaraBlog</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">

    <style>
        .nav-link:active {
            background: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top text-white" style="background: rgb(74, 87, 100);color: rgb(240,249,255);">
        <div class="container"><a class="navbar-brand text-light" href="/">LaraBlog.</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-uppercase" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::path() === '/' ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'tasks' ? 'active' : '' }}" href="/tasks">Tasks</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'about' ? 'active' : '' }}" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::path() === 'articles' ? 'active' : '' }}" href="/articles">Articles</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield ('content')

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="https://github.com/aamirshaikh7"><i class="icon ion-social-github"></i></a><a href="https://linkedin.com/in/aamir-shaikh-291934182/"><i class="icon ion-social-linkedin"></i></a></div>
                </div>
                <p class="copyright">Aamir shaikh © 2021</p>
            </div>
        </footer>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>