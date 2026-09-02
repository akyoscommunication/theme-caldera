<section class="s-text-image-inline {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <div class="s-text-image-inline-wrapper {{ $position }}">
      <div class="s-text-image-inline-wrapper--image">
        @if($images[0])
          <x-media :media="$images[0]" animation-wipe/>
        @endif
      </div>

      <div class="s-text-image-inline-wrapper--text">
        @if($images[1])
          <x-media :media="$images[1]" animation-wipe/>
        @endif

        <div class="s-text-image-inline-wrapper--text_inner">
          <x-title :tag="$title['tag']" animation-mask>{!! $title['value'] !!}</x-title>

          <div class="s-text-image-inline__content" animation-stagger>
            {!! $content !!}
          </div>

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
      </div>
    </div>
  </div>
</section>
