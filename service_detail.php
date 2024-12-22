<?php require_once("admin/bootstrap.php"); ?>
<?php
if (isset($_REQUEST['id']) && $_REQUEST['id'] != '') {

	$_REQUEST['id'] = str_replace("/", "", $_REQUEST['id']);

	$s_detail =  cockpit('collections')->findOne('Services', [
		"name_slug"     => $_REQUEST['id'],
	]);
	if (!$s_detail) {
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
        <title><?php echo $s_detail['name']; ?> | Services | <?php echo WEBAPP_NAME; ?></title>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        
        <main class="main">

            <!-- breadcrumb -->
            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title"><?php echo $s_detail['name'];  ?></h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="services">Services</a></li>
                        <li class="active"><?php echo $s_detail['name'];  ?></li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- service single -->
            <div class="service-single py-120">
                <div class="container">
                    <div class="service-single-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="service-sidebar">
                                    <div class="widget category">
                                        <h4 class="widget-title">All Services</h4>
                                        <div class="category-list">

                                        <?php 
                                            $options= [ 'filter' => ['status' => 'Enable'],
                                            'sort' => ['sort_order' => 1], 
                                            "populate"=> 1];
                                            $service= cockpit('collections')->find('Services', $options);
                                
                                            foreach($service as $s): ?>
                                                <a href="service/<?php echo $s['name_slug']; ?>"><i class="far fa-long-arrow-right"></i><?php echo $s['name']; ?></a>
                                            <?php endforeach;?>

                                            <!-- <a href="#"><i class="far fa-long-arrow-right"></i>Tax Planning</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>Personal Tax</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>Insurance Tax</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>Corporate Tax</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>Tax Audit Support</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>Investment Advisor</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>Tax Advisory</a>
                                            <a href="#"><i class="far fa-long-arrow-right"></i>International Tax</a> -->
                                        </div>
                                    </div>
                                    <!-- <div class="widget service-download">
                                        <h4 class="widget-title">Download</h4>
                                        <a href="#"><i class="far fa-file-pdf"></i> Download Brochure</a>
                                        <a href="#"><i class="far fa-file-alt"></i> Download Application</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="service-details">
                                    <h3 class="mb-30"><?php echo $s_detail['name']; ?></h3>
                                    <div class="service-details-img mb-30">

                                    <?php 

                                        if(isset($s_detail["image"]['path']))
                                        {
                                            $imageUrl = ltrim($s_detail["image"]['path'], $s_detail["image"]['path'][0]);
                                        }
                                        else
                                        {
                                            $imageUrl = '';
                                        }
                                    ?>

                                        <img src="<?php echo $imageUrl; ?>" alt="<?php echo $s_detail['name']; ?> - Best CA Firm in India">
                                    </div>
                                    <div class="service-details">
                                        <div class="mb-20">
                                            <?php echo $s_detail['description']; ?>
                                        </div>

                                        <?php if (isset($s_detail['special_quote']) && $s_detail['special_quote']): ?>
                                            <blockquote class="blockqoute">
                                                <?php echo $s_detail['special_quote']; ?>
                                                <i class="fal fa-quote-right blockqoute-icon"></i>
                                            </blockquote>
                                        <?php endif; ?>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service single end-->

        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


