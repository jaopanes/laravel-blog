@extends('layouts.site')

@section('title', 'Blog')

@section('content')
    <header style="background-image: url({{ asset('assets/images/photo-blog.jpg') }})"></header>

    <section>
        <div class="row">
            <div class="col-12">
                <h2 class="title-section d-flex flex-column">Blog</h2>
            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4 col-sm-12">
                    <article>
                        <div class="image-article" style="background-image: url({{ asset('uploads/' . $post->image) }})"></div>

                        <div class="based-text">
                            <h3 class="title-article"><a href="{{ route('site.blog.read', ['id' => $post->id, 'url' => $post->url()]) }}">{{ $post->title }}</a></h3>
                            <h5 class="date">{{ $post->created_at }}</h5>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </section>
@endsection
