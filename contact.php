<?php include "header.php" ?>



<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light"
    style="background-image:  url(https://www.sajctrust.org/wp-content/uploads/2017/10/gauseva-4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Us 
    ============================================= -->
<div class="contact-area contact-page overflow-hidden bg-gray default-padding">
    <div class="sahpe-right-bottom">
        <img src="assets/img/shape/16.png" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row align-center">

            <div class="col-tact-stye-one col-xl-7 col-lg-7">
                <div class="contact-form-style-one mb-md-50">
                    <img src="assets/img/illustration/10.png" alt="Image Not Found">
                    <h5 class="sub-title">Have Questions?</h5>
                    <h2 class="heading">Send us a message</h2>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    <i class="fa fa-paper-plane"></i> Get in Touch
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-tact-stye-one col-xl-5 col-lg-5 pl-80 pl-md-15 pl-xs-15">
                <div class="contact-style-one-info">
                    <h2>
                        Contact
                        <span>
                            Information
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                <path
                                    d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                                    style="animation-play-state: running;"></path>
                            </svg>
                        </span>
                    </h2>
                    <p>
                        Have questions or need assistance? We’re here to help! Whether you’re planning a visit, looking
                        to explore our offerings, or have specific inquiries, feel free to reach out. Our team is
                        dedicated to providing you with prompt and helpful support.
                    </p>
                    <ul>
                        <li>
                            <div class="content">
                                <h5 class="title orange-text">Hotline</h5>
                                <a href=""> +91 9733378901</a>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title orange-text">Our Location</h5>
                                <p> <span class="orange-text"> <b>Office:</b></span>
                                    30e, 2nd Floor, Patliputra Colony, Patna - 800013 </p>
                                
                                <p><span class="orange-text"> <b>Farm:</b></span>
                                    Haibaspur, Post - Saidabad, Bikram, Patna- 801104
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h5 class="title orange-text">Official Email</h5>
                                <a href="mailto:info@agrul.com.com">info@gausakha.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact -->




<?php include "footer.php" ?>