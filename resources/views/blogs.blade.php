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
    @if ($blogs->count() != 0)
        @foreach ($blogs as $blog)
        <article class="post-preview">
            <a href="{{ route("blog", $blog->id) }}">
            <h2 class="post-title">{{ $blog->title }}</h2>

            <h5 class="post-subtitle">{{ $blog->desc }}</h5>

            </a>
            <p class="post-meta">Posted by User,  {{ date('D m-Y', strtotime($blog->created_at)) }}, Views : {{ $blog->views }}</p>
        </article>

        <hr>
        @endforeach

    @else
        <h1>There's no blogs posted yet</h1>
    @endif




        </div>
        </div>
    </div>

    <hr>
@endsection
