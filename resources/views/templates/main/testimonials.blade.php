<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                @if (count($testimonials) !== 0)
                    @foreach ($testimonials as $testimonial)
                        <div class="section-title left">
                            <h2>{{$testimonial->titre}}</h2>
                        </div>
                    @endforeach
                @else
                    <div class="section-title left">
                        <h2>What our clients say</h2>
                    </div>
                @endif
                <div class="owl-carousel" id="testimonial-slide">
                    @if (count($temoins) !== 0)
                        @foreach ($temoins as $temoin)
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>{{$temoin->temoignage}}</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="{{asset('storage/'.$temoin->img)}}" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>{{$temoin->prenom}} {{$temoin->nom}}</h2>
                                        <p>{{$temoin->fonction}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>