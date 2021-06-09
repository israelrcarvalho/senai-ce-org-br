<div class="banner swiper-container responsive">
    <div class="swiper-wrapper">

        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <a href="{{$banner->banner_link }}"
                   onclick="_gaq.push(['_trackEvent', 'link','clicked', '{{ $banner->banner_link }}',,'true'])">
                    <img src="{{ $banner->banner_file }}"/>
                </a>
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>