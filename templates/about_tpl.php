<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,ngay from #_about where type='lich-su' and hienthi=1 order by id desc";
$d->query($sql);
$rs_lichsu=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,noidung_$lang as noidung from #_time where type='".$type."' order by id desc";
$d->query($sql);
$rs_nhanluc=$d->fetch_array();


$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo from #_doitac where com='doi-tac' order by id desc";
$d->query($sql);
$rs_partners=$d->result_array();


$d->reset();
$sql_1 = "select ten_$lang as ten, id, tenkhongdau, photo, noidung_$lang as noidung from #_hinhanh where hienthi=1 and type='chung-chi' order by stt,id desc";
$d->query($sql_1);
$rs_chungchi = $d->result_array();

$d->reset();
$sql_1 = "select ten_$lang as ten, id, tenkhongdau, photo, noidung_$lang as noidung from #_hinhanh where hienthi=1 and type='nang-luc-thi-cong' order by stt,id desc";
$d->query($sql_1);
$rs_nanglucthicong = $d->fetch_array();

$d->reset();
$sql_1 = "select ten_$lang as ten, id, tenkhongdau, photo, noidung_$lang as noidung,mota_$lang as mota from #_time where hienthi=1 and type='tam-nhin' order by stt,id desc";
$d->query($sql_1);
$rs_tamnhin = $d->fetch_array();

$d->reset();
$sql_1 = "select ten_$lang as ten, id, tenkhongdau, photo, noidung_$lang as noidung,mota_$lang as mota from #_time where hienthi=1 and type='su-menh' order by stt,id desc";
$d->query($sql_1);
$rs_sumenh = $d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,noidung_$lang as noidung from #_about where type='gia-tri-cot-loi' and hienthi=1 order by id desc";
$d->query($sql);
$rs_giatricotloi=$d->result_array();




$d->reset();
$sql_hinhanh = "select photo,thumb,thumb1,id from #_hinhanh_hinhanh where hienthi=1 and id_photo = '" . $rs_nanglucthicong['id'] . "' order by stt,id desc";
$d->query($sql_hinhanh);
$rs_nangluctc = $d->result_array();

?>
<script type="text/javascript" src="assets/js/fancybox/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css" media="screen" />
<script>
	$(document).ready(function(){
		$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
		});
		
	})

