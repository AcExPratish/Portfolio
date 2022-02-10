<footer class="footer-section">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="#">
                                <h1 class="logo-font text-white">Laravel</h1>
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis culpa ducimus earum eum iusto laudantium minus mollitia, numquam perspiciatis quam quis sit suscipit vero. Magnam minus numquam voluptatum.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Contact Us</h6>
                        <ul>
                            <li>(XXX) XXX-XXXXXXX</li>
                            <li>abc@xyz.com</li>
                            <li>XXXX-XXXX-XXXX</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1" id="newsletter">
                    <div class="ft-newslatter">
                        <h6>Newsletter</h6>
                        <p>Get the latest updates and offers.</p>
                        <form action="/newsletter" class="fn-form" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="email" placeholder="Your email address" name="email">
                            <button type="submit"><i class="fa fa-send"></i></button>

                            @error('email')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Environmental Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="co-text"><p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
