<h3 class="titulo-separar"><a href="http://www.senai-ce.org.br/cursos-por-area">Inscrições Abertas</a></h3>

<div class="lista-passagem lista-passagem swiper-container-horizontal">

    <ul class="lista-passagem-bts swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-3600px, 0px, 0px);">

        @foreach ($cursos->chunk(2) as $chunk)
            <li class="swiper-slide">
                @foreach ($chunk as $curso)
                    <a href="cursos/{{$curso->idcurso}}/{{str_slug(($nomeDaModalidade))}}/{{str_slug(($curso->curso))}}" style="min-height:160px;">
                        <img src="{{ url('imagens/servicos/pv-qualificacao.svg') }}" alt="" title="">
                        <h4>{{ $curso->curso }}</h4>
                        <p>
                            PERÍODO: {{ $curso->dt_inicio_curso }} à {{ $curso->dt_inicio_curso }}
                            <br>
                            HORÁRIO: {{ $curso->h_inicio }} - {{ $curso->h_fim }}
                            <br>
                            VALOR: R$ {{ $curso->valor_total }}
                            <br>
                            CIDADE: {{ $curso->cidade }}

                        </p>
                    </a>
                @endforeach
            </li>
        @endforeach
    </ul>

    <div class="noticias-button">
        <div class="bt-controls">
            <div id="customNav" class="bt-nav">
                <div class="bt-next swiper-noticias-prev"><span>&lt;</span></div>
                <div class="bt-prev swiper-noticias-next"><span>&gt;</span></div>
            </div>
        </div>
    </div>
</div>