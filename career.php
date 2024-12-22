<?php require_once("admin/bootstrap.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("include/metatag.php"); ?>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

         <!-- breadcrumb -->
         <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Career</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Career</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- pricing area -->
        <div class="pricing-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="fas fa-percent"></i> Career</span>
                            <h2 class="site-title">Current <span>Vacancies</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">

                    <?php 
                        $options= [ 'filter' => ['status' => 'Enable'],
                        'sort' => ['sort_order' => 1], 
                        "populate"=> 1];
                        $career= cockpit('collections')->find('Career', $options);
					
					foreach($career as $c): ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="pricing-item wow active fadeInUp" data-wow-delay=".25s">
                                <div class="pricing-shape">
                                    <img src="assets/img/shape/08.png" alt="Career Opportunities at CPC & Company - Best CA Firm in India">
                                </div>
                               
                                <div class="pricing-amount">
                                    <strong><?php echo $c['job_title']; ?></strong>
                                </div>
                                <div class="pricing-btn">
                                    <a href="career/<?php echo $c['job_title_slug']; ?>" class="theme-btn">View Detail <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="pricing-feature">
                                    <ul>
                                        <?php if (!empty($c['locations'])): ?>
                                            <li><i class="fas fa-check-circle"></i>Location: <?php echo $c['locations']; ?></li>
                                        <?php endif; ?>
                                        <?php if (!empty($c['total_position'])): ?>
                                            <li><i class="fas fa-check-circle"></i>Positions Available: <?php echo $c['total_position']; ?></li>
                                        <?php endif; ?>
                                        <?php if (!empty($c['qualification'])): ?>
                                            <li><i class="fas fa-check-circle"></i>Qualification: <?php echo $c['qualification']; ?></li>
                                        <?php endif; ?>
                                        <?php if (!empty($c['experience'])): ?>
                                            <li><i class="fas fa-check-circle"></i>Experience: <?php echo $c['experience']; ?></li>
                                        <?php endif; ?>

                                        <?php if (!empty($c['salary_range'])): ?>
                                            <li><i class="fas fa-check-circle"></i>Salery Range: <?php echo $c['salary_range']; ?></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <!-- pricing area end -->

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


