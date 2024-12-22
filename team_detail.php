<?php require_once("admin/bootstrap.php"); ?>
<?php
if (isset($_REQUEST['id']) && $_REQUEST['id'] != '') {

	$_REQUEST['id'] = str_replace("/", "", $_REQUEST['id']);

	$team_detail =  cockpit('collections')->findOne('Team', [
		"team_name_slug"     => $_REQUEST['id'],
	]);
	if (!$team_detail) {
		header('Location: ' . BASE_URL . '404');
	}
} else {
	header('Location: ' . BASE_URL . '404');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("include/metatag.php"); ?>
        <title><?php echo $team_detail['team_name'];  ?> | <?php echo WEBAPP_NAME; ?></title>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        <main class="main">
            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title"><?php echo $team_detail['team_name'];  ?></h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="our-team">Our Team</a></li>
                        <li class="active"><?php echo $team_detail['team_name'];  ?></li>
                    </ul>
                </div>
            </div>

            <div class="our-team-area py-100">
                <div class="container">
                    <div class="row team-detail-layout">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="detail-image">
                                <div class="image-caption">
                                <?php 

                                    if(isset($team_detail["image"]['path']))
                                    {
                                        $imageUrl = ltrim($team_detail["image"]['path'], $team_detail["image"]['path'][0]);
                                    }
                                    else
                                    {
                                        $imageUrl = '';
                                    }
                                ?>
                                    <img class="img-responsive" src="<?php echo $imageUrl; ?>" alt="<?php echo $team_detail['team_name']; ?>">
                                </div>
                                <ul class="social-icon">
                                    <?php if (!empty($team_detail["twitter_link"])) { ?>
                                        <li><a href="<?php echo $team_detail["twitter_link"]; ?>" target="_blank"><i class="fab fa-x-twitter" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                    <?php if (!empty($team_detail["linkedin_link"])) { ?>
                                        <li><a href="<?php echo $team_detail["linkedin_link"]; ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="detail-content">
                                <h2><?php echo $team_detail["team_name"]; ?></h2>
                                <span class="position"><?php echo $team_detail["position"]; ?></span>
                                
                                <?php echo $team_detail["description"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


