
<!--footer-main-->
<footer class="footer-main">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="<?php url(); ?>">
                                    <img loading="lazy" class="img-fluid" src="<?php w_assets('images/logo-2.png');?>" alt="medic">
                                </a>
                            </figure>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                        <ul class="location-link">
                            <li class="item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p><?= $settings['location'];?></p>
                            </li>
                            <li class="item">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <a href="">
                                    <p><?= $settings['email'];?></p>
                                </a>
                            </li>
                            <li class="item">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                                <p><?= $settings['phone'];?></p>
                            </li>
                        </ul>
                        <ul class="list-inline social-icons">
                            <li class="list-inline-item"><a href="<?= $settings['facebook'];?>" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="<?= $settings['twitter'];?>" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="<?= $settings['instagram'];?>" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="<?= $settings['github'];?>" aria-label="github"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                    <h2>Services</h2>
                    <ul class="menu-link">
                        <li>
                            <a href="<?php url("services"); ?>">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
                        </li>
                        <li>
                            <a href="<?php url("services"); ?>">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
                        </li>
                        <li>
                            <a href="<?php url("services"); ?>">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
                        </li>
                        <li>
                            <a href="<?php url("services"); ?>">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
                        </li>
                        <li>
                            <a href="<?php url("services"); ?>">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="social-links">
                        <h2>Recent Posts</h2>
                        <ul>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left mr-3">
                                        <a href="">
                                            <img loading="lazy" src="<?php w_assets('images/post-thumb-small.jpg');?>" alt="post-thumb">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="">A lesson adip isicing</a></h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left mr-3">
                                        <a href="">
                                            <img loading="lazy" src="<?php w_assets('images/post-thumb-small.jpg');?>" alt="post-thumb">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="">How to make an event</a></h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container clearfix">
            <div class="copyright-text">
                <p>&copy; Copyright 2021. Designed &amp; Developed by <a href="">Themefisher</a></p>
            </div>
            <ul class="footer-bottom-link">
                <li>
                    <a href="<?php url('');?>">Home</a>
                </li>
                <li>
                    <a href="<?php url('about-us');?>">About</a>
                </li>
                <li>
                    <a href="<?php url('contact-us');?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>


<!-- jquery -->
<script src="<?php w_assets('plugins/jquery.min.js');?>"></script>
<!-- bootstrap -->
<script src="<?php w_assets('plugins/bootstrap/bootstrap.min.js');?>"></script>
<!-- Slick Slider -->
<script src="<?php w_assets('plugins/slick/slick.min.js');?>"></script>
<script src="<?php w_assets('plugins/slick/slick-animation.min.js');?>"></script>
<!-- FancyBox -->
<script src="<?php w_assets('plugins/fancybox/jquery.fancybox.min.js');?>" defer></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="<?php w_assets('plugins/google-map/gmap.js');?>" defer></script>

<!-- jquery-ui -->
<script src="<?php w_assets('plugins/jquery-ui/jquery-ui.js');?>" defer></script>
<!-- timePicker -->
<script src="<?php w_assets('plugins/timePicker/timePicker.js');?>" defer></script>

<!-- script js -->
<script src="<?php w_assets('js/script.js');?>"></script>
</body>

</html>