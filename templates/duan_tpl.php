<?php

?>
<div class="row">
    <div class="col-md-4">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> <?=_duannoibat?></div>
                <ul class="list_tuyendung">
                    <?php foreach($tintuc_dm as $k => $v){ ?>
                        <li>
                            <a href="du-an/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/" <?=($id_dmnews == $v["id"]) ? "class='active'" : "" ?> ><?=$v["ten"]?></a>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <div class="content-duan">
                <?php foreach($tintuc as $k => $v){ ?>
                    <div class="item_duan-detail <?=($k % 3 == 0) ? "g" : "h"?>">
                        <div class="images">
                            <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                          
                                <img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],($k % 3 == 0) ? "730" : "350",($k % 3 == 0) ? "261" : "261",1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" width=""/>
                            </a>
                        </div>
                        <div class="details">
                            <div class="tit"><?=$v["ten"]?></div>
                            <div class="moreb">
                                <a href="<?=$_GET['com']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                                    <?=_xemthem?>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php } ?>
           </div>
        </div>
    </div>
</div>


