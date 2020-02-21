<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,type from #_about where type='linh-vuc-hoat-dong' and hienthi=1 order by id desc";
$d->query($sql);
$rs_linhvuc=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,type from #_news where type='tin-tuc' and hienthi=1 order by id desc";
$d->query($sql);
$rs_tintuc=$d->result_array();

$d->reset();
$sql_tintuc = "select ten_$lang as ten,tenkhongdau,id,ngaytao,photo from #_news_item where type='du-an' and hienthi=1 order by stt,ngaytao desc";
$d->query($sql_tintuc);
$rs_duannoibat = $d->result_array();

$linkfb=getCurrentPageURL();
?>
<div class="row">
    <div class="col-md-4 hidden-sm hidden-xs">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_linhvuchoatdong?></div>
                <ul class="list_tuyendung">
                    <?php foreach($rs_linhvuc as $k => $v){ ?>
                        <li>
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html" <?=($id_dmnews == $v["id"]) ? "class='active'" : "" ?> ><?=$v["ten"]?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_duannoibat?></div>
                <ul class="list_tuyendung">
                    <?php foreach($rs_duannoibat as $k => $v){ ?>
                        <li>
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html" <?=($id_dmnews == $v["id"]) ? "class='active'" : "" ?> ><?=$v["ten"]?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="content">
                <div class="tit_l text-uppercase"><?=_tintucnoibat?></div>
                <div class="owltin-left md-right">
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
        </div>
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <div class="shareo">
                <div class="datek">
                    <img src="assets/images/date.png" alt="date"> <?= date("d/m/Y",$tintuc_detail[0]['ngaytao']) ?>  
                </div>
                <div class="boxp">
                <div class="fb-like" data-href="<?=$linkfb?>" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                    <!-- <div class="cm">
                        <div class="fb-like" data-href="<?=$linkfb?>" 
    data-layout="standard" 
    data-action="like" 
    data-show-faces="true">
                        <img src="assets/images/tym.png" alt="like">
                        Like
                        </div>
                        
                    </div>
                    <div class="cm">
                        <img src="assets/images/share.png" alt="share">
                        Share
                    </div> -->
                </div>
            </div>
            <div class="text-colkj pt-4 pb-4">
                <?= $tintuc_detail[0]['noidung'] ?>
            </div>
            <?php if(count($tintuc_khac)>0 ){ ?>
            <div class="orther">
                <div class="tik"><?=_baivietlienquan?></div>
                <?php foreach ($tintuc_khac as $tinkhac) { ?>
                    <div class="item_orther">
                        <div class="images">
                            <img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],180,120,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" />
                            
                        </div>
                        <div class="details">
                            <a href="<?=$_GET["com"]?>/<?= $tinkhac['tenkhongdau'] ?>-<?= $tinkhac['id'] ?>.html"><?= $tinkhac['ten'] ?></a>
                            <div class="dec">
                                <?= $tinkhac['mota'] ?>
                            </div> 
                        </div>
                    </div>
                <?php } ?>
            </div>
                <?php } ?>
        </div>
    </div>
</div>
