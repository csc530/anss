<footer class="footer">
    <div class="footer__left">
        <div class="column">
            <h2 class="column__head">About ANSS</h2>
            <div class="column__body">
                <p>ANSS Foundation established by a team of professional Afghans in Toronto, Canada and is a non-political, non-profit and an impartial organization, established in 2017.</p>
            </div>
        </div>
    </div>

    <div class="footer__right">
        <div class="column">
            <h2 class="column__head">Subscribe to Updates & Newsletter</h2>
            <div class="column__body">
                <form method="POST" action="/subscribe">
                    @csrf
                    <input name="name" type="text" placeholder="Full Name">
                    <input name="email" type="email" placeholder="Email Address">
                    <button>Subscribe</button>
                </form>
            </div>
        </div>

        <div class="column">
            <h2 class="column__head">Social Links</h2>
            <div class="column__body">
                <div class="sm-icons">
                    <a href="#"><i class="icon icon-twitter"></i></a>
                    <a href="https://www.facebook.com/Ansspage/"><i class="icon icon-facebook"></i></a>
                    <a href="#"><i class="icon icon-instagram"></i></a>
                    <a href="#"><i class="icon icon-youtube"></i></a>
                    <a href="#"><i class="icon icon-flickr"></i></a>
                    <a href="#"><i class="icon icon-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

</footer>

<footer class="copyrights">
    <p>© <span>Copyright</span> 2018 by <span>ANSS Foundation</span>. All Rights Reserved. <span>Privacy and Disclaimer</span></p>
</footer>
