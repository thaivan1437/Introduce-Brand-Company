
<div class="box_content inner">
	<div class="content">
		<div class="tcat"><div class="icon"><h2><?= $title_tcat ?></h2></div></div>
		<?php if($rs_menu["noidung"]!='') echo $rs_menu["noidung"].'<div class="clear"></div>';?>
		<div class="row">
			<div class="box_product">
				<?php if(!empty($product)){ foreach($product as $k=>$v){?>
				<div class="col-md-3 col-sm-3 col-xs-6">
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
							<div class="bprices">
								<?php if($v["giakm"]>0){?>
								<div class="prices_km">
									<?=($v["gia"]>0) ? number_format($v["gia"],"0",",",".")."đ" : "Contact us" ?>
								</div>
								<div class="prices">
									<span><?=number_format($v["giakm"],"0",",",".")?> đ</span>
									
								</div>
							<?php }else{?>
								<div class="prices">
									<span><?=($v["gia"]>0) ? number_format($v["gia"],"0",",",".")."đ" : "Contact us" ?></span>
								</div>
							<?php }?>
								
							</div>
						</div>
					</div>
				</div>
				<?php }}else echo "<div class='col-xs-12'>Nội dung đang được cập nhật.</div>"; ?>
			</div>
		</div>
		<div class="clear"></div>
		<div class="pagination"><div class="phantrang" ><?= $paging['paging'] ?></div></div>
	</div>
</div>
