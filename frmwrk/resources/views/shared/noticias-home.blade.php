<h3 class="titulo-separar"><a href="sobre-nos/noticias">Notícias</a></h3>
<div class="noticias swiper-container-horizontal">
    {{--<ul class="swiper-wrapper" style="padding:0px!important;">--}}
    <ul>
    @forelse($noticias as $c)
            <li class="swiper-slide">
                <a href="fiec-noticias/{{$c->conteudo_id }}/{{ str_slug($c->conteudo_nome) }}">
                <img src="{{ getImagem($c->conteudo_resumo, true) }}" />
                    <h5> {{ $c->conteudo_nome }} </h5>
                    <p>
                        {{ strip_tags($c->conteudo_resumo) }}
                    </p>
                </a>
            </li>
        @empty
        <li> sem informações</li>
        @endforelse
    </ul>
{{--    <div class="noticias-button">
        <div class="bt-controls">
            <div id="customNav" class="bt-nav">
                <div class="bt-prev swiper-noticias-prev"><span><</span></div>
                <div class="bt-next swiper-noticias-next"><span>></span></div>
            </div>
        </div>
    </div>--}}
</div>
