<?php


	
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id , link, photo from #_doitac where hienthi=1 and com='banner' order by stt, id desc";
$d->query($sql);
$rs_ban=$d->result_array();
?>
<div class="module_left">
	<div class="content">
		<div class="fb-page" data-href="<?=$row_setting["facebook"]?>" data-tabs="timeline" data-width="250px" data-height="430px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
	</div>          	                                   
</div>
<div class="module_left">
	<div class="content" data-aos="fade-up">
		<?php foreach($rs_ban as $k => $v){ ?>
			<a href="<?=$v["link"]?>">
				<img src="<?=_upload_hinhanh_l.$v["photo"]?>" class="img-responsive" width="100%" alt="<?=$v["ten"]?>">
			</a>
			<div class="clear" style="height:30px"></div>
		<?php } ?>


	</div>
</div>
