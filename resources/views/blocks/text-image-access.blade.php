<section class="s-text-image {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $position }}">
    <div class="s-text-image-wrapper">
      <x-title_text name="s-text-image" :title="$title" :description="$content"/>

      @if($button && $button['link'])
        <x-button
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
          icon="{{ $button['icon'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif
    </div>

    <x-slider
      name="text-image-{{ $block['id'] }}"
      :per="1"
      :perMd="1"
      :perSm="1"
      :perXs="1"
      :modules="['navigation']"
      effect="cards"
    >
      @foreach($images as $image)
        <div class="swiper-slide"
        >
          <x-media :media="$image"/>
        </div>
      @endforeach
    </x-slider>

    <x-slider
      name="text-image-mobile-{{ $block['id'] }}"
      :per="1"
      :perMd="1"
      :perSm="1"
      :perXs="1"
      :modules="['navigation']"
    >
      @foreach($images as $image)
        <div class="swiper-slide"
        >
          <x-media :media="$image"/>
        </div>
      @endforeach
    </x-slider>
  </div>
</section>