</script>
<div class="row">
    <div class="col-md-4">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_anhkhoiconstruction?></div>
                <ul class="list_tuyendung">
                    <li>
                        <a href="tong-quan.html" <?=($_GET["com"]=="tong-quan") ? "class='active'" : "" ?>><?=_tongquan?></a>
                    </li>
                    <li>
						<a href="lich-su.html" <?=($_GET["com"]=="lich-su") ? "class='active'" : "" ?>><?=_lichsuhinhthanh?></a>
                    </li>
                    <li>
						<a href="tam-nhin-su-menh-gia-tri-cot-loi.html" <?=($_GET["com"]=="tam-nhin-su-menh-gia-tri-cot-loi") ? "class='active'" : "" ?>><?=_tamnhin?></a>
                    </li>
					<li>
						<a href="nhan-su-chu-chot.html" <?=($_GET["com"]=="nhan-su-chu-chot") ? "class='active'" : "" ?>><?=_nhansuchuchot?></a>
                    </li>
					<li>
						<a href="nang-luc-thi-cong.html" <?=($_GET["com"]=="nang-luc-thi-cong") ? "class='active'" : "" ?>><?=_nanglucthicong?></a>
                    </li>
					<li>
						<a href="chung-chi.html" <?=($_GET["com"]=="chung-chi") ? "class='active'" : "" ?>><?=_chungchi?></a>
                    </li>
					<li>
						<a href="doi-tac-va-khach-hang.html" <?=($_GET["com"]=="doi-tac-va-khach-hang") ? "class='active'" : "" ?>><?=_doitacvakhachhang?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <?php if($_GET["com"]=="gioi-thieu" || $_GET["com"]=="tong-quan"){?>
                <div class="tcont pt-3 pb-3"><?=$tintuc_detail[0]["noidung"]?></div>
                <?php foreach($rs_cohoinghenghiep as $k => $v){ ?>
                    <div class="item_td">
                        <div class="images">
                            <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                                <img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],256,171,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" width=""/>
                            </a>
                        </div>
                        <div class="details">
                            <div class="tit"><?=$v["ten"]?></div>
                            <div class="dec">
                                <?=$v["mota"]?>
                            </div>
                            <div class="morex">
                                <div class="box1">
                                    <div class="h">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <?=$v["vitri"]?>
                                    </div>
                                    | 
                                    <div class="h">
                                    <?=date("d/m/Y",$v["ngaytao"])?>
                                    </div>
                                    
                                </div>
                                <div class="box2">
                                    <a href=""><?=_xemthem?> >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else if($_GET["com"]=="lich-su"){?>
				<?php foreach($rs_lichsu as $k => $v){ ?>
					<div class="lichsu">
						<div class="box1">
							<span class="tag"><?=$v["ngay"]?></span>
						</div>
						<div class="box2">
							<div class="text-content">
								<div class="titls"><?=$v["ten"]?></div>
								<div class="dec"><?=$v["mota"]?></div>
							</div>
						</div>
					</div>
				<?php } ?>
                
            <?php }else if($_GET["com"]=="tam-nhin-su-menh-gia-tri-cot-loi"){?>
               
                <div class="tamnhin-content">
                    <div class="item-tn">
                        <div class="images">
                            <img src="<?=_upload_hinhanh_l.$rs_tamnhin["photo"]?>" alt="<?=$rs_tamnhin["ten"]?>">
                        </div>
                        <div class="detail">
                            <div class="imk">
                                <img src="assets/images/icdn.jpg" alt="icon doi ngu">
                            </div>
                            <div class="boxkl">
                                <div class="name">
                                    <span><?=$rs_tamnhin["ten"]?></span>
                                </div>
                                <div class="dec"><?=$rs_tamnhin["mota"]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="item-tn">
                        <div class="images">
                            <img src="<?=_upload_hinhanh_l.$rs_sumenh["photo"]?>" alt="<?=$rs_sumenh["ten"]?>">
                        </div>
                        <div class="detail">
                            <div class="imk">
                                <img src="assets/images/icdn1.jpg" alt="icon doi ngu">
                            </div>
                            <div class="boxkl">
                                <div class="name">
                                    <span><?=$rs_sumenh["ten"]?></span>
                                </div>
                                <div class="dec"><?=$rs_sumenh["mota"]?></div>
                            </div>
                        </div>

                    </div>
                    <div class="giatricl">
                        <div class="titl"><?=_giatricotloi?></div>
                        <div class="tab">
                            <?php foreach($rs_giatricotloi as $k => $v){ ?>
                            <div class="tab_name <?=($k==0) ? "active" : ""?>" rel=".giatri_<?=$k?>">
                                <div class="images">
                                    <img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],40,40,2,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
                                </div>
                                <div class="name">
                                    <?=$v["ten"]?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="giatri_content">
                                <?php foreach($rs_giatricotloi as $k => $v){?>
                                    <div class="giatri_<?=$k?> gtcl <?=($k==0) ? "active" : ""?>">
                                        <?=$v["noidung"]?>
                                    </div>
                                <?php }?>
                        </div>
                    </div>
                </div>
			<?php } else if($_GET["com"]=="nhan-su-chu-chot"){?>
				<div class="text-nhansu p3">
					<?=$rs_nhanluc["noidung"]?>
				</div>
			<?php }else if($_GET["com"]=="nang-luc-thi-cong"){?>
                <div class="text-cpo">
                    <!-- <div class="tit_td"><?=$rs_nanglucthicong["ten"]?></div> -->
                    <div class="text-cc pt-3 pb-3">
                        <?=$rs_nanglucthicong["noidung"]?>
                    </div>
                    <ul class="nang-luc-thi-ong">
                        <?php foreach($rs_nangluctc as $k => $v){?>
                            <li>
                                <div class="images">
                                    <a href="<?=_upload_hinhanh_l.$v["photo"]?>" rel="example_group">
                                        <span class="gallery_hover"><i class="fa fa-search"></i></span>
                                        <img src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>" class="img-responsive" />
                                    </a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
			<?php }else if($_GET["com"]=="chung-chi"){?>
                
                <?php foreach($rs_chungchi as $k => $v){
                  $d->reset();
                  $sql_detail = "select photo,thumb,ten_$lang as ten,tenkhongdau from #_hinhanh_hinhanh where  id_photo='" . $v["id"] . "' and hienthi=1 order by stt, id desc";
                  $d->query($sql_detail);
                  $result_image = $d->result_array();  
                ?>
                    <div class="tit_td"><?=$v["ten"]?></div>
                    <div class="text-cc pt-3 pb-3">
                        <?=$v["noidung"]?>
                    </div>
                    <div class="row pb-4">
                        <?php foreach($result_image as $k => $v){?> 
                            <div class="col-md-4 col-sm-4 col-xs-6 col-6">
                                <div class="images">
                                    <a href="<?=_upload_hinhanh_l.$v["photo"]?>" rel="example_group">
                                        <img src="<?=thumb($v["photo"],_upload_hinhanh_l,$v["tenkhongdau"],230,320,2,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>


			<?php } else if($_GET["com"]=="doi-tac-va-khach-hang"){?>
                <div class="row">
                    <?php foreach($rs_partners as $k => $v){ ?>
                    <div class="col-md-3 col-6">
                        <div class="images zoom-img mb-4">
                            <img src="<?=thumb($v["photo"],_upload_hinhanh_l,$v["tenkhongdau"],171,114,2,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
                        </div>
                    </div>
                    <?php } ?>
                </div>
			<?php }?>
        </div>
    </div>
</div>

