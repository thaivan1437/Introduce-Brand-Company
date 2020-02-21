	<div class="box_content inner">
		<div class="tcat"><div class="icon"><h2><?= $title_tcat ?></h2></div></div>
		<div class="content">   
			<div class="row">
				<div class="box_product">
					<?php if(!empty($tintuc)){ foreach($tintuc as $k=>$v){?>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="item_sp" data-aos="fade-up">
							<div class="images">
								<a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
									<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],241,360,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" width="100%"/>
									
								</a>
								<div class="more">
									<a href="<?=$_GET["com"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html" class="btnm">
										<span>View more</span>
									</a>
								</div>
							</div>
							<div class="name">
								<a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
									<?=$v["ten"]?>
								</a>
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
