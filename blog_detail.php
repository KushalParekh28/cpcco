<?php require_once("admin/bootstrap.php"); ?>
<?php
if (isset($_REQUEST['id']) && $_REQUEST['id'] != '') {

	$_REQUEST['id'] = str_replace("/", "", $_REQUEST['id']);

	$blog_detail =  cockpit('collections')->findOne('Blog', [
		"title_slug"     => $_REQUEST['id'],
	]);
	if (!$blog_detail) {
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
        <title><?php echo $blog_detail['title'];  ?> | Blog | <?php echo WEBAPP_NAME; ?></title>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        <main class="main">

            <!-- breadcrumb -->
            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title"><?php echo $blog_detail['title'];  ?></h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li class="active"><?php echo $blog_detail['title'];  ?></li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- blog single -->
            <div class="blog-single py-120">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-8">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <div class="blog-thumb-img">
                                    <?php 

                                        if(isset($blog_detail["image"]['path']))
                                        {
                                            $imageUrl = ltrim($blog_detail["image"]['path'], $blog_detail["image"]['path'][0]);
                                        }
                                        else
                                        {
                                            $imageUrl = '';
                                        }
                                    ?>
                                        <img src="<?php echo $imageUrl; ?>"  alt="<?php echo $blog_detail['title'];  ?>">
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-meta">
                                            <div class="blog-meta-left">
                                                <ul>
    
                                                    <li><i class="far fa-calendar-alt"></i><?php echo date("F j, Y", strtotime($blog_detail['date'])); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3 class="blog-details-title mb-20"><?php echo $blog_detail['title']; ?></h3>
                                            <p class="mb-10">
                                                <?php echo $blog_detail['sort_description']; ?>
                                            </p>
                                            <p class="mb-10">
                                                <?php echo $blog_detail['description']; ?>
                                            </p>
                                            <hr>
                                            <div class="blog-details-tags pb-20">
                                                <h5>Tags : </h5>
                                                <ul>
                                                    <?php 
                                                    $tags = explode(", ", $blog_detail['tags']);
                                                    foreach ($tags as $tag) {
                                                        echo "<li><a href=\"#\">$tag</a></li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="sidebar">
                                
                                <!-- Recent Posts Section -->
                                <div class="widget recent-post">
                                    <h5 class="widget-title">Recent Post</h5>
                                    <?php
                                    // Fetch recent 3 blog posts
                                    $options = [
                                        'filter' => ['status' => 'Enable'],
                                        'sort' => ['date' => -1], // Sort by date descending
                                        'limit' => 3, // Limit to 3 posts
                                        'populate' => 1
                                    ];
                                    $recent_blogs = cockpit('collections')->find('Blog', $options);
                                    ?>
                                    <?php foreach ($recent_blogs as $recent): ?>
                                        <div class="recent-post-single">
                                            <div class="recent-post-img">
                                                <?php 
                                                if (isset($recent["image"]['path'])) {
                                                    $imageUrl = ltrim($recent["image"]['path'], $recent["image"]['path'][0]);
                                                } else {
                                                    $imageUrl = '';
                                                }
                                                ?>
                                                <img src="<?php echo $imageUrl; ?>" alt="<?php echo $recent['title']; ?>">
                                            </div>
                                            <div class="recent-post-bio">
                                                <h6><a href="blog/<?php echo $recent['title_slug']; ?>"><?php echo $recent['title']; ?></a></h6>
                                                <span><i class="far fa-clock"></i><?php echo date("F j, Y", strtotime($recent['date'])); ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- End Recent Posts Section -->
                                <!-- social share -->
                                <div class="widget social-share">
                                    <h5 class="widget-title">Follow Us</h5>
                                    <div class="social-share-link">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                               
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog single end --> 

        </main>

        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


