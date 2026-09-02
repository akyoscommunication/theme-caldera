@php
  use Akyos\Access\Support\SinglePostHelper;

  $terms = get_the_terms(get_the_ID(), 'category');
  $term = array_shift($terms);
  $singleEnhanced = SinglePostHelper::isEnabled();
@endphp

<article @if($singleEnhanced) class="single--enhanced" @endif>

  <div class="single-hero container">
    <x-title tag="h1" animation-overflow>
      <div class="c-title__item">
        <span>{{ get_the_title() }}</span>
      </div>
    </x-title>

    <div class="single-hero__description" animation-stagger-single="0.5">
      {{ get_the_date('d/m/Y') }}
    </div>

    <x-image :lg="get_post_thumbnail_id(get_the_ID())" animation-fade/>
  </div>

  <section class="single-content">
    @include('akyos-access::partials.single-article-content')

    @if($term && $getPostsTerm($term->slug, 2, 'category', [get_the_ID()]))
      <div class="single-content__other-posts">
        <div class="container">
          <x-title tag="h2" position="left">Nos derniers articles</x-title>
          <div class="other-posts__grid">
            @foreach($getPostsTerm($term->slug, 2, 'category', [get_the_ID()]) as $post)
              <x-post :post="$post" animation-stagger/>
            @endforeach
          </div>
          <x-button href="/actualites"
                    appearance="primary"
          >
            Voir toutes les actualités
          </x-button>
        </div>
      </div>
    @endif
  </section>
</article>
