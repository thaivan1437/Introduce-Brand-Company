<?php
$d->query("select photo_$lang as photo, logo from #_photo where com='banner_top'");
$row_photo = $d->fetch_array();

$d->reset();
$sql="select * from #_icon where com='top' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_icon=$d->result_array();
?>
<div class="top_header">
	<div class="container">
		<div class="grid_header">
			<div class="logo_header">
				<a href="http://<?=$config_url?>" >
				<img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="<?=$row_setting['ten_'.$lang]?>" class="img-responsive" />
				</a>
			</div>
			<div class="box3">
				<div class="info_h">
					<div class="hot">	
						Hotline: <?=$row_setting["hotline"]?>
					</div>
					<div class="email">
					     <?=$row_setting["email"]?>
					</div>
				</div>
			</div>
			
		</div>	
	</div>
</div>
<div class="clear"></div>
<div class="d-menu">
	<div class="container">
		<div class="d-flex align-items-center">
            <div class="menumb">
				<a href="#menu2"><span> <img src="assets/images/tit_bar.png" alt="bar"> </span></a>
				<nav id="menu2">
					<?php include _template . "layout/mmenu.php"; ?>
				</nav>
			</div>
            <div class="lang">
                <a href="default.php?com=ngonngu&lang=vi">
                    <img src="assets/images/vi.png" alt="Vietnames" width="25px" />
                    <span>VN</span>
                </a>
                <a href="default.php?com=ngonngu&lang=en">
                    <img src="assets/images/en.png" alt="Engligh" width="25px" />
                    <span>EN</span>
                </a>
				<a href="default.php?com=ngonngu&lang=jp">
                    <img src="assets/images/cn.png" alt="Chinese" width="25px" />
                    <span>CN</span>
                </a>
            </div>
			<div class="box_icon">
				<?php foreach($rs_icon as $v){?>
				<div class="icon">
					<a href="<?=$v["url"]?>" target="_blank" rel="nofollow">
						<img src="<?=_upload_icon_l.$v["photo"]?>" alt="<?=$v["ten_vi"]?>" class="img-responsive" />
					</a>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
				
	$('#menu2').mmenu({
			extensions	: [ 'effect-slide-menu', 'pageshadow' ],
			navbar 		: {
				title		: 'Menu'
			},

		});
	});
</script>

