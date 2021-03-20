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
    <link rel="alternate" type="application/rss+xml" title="Clean Blog" href="https://startbootstrap.github.io/startbootstrap-clean-blog-jekyll/feed.xml">
    @yield('createBlog')

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
                        <a class="nav-link" href="{{ route("blog.create") }}">Create Blogs</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hello {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
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
<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">

            <li class="list-inline-item">
              <a href="mailto:your-email@example.com">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="far fa-envelope fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>


            <li class="list-inline-item">
              <a href="https://twitter.com/SBootstrap">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>


            <li class="list-inline-item">
              <a href="https://www.facebook.com/StartBootstrap">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>



            <li class="list-inline-item">
              <a href="https://github.com/StartBootstrap">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>


          </ul>
          <p class="copyright text-muted">Copyright © Start Bootstrap 2020</p>
        </div>
      </div>
    </div>
  </footer>


    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="/startbootstrap-clean-blog-jekyll/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/startbootstrap-clean-blog-jekyll/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/startbootstrap-clean-blog-jekyll/assets/vendor/startbootstrap-clean-blog/js/clean-blog.min.js"></script>

  <script src="/startbootstrap-clean-blog-jekyll/assets/scripts.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXXXXXX-X');
  </script>
    </body>
</html>
