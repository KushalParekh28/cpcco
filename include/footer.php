 <!-- footer area -->
 <footer class="footer-area">
        <div class="footer-shape">
            <img src="assets/img/shape/03.png" alt="">
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="footer-widget-wrap pt-50 pb-50">
                    <div class="row g-5">
                        
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Company</h4>
                                <ul class="footer-list">
                                    <li><a href="about-us"><i class="far fa-arrow-right"></i>About Us</a></li>
                                    <li><a href="services"><i class="far fa-arrow-right"></i>Services</a></li>
                                    <li><a href="our-team"><i class="far fa-arrow-right"></i>Our Team</a></li>
                                    <li><a href="blog.html"><i class="far fa-arrow-right"></i>Case Study</a></li>
                                    <li><a href="blog.html"><i class="far fa-arrow-right"></i>Blogs</a></li>
                                    <li><a href="contact-us"><i class="far fa-arrow-right"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Services</h4>
                                <ul class="footer-list">
                                <?php 
                                    $options= [ 'filter' => ['status' => 'Enable'],
                                    'sort' => ['sort_order' => 1], 
                                    "populate"=> 1];
                                    $service= cockpit('collections')->find('Services', $options);
                                
                                    foreach($service as $s): ?>
                                        <li><a href="service/<?php echo $s['name_slug']; ?>"><i class="far fa-arrow-right"></i><?php echo $s['name']; ?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget-box">
                                <h4 class="footer-widget-title">Get In Touch</h4>
                                <ul class="footer-contact">

                                <li>
                                        <div class="icon">
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Main Office</h6>
                                            <p>103, Paresh Building, 
                                                Mandpeshwar Road,
                                                Boriwali West,
                                                Mumbai - 400092
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Call Us</h6>
                                            <a href="tel:+919920449594">+9199 2044 9594</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Mail Us</h6>
                                            <a href="mailto:paras.p.cpc@gmail.com">paras.p.cpc@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget-box">
                                <h4 class="footer-widget-title">Branch Locations</h4>
                                <ul class="footer-contact">
                                    
                                    <li>
                                        <div class="icon">
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Branch Office 1</h6>
                                            <p>310, Rajhansh Comp, Nr Nirmal Hospital,<br/>
                                            Civil Char Rasta, Surat – 385 002</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <i class="far fa-location-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Branch Office 2</h6>
                                            <p>G31, Vijay Plaza, Opp. Ahmd dairy,<br/>		
                                            Kankaria Road, Ahmedabad-380 022</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> CPC & CO. </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->
