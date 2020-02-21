<?php

if (!defined('_source'))
    die("Error");

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,type from #_about where type='linh-vuc-hoat-dong' and hienthi=1 order by id desc";
$d->query($sql);
$rs_linhvuc=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,type from #_about where type='co-hoi-nghe-nghiep' and hienthi=1 order by id desc limit 0,4";
$d->query($sql);
$rs_cohoinghenghiep=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,type from #_news where type='tin-tuc' and hienthi=1 and tinnoibat=1 order by id desc limit 0,4";
$d->query($sql);
$rs_tintuc=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,type from #_news where type='du-an' and hienthi=1 order by id desc";
$d->query($sql);
$rs_duan=$d->result_array();


$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,vitri_$lang as vitri,ngaytao,type from #_about where type='tai-sao' and hienthi=1 order by id desc";
$d->query($sql);
$rs_taisao=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota,ngaytao,noidung_$lang as noidung,type from #_time where type='tai-sao' order by id desc";
$d->query($sql);
$rs_taisao1=$d->fetch_array();



$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id,  photo,mota_$lang as mota from #_time where type='gioi-thieu' order by id desc";
$d->query($sql);
$rs_gioithieu1=$d->fetch_array();






/* $tongsanpham = count($rs_product_khuyenmai);
$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
$url = getCurrentPageURL();
$maxR = 20;
$maxP = 5;
$paging = paging_home($rs_product_khuyenmai, $url, $curPage, $maxR, $maxP);
$rs_product_khuyenmai = $paging['source']; */

$image_share='http://' . $config_url .'/'._upload_hinhanh_l.$row_photo["logo"];


?>