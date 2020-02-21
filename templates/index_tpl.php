
<div class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titl"><?=$rs_gioithieu1["ten"]?></div>
			</div>
			<?php if($deviceType=="computer"){?>
			<div class="col-md-7">
				
				<div class="dec"><?=$rs_gioithieu1["mota"]?></div>
				<div class="morex">
					<a href="gioi-thieu.html"><?=_xemthem?> <i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
			<div class="col-md-5">
				<div class="images">
					<img src="<?=thumb($rs_gioithieu1["photo"],_upload_hinhanh_l,$rs_gioithieu1["tenkhongdau"],451,351,1,80)?>" alt="<?=$rs_gioithieu1["ten"]?>" class="img-responsive" width="100%"/>
				</div>
			</div>
			<?php }else{ ?>
				<div class="col-md-5">
					<div class="images">
						<img src="<?=thumb($rs_gioithieu1["photo"],_upload_hinhanh_l,$rs_gioithieu1["tenkhongdau"],451,351,1,80)?>" alt="<?=$rs_gioithieu1["ten"]?>" class="img-responsive" width="100%"/>
					</div>
				</div>
				<div class="col-md-7">
					<div class="dec"><?=$rs_gioithieu1["mota"]?></div>
					<div class="morex">
						<a href="gioi-thieu.html"><?=_xemthem?> <i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="linhvuc-thai">
	<div class="container">
		<?php foreach($rs_linhvuc as $k => $v){ ?>
			<div class="item-lv">
				<div class="images <?=($k % 2 ==0) ? "" : "flex-end" ?>">
					<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
						<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],540,360,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
					</a>
				</div>
				<div class="detail">
					<div class="name">
						<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<?=$v["ten"]?>
						</a>
					</div>
					<div class="dec">
						<?=$v["mota"]?>
					</div>
					<div class="morex">
						<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<?=_timhieuthem?> 
						</a>
					</div>
				</div>
			</div>
		<?php }?>
	</div>
</div>

<div class="duan-thai">
	<div class="container">
		<div class="titlko"><?=_duandathuchien?></div>
		<div class="owl-duan">
			<?php foreach($rs_duan as $k => $v){?>
				<div class="item-duan">
					<div class="images">
						<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],261,261,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />	
						</a>
					</div>
					<div class="name">
						<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<?=$v["ten"]?>	
						</a>
					</div>
					<div class="morec text-center">
						<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<?=_xem?>	
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="tintuc-thai">
	<div class="container">
		<div class="tilo"><?=_tintucnoibat?></div>
		<div class="row">
			<div class="col-md-8">
				<div class="md-right">
					<?php foreach($rs_tintuc as $k => $v){ ?>
					<div class="item-tintuc">
						<div class="images zoom-img">
							<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],351,151,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
							
							</a>
						</div>
						<div class="detail">
							<div class="date">
								<div class="day">
									<?=date("d",$v["ngaytao"])?>
								</div>
								<div class="month">
									<?=date("F",$v["ngaytao"])?>
								</div>
							</div>
							<div class="boxnam">
								<a class="name" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
										
										<?=$v["ten"]?>
									</a>
								<div class="dec">
									<?=$v["mota"]?>
								</div>
								<div class="morea">
									<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html"><?=_xemchitiet?></a>

								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-left">
					<div class="tit-md"><?=_tuyendung?></div>
					<ul class="md">
						<?php foreach($rs_cohoinghenghiep as $k => $v){ ?>
							<li>
								<div class="name">
									<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
										<img src="assets/images/ar_r.png" alt="right" style="margin-right:15px">
										<?=$v["ten"]?>
									</a>
								</div>
								<div class="dec">
									<?=$v["mota"]?>
								</div>
							</li>
						<?php } ?>
						<li class="last">
							<a class="" href="co-hoi-nghe-nghiep.html"><?=_xemtatca?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="taisao-thai">
	<div class="container">
		<div class="content-ts-thai">
			<div class="tit-ts">
				<?=$rs_taisao1["ten"]?>
			</div>
			<div class="dects">
				<?=$rs_taisao1["mota"]?>
			</div>
			<?php if($deviceType=="computer"){?>
				<div class="row">
					<?php foreach($rs_taisao as $k => $v){?>
						<div class="col-md-3 col-sm-3 col-xs-12 p-0">
							<div class="item-ts ">
								<div class="images pb-3">
									<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],49,49,2,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
								</div>
								<div class="tit-name">
									<?=$v["ten"]?>
								</div>
								<div class="dec">
									<?=$v["mota"]?>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			<?php } else { ?>
				<div class="owl-tsmb">
					<?php foreach($rs_taisao as $k => $v){?>
						<div class="item-ts text-center">
							<div class="images pb-3">
								<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],49,49,2,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
							</div>
							<div class="tit-name">
								<?=$v["ten"]?>
							</div>
							<div class="dec">
								<?=$v["mota"]?>
							</div>
						</div>	
					<?php }?>
				</div>
			<?php }?>
			
		</div>
	</div>
</div>

