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
                    <h2 class="breadcrumb-title">Case Study</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li class="active">Case Study</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


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
                        $options= [ 'filter' => ['status' => 'Enable'],
                        'sort' => ['sort_order' => 1], 
                        "populate"=> 1];
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

        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


