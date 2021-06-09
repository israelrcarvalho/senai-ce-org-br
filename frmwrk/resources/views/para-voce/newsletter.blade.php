@section('scripts')
    <script src="{{url(env('PATH_ASSETS').'/shared/js/lib/jquery/jquery-validation-1.13.1/dist/jquery.validate.min.js')}}"
            type="text/javascript"></script>
    <script src="{{url(env('PATH_ASSETS').'/js/ajax-newsletter.js')}}"
            type="text/javascript"></script>
@endsection
<div class="newsletter">
    <form id="form-newsletters" action="" method="post">
        <p>Receba nossas notícias em primeira mão:</p>
        <input type="text" required name="newsletter_nome" placeholder="Nome:">
        <input type="email" required name="newsletter_email" placeholder="E-mail:">
        <input type="button" class="btn-newsletter" data-href="#dados" value="ok">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div id="dados" class="select-dados">

            <div class="dialog">
                <span id="loader">
                    <img src="{{url(env('PATH_ASSETS').'/images/loader2.gif')}}" alt="">
                </span>
            </div>
            @forelse($grupos as $g)
                <label class="grupoemail">
                    <input required type="checkbox" name="grupo[]" value="{{$g->gruponewsletter_id}}">
                    <em>{{$g->gruponewsletter_nome}}</em>
                </label>
            @empty
                sem informações
            @endforelse
            <div style="border-top:dashed 1px #ccc; clear: both; height: 43px; padding: 3px;">
                <input id="submit-newsletters" type="button" value="confirmar">
            </div>
        </div>

    </form>
</div>

@section('styles')
    <link href="{{url(env('PATH_ASSETS').'/css/newsletter.css')}}" rel="stylesheet" type="text/css">
@stop