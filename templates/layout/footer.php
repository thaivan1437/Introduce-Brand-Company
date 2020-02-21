<?php
	
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,photo,mota_$lang as mota, ngaytao,ngaysua,type from #_about where type='link' and noibat=1 and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_link=$d->result_array();


$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,type from #_about where type='linh-vuc-hoat-dong' and hienthi=1 order by id desc";
$d->query($sql);
$rs_linhvuchoatdong=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,noidung_$lang as noidung,type from #_time where type='dktv' order by id desc";
$d->query($sql);
$rs_dktv=$d->fetch_array();

?>
<div class="form">
	<div class="container">
		<form action="lien-he.html" method="post" class="form-ft">
			<div class="row">
				<div class="col-md-3">
					<div class="titf"><?=$rs_dktv["ten"]?></div>
					<div class="dec">
					<?=$rs_dktv["mota"]?>
					</div>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="ten" id="ten" placeholder="<?= _hovaten ?>" required oninvalid="this.setCustomValidity('<?= _hotengui ?>')" oninput="setCustomValidity('')">
							</div> 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="tel" pattern="[0][0-9]{9,10}" min="10" max="13" class="form-control" name="dienthoai" id="dienthoai" placeholder="<?=_sodienthoai?>" value="" required oninvalid="this.setCustomValidity('<?=_sodienthoai?>')" oninput="setCustomValidity('')">
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="noidung" id="noidung" class="form-control" rows="3" required oninvalid="this.setCustomValidity('<?= _noidunggui ?>')" placeholder="<?= _noidunggui ?>" oninput="setCustomValidity('')"></textarea>
							</div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-success send" onclick=""><?= _dangkyngay ?></button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container">
	<div class="grid_ft" >
		<div class="box2">
			<div id="map_canvas">
				<?=$row_setting['toado']?>
			</div>
		</div>
		<div class="box" >
			<div class="detail">
				<a href="http://<?=$config_url?>" >
					<img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="<?=$row_setting['ten_'.$lang]?>" class="img-responsive" />
				</a>
			</div>
			<div class="boxx">
				<div class="ft_name"> <?=$row_setting["ten_".$lang]?></div>
				<p><b><?=_diachi?></b>: <?=$row_setting["diachi_".$lang]?></p>
				<p><b>Fax :</b> <?=$row_setting["fax"]?></p>
				<p><b>MST :</b> <?=$row_setting["mst"]?></p>
				<p><b>Email :</b> <?=$row_setting["email"]?></p>
				<p><b>Website :</b> <?=$row_setting["website"]?></p>
			</div>
		</div>
		<div class="box3">
			<div class="down">
				<a href="<?=$row_setting["twitter"]?>">Download portfolio</a> 
			</div>
			<div class="tlof"><?=_linhvuchoatdong?></div>
			<ul class="lvf">
				<?php foreach($rs_linhvuchoatdong as $k => $v){?>
					<li>
						<a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<?=$v["ten"]?>
						</a>
					</li>
				<?php }?>
				
			</ul>
		</div>
	</div>

	<div class="grid_ft bg" >
		<div class="box2">
			<div class="images"><img src="assets/images/vi.png" alt=""></div>
			<div class="hkl">
				<div>Hotline</div>
				<div>VietNam: <?=$row_setting["hotline"]?></div>
			</div>
		</div>
		<div class="box2 cambodia" >
			<div class="images"><img src="assets/images/cam.png" alt=""></div>
			<div class="hkl">
				<div>Hotline</div>
				<div>Cambodia: <?=$row_setting["ten_hl1"]?></div>
			</div>
		</div>
		<div class="box3">
			<div class="box_icon">
				<?php foreach($rs_icon as $v){?>
				<div class="icon">
					<a href="<?=$v["url"]?>" target="_blank" rel="nofollow">
						<img src="<?=_upload_icon_l.$v["photo"]?>" alt="<?=$v["ten_vi"]?>" class="" />
						
					</a>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<div class="copy">Copyright © 2019. Design by <a href="http://ibweb.vn" target="blank">Ibweb</a></div>