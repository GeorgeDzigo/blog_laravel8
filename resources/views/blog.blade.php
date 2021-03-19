@extends('layouts.lay')

@section('content')
    <!-- Page Header -->

  <header class="masthead" style='background-image: url({{ $blog->photo_path }})'>

      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$blog->title}}</h1>

              <span class="meta">Posted by User,  {{ date('D m-Y', strtotime($blog->created_at)) }}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <img class="img-fluid" src="{{ $blog->photo_path }}" alt="Demo Image">
<p>{{ $blog->body }}</p>

            <h6>Views: {{ $blog->views }}</h6>
          <hr>

        </div>
      </div>
     {{-- START --}}
               <br>
           @if ($comments->count() != 0)
           <center>
               @foreach ($comments as $comment)
                    <article class="post-preview">
                        <p class="post-meta text-center">{{ $comment->comment }}</p>
                    </article>
               @endforeach
            </center>
           @else
            <h6 class="text-center">There's no comments on this post</h6>
           @endif

     {{-- END --}}
    </div>


    <!-- Footer -->

  <hr>
@endsection
