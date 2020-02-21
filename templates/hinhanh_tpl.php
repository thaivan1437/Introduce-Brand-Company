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
                <div class="tit_l text-uppercase"> <?=_thuvien?></div>
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
            <?php if($_GET["id"]!=""){
                $d->reset();
                $sql_detail = "select photo,thumb,ten_$lang as ten,tenkhongdau from #_hinhanh_hinhanh where  id_photo='" . $_GET["id"] . "' and hienthi=1 order by stt, id desc";
                $d->query($sql_detail);
                $result_image = $d->result_array();
            ?>
                <div class="row">
                <?php foreach($result_image as $k => $v){?>
                    <div class="col-md-4">
                        <div class="item_thuvien">
                            <div class="images zoom-img">
                                <a href="<?=_upload_hinhanh_l.$v["photo"]?>" rel="example_group">
                                    <img src="<?=thumb($v["photo"],_upload_hinhanh_l,$v["tenkhongdau"],340,255,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" onerror="if (this.src != 'no-image.png') this.src = 'assets/images/no-image.png';" />
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
                </div>
            <?php }else{ ?>
                <div class="row">
                    <?php foreach($result_image as $k => $v){?>
                        <div class="col-md-4">
                            <div class="item_thuvien">
                                <div class="images zoom-img">
                                    <a href="<?=$com?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                                        <img src="<?=thumb($v["photo"],_upload_hinhanh_l,$v["tenkhongdau"],340,255,1,80)?>" alt="<?=$v["ten"]?>" class="img-responsive" onerror="if (this.src != 'no-image.png') this.src = 'assets/images/no-image.png';" />
                                    </a>
                                </div>
                                <div class="name name_photo">
                                    <a href="<?=$com?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html">
                                        <?=$v["ten"]?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</div>