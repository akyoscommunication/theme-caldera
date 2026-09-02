<div class="btn--wrapper">
  <a {{ $attributes->merge(['class' => 'btn'.($appearance ? " btn--$appearance" : null)]) }}>
    <div class="btn__text">
      {!! $slot !!}
      <div class="btn__text-line"></div>
      <div class="btn__text-line2"></div>
    </div>
  </a>
</div>
