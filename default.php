<?php
session_start();
$session = session_id();
error_reporting(0);
@define('_lib', './libraries/');
@define(_upload_folder, './media/upload/');


include_once _lib . "Mobile_Detect.php";
$detect = new Mobile_Detect;
$check = $detect->isMobile();
$check2 = $detect->isTablet();
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
@define ( '_template' , './templates/');
@define('_source', './sources/');


if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'vi';
}

$lang = $_SESSION['lang']; //Lấy ngỗn ngữ
require_once _source . "lang_$lang.php";

include_once _lib . "config.php";

include_once _lib . "constant.php";
include_once _lib . "functions.php";
include_once _lib . "functions_giohang.php";
include_once _lib . "class.database.php";
include_once _lib . "file_requick.php";
include_once _source . "counter.php";
include_once _source . "useronline.php";


if(!empty($_GET['ajax']) && $_GET['ajax'] == 'number'){
		echo get_total();
		die;
	}	
$_SESSION['cur_url'] = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'];
//unset($_SESSION["cart"]);

//check_data($_SESSION["cart"]);
$title_custom = (!empty($title_custom) ? $title_custom : '');
$title_bar = (!empty($title_bar) ? $title_bar : '');
$row_setting['title_' . $lang] = (!empty($row_setting['title_' . $lang]) ? $row_setting['title_' . $lang] : '');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi">
    <head>
        <base href="http://<?= $config_url ?>/"  />
		<title><?= ($title_custom != '') ? $title_custom : $title_bar . $row_setting['title_' . $lang] ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?= ($keywords_custom != '') ? $keywords_custom : $row_setting['keywords_' . $lang] ?>" />
        <meta name="description" content="<?= ($description_custom != '') ? $description_custom : $row_setting['description_' . $lang] ?>" />
        <meta name="author" content="<?=$row_setting["ten_vi"]?>" />
        <meta name="copyright" content="<?=$row_setting["ten_vi"]?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="DC.title" content="<?= ($title_custom != '') ? $title_custom : $title_bar . $row_setting['title_' . $lang] ?>" />
		<meta name="DC.language" scheme="utf-8" content="vi" />
		<meta name="DC.identifier" content="<?= $row_setting['website'] ?>" />
		<meta name="robots" content="noodp,noindex,nofollow" />
		<meta name='revisit-after' content='1 days' />
		<meta http-equiv="content-language" content="vi" />
		<meta property="og:site_name" content="<?= ($title_custom != '') ? $title_custom : $title_bar . $row_setting['title_' . $lang] ?>" />
		<meta property="og:url" content="<?= getCurrentPageUrl() ?>" />
		<meta type="og:url" content="<?= getCurrentPageUrl(); ?>" >
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?= ($title_custom != '') ? $title_custom : $title_bar . $row_setting['title_' . $lang] ?>" />
		<meta property="og:image" content="<?php echo (isset($image_share) ? $image_share : '')?>" />
		<meta property="og:description" content="<?= ($description_custom != '') ? $description_custom : $row_setting['description_' . $lang] ?>" />
		<link href="<?= _upload_hinhanh_l . $row_setting['fav'] ?>" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="assets/font/font-awesome-4.2.0/css/font-awesome.css"/>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="assets/css/mdb.min.css" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.2.0/css/bootstrap.css"/> -->
		<link rel="stylesheet" type="text/css" href="assets/css/font.css"/>
		<link rel="stylesheet" type="text/css" href="assets/js/aos/aos.css"/>
		<link rel="stylesheet" type="text/css" href="assets/js/owlcarousel/owl.carousel.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="assets/js/menu/menumaker.css"/>
		<link rel="stylesheet" type="text/css" href="assets/js/mmenu/mmenu.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/popup.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

		<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
		<!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script> -->

		<style>
			<?php //echo file_get_contents('http://'.$config_url.'/css.php');?>
		</style>
		
		<!-- xuất mã google analytics -->
		<?= $row_setting['gg'] ?>
		<!-- end xuất mã google analytics -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ba0a8961ca8dc12"></script>
	<?php //include _template . "layout/schema.php"; ?>
	</head>
	<body>
		
		<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=2134802169908542&autoLogAppEvents=1"></script>
		<div id="bg_page">
			<header >     	             			           
				<article class="banner">
				<?php 
						if($deviceType=="computer"){ ?>
							<?php include _template . "layout/banner.php"; ?>
						<?php }else{ ?>
							
							<?php include _template . "layout/banner_mb.php"; ?>
						<?php }
					?>
				</article>
			</header><!-- End header -->
			
			<section id="main">
				<article>
					<div class="box_slider" >
						<?php include _template . "layout/slideranh.php"; ?>
					</div>
					<div class="bg_container <?=($source=="index") ? "" : "container";?>" >
						<?php if(true){?>
							<div class="container_mid" id="content">
							<?php include _template . $template . "_tpl.php"; ?> 
							</div>
						<?php  }?>
						<div class="clear"></div>
						
					</div><!-- End container right -->
				</article>
			</section>		
		</div>
		<footer class="wow fadeInUp">
			<?php include _template . "layout/footer.php"; ?>
		</footer><!-- End footer --> 
		
		<!-- <script type="text/javascript" src="assets/bootstrap-3.2.0/js/bootstrap.js"></script> -->
		
		<script type="text/javascript" src="assets/js/owlcarousel/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/menu/menumaker.js"></script>
		<script type="text/javascript" src="assets/js/mmenu/mmenu.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="assets/js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="assets/js/mdb.min.js"></script>
		<script>var base_url = 'http://<?=$config_url?>';  </script>
		<script type="text/javascript" src="assets/js/aos/aos.js"></script>
		<script>
		  AOS.init();
		</script>
		
		<?php include _template . "layout/back_to_top.php"; ?>
		<?php include _template . "layout/hotro.php"; ?>
		<script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>