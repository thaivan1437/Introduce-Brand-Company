<div class="box_content">
	<div class="grid_product-detail">
		<div class="box">
			<img src="<?=thumb($row_detail["photo"],_upload_product_l,$row_detail["tenkhongdau"],320,520,1,80)?>" alt="<?=$row_detail["ten"]?>" class="img-responsive" width="100%"/>
		</div>
		<div class="box2">
			<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
			<div class="tit_n"><?= $row_detail['ten'] ?></div>
			<div class="price">
				<span>Price: </span>
				<div class="bprices">
					<?php if($row_detail["giakm"]>0){?>
					<div class="prices_km">
						<?=($row_detail["gia"]>0) ? number_format($row_detail["gia"],"0",",",".")."đ" : "Contact us" ?>
					</div>
					<div class="prices">
						<span><?=number_format($row_detail["giakm"],"0",",",".")?> đ</span>
						
					</div>
				<?php }else{?>
					<div class="prices">
						<span><?=($row_detail["gia"]>0) ? number_format($row_detail["gia"],"0",",",".")."đ" : "Contact us" ?></span>
					</div>
				<?php }?>
					
				</div>
			</div>
			<div class="dec">
				<span>Decription: </span>
				<?= $row_detail['mota'] ?>
			</div>
			<div class="hot_product-detail">
				For more information <br>
				please call us: <a href="tel:<?=$row_setting["hotline"]?>"><?=$row_setting["hotline"]?></a>
			</div>
		</div>
	</div>

	<div class="content_product">
		<div class="tit_m">Additonal information</div>
		<?= $row_detail['noidung'] ?>
	</div>
</div>

	
</div>
<div class="othernews">
	
	<div class="grid_lv">
		<div class="box" data-aos="fade-up">
			<div class="tit">Related Products</div>				
		</div>
		<div class="box2 owl-spk" data-aos="fade-up">
			<?php foreach($sanpham_khac as $k => $v){ ?>
			<div class="item_sp" data-aos="fade-up">
				<div class="images">
					<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
						<img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],241,360,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" width="100%"/>
						
					</a>
					<div class="more">
						<a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html" class="btnm">
							<span>View more</span>
						</a>
					</div>
				</div>
				<div class="detail">
					<div class="name">
						<a class="" href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
							<?=$v["ten"]?>
						</a>
					</div>
					
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
