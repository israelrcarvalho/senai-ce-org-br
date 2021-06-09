@section('scripts')
    <script src="{{url(env('PATH_ASSETS').'/js/transparencia.js')}}" type="text/javascript"></script>


    <script src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery-validation-1.13.1/dist/jquery.validate.min.js')}}"
            type="text/javascript"></script>
    <script src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery.maskedinput.min.js')}}"
            type="text/javascript"></script>
    <script src="{{url(env('PATH_ASSETS').'/js/transparencia-fale-conosco.js')}}" type="text/javascript"></script>
@endsection


<div class="botoes_interna transparencia" id="menuLateralDirgggggg"
     data-ativar="{{is_null(Request::segment(3)) ? Request::segment(2) : Request::segment(3) }}">

    <ul class="t4">
        <ul class="menu-t"> <span class="play-2" aria-hidden="true"></span> TRANSPARÊNCIA</ul>
        <ul class="submenu-t" id="faq">
            @forelse($menuTransparencia as $m)
                <a style=" text-transform: uppercase;"
                   href="transparencia/{{$m->categoria_id}}/{{str_slug($m->categoria_nome)}}"
                   id="{{str_slug($m->categoria_nome)}}"
                   title="{{$m->categoria_nome}}">
                    <li>{{$m->categoria_nome}} </li>
                </a>
            @empty
                sem informações
            @endforelse
        </ul>
        <ul class="menu-t"><span class="play-2" aria-hidden="true"></span> SAC</ul>
        <ul class="submenu-t" id="faq-2">
            <a href="transparencia/fale-conosco" id="fale-conosco">
                <li>FALE CONOSCO</li>
            </a>
            <a href="transparencia/duvidas-frequentes" id="duvidas-frequentes">
                <li>DÚVIDAS FREQUENTES (FAQ)</li>
            </a>
            <a href="transparencia/contato-nos-estados" id="contato-nos-estados"><li>CONTATO NOS ESTADOS</li></a>
        </ul>
    </ul>

</div>