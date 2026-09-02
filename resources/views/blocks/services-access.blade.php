<section class="s-services {{ $classes }}" style="{{ $styles }}">

  <div class="container">
    <div class="s-services-wrapper">
      <div class="s-services-wrapper_header">
        <x-title_text name="s-services" :title="$title" :description="$description"/>
      </div>
      @if(\Akyos\Access\Acf\Fields\ButtonAccess::hasLink($button))
        <x-button
          class="{{ count($services) > 4 ? 'btn--absolute': null }}"
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif
    </div>

    <div class="s-services-list">
      <div class="s-services-list-wrapper">
        @foreach($services as $service)
          <x-card
            :title="$service['title']"
            :content="$service['description']"
            :url="$service['link']"
            :image="$service['image']"
          />
        @endforeach
      </div>
    </div>
  </div>
</section>

