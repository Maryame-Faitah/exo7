<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            @if (count($menus) !== 0)
                @foreach ($menus as $menu)
                    <h2>{{$menu->section4}}</h2>
                @endforeach
            @else
                <h2>Contact</h2>
            @endif
            <div class="page-links">
                <a href="#">Home</a>
                @if (count($menus) !== 0)
                    @foreach ($menus as $menu)
                        <span>{{$menu->section4}}</span>
                    @endforeach
                @else
                    <span>Contact</span>
                @endif
            </div>
        </div>
    </div>
</div>