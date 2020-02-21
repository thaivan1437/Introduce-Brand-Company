<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logoad.png" width="150"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
	<li class="dash" id="menu1"><a class=" active" title="" href="default.php"><span>Trang chủ</span></a></li>
	<!-- <li class="categories_li <?php if($_GET["com"]=='product' && $_GET["type"]=="innovation-samples") echo "activemenu";?>" id="menu_sp"><a href="" title="" class="exp"><span>Innovation samples</span><strong></strong></a>
		<ul class="sub">
			<?php for($i=1;$i<=$config['subcat'];$i++){?>
			<li><a href="default.php?com=product&act=man_list&subcat=<?=$i?>&type=innovation-samples">Quản lý danh mục cấp <?=$i?></a></li>
			<?php }?>
			<li><a href="default.php?com=product&act=man&type=innovation-samples">Quản lý innovation samples</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if($_GET["com"]=='product' && $_GET["type"]=="high-volume-styles") echo "activemenu";?>" id="menu_sp2"><a href="" title="" class="exp"><span>High Volume styles</span><strong></strong></a>
		<ul class="sub">
			<?php for($i=1;$i<=$config['subcat'];$i++){?>
			<li><a href="default.php?com=product&act=man_list&subcat=<?=$i?>&type=high-volume-styles">Quản lý danh mục cấp <?=$i?></a></li>
			<?php }?>
			<li><a href="default.php?com=product&act=man&type=high-volume-styles">Quản lý High Volume styles</a></li>
		</ul>
	</li> -->
	<!--<li class="categories_li <?php if($_GET["com"]=='comment') echo "activemenu";?>" id="menu_bl"><a href="" title="" class="exp"><span>Bình luận</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=comment&act=man">Quản lý bình luận</a></li>
		</ul>
	</li>-->
	<li class="categories_li <?php if(($_GET["com"]=='time' )) echo "activemenu";?>" id="menu_gt"><a href="" title="" class="exp"><span>Quản lý một bài viết</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=gioi-thieu">About us</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=chinh-sach-nhan-su">Chính sách nhân sự</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=nhan-su-chu-chot">Nhân sự chủ chốt</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=phat-trien-nguon-nhan-luc">Phát triển nguồn nhân lực</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=tai-sao">Tại sao chọn chúng tôi</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=tam-nhin">Tầm nhìn</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=su-menh">Sứ mệnh</a></li>

			<li><a href="default.php?com=time&act=capnhat&type=dktv">Đăng ký tư vấn</a></li>
			
		</ul>
	</li>
	<!-- <li class="categories_li <?php if(($_GET["com"]=='news') && $_GET["type"]=="linh-vuc" ) echo "activemenu";?>" id="menu_tl2"><a href="" title="" class="exp"><span>Lĩnh vực hoạt động</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=news&act=man_cat&type=linh-vuc">Danh mục lính vực hoạt động</a></li>
			<li><a href="default.php?com=news&act=man&type=linh-vuc">Lĩnh vực hoạt động</a></li>
		</ul>
	</li> -->
	
	<li class="categories_li <?php if(($_GET["com"]=='news') && $_GET["type"]=="du-an" ) echo "activemenu";?>" id="menu_tl3"><a href="" title="" class="exp"><span>Dự án</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=news&act=man_cat&type=du-an">Danh mục dự án</a></li>
			<li><a href="default.php?com=news&act=man&type=du-an">dự án</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='news') && $_GET["type"]=="tin-tuc" ) echo "activemenu";?>" id="menu_tlm"><a href="" title="" class="exp"><span>Tin tức</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=news&act=man_cat&type=tin-tuc">Danh mục Tin tức</a></li>
			<li><a href="default.php?com=news&act=man&type=tin-tuc">Tin tức</a></li>
		</ul>
	</li>


	<li class="categories_li <?php if(($_GET["com"]=='about') || ($_GET["com"]=='product' && $_GET["com"]=='nang-luc-thi-cong') ) echo "activemenu";?>" id="menu_td"><a href="" title="" class="exp"><span>Quản lý bài viết</span><strong></strong></a>
		<ul class="sub">
			
			<li><a href="default.php?com=about&act=man&type=co-hoi-nghe-nghiep">Quản lý cơ hội nghề nghiệp</a></li>
			<li><a href="default.php?com=about&act=man&type=lich-su">Lịch sử công ty</a></li>
			<li><a href="default.php?com=about&act=man&type=chung-chi">Quản lý chứng chỉ</a></li>
			<!-- <li><a href="default.php?com=about&act=man&type=tam-nhin-su-menh">Tầm nhìn sứ mệnh</a></li> -->
			<li><a href="default.php?com=about&act=man&type=tai-sao">Tại sao chọn chúng tôi</a></li>

			<!-- <li><a href="default.php?com=about&act=man&type=tin-tuc">Tin tức</a></li> -->

			<li><a href="default.php?com=about&act=man&type=linh-vuc-hoat-dong">Lĩnh vực hoạt động</a></li>
			<li><a href="default.php?com=about&act=man&type=linh-vuc-hoat-dong1">Icon lĩnh vực hoạt động</a></li>

			<li><a href="default.php?com=hinhanh&act=man&type=nang-luc-thi-cong">Năng lực thi công</a></li>
			<li><a href="default.php?com=hinhanh&act=man&type=chung-chi">Chứng chỉ</a></li>
			<li><a href="default.php?com=hinhanh&act=man&type=thu-vien">Thư viện</a></li>

			<li><a href="default.php?com=about&act=man&type=gia-tri-cot-loi">Giá trị cốt lõi</a></li>
			<!-- <li><a href="default.php?com=about&act=man&type=linh-vuc">Lĩnh vực hoạt động</a></li>
			<li><a href="default.php?com=about&act=man&type=gioi-thieu">Quản lý giới thiệu</a></li> -->
		</ul>
	</li>
	<li class="categories_li <?php if($_GET["com"]=='bannerqc' || $_GET["com"]=='quangcao' || $_GET["com"]=='slider' || $_GET["com"]=='doitac') echo "activemenu";?>" id="menu_sl"><a href="" title="" class="exp"><span>Hình ảnh - Slider</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=bannerqc&act=capnhat">Quản lý banner</a></li>
			<li><a href="default.php?com=slider&act=man_photo&type=slider">Quản lý slider</a></li>
			<li><a href="default.php?com=doitac&act=man_photo&type=slider">Quản lý slider mobile</a></li>
			<li><a href="default.php?com=doitac&act=man_photo&type=doi-tac">Quản lý đối tác</a></li>
			<li><a href="default.php?com=doitac&act=man_photo&type=banner">Quản lý banner từng trang</a></li>
			
		</ul>
	</li>
	<li class="categories_li <?php if($_GET["com"]=='dknhantin' || $_GET["com"]=='yahoo' ||$_GET["com"]=='lienhe' || $_GET["com"]=='footer' || $_GET["com"]=='video' || $_GET["com"]=='popub' || $_GET["com"]=='footer' || $_GET["com"]=='setting') echo "activemenu";?>" id="menu_tl"><a href="" title="" class="exp"><span>Thiết lập</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=icon&act=man&type=top">Quản lý MXH</a></li>
			<li><a href="default.php?com=video&act=man">Quản lý video</a></li>
			<!-- <li><a href="default.php?com=yahoo&act=man&type=top">Quản lý hỗ trợ trực tuyến</a></li>
			<li><a href="default.php?com=footer&act=capnhat">Quản lý footer</a></li> -->
			<li><a href="default.php?com=lienhe&act=capnhat">Quản lý liên hệ</a></li>
			<li><a href="default.php?com=setting&act=capnhat">Quản lý thiết lập</a></li>
			<!-- <li><a href="default.php?com=schema&act=capnhat">Quản lý schema</a></li> -->
			
		</ul>
	</li>
</ul>