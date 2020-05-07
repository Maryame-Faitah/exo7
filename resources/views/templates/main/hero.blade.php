<div class="hero-section">
	<div class="hero-content">
		<div class="hero-center">
			@if (count($menus) !== 0)
				@foreach ($menus as $menu)
					<img src="{{asset('storage/'.$menu->img)}}" alt="">
				@endforeach
			@else
				<img src="img/big-logo.png" alt="">
			@endif
			@if (count($slogans) !== 0)
				@foreach ($slogans as $slogan)
					<p>{{$slogan->titre}}</p>
				@endforeach
			@else
				<p>Get your freebie template now!</p>
			@endif
		</div>
	</div>
	<!-- slider -->
	<div id="hero-slider" class="owl-carousel">
		@if (count($heros) !== 0)
				@foreach ($heros as $hero)
					<div class="item hero-item" data-bg="{{asset('storage/'.$hero->img)}}"></div>
				@endforeach
			@else
				<div class="item  hero-item" data-bg="img/01.jpg"></div>
				<div class="item  hero-item" data-bg="img/02.jpg"></div>
			@endif
	</div>
</div>