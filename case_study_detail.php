<?php require_once("admin/bootstrap.php"); ?>
<?php
if (isset($_REQUEST['id']) && $_REQUEST['id'] != '') {

	$_REQUEST['id'] = str_replace("/", "", $_REQUEST['id']);

	$case_detail =  cockpit('collections')->findOne('CaseStudy', [
		"title_slug"     => $_REQUEST['id'],
	]);
	if (!$case_detail) {
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
        <title><?php echo $case_detail['title'];  ?> | Case Study | <?php echo WEBAPP_NAME; ?></title>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        <main class="main">

            <!-- breadcrumb -->
            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title"><?php echo $case_detail['title'];  ?></h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="casestudy">Case Study</a></li>
                        <li class="active"><?php echo $case_detail['title'];  ?></li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- case-study single -->
            <div class="case-single py-120">
                <div class="container">
                    <div class="case-single-wrapper">
                        <div class="row">
                          
                            <div class="col-xl-8 col-lg-8">
                                <div class="case-details">
                                    <div class="case-details-img mb-30">
                                        <?php 

                                        if(isset($case_detail["image"]['path']))
                                        {
                                            $imageUrl = ltrim($case_detail["image"]['path'], $case_detail["image"]['path'][0]);
                                        }
                                        else
                                        {
                                            $imageUrl = '';
                                        }
                                        ?>
                                        <img src="<?php echo $imageUrl; ?>" alt="<?php echo $case_detail['title']; ?> - Best CA Firm in India">
                                    </div>
                                    <div class="case-details">
                                        <h3 class="mb-20"><?php echo $case_detail['title']; ?></h3>
                                        <div class="mb-20">
                                            <?php echo $case_detail['description']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4">
                                <div class="case-sidebar">
                                    <div class="widget case-sidebar-content">
                                        <h4 class="case-sidebar-title">Case Details</h4>
                                        <ul>
                                            <li>
                                                Category <span>Corporate Tax Planning</span>
                                            </li>
                                            <li>
                                                Date <span><?php echo date("F j, Y", strtotime($case_detail['date'])); ?></span>
                                            </li>
                                            <li>
                                                Website <span>example.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget case-new-project">
                                        <h4>We Are Providing Best Tax Advisory Services.</h4>
                                        <a href="contact-us" class="theme-btn">Contact Now<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- case-study single end -->

        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


