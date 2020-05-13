<div class="team-section spad" id="features">
    <div class="overlay"></div>
    <div class="container">
        @if (count($features) !== 0)
            @foreach ($features as $feature)
                <div class="section-title">
                    <h2>{{$feature->titre}}</h2>
                </div>        
            @endforeach
        @else
            <div class="section-title">
                <h2>Get in <span>the Lab</span> and  discover the world</h2>
            </div>
        @endif
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @if (count($servicesprimeslefts) !== 0)
                    @foreach($servicesprimeslefts as $servicesprimeleft)
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2>{{$servicesprimeleft->titre}}</h2>
                                <p>{{$servicesprimeleft->description}}</p>
                            </div>
                            <div class="icon">
                                <i class="{{$servicesprimeleft->icon}}"></i>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- feature item -->
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>Projects online</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                        </div>
                        <div class="icon">
                            <i class="flaticon-019-coffee-cup"></i>
                        </div>
                    </div>
                    <!-- feature item -->
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>Projects online</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                        </div>
                        <div class="icon">
                            <i class="flaticon-019-coffee-cup"></i>
                        </div>
                    </div>
                    <!-- feature item -->
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>SMART MARKETING</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                        </div>
                        <div class="icon">
                            <i class="flaticon-020-creativity"></i>
                        </div>
                    </div>
                @endif
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @if (count($servicesprimesrights) !== 0)
                    @foreach ($servicesprimesrights as $servicesprimesright)
                        <div class="icon-box light">
                            <div class="icon">
                                <i class="{{$servicesprimesright->icon}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$servicesprimesright->titre}}</h2>
                                <p>{{$servicesprimesright->description}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- feature item -->
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <div class="service-text">
                            <h2>Get in the lab</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                        </div>
                    </div>
                    <!-- feature item -->
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="flaticon-025-imagination"></i>
                        </div>
                        <div class="service-text">
                            <h2>Projects online</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                        </div>
                    </div>
                    <!-- feature item -->
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="flaticon-008-team"></i>
                        </div>
                        <div class="service-text">
                            <h2>SMART MARKETING</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @if (count($features) !== 0)
            @foreach ($features as $feature)
                <div class="text-center mt100">
                    <a href="/blog" class="site-btn">{{$feature->nom_btn}}</a>
                </div>        
            @endforeach
        @else
            <div class="text-center mt100">
                <a href="/blog" class="site-btn">Browse</a>
            </div>
        @endif
    </div>
</div>