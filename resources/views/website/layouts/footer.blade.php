<!-- footer section -->
<footer class="footer-section m-0">
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="footer-copyright text-black">
                        <p class="mb-0 fw-bold">Copyright &copy; <?= date('Y') ?> All rights reserved</p>
                    </div>
                    <div class="footer-copyright text-black py-3">
                        <p class="mb-0 align-items-center">
                            <i class="fa fa-envelope fs-5" style="color: #ea4335;"></i>
                            <span class="ps-2 fw-bold ">abc@gmail.com</span>
                        </p>
                        <p class="mb-0 align-items-center">
                            <i class="fa fa-tty fs-5" style="color: #043073;"></i>
                            <span class="ps-2 fw-bold">+91 8344XXXXX</span>
                        </p>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="facebook banner-img">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="banner-img">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="banner-img">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="banner-img">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-newsletter" style="top: -100px;">
        <h4>Subscribe to our newsletter</h4>
        <p>Subscribe to our newsletter and get latest updates</p>
        <form action="#" class="footer-newsletter-form">
            <div class="input-group mb-3">
                <input type="email" name="email" placeholder="Enter your email here..." class="form-control text-white"
                    aria-label="Newsletter Email" aria-describedby="subscribe">
                <button type="submit" class="btn btn-primary" id="subscribe">Subscribe</button>
            </div>
        </form>
    </div>
</footer>
@include('website.layouts.jsLinks')
</body>
</html>
