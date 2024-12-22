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
                    <h2 class="breadcrumb-title">OurServices</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- service-area -->
            <div class="service-area2 bg py-120">
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
                                        <img src="<?php echo $imageUrl; ?>" alt="<?php echo $s['name']; ?> - Best CA Firm in India">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <!-- service-area -->

        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


