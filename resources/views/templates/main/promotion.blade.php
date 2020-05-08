<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @if (count($readys) !== 0)
                    @foreach ($readys as $ready)
                        <h2>{{$ready->titre}}</h2>
                        <p>{{$ready->description}}</p>
                    @endforeach
                @else
                    <h2>Are you ready to stand out?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
                @endif
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    @if (count($readys) !== 0)
                    @foreach ($readys as $ready)
                        <a href="/contact" class="site-btn btn-2">{{$ready->nom_btn}}</a>
                    @endforeach
                @else
                    <a href="/contact" class="site-btn btn-2">Browse</a>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>