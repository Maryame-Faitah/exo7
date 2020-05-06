<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    @if (count($contacts) !== 0)
                        @foreach ($contacts as $contact)
                            <h2>{{$contact->titre}}</h2>
                        @endforeach
                    @else
                        <h2>Contact us</h2>
                    @endif
                </div>
                @if (count($contacts) !== 0)
                    @foreach ($contacts as $contact)
                        <p>{{$contact->description}}</p>
                        <h3>{{$contact->sous_titre}}</h3>
                        <p>{{$contact->adresse}}</p>
                        <p>{{$contact->telephone}}</p>
                        <p>{{$contact->email}}</p>
                    @endforeach
                @else
                    <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. 
                    </p>
                    <h3 class="mt60">Main Office</h3>
                    <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                    <p class="con-item">0034 37483 2445 322</p>
                    <p class="con-item">hello@company.com</p>
                @endif
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>