<link rel="stylesheet" type="text/css" href="assets/css/cloud_menu.css"/>

<div id="cloud_mmenu">
	<a id="humber_cloud" href="javascript:;"></a>
	<span class="mmm">Menu</span>
</div>

<div id="cloud_openmmenu">
	<div id="cloud_main">
		<div id="close_cloud"></div>
		<div class="scroll_menu_cloud">
			<div class="logo_cloud">Menu</div>
			<div class="menu-small-search" style="cursor:pointer;" data-toggle="modal" data-target="#myModal"><!-- <img src="assets/images/ic_search2.png"> --></div>
			<div class="linebrk_cloud"></div>
			<div class="main_manu_cloud">
				<ul>
					<li><a href="http://<?=$config_url?>" <?php if($source=="index") echo 'class="active"'; ?> title="<?=_trangchu?>" ><?=_trangchu?></a></li>
					<li><a href="chu-de.html" <?php if($com=="chu-de") echo 'class="active"'; ?> title="Chủ đề">Chủ đề</a>
						<ul>
							<?php foreach($chude_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="hoa-dac-biet.html" <?php if($com=="hoa-dac-biet") echo 'class="active"'; ?> title="Hoa đặc biệt">Hoa đặc biệt</a>
						<ul>
							<?php foreach($dacbiet_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="hoa-sinh-nhat.html" <?php if($com=="hoa-sinh-nhat") echo 'class="active"'; ?> title="Hoa sinh nhật">Hoa sinh nhật</a>
						<ul>
							<?php foreach($sinhnhat_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="hoa-tuoi.html" <?php if($com=="hoa-tuoi") echo 'class="active"'; ?> title="Hoa tươi">Hoa tươi</a>
						<ul>
							<?php foreach($hoatuoi_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="hoa-cuoi.html" <?php if($com=="hoa-cuoi") echo 'class="active"'; ?> title="Hoa cưới">Hoa cưới</a>
						<ul>
							<?php foreach($hoacuoi_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="mau-sac.html" <?php if($com=="mau-sac") echo 'class="active"'; ?> title="Màu sắc">Màu sắc</a>
						<ul>
							<?php foreach($mausac_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="qua-tang.html" <?php if($com=="qua-tang") echo 'class="active"'; ?> title="Quà tặng kèm">Quà tặng kèm</a>
						<ul>
							<?php foreach($quatang_list as $v){?>
							<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a></li>
							<?php }?>
						</ul>
					</li>
					<li><a href="y-nghia-hoa.html" <?php if($com=="y-nghia-hoa") echo 'class="active"'; ?> title="Ý nghĩa hoa">Ý nghĩa hoa</a></li>
				</ul>
			</div>
			<div class="cloud_mmenuf" align="center">
				<img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="<?=$row_setting['ten_'.$lang]?>" class="img-responsive" style="margin:10px 0"/>
				<p>Địa chỉ: <?=$row_setting['diachi_vi']?></p>
				<p>Email: <?=$row_setting['email']?></p>
				<p>Điện thoại: <?=$row_setting['hotline']?></p>
			</div>
		</div>
	</div>
	<div class="mask_menu"></div>
</div>

<script>
	$(document).ready(function() {
		$('.main_manu_cloud ul li').each(function(index, el) {
			if($(this).children("ul").length) {
				$(this).prepend('<div class="btn_expand_menu_cloud"></div>');
			}
		});
	});
	$(document).on('click', '#humber_cloud', function(event) {
		event.preventDefault();
		$("#cloud_openmmenu").addClass('expand_menu');
	});
	$(document).on('click', '#close_cloud', function(event) {
		event.preventDefault();
		$("#cloud_openmmenu").removeClass('expand_menu');
	});
	$(document).on('click', '.btn_expand_menu_cloud', function(event) {
		event.preventDefault();
		if($(this).hasClass('more')) {
			$(this).removeClass('more');
			$(this).parent('li').children('a').removeClass('chk_more');
		}
		else {
			$(this).addClass('more');
			$(this).parent('li').children('a').addClass('chk_more');
		}
		$(this).parent('li').children('ul').slideToggle();
	});
</script>
