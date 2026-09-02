<section class="s-hero {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <div class="s-hero-header">
      @if(isset($title))
        <x-title :tag="$title['tag']"
                 animation-overflow animation-highlight>
          {!! $title['value'] !!}
        </x-title>
      @endif

      <div class="s-hero-header-content">
        @if(isset($description))
          <div class="s-hero-header-content__text" animation-fade>
            {!! $description !!}
          </div>
        @endif

        @if($button && $button['link'])
          <x-button href="{{ $button['link']['url'] }}"
                    target="{{ $button['link']['target'] }}"
                    appearance="{!! $button['color'] !!}"
                    icon="{!! $button['icon'] !!}"
                    animation-fade
          >
            {!! $button['link']['title'] !!}
          </x-button>
        @endif
      </div>

      <x-socials/>
    </div>

    <x-media :media="$image_background" cover/>
  </div>
</section>
