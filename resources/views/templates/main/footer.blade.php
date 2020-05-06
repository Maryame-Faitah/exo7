<footer class="footer-section">
    @if (count($footers) !== 0)
        @foreach ($footers as $footer)
            <h2>{{$footer->description}} <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
        @endforeach
    @else
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    @endif
</footer>