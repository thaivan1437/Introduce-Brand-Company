<?php
$d->reset();
$sql_slider = "select ten_$lang as ten,photo,link, mota_$lang as mota from #_slider where hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$result_slider = $d->result_array();

$d->reset();
$sql_slider = "select ten_$lang as ten,photo,link, mota_$lang as mota from #_doitac where com='slider' and hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$result_slider1 = $d->result_array();



$d->reset();
$sql_slider = "select ten_$lang as ten,photo,link  from #_doitac where (link='".getCurrentPageURL()."') and hienthi=1 and com='banner' order by stt,id desc";
$d->query($sql_slider);

$linksp=getCurrentPageURL();
if($d->num_rows()>0){
	$rs_urlbanner = $d->fetch_array();
	$urlbanner=$rs_urlbanner["photo"];
}else{
	$urlbanner=$row_setting["tuvan"];
}

?>

<link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
<link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
<script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script>
<noscript>
	<link rel="stylesheet" type="text/css" href="assets/css/styleNoJS.css" />
</noscript>


<div id="center-container">
	<?php if($source=="index"){?>
		<?php if($deviceType=="computer"){ ?>
			<div class="demo-2">
				<div id="nav-dots" class="nav-dots">
					<?php foreach($result_slider as $k => $v){ ?>
						<span class="<?=($k==0) ? "nav-dot-current" : "" ?>"></span>
					<?php } ?>
					
				</div>
				<div id="slider" class="sl-slider-wrapper">
					<div class="sl-slider">
						<?php foreach($result_slider as $k => $v){ ?>
							<div class="sl-slide" data-orientation="<?=($k % 2 == 0) ? 'vertical' : 'horizontal' ?>" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="1" data-slice2-scale="1">
								<div class="sl-slide-inner item-slider" >
									<div class="bg-img bg-img-<?=$k+1?>"></div>
									<?php if($v["mota"]!=""){ ?>
										<div class="box_detl pc">
											<div class="name"><?=$v["ten"]?></div>
											<div class="dec"><?=$v["mota"]?></div>
										</div>
									<?php } ?>
								</div>

							</div>
						<?php } ?>
					</div><!-- /sl-slider -->
				</div><!-- /slider-wrapper -->

				
			</div>
		<?php }else{?>
			<div class="owl-slide">
				<?php foreach($result_slider1 as $k => $v){ ?>
				<div class="item-slider">
					<div class="images">
						<img src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="">
						<div class="box_detl">
							<div class="name"><?=$v["ten"]?></div>
							<div class="dec"><?=$v["mota"]?></div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		<?php } ?>
	<?php }else if($template!="product_detail"){?>
	<div class="section-breadcrumbs">
		<img src="<?=_upload_hinhanh_l.$urlbanner?>" class="img-responsive" alt="<?=$row_setting["ten_".$lang]?>" width="100%">
		<div class="container">
			<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
		</div>
	</div>
	<?php }?>
</div><!---end #center-container-->
<style>
	<?php foreach($result_slider as $k => $v){ ?>
	.demo-2 .bg-img-<?=($k+1)?> {
		background-image: url(<?=_upload_hinhanh_l.$v["photo"]?>);
	}
<?php }?>
</style>
<script type="text/javascript" src="assets/js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slitslider.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>

