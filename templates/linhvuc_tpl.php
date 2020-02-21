<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,photo from #_about where  type='linh-vuc-hoat-dong1' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_ic_linhvuc=$d->result_array()
?>
<div class="row">
    <div class="col-md-4">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_linhvuchoatdong?></div>
                <ul class="list_tuyendung">
                    <?php foreach($tintuc as $k => $v){ ?>
                        <li>
                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html" <?=($id_dmnews == $v["id"]) ? "class='active'" : "" ?> ><?=$v["ten"]?></a>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <div class="content-linvuc">
                <div class="item_linvuc-detail">
                    <div class="titl1"><?=$tintuc[0]["ten"]?></div>
                    <div class="images1">
                        <img src="<?=thumb($tintuc[0]["photo"],_upload_tintuc_l,$tintuc[0]["tenkhongdau"],731,261,1,80)?>" alt="<?=$tintuc[0]["ten"]?>" class="img-responsive" width=""/>
                    </div>
                    <div class="dec1">
                        <?=$tintuc[0]["mota"]?>
                    </div>
                    <div class="d-flex align-items-center icon-more">
                        <?php foreach($rs_ic_linhvuc as $k => $v){ ?>
                            <div class="itkm p-3 text-uppercase">
                                <img src="<?=_upload_tintuc_l.$v["photo"]?>" alt="icon" style="margin-right:10px">
                                <?=$v["ten"]?>
                            </div>
                        <?php }?>
                        
                        
                    </div>
                </div>
                <?php foreach($tintuc as $k => $v)if($k >0){ ?>
                    
                    <div class="item_linvuc-detail1"> 
                        <div class="details">
                            <div class="tit">
                            <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html"><?=$v["ten"]?></a>
                            </div>
                            <div class="moreb">
                                <?=$v["mota"]?>
                            </div>

                        </div>
                        <div class="images <?=($k % 2 == 0) ? "order" : "" ?>">
                            <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                                <img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],255,255,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" width="100%"/>
                            </a>
                        </div>
                    </div>
                <?php } ?>
           </div>
        </div>
    </div>
</div>


