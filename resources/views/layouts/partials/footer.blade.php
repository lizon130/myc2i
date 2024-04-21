<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3><img src="{{ asset('assets/img/logo.png') }}" alt=""></h3>
                        <p>
                            8111 LYNDON B JOHNSON FWY STE 1250 <br>
                            DALLAS, TX 75251-1319, USA<br><br>
                            <strong>Phone:</strong> + 1 469 867 9430<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == '/' ? 'active-route' : '' }}"
                                href="{{ route('/') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == 'about' ? 'active-route' : '' }}"
                                href="{{ route('about') }}">About</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == 'faq' ? 'active-route' : '' }}"
                                href="{{ route('faq') }}">FAQ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == 'support' ? 'active-route' : '' }}"
                                href="{{ route('support') }}">Support</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == 'privacyandpolicy' ? 'active-route' : '' }}"
                                href="{{ route('privacyandpolicy') }}">Privacy policy</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == 'termsofservice' ? 'active-route' : '' }}"
                                href="{{ route('termsofservice') }}">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                class="{{ Request::route()->getName() == 'marketing' ? 'active-route' : '' }}"
                                href="{{ route('marketing') }}">Marketing</a></li>
                    </ul>
                </div>

                <div
                    class="col-lg-4 col-md-6 footer-newsletter d-flex justify-content-center flex-column align-items-center">
                    <div>
                        <div class="social-links mt-3 text-center mb-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        <div class="text-center roboto-slab" style="font-size: 20px;font-weight:700;">
                            Download the <a href="/"><strong>MyC2i</strong></a> app to your mobile device and
                            manage your da'wah on the go.

                            <div style="margin-top:20px;" class="d-flex justify-content-center">
                                <a style="width: 40%;" href=""><img class="img-fluid"
                                        src="{{ asset('assets/img/playstore.png') }}" alt=""></a>
                                <a style="width: 40%;" href=""><img class="img-fluid"
                                        src="{{ asset('assets/img/appstore.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>MyC2I</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Powered by <a class="fw-bold" href="https://bootstrapmade.com/">NexKraft Limited</a>
        </div>
    </div>
</footer><!-- End Footer -->
