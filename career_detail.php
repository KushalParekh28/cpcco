<?php require_once("admin/bootstrap.php"); ?>
<?php
if (isset($_REQUEST['id']) && $_REQUEST['id'] != '') {

	$_REQUEST['id'] = str_replace("/", "", $_REQUEST['id']);

	$c_detail =  cockpit('collections')->findOne('Career', [
		"job_title_slug"     => $_REQUEST['id'],
	]);
	if (!$c_detail) {
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
        <title><?php echo $c_detail['job_title'];  ?> | Career | <?php echo WEBAPP_NAME; ?></title>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

         <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title"><?php echo $c_detail['job_title'];  ?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="career">Career</a></li>
                    <li class="active"><?php echo $c_detail['job_title'];  ?></li>
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
                                    <h3 class="mb-20"><?php echo $c_detail['job_title']; ?></h3>
                                    <img src="assets/img/case/single.jpg" alt="thumb">
                                </div>
                                <div class="case-details">
                                    <div class="my-4">
                                        <h3 class="mb-3">Job Description</h3>
                                        <div class="career-list-text">
                                            <?php echo $c_detail['job_description']; ?>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="mb-3">Responsibilities</h3>
                                        <div class="career-list-text">
                                            <?php echo $c_detail['responsibility']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="case-sidebar">
                                <div class="widget case-sidebar-content">
                                    <h4 class="case-sidebar-title">Job Details</h4>
                                    <ul>
                                        <?php if (!empty($c_detail['locations'])): ?>
                                        <li>
                                            Location <span><?php echo $c_detail['locations']; ?></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (!empty($c_detail['total_position'])): ?>
                                        <li>
                                            Position Available <span><?php echo $c_detail['total_position']; ?></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (!empty($c_detail['qualification'])): ?>
                                        <li>
                                            Qualification <span><?php echo $c_detail['qualification']; ?></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (!empty($c_detail['experience'])): ?>
                                        <li>
                                            Experience <span><?php echo $c_detail['experience']; ?></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (!empty($c_detail['salary_range'])): ?>
                                        <li>
                                            Salary Range <span><?php echo $c_detail['salary_range']; ?></span>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="widget case-new-project">
                                    <h4>We Offer Comprehensive Career Opportunities.</h4>
                                    <a href="mailto:hr@cpcco.in" class="theme-btn">Apply this Position<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- case-study single end -->

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


