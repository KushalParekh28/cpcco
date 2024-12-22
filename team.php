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
                    <h2 class="breadcrumb-title">Our Team</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


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
        </main>
        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>
    </body>
</html>


