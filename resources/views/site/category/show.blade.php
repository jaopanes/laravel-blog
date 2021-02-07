@extends('layouts.site')

@section('title', 'Produtos')

@section('content')
    <header style="background-image: url({{asset('assets/images/photo-home.jpg')}})"></header>

    <section>
        <div class="row">
            <div class="col-12">
                <h2 class="title-section d-flex flex-column">Produtos {{$slug}}</h2>
            </div>
        </div>
    </section>
@endsection
