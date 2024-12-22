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

            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title">Our Blog</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li class="active">Our Blog</li>
                    </ul>
                </div>
            </div>


            <div class="blog-area py-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                                <span class="site-title-tagline"><i class="fas fa-percent"></i> Our Blog</span>
                                <h2 class="site-title">Our Latest <span>Blog</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">

                    <?php 
                        $options= [ 'filter' => ['status' => 'Enable'],
                        'sort' => ['sort_order' => 1], 
                        "populate"=> 1];
                        $blogs= cockpit('collections')->find('Blog', $options);
					
					foreach($blogs as $b): ?>

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

                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="blog-item-img">
                                    <img src="<?php echo $imageUrl; ?>" alt="<?php echo $b['title']; ?>">
                                    <div class="blog-date">
                                        <strong><?php echo date('d', strtotime($b['date'])); ?></strong>
                                        <span><?php echo date('M', strtotime($b['date'])); ?></span>
                                    </div>
                                </div>
                                <div class="blog-item-info">
                                    
                                    <h4 class="blog-title">
                                        <a href="blog/<?php echo $b['title_slug']; ?>"><?php echo $b['title']; ?></a>
                                    </h4>
                                    <p>
                                        <?php 
                                            $description = $b['sort_description'];
                                            echo (strlen($description) > 90) ? substr($description, 0, 90) . '...' : $description; 
                                        ?>
                                    </p>
                                    <a class="theme-btn" href="blog/<?php echo $b['title_slug']; ?>">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>
                        
                    </div>
                    <!-- pagination -->
                    <!-- <div class="pagination-area">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- pagination end -->
                </div>
            </div>
        </main>
        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>
    </body>
</html>


