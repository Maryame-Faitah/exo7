<div class="about-section">
	<div class="overlay"></div>
	<!-- card section -->
	<div class="card-section">
		<div class="container">
			<div class="row">
				@if (count($servicesrapides) !== 0)
					@foreach ($servicesrapides->random(3) as $servicesrapide)
						<!-- single card -->
						<div class="col-md-4 @if($loop->last) col-sm-12 @else col-sm-6 @endif">
							{{-- cdt pour responsivité --}}
							<div class="lab-card">
								<div class="icon">
									<i class="{{$servicesrapide->icon}}"></i>
								</div>
								<h2>{{$servicesrapide->titre}}</h2>
								<p>{{$servicesrapide->description}}</p>
							</div>
						</div>
					@endforeach
				@else
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiatnec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
	<!-- card section end-->


	<!-- About contant -->
	<div class="about-contant">
		<div class="container">
			@if (count($abouts) !== 0)
				@foreach ($abouts as $about)
					<div class="section-title">
						<h2>{{$about->titre}}</h2>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p>{{$about->texte_gauche}}</p>
						</div>
						<div class="col-md-6">
							<p>{{$about->texte_droite}}</p>
						</div>
					</div>
					<div class="text-center mt60">
						@if (count($abouts) !== 0)
							@foreach ($abouts as $about)
								<a href="/contact" class="site-btn">{{$about->nom_btn}}</a>
							@endforeach
						@else
							<a href="/contact" class="site-btn">Browse</a>
						@endif
					</div>
				@endforeach
			@else
				<div class="section-title">
					<h2>Get in <span>the Lab</span> and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
					</div>
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
			@endif
			<!-- popup video -->
			<div class="intro-video">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<img src="img/video.jpg" alt="">
						@if (count($videos) !== 0)
							@foreach ($videos as $video)
								<a href="{{$video->lien}}" class="video-popup">
									<i class="fa fa-play"></i>
								</a>
							@endforeach
						@else
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>