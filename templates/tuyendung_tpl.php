<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao from #_about where type='co-hoi-nghe-nghiep' and hienthi=1 order by id desc";
$d->query($sql);
$rs_cohoinghenghiep=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,noidung_$lang as noidung from #_time where type='".$type."' order by id desc";
$d->query($sql);
$rs_nhanluc=$d->fetch_array();


?>
<div class="row">
    <div class="col-md-4">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_tuyendung?></div>
                <ul class="list_tuyendung">
                    <li>
                        <a href="co-hoi-nghe-nghiep.html"><?=_cohoinghenghiep?></a>
                    </li>
                    <li>
                        <a href="chinh-sach-nhan-su.html"><?=_chinhsachnhansu?></a>
                    </li>
                    <li>
                        <a href="phat-trien-nguon-nhan-luc.html"><?=_phattriennguonnhanluc?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <?php if($_GET["com"]=="co-hoi-nghe-nghiep" || $_GET["com"]=="tuyen-dung"){?>
                <?php foreach($rs_cohoinghenghiep as $k => $v){ ?>
                    <div class="item_td">
                        <div class="images">
                            <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                                <img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],256,171,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" width=""/>
                            </a>
                        </div>
                        <div class="details">
                            <div class="tit"><a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html"><?=$v["ten"]?></a> </div>
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
                                    <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html"><?=_xemthem?> >></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else{?>
                <div class="boxdatex d-flex pt-2 pb-2">
                    <div class="span">
                        <i class="fa fa-clock"></i>
                        <!-- <?= date("d/m/Y",$rs_nhanluc["ngaytao"]) ?> -->
                    </div>
                    <div class="text-right">

                    </div>
                </div>
                <div class="text-td pb-4">
                    <?=$rs_nhanluc["noidung"]?>
                </div>
            <?php }?>
        </div>
    </div>
</div>


