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
                <h2 class="breadcrumb-title">Important links</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Important links</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <div class="team-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="fas fa-percent"></i> Related Links</span>
                            <h2 class="site-title">Important <span>Links</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="table-responsive">
                        <table class="table table-striped important-links-table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 10%;">SR No</th>
                                    <th style="width: 70%;">Name</th>
                                    <th style="width: 20%;" class="action-column">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $options= [ 'filter' => ['status' => 'Enable'],
                                    'sort' => ['sort_order' => 1], 
                                    "populate"=> 1];
                                    $team= cockpit('collections')->find('Links', $options);
                
                                    $srNo = 1;
                                    if (empty($team)): ?>
                                    <tr>
                                        <td colspan="3" class="text-center">No Data Found</td>
                                    </tr>
                                    <?php else: 
                                    foreach($team as $p): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $srNo++; ?></td>
                                        <td><?php echo $p['name']; ?></td>
                                        <td>
                                            <a href="<?php echo $p['href_link']; ?>" class="theme-btn responsive-btn short-btn" data-animation="fadeInUp" data-delay="1s" target="_blank" rel="noreferrer">
                                                Click Here<i class="fas fa-arrow-right"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


