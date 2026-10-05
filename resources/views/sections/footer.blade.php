<footer>
  <a href="{{ $footer_secondary_button['link']['url'] }}">
    <div class="sub-footer">
      <div class="sub-footer__text">
        {!! $footer_secondary_text !!}
      </div>
      <div class="sub-footer__cta">{{ $footer_secondary_button['link']['title'] }}</div>
    </div>
  </a>

  <div class="footer">
    <div class="container">
      <div class="footer-columns">
        <div class="footer-columns-item">
          @if($footer_logo)
            <x-image variant="logo" :lg="$footer_logo"/>
          @endif
        </div>
        <div class="footer-columns-item">
          <x-socials/>
        </div>
        <div class="footer-columns-item">
          <div class="footer-columns-item__infos">
            <p>{!! $address !!}</p>
            <a href="tel:+33{{ $phone }}">{!! $phone !!}</a>
            <a href="mailto:{{ $email }}">{!! $email !!}</a>
          </div>
          <div class="footer-columns-item__text">
            {!! $footer_horaire !!}
          </div>
        </div>
        <div class="footer-columns-item">
          <div class="footer-columns-item__text">
            @if($footer_text)
              {!! $footer_text !!}
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-sitename" aria-label="{{ $siteName }}">
    <div class="footer-sitename__track" aria-hidden="true">
      <span>{{ $siteName }}</span>
      <span>{{ $siteName }}</span>
    </div>
  </div>


  <div class="copy-footer">
    <div class="container">
      <p>{!! $footer_copyright !!}</p>
      @menu('legal_navigation')
      <a href="https://akyos.com" target="_blank">Création Akyos</a>
    </div>
  </div>
</footer>

