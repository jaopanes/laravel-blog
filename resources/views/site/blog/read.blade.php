@extends('layouts.site')

@section('title', 'Blog')

@section('content')
    <header style="background-image: url({{ asset('uploads/' . $post->image) }})"></header>

    <section>
        <div class="row">
            <div class="col-12">
                <h2 class="title-section d-flex flex-column">{{ $post->title }}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="content-blog">{{ $post->content }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="author-blog">Postado por <strong>{{ $authorPost->name }}</strong></p>
                <p class="date-blog">{{ $post->created_at }}</p>
            </div>
        </div>
    </section>
@endsection
