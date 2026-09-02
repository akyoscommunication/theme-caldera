<section class="s-gallery" style="{{ $styles }}">
	<div class="container">
		<x-title_text name="s-gallery" :title="$title" :description="$description"/>

		<x-slider
				name="text-image-{{ $block['id'] }}"
				:per="3"
				:perMd="3"
				:perSm="1"
				:perXs="1"
				:modules="['navigation']"
				:extra="['spaceBetween' => 45, 'centeredSlides' => true, 'initialSlide' => 1, 'speed' => 1000]"
				effect="wheel"
		>
			@foreach($gallery as $item)
				<div class="swiper-slide">
					@include('akyos-access::partials.gallery-media', ['media' => $item])
				</div>
			@endforeach
		</x-slider>
  </div>
</section>
