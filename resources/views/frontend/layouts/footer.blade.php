</div>
<footer>
    <div class="footer">
        <div class="row">
            <div class="col-md-4">
                <h5>About</h5>
                <ul class="footer-menu">
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Services</h5>
                <ul class="footer-menu">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <ul class="footer-menu">
                    <li><a href="#">Get in Touch</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Astrogeeksagar. All rights reserved.</p>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Show/hide back-to-top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        // Smooth scroll to top
        $('.back-to-top').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 'smooth');
        });

        // Enable nested dropdowns on hover
        $('.dropdown-menu a.dropdown-toggle').click(function(e) {
            let $nextEl = $(this).next('.dropdown-menu');
            if ($nextEl.length) {
                e.preventDefault();
                $nextEl.toggle();
            }
        });
    });
</script>

</body>

</html>
