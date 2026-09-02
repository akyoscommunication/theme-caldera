<ul class="c-socials" animation-stagger-single="1">
  @if($options['twitter'])
    <li class="c-socials__item">
      <x-button href="{{ $options['twitter'] }}" target="_blank" appearance="social" magnetic-strength="20">X</x-button>
    </li>
  @endif
  @if($options['facebook'])
    <li class="c-socials__item">
      <x-button href="{{ $options['facebook'] }}" target="_blank" appearance="social" magnetic-strength="20">Facebook</x-button>
    </li>
  @endif
  @if($options['linkedin'])
    <li class="c-socials__item">
      <x-button href="{{ $options['linkedin'] }}" target="_blank" appearance="social" magnetic-strength="20">LinkedIn</x-button>
    </li>
  @endif
  @if($options['instagram'])
    <li class="c-socials__item">
      <x-button href="{{ $options['instagram'] }}" target="_blank" appearance="social" magnetic-strength="20">Instagram</x-button>
    </li>
  @endif
  @if($options['youtube'])
    <li class="c-socials__item">
      <x-button href="{{ $options['youtube'] }}" target="_blank" appearance="social" magnetic-strength="20">Youtube</x-button>
    </li>
  @endif
</ul>
