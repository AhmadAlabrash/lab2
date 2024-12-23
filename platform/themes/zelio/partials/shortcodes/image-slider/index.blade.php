<section class="section-brands-1 section-padding">
    @if($shortcode->title || $shortcode->subtitle)
        <div class="container">
            <div class="text-center">
                @if($shortcode->title)
                    <h2>{!! BaseHelper::clean($shortcode->title) !!}</h2>
                @endif
                @if($shortcode->subtitle)
                    <p class="text-300">
                        {!! BaseHelper::clean(nl2br($shortcode->subtitle)) !!}
                    </p>
                @endif
            </div>
        </div>
    @endif
    <div class="container-fluid">
        <div class="carouselTicker carouselTicker-right mt-5 position-relative z-1">
            <ul class="carouselTicker__list" style="list-style-type: none">
                @foreach($tabs as $tab)
                    <li class="carouselTicker__item">
                        @if($tab['url'])
                            <a href="{{ $tab['url'] }}" @if($tab['open_in_new_tab']) target="_blank" @endif>
                                {{ RvMedia::image($tab['image'], $tab['name']) }}
                            </a>
                        @else
                            {{ RvMedia::image($tab['image'], $tab['name']) }}
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
