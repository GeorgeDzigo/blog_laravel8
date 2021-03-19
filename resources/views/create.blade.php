@extends('layouts.lay')

@section('createBlog')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

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
                <div class="wrapper">
                    <div id="page" class="container">
                        <h1 class="heading has-text-weight-bold is-size-4">შექმენი ბლოგი</h1>
                        <form action="/" method="post" enctype="multipart/form-data">
                            @csrf


                            {{-- TITLE --}}
                            <div class="field">
                                    <label for="title" class="label">სათაური</label>
                                    <div class="control">
                                        <input
                                            type="text"
                                            class="input @error("title") is-danger @enderror"
                                            name="title"
                                            id="title"
                                            value="{{ old("title") }}"
                                        >

                                        @error('title')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror

                                    </div>
                            </div>


                            {{-- DESC --}}
                            <div class="field">
                                    <label for="desc" class="label">მოკლე აღწერა</label>

                                    <div class="control">
                                        <textarea
                                            class="textarea @error("desc") is-danger @enderror"
                                            name="desc"
                                            id="desc"
                                        >{{ old('desc') }}</textarea>
                                        @error("desc")
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                            </div>


                            {{-- BODY --}}
                            <div class="field">
                                    <label for="body" class="label">სრული აღწერა</label>

                                    <div class="control">
                                        <textarea
                                            class="textarea @error("body") is-danger @enderror"
                                            name="body"
                                            id="body"
                                        >{{ old("body") }}</textarea>

                                        @error("body")
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                            </div>


                            {{-- PHOTO --}}
                            <div class="field">
                                <label for="image" class="label">სურათი</label>
                                <div class="control">
                                    <input
                                        type="file"
                                        class="@error("title") is-danger @enderror"
                                        name="photo_path"
                                        id="photo_path"
                                    >

                                    @error('photo_path')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>

                            {{-- SUBMIT --}}
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" type='submit'>შექმნა</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<hr>
@endsection
