<div class="row">
    <div class="col-md-4">
        <div class="moudle-left">
            <div class="content">
                <div class="tit_l text-uppercase"> Video</div>
                <ul class="list_tuyendung">
                    <li>
                        <a href="thu-vien.html" <?=($_GET["com"]=="thu-vien") ? "class='active'" : "" ?>><?=_thuvien?></a>
                    </li> 
                    <li>
                        <a href="video.html" <?=($_GET["com"]=="video") ? "class='active'" : "" ?>>Video</a>
                    </li>    
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="content_td">
            <div class="tit_td"><?=$title_tcat?></div>
            <div class="content-linvuc">
                <div class="row">     	         
                    <?php
                    if (count($tintuc) > 0) {
                        for ($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++) {
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-4 video pb-3">     
                                <div class="item_product_menu">
                                    <div class="images">
                                        <a class="xem_video" href="<?= getYoutubeIdFromUrl($tintuc[$i]['link']) ?>">
                                            <img class="img-responsive" style="border:solid 1px #ccc" src="http://img.youtube.com/vi/<?= getYoutubeIdFromUrl($tintuc[$i]['link']) ?>/0.jpg" alt="<?= $tintuc[$i]['ten'] ?>">
                                        </a>      
                                    </div>
                                    <div class="name font-weight-bold pb-2 pt-2"><?= $tintuc[$i]['ten'] ?></div>
                                </div>
                            </div>

                            <?php
                        }
                    } else
                        echo '<p>Nội dung đang cập nhật, bạn vui lòng xem các chuyên mục khác.</p>';
                    ?>            
                </div>                         
                <div class="phantrang" ><?= $paging['paging'] ?></div>
           </div>
        </div>
    </div>
</div>



