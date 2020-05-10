<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @if (count($teams) !== 0)
                @foreach ($teams as $team)
                    <h2>{{$team->titre}}</h2>
                @endforeach
            @else
                <h2>Get in <span>the Lab</span> and  meet the team</h2>
            @endif
        </div>
        <div class="row">
            @if (count($membres) !== 0)
                @foreach ($membres as $membre)
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{asset('storage/'.$membre->img)}}" alt="">
                            <h2>{{$membre->prenom}} {{$membre->nom}}</h2>
                            <h3>{{$membre->fonction}}</h3>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/1.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Project Manager</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/2.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Junior developer</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/3.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Digital designer</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>