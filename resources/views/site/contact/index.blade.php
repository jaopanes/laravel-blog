@extends('layouts.site')

@section('title', 'Contato')

@section('content')
    <header style="background-image: url({{asset('assets/images/photo-contact.jpg')}})"></header>

    <section>
        <div class="row">
            <div class="col-12">
                <h2 class="title-section d-flex flex-column">Contato</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <p class="desc-section">Entre em contato e logo retornaremos um e-mail!</p>

                <form method="POST" action="{{route("site.contact.form")}}">
                    @csrf

                    <div class="input-group">
                        <label for="name">Nome completo</label>
                        <input id="name" type="text" autofocus name="name" tabindex="1" placeholder="Ex: Fulano da Silva">
                    </div>

                    <div class="input-group">
                        <label for="email">E-mail</label>
                        <input id="name" type="email" autofocus name="email" tabindex="2" placeholder="fulanodasilva@email.com">
                    </div>

                    <div class="input-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" type="email" autofocus name="message" tabindex="3" placeholder="Digite aqui..."></textarea>
                    </div>

                    <button type="submit">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </section>
@endsection
