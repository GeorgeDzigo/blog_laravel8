@extends('layouts.lay')
@section('createBlog')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
    body{
    margin-top:20px;
    background:#eee;
}
@media (min-width: 0) {
    .g-mr-15 {
        margin-right: 1.07143rem !important;
    }
}
@media (min-width: 0){
    .g-mt-3 {
        margin-top: 0.21429rem !important;
    }
}

.g-height-50 {
    height: 50px;
}

.g-width-50 {
    width: 50px !important;
}

@media (min-width: 0){
    .g-pa-30 {
        padding: 2.14286rem !important;
    }
}

.g-bg-secondary {
    background-color: #fafafa !important;
}

.u-shadow-v18 {
    box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
}

.g-color-gray-dark-v4 {
    color: #777 !important;
}

.g-font-size-12 {
    font-size: 0.85714rem !important;
}

.media-comment {
    margin-top:20px
}
</style>
@endsection
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
        @auth
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        @endauth
     {{-- Comments --}}
               <br>
           @if ($comments->count() != 0)
           <center>
               @foreach ($comments as $comment)
               <div class="container">
                   <div class="col-md-8">
                       <div class="media g-mb-30 media-comment">
                           <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
                           <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                             <div class="g-mb-15">
                               <h5 class="h5 g-color-gray-dark-v1 mb-0">{{ $comment->user->name }}</h5>
                             </div>

                             <p>{{ $comment->comment }}</p>
                           </div>
                       </div>
                   </div>
               </div>
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
