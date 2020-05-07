<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            @if (count($menus) !== 0)
                @foreach ($menus as $menu)
                    <h2>{{$menu->section3}}</h2>
                @endforeach
            @else
                <h2>Blog</h2>
            @endif
            <div class="page-links">
                <a href="#">Home</a>
                @if (count($menus) !== 0)
                    @foreach ($menus as $menu)
                        <span>{{$menu->section3}}</span>
                    @endforeach
                @else
                    <span>Blog</span>
                @endif
            </div>
        </div>
    </div>
</div>