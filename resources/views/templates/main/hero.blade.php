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
			<p>Get your freebie template now!</p>
		</div>
	</div>
	<!-- slider -->
	<div id="hero-slider" class="owl-carousel">
		<div class="item  hero-item" data-bg="img/01.jpg"></div>
		<div class="item  hero-item" data-bg="img/02.jpg"></div>
	</div>
</div>