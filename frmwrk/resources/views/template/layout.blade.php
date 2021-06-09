<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="@yield('description')">
        <meta name="author" content="Gerenciador de Conteúdos">
        <meta name="keywords" content="@yield('keywords')" />
        {{--<meta name="googlebot" content="@yield('googlebot')" />--}}

        <link rel="icon" type="image/x-icon" href="{{url(env('PATH_ASSETS').'/shared/images/icon.ico')}}" />
        <link rel="apple-touch-icon" href="{{url(env('PATH_ASSETS').'/shared/images/apple-icon.png')}}" />

        <base href="{{ url('/') }}/"/>
        <title>SENAI - CE :: @yield('title')</title>
        @include('template.css')
        @yield('styles')
    </head>
    <body>
    {{-- Barra Principal --}}
    @include('shared.barra-sistema')
        {{-- --}}
        @yield('conteudo')
        {{-- --}}
        <div class="bg-dados">
            <div class="dados">
                <ul></ul>
            </div>
        </div>
        {{-- Rodapé aqui --}}
    @include('template.rodape')
    {{-- Fim do rodape--}}
    <div class="bg-contato">
        <address><strong>SENAI - Departamento Regional do Ceará </strong>| CNPJ: 03.768.202/0001-76 <br/>Av. Barão de Studart, 1980, 1º andar - Aldeota - Fortaleza/CE - CEP: 60.120-024</address>
    </div>
    @include('template.scripts')
    @yield('scripts')
	{{--  @include('template.analyticstracking') --}}
    </body>
</html>