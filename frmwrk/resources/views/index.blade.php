@extends('template.layout')
@section('title', 'Sistema FIEC')
@section('conteudo')

    <div class="bg-inicial">
        <nav class="inicial">
            <h1>
                <a href="{{url('/')}}">
                    <img src="{{url(env('PATH_ASSETS').'/images/logo-inicial.svg')}}" alt="Senai" title="senai" />
                </a>
            </h1>
            <ul>
                <li><a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/images/inicial/paravoce.svg')}}" alt="" title="" />
                        <span class="mini">Educação Profissional</span>
                        <span>PARA VOCÊ</span>
                    </a></li>
                <li><a href="para-industria">
                        <img src="{{url(env('PATH_ASSETS').'/images/inicial/paraindustria.svg')}}" alt="" title="" />
                        <span class="mini">Serviços e Inovação</span>
                        <span>PARA INDÚSTRIA</span>
                    </a></li>
            </ul>
        </nav>
    </div>
    {{--
    <div class="bg-inicial">
        <nav class="inicial t3">
            <h1><a href="?st=index"><img src="{{url(env('PATH_ASSETS').'/images/logo-inicial.svg')}}" alt="Sistema FIEC" title="Sistema FIEC"></a></h1>
            <ul>
                <li><a href="para-voce">
                        <img src="{{url(env('PATH_ASSETS').'/images/inicial/para-voce.png')}}" alt="" title="">
                        <span class="mini">Produtos e Serviços</span>
                        <span>PARA VOCÊ</span>
                    </a></li>
                <li><a href="para-industria">
                        <img src="{{url(env('PATH_ASSETS').'/images/inicial/para-industria.png')}}" alt="" title="">
                        <span class="mini">Serviços e Inovação</span>
                        <span>PARA INDÚSTRIA</span>
                    </a></li>
                <li><a href="para-sindicato">
                        <img src="{{url(env('PATH_ASSETS').'/images/inicial/para-sindicato.png')}}" alt="" title="">
                        <span class="mini">Serviços e Assessoria</span>
                        <span>PARA SINDICATO</span>
                    </a></li>
            </ul>
        </nav>
    </div>
--}}
@endsection
