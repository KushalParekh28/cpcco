<?php include("commonmetatag.php"); ?>
<?php
$url = parse_url($_SERVER['REQUEST_URI']);
$record = explode("/",$url['path']);
$match = $record[1];

$page_detail = cockpit('collections')->findOne('Pages', ['name_slug' => $match]);

if($page_detail)
{
  	$title = $page_detail['title'];
  	$keywords = $page_detail['keywords'];
  	$description = $page_detail['description'];
}
else
{
  	$title = 'CPC & Company';
    $keywords ='CA firm, accounting, finance';
    $description ='CPC & Company is a leading CA firm providing comprehensive accounting and financial services.';
}
?>

<title><?php echo $title; ?></title>
<meta itemprop="name" content="<?php echo $title; ?>">
<meta itemprop="description" content="<?php echo $description; ?>">
<meta itemprop="image" content="https://cpcco.in/assets/img/logo/cpc_meta.jpg">
<meta name="description" content="<?php echo $description; ?>"/>
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:image" content="https://cpcco.in/assets/img/logo/cpc_meta.jpg" />
<meta name="DC.title" content="<?php echo $title; ?>">
<meta name="application-name" content="CPC & Company"/>
<meta name="Author" content="CPC & Company">
<meta name="robots" content="index, follow, all" />