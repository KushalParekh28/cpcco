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

            <?php include("include/slider.php"); ?>

            <!-- feature area -->
            <div class="feature-area ft-negative">
                <div class="container">
                    <div class="feature-wrap mt-40">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-3">
                                <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                    <span class="count">01</span>
                                    <div class="feature-icon">
                                        <img src="assets/img/icon/tax-service.svg" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h4>Best Ethical Services</h4>
                                        <p>We provide the best ethical services, prioritizing integrity, transparency, and professionalism in every interaction. Our commitment ensures trust and long-lasting relationships with clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="feature-item wow fadeInDown" data-wow-delay=".25s">
                                    <span class="count">02</span>
                                    <div class="feature-icon">
                                        <img src="assets/img/icon/team.svg" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h4>Experts Team</h4>
                                        <p>
                                            Our Experts Team
                                            consists of skilled professionals
                                            in Accounts, Finance, Audit,
                                            and GST. They are dedicated
                                            to solving complex problems
                                            and driving innovation
                                            for our clients.
                                          
                                        </p>
                                        <br/>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                    <span class="count">03</span>
                                    <div class="feature-icon">
                                        <img src="assets/img/icon/support.svg" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h4>24/7 Support</h4>
                                        <p>
                                            Our dedicated support team
                                            is available 24/7 to assist
                                            customers with their inquiries,
                                            ensuring quick resolution of
                                            issues and providing expert
                                            guidance at any hour.
                                            We prioritize reliability and trust.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="feature-item wow fadeInUp" data-wow-delay=".25s">
                                    <span class="count">04</span>
                                    <div class="feature-icon">
                                        <img src="assets/img/icon/team-2.svg" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h4>Free Video Access</h4>
                                        <p>Get free video access on GST to learn concepts, updates, and compliance processes at your convenience. Simplify your understanding of Goods and Services Tax with expert-led, easy-to-follow tutorials.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- feature area end -->

            <!-- about area -->
            <div class="about-area py-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                                <div class="about-img">
                                    <img class="img-1" src="assets/img/about/01.jpg" alt="">
                                    <img class="img-2" src="assets/img/about/02.jpg" alt="">
                                    <div class="about-img-shape">
                                        <img src="assets/img/shape/06.png" alt="">
                                    </div>
                                </div>
                                <div class="about-experience">
                                    <span class="three-d-text">16+</span>
                                    <h5>Years Of <br> Experience</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-right wow fadeInUp" data-wow-delay=".25s">
                                <div class="site-heading mb-3">
                                    <span class="site-title-tagline"><i class="fas fa-percent"></i> About Us</span>
                                    <h2 class="site-title">
                                        About Our <span>Firm</span>
                                    </h2>
                                </div>
                                <p class="about-text">
                                    <b>C P C & Company</b> (hereinafter referred to as ‘CPC’) was established in 2009 and has grown to meet the challenges of the complex world of business and emerging technologies. We cater to the evolving needs of the industry and our clients.
                                </p>
                                <p class="about-text">
                                    The firm focuses on enhancing client processes and advising foreign clients on establishing their operations in India, supporting our partners in their growth journey.
                                </p>
                                <p class="about-text">
                                    CPC draws its expertise from extensive experience across India, having worked closely with CA firms. Our head office is located in Mumbai, with branch offices in Surat and Ahmedabad, and we are associated with a network of firms throughout India.
                                </p>
                                
                                <a href="about-us" class="theme-btn mt-20">Discover More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about area end -->

            <!-- service-area -->
            <div class="service-area2 bg py-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline light"><i class="fas fa-percent"></i> Our Services</span>
                                <h2 class="site-title">What We Offers To Our <span>Customers</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">

                    <?php 
                        $options= [ 'filter' => ['status' => 'Enable'],
                        'sort' => ['sort_order' => 1], 
                        "populate"=> 1];
                        $service= cockpit('collections')->find('Services', $options);
					
					    foreach($service as $s): ?>

						<?php 

                            if(isset($s["image"]['path']))
                            {
                                $imageUrl = ltrim($s["image"]['path'], $s["image"]['path'][0]);
                            }
                            else
                            {
                                $imageUrl = '';
                            }

                            if(isset($s["icon_img"]['path']))
                            {
                                $iconUrl = ltrim($s["icon_img"]['path'], $s["icon_img"]['path'][0]);
                            }
                            else
                            {
                                $iconUrl = '';
                            }
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                                    <div class="service-content">
                                        <div class="service-icon">
                                            <img src="<?php echo $iconUrl; ?>" alt="<?php echo $s['name']; ?>">
                                        </div>
                                        <div class="service-info">
                                            <h3 class="service-title">
                                                <a href="service/<?php echo $s['name_slug']; ?>"><?php echo $s['name']; ?></a>
                                            </h3>
                                            <p class="service-text">
                                                <?php echo $s['sort_description']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="service-img">
                                        <img src="<?php echo $imageUrl; ?>" alt="<?php echo $s['name']; ?>">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <!-- service-area -->

            <!-- team-area -->
            <div class="team-area py-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline"><i class="fas fa-percent"></i> Our Team</span>
                                <h2 class="site-title">Meet With Our <span>Experts</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <?php 
                            $options= [ 'filter' => ['status' => 'Enable'],
                            'sort' => ['sort_order' => 1], 
                            "populate"=> 1];
                            $team= cockpit('collections')->find('Team', $options);
                        
                        foreach($team as $p): ?>

                            <?php 

                            if(isset($p["image"]['path']))
                            {
                                $imageUrl = ltrim($p["image"]['path'], $p["image"]['path'][0]);
                            }
                            else
                            {
                                $imageUrl = '';
                            }
                            ?>

                            <div class="col-md-6 col-lg-3">
                                <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                                    <div class="team-img">
                                        <img class="img-responsive" src="<?php echo $imageUrl; ?>" alt="<?php echo $p["team_name"]; ?>">
                                        <div class="team-social-wrap">
                                            <div class="team-social-btn">
                                                <button type="button"><i class="far fa-share-alt"></i></button>
                                            </div>

                                            <div class="team-social">
                                                <?php if (!empty($p["twitter_link"])) { ?>
                                                    <a href="<?php echo $p["twitter_link"]; ?>" target="_blank"><i class="fab fa-x-twitter"></i></a> 
                                                <?php } ?>
                                                <?php if (!empty($p["linkedin_link"])) { ?>
                                                    <a href="<?php echo $p["linkedin_link"]; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h4><a href="team/<?php echo $p["team_name_slug"]; ?>"><?php echo $p["team_name"]; ?></a></h4>
                                        <span><?php echo $p["position"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <!-- team-area end -->

            <!-- counter area -->
            <div class="counter-area pt-40 pb-40">
            <div class="counter-shape">
                <img class="img-1" src="assets/img/shape/04.png" alt="">
                <img class="img-2" src="assets/img/shape/05.png" alt="">
            </div>
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                            <div class="icon">
                                <img src="assets/img/icon/tax.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <span class="counter" data-count="+" data-to="25" data-speed="3000">25</span>
                                    <span class="unit">+</span>
                                </div>
                                <h6 class="title">Services We Offer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
                            <div class="icon">
                                <img src="assets/img/icon/rating.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                                    <span class="unit">+</span>
                                </div>
                                <h6 class="title">Clients Served</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="counter-box wow fadeInUp" data-wow-delay=".25s">
                            <div class="icon">
                                <img src="assets/img/icon/staff.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <span class="counter" data-count="+" data-to="25" data-speed="3000">25</span>
                                    <span class="unit">+</span>
                                </div>
                                <h6 class="title">Experts Employee</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="counter-box wow fadeInDown" data-wow-delay=".25s">
                            <div class="icon">
                                <img src="assets/img/icon/award.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="info">
                                    <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                                    <span class="unit">+</span>
                                </div>
                                <h6 class="title">Corporate Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- counter area end -->

            <!-- case study -->
            <div class="case-study py-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline"><i class="fas fa-percent"></i> Case Study</span>
                                <h2 class="site-title">Let's check recent completed <span>case study</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 filter-box popup-gallery wow fadeInUp" data-wow-delay=".25s">
                    <?php 
                        $options= [ 
                            'filter' => ['status' => 'Enable'],
                            'sort' => ['sort_order' => 1], 
                            "populate"=> 1,
                            'limit' => 3 // Limit to the latest 3 case studies
                        ];
                        $casestudy= cockpit('collections')->find('CaseStudy', $options);
					
					foreach($casestudy as $b): ?>

						<?php 
						// Assuming $b contains the blog data from the JSON
						if(isset($b["image"]['path']))
						{
							$imageUrl = ltrim($b["image"]['path'], $b["image"]['path'][0]);
						}
						else
						{
							$imageUrl = '';
						}
                        ?>

                        <div class="col-md-6 col-lg-4 filter-item cat1 cat2">
                            <div class="case-item">
                                <div class="case-img">
                                    <a class="popup-img case-link" href="<?php echo $imageUrl; ?>"> <i
                                        class="fal fa-plus"></i></a>
                                    <img class="img-fluid" src="<?php echo $imageUrl; ?>" alt="<?php echo $b['title']; ?>">
                                    <div class="case-btn">
                                        <a href="casestudy/<?php echo $b['title_slug']; ?>"><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="case-content">
                                    <!-- <small>Tax Advice</small> -->
                                    <h4><a href="casestudy/<?php echo $b['title_slug']; ?>"><?php echo $b['title']; ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <!-- case study end -->

            <!-- cta area -->
            <div class="cta-area" style="background-image: url(assets/img/cta/01.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="cta-content wow fadeInUp" data-wow-delay=".25s">
                                <h1>Our Core Values as Leading Chartered Accountants</h1>
                                <p> We aim to offer to our clients a one-stop solution for all their financial, business, and regulatory needs. Expertise, experience, and efficiency are what define us.</p>
                                <a href="contact-us" class="theme-btn">Contact Now<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cta area end -->

             <!-- blog-area -->
             <div class="blog-area py-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline"><i class="fas fa-percent"></i> Our Blog</span>
                                <h2 class="site-title">Our Latest <span>Blog</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">

                        <?php 
                        $options= [ 
                            'filter' => ['status' => 'Enable'],
                            'sort' => ['createdAt' => -1], // Sort by createdAt date in descending order
                            "populate"=> 1,
                            'limit' => 3 // Limit to the latest 3 blogs
                        ];
                        $blogs= cockpit('collections')->find('Blog', $options);
					
					    foreach($blogs as $b): ?>

						<?php 
						// Assuming $b contains the blog data from the JSON
						if(isset($b["image"]['path']))
						{
							$imageUrl = ltrim($b["image"]['path'], $b["image"]['path'][0]);
						}
						else
						{
							$imageUrl = '';
						}
                        ?>

                            <div class="col-md-6 col-lg-4">
                                <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                                    <div class="blog-item-img">
                                        <img src="<?php echo $imageUrl; ?>" alt="<?php echo $b['title']; ?>">
                                        <div class="blog-date">
                                            <strong><?php echo date('d', strtotime($b['date'])); ?></strong>
                                            <span><?php echo date('M', strtotime($b['date'])); ?></span>
                                        </div>
                                    </div>
                                    <div class="blog-item-info">
                                        
                                        <h4 class="blog-title">
                                            <a href="blog/<?php echo $b['title_slug']; ?>"><?php echo $b['title']; ?></a>
                                        </h4>
                                        <p>
                                            <?php 
                                                $description = $b['sort_description'];
                                                echo (strlen($description) > 90) ? substr($description, 0, 90) . '...' : $description; 
                                            ?>
                                        </p>
                                        <a class="theme-btn" href="blog/<?php echo $b['title_slug']; ?>">Read More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach;?>
                       
                    </div>
                </div>
            </div>

            <!-- testimonial-area -->
            <div class="testimonial-area bg py-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="site-heading wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline light"><i class="fas fa-percent"></i> Testimonials</span>
                                <h2 class="site-title">What Our Client <span>Say's</span> about us</h2>
                                <p>
                                    Our clients consistently express their satisfaction with our services, highlighting our commitment to excellence in financial management and advisory. They appreciate our personalized approach, which helps them achieve their financial goals with confidence and clarity.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                                <?php 
                                    $options = [
                                        'filter' => ['status' => 'Enable'],
                                        'sort' => ['sort_order' => 1],
                                        'populate' => 1
                                    ];
                                    $testimonials = cockpit('collections')->find('Testimonials', $options);
                                    
                                    foreach($testimonials as $t): ?>
                                    <div class="testimonial-item">
                                        <div class="testimonial-quote">
                                            <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                                            <p><?php echo $t['description']; ?></p>
                                        </div>
                                        <div class="testimonial-content">
                                            <div class="testimonial-author-info">
                                                <h4><?php echo $t['client_name']; ?></h4>
                                                <p><?php echo $t['designation']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial-area end -->

           
        </main>
        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>
    </body>
</html>


