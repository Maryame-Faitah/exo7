<header class="header-section">
    <div class="logo">
		@if (count($menus) !== 0)
			@foreach ($menus as $menu)
				<img src="{{asset('storage/'.$menu->img)}}" alt="" style="width:20%">	
			@endforeach
		@else
			<img src="img/logo.png" alt=""><!-- Logo -->
		@endif
	</div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @if (count($menus) !== 0)
                @foreach ($menus as $menu)
                    <li><a href="/">{{$menu->section1}}</a></li>
                    <li><a href="/services">{{$menu->section2}}</a></li>
                    <li class="active"><a href="/blog">{{$menu->section3}}</a></li>
                    <li><a href="/contact">{{$menu->section4}}</a></li>
                    <li><a href="#">Elements</a></li>
                @endforeach
            @else
                <li><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li class="active"><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="#">Elements</a></li>
            @endif
        </ul>
    </nav>
</header>