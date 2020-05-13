<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" action="{{route('newsletter.store')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Your e-mail here" name="email" id="email">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
            <div class="text-center">
                <div class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                @if (session('messages'))
                    <div class="text-success">
                        {{session('messages')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>