<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id from #_product_list where com=1 and type='innovation-samples' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_list=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id from #_product_list where com=1 and type='high-volume-styles' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_list1=$d->result_array();


?> 
<ul class="" >
	<li><a href="http://<?=$config_url?>" <?php if($source=="index") echo 'class="active"'; ?> title="<?=_trangchu?>" ><?=_trangchu?></a></li>

	<li><a href="gioi-thieu.html" <?php if($com=="gioi-thieu") echo 'class="active"'; ?> title="<?=_gioithieu?>"><?=_gioithieu?></a></li>

	<!-- <li><a href="innovation-samples.html" <?php if($com=="innovation-samples") echo 'class="active"'; ?> title="Innovation Samples">Innovation Samples</a>
		<ul>
		<?php foreach($rs_list as $v){?>
		<li><a href="innovation-samples/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a>
		</li>
		<?php }?>
		</ul>
	</li> -->
	<li><a href="linh-vuc-hoat-dong.html" <?php if($com=="linh-vuc-hoat-dong") echo 'class="active"'; ?> title="<?=_linhvuchoatdong?>"><?=_linhvuchoatdong?></a>
		
	</li>

	<li><a href="du-an.html" <?php if($com=="du-an") echo 'class="active"'; ?> title="<?=_duan?>"><?=_duan?></a>
		
	</li>



	<li><a href="tin-tuc.html" <?php if($com=="tin-tuc") echo 'class="active"'; ?> title="<?=_tintuc?>"><?=_tintuc?></a></li>
	<li><a href="thu-vien.html" <?php if($com=="thu-vien") echo 'class="active"'; ?> title="<?=_thuvien?>"><?=_thuvien?></a></li>
	<li><a href="tuyen-dung.html" <?php if($com=="tuyen-dung") echo 'class="active"'; ?> title="<?=_tuyendung?>"><?=_tuyendung?></a></li>
	<li><a href="lien-he.html" <?php if($com=="lien-he") echo 'class="active"'; ?> title="<?=_lienhe?>"><?=_lienhe?></a></li>

</ul>
