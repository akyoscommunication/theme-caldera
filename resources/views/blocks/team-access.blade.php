<section class="s-team {{ $classes }}" style="{{ $styles }}">
  <div class="container">

    <x-title_text name="s-team" :title="$title" :description="$description"/>

    <div class="s-team-list">
      <div class="s-team-list-wrapper">
        @foreach($teams as $team)
          <div class="c-team {{ !$team['name'] ? 'c-team--empty' : null }}" animation-stagger>
            @if($team['image'])
              <x-media :media="$team['image']"/>
            @endif
            @if($team['name'])
              <div class="c-team-content">
                <h3 class="c-team-content__title">{{ $team['name'] }}</h3>
                <div class="c-team-content__text">{{ $team['job'] }}</div>
              </div>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
