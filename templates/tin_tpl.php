<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao from #_about where type='co-hoi-nghe-nghiep' and hienthi=1 order by id desc";
$d->query($sql);
$rs_cohoinghenghiep=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,type from #_news_item where type='".$type."' and hienthi=1 order by id desc";
$d->query($sql);
$rs_tin=$d->result_array();


?>
<div class="row">
    <div class="col-md-4">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_tintuc?></div>
                <ul class="list_tuyendung">
                    <?php foreach($rs_tin as $k => $v){ ?>
                        <li>
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a>
                        </li>
                    <?php }?>                  
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <div class="row">
                <?php foreach($tintuc as $k => $v){?>
                    <div class="col-md-4">
                        <div class="item_tin">
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
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="clear"></div>
			<div class="pagination"><div class="phantrang" ><?= $paging['paging'] ?></div></div>
        </div>
    </div>
</div>


