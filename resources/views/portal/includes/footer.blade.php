<style>
    footer {
        position: relative;
        background-image: url("{{ asset('images/himal.jpg') }}");
        /* Ensure path is correct */
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        z-index: 1;
        height: 67vh;
        /* You can adjust this value */
        padding: 50px 0;
    }
    @media (max-width:1000px) {
        footer {
            height: 108vh;
            /* You can adjust this value */
        }
    }
    @media (max-width:768px) {
        footer {
            height: 140vh;
            /* You can adjust this value */
        }
    }
    @media (max-width:360px) {
        footer {
            height: 155vh;
            /* You can adjust this value */
        }
    }
    /* White overlay */
    footer::before {
        content: "";
        /* Empty content */
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(64, 153, 255, 0.3);
        /* White with transparency */
        z-index: -1;
        /* Make sure it's behind the content */
    }
</style>
<footer id="footer" class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <!-- About Section -->
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <h3 class="widget-title">{{ $abouts->title }}</h3>
                    <img loading="lazy" width="200px" class="footer-logo"
                        src="{{ asset('uploads/sitesetting/' . $sitesetting->main_logo) }}" alt="main-logo">
                    <div class="footer-social">
                        <ul>
                            <li><a href="{{ $sitesetting->facebook_link }}" target="_blank" aria-label="Facebook"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $sitesetting->instagram_link }}" target="_blank" aria-label="Instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Working Hours Section -->
                <div class="col-lg-4 col-md-6  mt-md-0">
                <h3 class="widget-title">Our Location</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226.4527218377637!2d85.34596506494862!3d27.700240351691907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19000621a57b%3A0xc201cfe8d1eefd60!2sNita%20Engineering%20Pvt.%20Ltd.!5e1!3m2!1sen!2snp!4v1732617971910!5m2!1sen!2snp"
                        width="350" height="250" style="border-radius:8px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Services Section -->
                <div class="col-lg-4 col-md-6 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Services</h3>
                    <ul class="list-arrow">
                        @foreach ($services as $service)
                            <li><a href="{{ route('render_single_services', $service->slug) }}">{{ $service->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info">
                        <span>Copyright &copy;
                            <script>document.write(new Date().getFullYear())</script>, Designed &amp; Developed by <a
                                href="https://aashatech.com">Aashatech</a>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-menu text-center text-md-right">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('render_about') }}">About</a></li>
                            <li><a href="{{ route('render_services') }}">Our Services</a></li>
                            <li><a href="{{ route('render_faq') }}">Faq</a></li>
                            <li><a href="{{ route('render_testimonial') }}">Testimonials</a></li>
                            <li><a href="{{ route('render_client') }}">Clients</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Back to Top Button -->
<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
    <button class="btn btn-primary" title="Back to Top" id="backtop">
        <i class="fa fa-angle-double-up"></i>
    </button>
</div>
<!-- JavaScript for Back to Top -->
<script>
    var btn = document.getElementById('backtop');
    window.onscroll = function () {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    };
    btn.onclick = function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>