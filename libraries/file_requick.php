<?php
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$d = new database($config['database']);

$d->reset();
$sql_setting = "select * from #_setting limit 0,1";
$d->query($sql_setting);
$row_setting = $d->fetch_array();

//lấy logo trang
$d->reset();
$sql="select photo_$lang as photo, logo from #_photo where com='banner_top'";
$d->query($sql);
$row_photo = $d->fetch_array();

if(isset($_SESSION["login_web"]["id"]) && $_SESSION["login_web"]["id"]!=''){
	$d->reset();
	$sql="select * from #_member where id='".$_SESSION["login_web"]["id"]."'";
	$d->query($sql);
	$rs_user=$d->fetch_array();
}

$title_custom = '';
$keywords_custom = '';
$description_custom = '';

		
switch ($com) {
    case 'thoat':
        $source = "logout";
        $template = "index";
        break;




    case 'gioi-thieu':
        $source = "about";
		$table="about";
		$type='gioi-thieu';
		$title_bar =   _tongquan.' - ';
		$title_tcat = _tongquan.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;

    case  'tong-quan':
        $source = "about";
		$table="about";
		$type='gioi-thieu';
		$title_bar =   _tongquan.' - ';
		$title_tcat = _tongquan.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;

    case 'lich-su':
        $source = "about";
		$table="about";
		$type='lich-su';
		$title_bar =   _lichsuhinhthanh.' - ';
		$title_tcat = _lichsuhinhthanh.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;

    case 'tam-nhin-su-menh-gia-tri-cot-loi':
        $source = "about";
		$table="about";
		$type='tam-nhin-su-menh-gia-tri-cot-loi';
		$title_bar =   _tamnhin.' - ';
		$title_tcat = _tamnhin.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;
    
    case 'nhan-su-chu-chot':
        //$source = "about";
        $table="about";
        $type='nhan-su-chu-chot';
        $title_bar =   _nhansuchuchot.' - ';
        $title_tcat = _nhansuchuchot.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;

    case 'nang-luc-thi-cong':
        $source = "about";
		$table="about";
		$type='nang-luc-thi-cong';
		$title_bar =   _nanglucthicong.' - ';
		$title_tcat = _nanglucthicong.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;

case 'chung-chi':
        $source = "about";
		$table="about";
		$type='chung-chi';
		$title_bar =   _chungchi.' - ';
		$title_tcat = _chungchi.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;
case 'doi-tac-va-khach-hang':
        $source = "about";
		$table="about";
		$type='doi-tac-va-khach-hang';
		$title_bar =   _doitacvakhachhang.' - ';
		$title_tcat = _doitacvakhachhang.'';
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;



	case 'linh-vuc-hoat-dong':
		$table='about';
		$type="linh-vuc-hoat-dong";
		$title_bar = _linhvuchoatdong.' - ';
		$title_tcat = _linhvuchoatdong.'';
        $source = "amthuc";
        $template = isset($_GET['id']) ? "news_detail" : "linhvuc";
        break;

    case 'tin-tuc':
        $table='about';
        $type="tin-tuc";
        $title_bar = _tintuc.' - ';
        $title_tcat = _tintuc.'';
        $source = "news";
        $template = isset($_GET['id']) ? "news_detail" : "tin";
        break;

	case 'tuyen-dung':
		$table='about';
		$type="tuyen-dung";
		$title_bar =  _tuyendung.' - ';
		$title_tcat = _tuyendung.'';
        $source = "amthuc";
        $template = isset($_GET['id']) ? "news_detail" : "tuyendung";
        break;
    
    case 'co-hoi-nghe-nghiep':
		$table='about';
		$type="co-hoi-nghe-nghiep";
		$title_bar =  _cohoinghenghiep.' - ';
		$title_tcat = _cohoinghenghiep.'';
        $source = "amthuc";
        $template = isset($_GET['id']) ? "news_detail" : "tuyendung";
        break;
    
    case 'chinh-sach-nhan-su':
        $table='about';
        $type="chinh-sach-nhan-su";
        $title_bar =  _chinhsachnhansu.' - ';
        $title_tcat = _chinhsachnhansu.'';
        $source = "amthuc";
        $template = isset($_GET['id']) ? "news_detail" : "tuyendung";
        break;

    case 'phat-trien-nguon-nhan-luc':
        $table='about';
        $type="phat-trien-nguon-nhan-luc";
        $title_bar =  _phattriennguonnhanluc.' - ';
        $title_tcat = _phattriennguonnhanluc.'';
        $source = "amthuc";
        $template = isset($_GET['id']) ? "news_detail" : "tuyendung";
        break;

    case 'lien-he':
        $title_bar =  _lienhe.' - ';
        $title_tcat = _lienhe.'';
        $source = "contact";
        $template = "contact";
        break;
    
    case 'thu-vien':
        $title_bar =  _thuvien.' - ';
        $title_tcat = _thuvien.'';
        $type="thu-vien";
        $source = "hinhanh";
        $template = "hinhanh";
        break;
    case 'video':
        $title_bar =  'Video - ';
        $title_tcat = 'Video';
        $source = "video";
        $template = "video";
        break;

    case 'tim-kiem':
        $source = "search";
        $template = "search";
        break;
    case 'ajax':
        $source = "ajax";
        break;
    
	case 'du-an':
		$type='du-an';
		$title_bar = _duan.' - ';
		$title_tcat = _duan.'';
        $source = "news";
        $template = isset($_GET['id']) ? "news_detail" : "duan";
        break;

    case 'innovation-samples':
        $type='innovation-samples';
        $title_bar = 'Innovation Samples - ';
        $title_tcat = 'Innovation Samples';
        $source = "product";
        $template = isset($_GET['id']) ? "product_detail" : "product";
        break;

	case 'user':
        switch ($act){
			case 'kich-hoat-tai-khoan':
				$source = "user/kichhoat";
				$template = "user/kichhoat";
				break;
		}
        break;
    case 'ngonngu':
        if (isset($_GET['lang'])) {
            switch ($_GET['lang']) {
                case 'vi':
                    $_SESSION['lang'] = 'vi';
                    break;
                case 'en':
                    $_SESSION['lang'] = 'en';
                    break;
                case 'jp':
                    $_SESSION['lang'] = 'jp';
                    break;
                default:
                    $_SESSION['lang'] = 'vi';
                    break;
            }
        } else {
            $_SESSION['lang'] = 'vi';
        }
        redirect($_SERVER['HTTP_REFERER']);
        break;

    default:
        $source = "index";
        $template = "index";
        break;
}

if ($source != "")
    include _source . $source . ".php";

if (isset($_REQUEST['com']) && $_REQUEST['com'] == 'logout') {
    session_unregister($login_name);
    header("Location:index.php");
}
?>