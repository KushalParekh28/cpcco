    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">
        <!-- top header -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="mailto:paras.p.cpc@gmail.com"><i class="far fa-envelopes"></i>
                                paras.p.cpc@gmail.com</a></li>
                                <li><a href="tel:+919920449594"><i class="far fa-phone-volume"></i> +9199 2044 9594</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        
                        <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top header end -->

        <!-- navbar -->
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="/">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Company</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="about-us">About us</a></li>
                                    <li><a class="dropdown-item" href="alumni-tree">Alumni Tree</a></li>
                                    <li><a class="dropdown-item" href="career">Career</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="services" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu fade-down">
                                    <?php 
                                        $options= [ 'filter' => ['status' => 'Enable'],
                                        'sort' => ['sort_order' => 1], 
                                        "populate"=> 1];
                                        $service= cockpit('collections')->find('Services', $options);
                                    
                                        foreach($service as $s): ?>
                                        <li><a class="dropdown-item" href="service/<?php echo $s['name_slug']; ?>"><?php echo $s['name']; ?></a></li>
                                    <?php endforeach;?>
                                    
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="our-team">Our Team</a></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Resources</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="casestudy">Case Study</a></li>
                                    <li><a class="dropdown-item" href="important-link">Important Link</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                        </ul>
                        <div class="nav-right">
                           
                            <div class="nav-right-btn">
                                <a href="contact-us" class="theme-btn">Contact Us<i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="sidebar-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-bars-sort"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end-->
    </header>
    <!-- header area end -->

    <!-- sidebar-popup -->
    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
                <div class="sidebar-about">
                    <h4>About Us</h4>
                    <p>There are many variations of passages available sure there majority have suffered alteration in
                        some form by inject humour or randomised words which don't look even slightly believable.</p>
                </div>
                <div class="sidebar-contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>
                            <h6>Email</h6>
                            <a href="mailto:paras.p.cpc@gmail.com"><i class="far fa-envelope"></i>paras.p.cpc@gmail.com</a>
                        </li>
                        <li>
                            <h6>Phone</h6>
                            <a href="tel:+919920449594"><i class="far fa-phone"></i>+9199 2044 9594</a>
                        </li>
                        <li>
                            <h6>Address</h6>
                            <a href="https://maps.app.goo.gl/LVUzX49FDk3bPD228" target="_blank"><i class="far fa-location-dot"></i>103, Paresh Building, 
                                                Mandpeshwar Road,
                                                Boriwali West,
                                                Mumbai - 400092</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-social">
                    <h4>Follow Us</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-popup end -->