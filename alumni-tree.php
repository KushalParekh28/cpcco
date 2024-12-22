<?php require_once("admin/bootstrap.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("include/metatag.php"); ?>
        <?php include("include/stylesheet.php"); ?>
        <style>
            
        </style>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Alumni Tree</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">Alumni Tree</li>
                </ul>
            </div>
        </div>
        
         <!-- team-area -->
         <div class="team-area py-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline"><i class="fas fa-percent"></i>Alumni Tree</span>
                                <h2 class="site-title">Our <span>Firm Structure</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 text-center">
                            <div class="root-member">
                                <h3>CPC & CO.</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="family-tree">
                                <?php 
                                    $options= [ 'filter' => ['status' => 'Enable'],
                                    'sort' => ['sort_order' => 1], 
                                    "populate"=> 1];
                                    $teams= cockpit('collections')->find('AlumniTree', $options);
                                    
                                    // Create arrays to hold team members by level
                                    $level1 = [];
                                    $level2 = [];
                                    
                                    foreach($teams as $team) {
                                        if ($team['level'] === 'Level1') {
                                            $level1[] = $team;
                                        } elseif ($team['level'] === 'Level2') {
                                            $level2[] = $team;
                                        }
                                    }
                                ?>
                                <div class="level1">
                                    <?php foreach($level1 as $member): ?>
                                        <div class="member">
                                            <h4><?php echo $member['team_name']; ?></h4>
                                            <p><?php echo $member['position']; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="level2">
                                    <?php foreach($level2 as $member): ?>
                                        <div class="member">
                                            <h4><?php echo $member['team_name']; ?></h4>
                                            <p><?php echo $member['position']; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


