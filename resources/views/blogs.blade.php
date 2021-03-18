@extends('layouts.lay')

@section('content')
    <!-- Page Header -->

    <header class="masthead" style="background-image: url('https://startbootstrap.github.io/startbootstrap-clean-blog-jekyll/img/bg-index.jpg')">

        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
                <h1>Clean Blog</h1>

                <span class="subheading">A Blog Theme by Start Bootstrap</span>

            </div>
            </div>
        </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">



            <!-- Home Post List -->

    @foreach ($blogs as $blog)
    <article class="post-preview">
        <a href="{{ route("blog", $blog->id) }}">
        <h2 class="post-title">{{ $blog->title }}</h2>

        <h3 class="post-subtitle">{{ $blog->desc }}</h3>

        </a>
        <p class="post-meta">Posted by User,  {{ date('D m-Y', strtotime($blog->created_at)) }}</p>
    </article>

    <hr>
    @endforeach



        </div>
        </div>
    </div>


    <!-- Footer -->

    <hr>

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
@endsection
