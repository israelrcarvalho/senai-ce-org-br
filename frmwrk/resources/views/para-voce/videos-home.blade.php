@if(urlExists('http://www.youtube.com/feeds/videos.xml?channel_id=UCCPp_X3apUMebot_qOlNI2A'))
    <h3 class="titulo-separar"><a href="javascript:void(0);">TV Sistema FIEC</a></h3>
    <div class="videos">
        <ul class="swiper-wrapper teste" style="padding:0px!important;">

                @foreach(youTube('http://www.youtube.com/feeds/videos.xml?channel_id=UCCPp_X3apUMebot_qOlNI2A')  as $v)
                    <li class='swiper-slide play'>
                       <a href="{{$v->link['href']}}" target="_blank" id='{{substr($v->id,9,strlen($v->id))}}'/>
                            <img src="http://i1.ytimg.com/vi/{{substr($v->id,9,strlen($v->id))}}/mqdefault.jpg" />
                            <h5> {{$v->title}}</h5>
                       </a>
                    </li>
                @endforeach
        </ul>
        <div class="bt-controls">
            <div class="bt-nav">
                <div class="bt-next swiper-videos-next"><span><</span></div>
                <div class="bt-prev swiper-videos-prev"><span>></span></div>
            </div>
        </div>
    </div>

    <!--Vídeo que será aberto-->

    <div class="modal">
        <div class="overlay"></div>
        <div class="modal_contents modal-transition tv">
            <div class="centro">
                <div class="modal-header">
                    <span class="mobile-close"><img src="{{url(env('PATH_ASSETS').'/images/servicos/close.png')}}" alt="Close"/></span>
                    <div class="tv-ico"></div>
                </div>
                <div class="modal-body video-container"></div>
                <div class="modal-texto text-center"></div>
                <img src="{{url(env('PATH_ASSETS').'/images/pb-ico.png')}}" class='bt-pb' style='max-width:30px;' alt='Mudar a cor de fundo'>
            </div>
        </div>
    </div>
@else

    <h3>Não foi possível carregar vídeos... </h3>

@endif