<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        Clean Blog
    </title>

    <meta name="description" content="A Blog Theme by Start Bootstrap">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://startbootstrap.github.io/startbootstrap-clean-blog-jekyll/assets/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://startbootstrap.github.io/startbootstrap-clean-blog-jekyll/assets/vendor/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://startbootstrap.github.io/startbootstrap-clean-blog-jekyll/assets/main.css">
    <link rel="canonical" href="https://startbootstrap.github.io/startbootstrap-clean-blog-jekyll/">
    <link rel="alternate" type="application/rss+xml" title="Clean Blog" href="/startbootstrap-clean-blog-jekyll/feed.xml">

</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route("blogs") }}">Clean Blog</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route("blogs") }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route("blogs") }}">Posts</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("blogs") }}">Create Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hello {{ auth()->user()->name }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("login") }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route("register") }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                </div>
            </div>
            </nav>
@yield('content')
    </body>
</html>
