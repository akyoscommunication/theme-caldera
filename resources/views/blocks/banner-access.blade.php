<section class="s-banner {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <div class="s-banner-title text-center">
      <x-title_text name="s-banner" :title="$title" :description="$description"/>
    </div>

    <div class="s-banner-list">
      @if(count($elements) <= 6)
        <div class="s-banner-list-wrapper">
          @foreach($elements as $element)
            @if($element['link'])
              <a href="{{ $element['link']['url'] }}" target="_blank">
                @endif
                <x-media :media="$element['image']"/>
                @if($element['link'])
              </a>
            @endif
          @endforeach
        </div>
      @else
        <x-slider
          name="text-image-{{ $block['id'] }}"
          :per="6"
          :perMd="6"
          :perSm="3"
          :perXs="1"
          :modules="['navigation']"
          :extra="['spaceBetween' => 20, 'direction' =>'vertical', 'slidesPerGroup' => 3]"
          effect="wheel"
        >
          @foreach($elements as $element)
            <div class="swiper-slide">
              @if($element['link'])
                <a href="{{ $element['link']['url'] }}" target="_blank">
                  @endif
                  <x-media :media="$element['image']"/>
                  @if($element['link'])
                </a>
              @endif
            </div>
          @endforeach
        </x-slider>

        <x-slider
          name="text-image-mobile-{{ $block['id'] }}"
          :per="3"
          :perMd="3"
          :perSm="3"
          :perXs="1"
          :modules="['navigation']"
          :extra="['spaceBetween' => 20]"
          effect
        >
          @foreach($elements as $element)
            <div class="swiper-slide">
              @if($element['link'])
                <a href="{{ $element['link']['url'] }}" target="_blank">
                  @endif
                  <x-media :media="$element['image']" animation-stagger/>
                  @if($element['link'])
                </a>
              @endif
            </div>
          @endforeach
        </x-slider>
      @endif
    </div>
  </div>
</section>
