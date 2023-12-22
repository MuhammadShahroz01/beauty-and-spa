<?php 
    include("header.php");
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><span>/</span></li>
                <li>Contact Us</li>
            </ul>
            <h2>Contact Us</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Spa Center Three Start-->
<section class="spa-center-three">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Locations</span>
            <h2 class="section-title__title">Our Spa Center</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="spa-center-three__single">
                    <h3 class="spa-center-three__title">Have any question?</h3>
                    <div class="spa-center-three__contact">
                        <a href="tel:8889990000">+1234567890</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="spa-center-three__single">
                    <h3 class="spa-center-three__title">Write email</h3>
                    </p>
                    <div class="spa-center-three__contact">
                        <a href="mailto:needhelp@company.com">info@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="spa-center-three__single">
                    <h3 class="spa-center-three__title">Visit anytime</h3>
                    <p class="spa-center-three__text">House 1 Street 1 Country
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Spa Center Three End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Contact us</span>
                        <h2 class="section-title__title">Send a Message</h2>
                    </div>
                    <!-- <p class="contact-page__text">We’d love to hear your thoughts, please write to us.</p> -->
                    <div class="contact-page__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__content">
                        <form action="final_email/email/mail.php" id="contact_form" name="contact_form" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="text" placeholder="Full Name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__form-input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" name="send" class="thm-btn contact-page__btn rounded">Send message</button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</section>
<!--Contact Page End-->

<?php
    include("footer.php"); 
?>