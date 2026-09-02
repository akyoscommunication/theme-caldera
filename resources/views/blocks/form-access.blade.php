@php $shortcode = "[forminator_form id=".$form."]" @endphp

<section class="s-form {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $content_position }}">
    <div class="s-form-wrapper">
      <x-media :media="$image" animation-wipe/>

      <div class="s-form-infos" animation-stagger>
        {!! $options['address'] !!}
        <a
          href="tel:+33{{ $options['phone'] }}">@icon('phone') {!! $options['phone'] !!}</a>
        <a
          href="mailto:{{ $options['email'] }}">@icon('mail') {!! $options['email'] !!}</a>
        <x-socials/>
      </div>

    </div>
    <div class="s-form-wrapper">
      <x-title tag="h1" animation-overflow>
        <div class="c-title__item">
          <span>{!! $description_short !!}</span>
        </div>
      </x-title>

      <div class="s-form__form" animation-stagger-single="0.6">
        {!! $shortcode !!}
      </div>
    </div>
  </div>
</section>
