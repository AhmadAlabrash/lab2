<div class="section-static-1 z-0">
    <div class="container position-relative z-1">
        <div class="bg-3 py-60 border border-1 rounded-3 position-relative overflow-hidden">
            <div class="inner">
                <div class="row align-items-center justify-content-lg-around justify-content-center">
                    @foreach($tabs as $tab)
                        <div class="col-lg-auto col-md-6 text-center text-lg-start">
                            <div class="counter-item-cover counter-item">
                                <div class="content mx-auto">
                                    @if($tab['icon'])
                                        <x-core::icon :name="$tab['icon']" class="text-primary-2" />
                                    @endif
                                    <h2 class="text-300 my-0 fs-50">
                                        <span class="odometer text-dark fw-medium" data-count="{{ $tab['count'] }}"></span>
                                        <span class="fs-50 text-300 mb-0">+</span>
                                    </h2>
                                    @if($tab['label'])
                                        <p class="fs-6 mb-0 text-dark">{{ $tab['label'] }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if($shortcode->background_image)
                <div class="background position-absolute top-0 start-0 w-100 h-100 filter-invert" data-background="{{ RvMedia::getImageUrl($shortcode->background_image) }}"></div>
            @endif
        </div>
    </div>
</div>
