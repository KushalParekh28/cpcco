<?php require_once("admin/bootstrap.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("include/metatag.php"); ?>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        <main class="main">

            <!-- breadcrumb -->
            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title">Contact Us</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->

            <!-- contact area -->
            <div class="contact-area py-120">
                <div class="container">
                    <div class="contact-content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-location-dot"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Address</h5>
                                        <p>103, Paresh Building, Mandpeshwar Road, Boriwali West, Mumbai - 400 092 </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-location-dot"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Branch Address</h5>
                                        <p>310, Rajhansh Comp, Nr Nirmal Hospital,<br/>
Civil Char Rasta, Surat – 385 002</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-location-dot"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Branch Address</h5>
                                        <p>G31, Vijay Plaza, Opp. Ahmd dairy,<br/>		
                                        Kankaria Road, Ahmedabad-380 022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Us</h5>
                                        <br/>
                                        <p><a href="tel:+919920449594">+9199 2044 9594</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-envelopes"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Us</h5>
                                        <br/>
                                        <p><a href="mailto:paras.p.cpc@gmail.com">paras.p.cpc@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-alarm-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Open Time</h5>
                                        <br/>
                                        <p>Mon - Sat (10.00AM - 07.30PM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-wrapper">
                        <div class="row g-4">
                            <div class="col-lg-5">
                                <div class="contact-img">
                                    <img src="assets/img/contact/01.jpeg" alt="Contact CPC & Company - Best CA Firm in India">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-form">
                                    <div class="contact-form-header">
                                        <h2>Get Expert Consultation from Our CA Firm</h2>
                                        <p>Our experienced Chartered Accountants are here to assist you with all your financial needs and ensure your business thrives.</p>
                                        
                                    </div>
                                    <?php cockpit("forms:open", "Contact");?>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="far fa-user-tie"></i></span>
                                                    <input type="text" class="form-control" name="form[name]"
                                                        placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="far fa-pen"></i></span>
                                                    <input type="text" class="form-control" name="form[company]"
                                                    placeholder="Your Company Name">
                                                </div>
                                            </div>
                                        </div>

                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="far fa-phone"></i></span>
                                                    <input type="text" class="form-control" name="form[mobile_number]"
                                                        placeholder="Contact No" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                                    <input type="email" class="form-control" name="form[email]"
                                                        placeholder="Your Email" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="far fa-globe"></i></span>
                                                    <input type="text" class="form-control" name="form[country]"
                                                        placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="far fa-city"></i></span>
                                                    <input type="text" class="form-control" name="form[city]"
                                                        placeholder="City">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group textarea">
                                            <span class="input-group-text"><i class="far fa-comment-lines"></i></span>
                                            <textarea name="form[message]" cols="30" rows="5" class="form-control"
                                                placeholder="Write Your Message" require></textarea>
                                        </div>
                                        <button type="submit" class="theme-btn">Send
                                            Message <i class="far fa-paper-plane"></i></button>

                                        <div class="col-md-12 mt-3">
                                            <div class="form-message-success">
                                                <div class="alert alert-warning alert-dismissible">

                                                    <i class="fa fa-thumbs-o-up ico-block"></i>
                                                    <span> Thanks for getting in touch with us, We'll check your message and get back to you shortly!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end contact area -->

            <!-- map -->
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.0385344726647!2d72.854638!3d19.2371523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b193dc797e85%3A0xecf5d3aa80289849!2sParesh%20building!5e0!3m2!1sen!2sin!4v1733078020860!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

           
        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


