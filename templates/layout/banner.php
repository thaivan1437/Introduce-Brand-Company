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
			<div class="box2">
				<div class="tit_name text-uppercase"><?=$row_setting["ten_".$lang]?></div>
				<div class="tit_slogan"><?=$row_setting["slogan_".$lang]?></div>
			</div>
			<div class="box3">
				<div class="lang">
					<a href="default.php?com=ngonngu&lang=vi">
						<img src="assets/images/vi.png" alt="Vietnames" width="30px" />
						<span>VN</span>
					</a>
					<a href="default.php?com=ngonngu&lang=en">
						<img src="assets/images/en.png" alt="Engligh" width="30px" />
						<span>EN</span>
					</a>
					<a href="default.php?com=ngonngu&lang=jp">
						<img src="assets/images/cn.png" alt="Chinese" width="30px" />
						<span>CN</span>
					</a>
				</div>
				<div class="info_h">
					<div class="hot">	
						Hotline: <?=$row_setting["hotline"]?>
					</div>
					<div class="email">
						Mail: <?=$row_setting["email"]?>
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
			<nav id="cssmenu" class="wow fadeIn" data-wow-delay="0.7s">
				<?php include _template . "layout/menu_top.php"; ?>
			</nav>
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

