<?php 

if(!defined('_lib')) die("Error");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$config_url=$_SERVER["SERVER_NAME"].'/t12/anhkhoi';

$config['key']='13250889bd58bf0c3da9048abb001f41';
$config['pattern']=2;



$config['salt']='@#$fd_!34^';
$config['locationdefault'] = '10.853132,106.626289';
$config['debug']=1;#Bật chế độ debug dành cho developer
$config['subcat']=1;#Số cấp sản phẩm
$config['subpost']['news']=3;#Số cấp nhiều bài viết của type = news

$config['lang']=array('vi'=>'Tiếng Việt','en'=>'English','jp'=>'Chinese');#Danh sách ngôn ngữ hỗ trợ
$config['lang_default'] = 'vi';#Ngôn ngữ mặc định

$config['database']['servername'] = 'localhost';
$config['database']['username'] = 'demo2ib_akhoi';#Tên đăng nhập database
$config['database']['password'] = 'Dung@<>12345';#Mật khẩu đăng nhập database
$config['database']['database'] = 'demo2ib_akhoi';#Tên database
$config['database']['refix'] = 'table_';

//Config Firewall 
$fw_conf['firewall']='1'; //Bat tat firewall
$fw_conf['max_lockcount']=10;//So lan toi da phat hien dau hieu DDOS va khoa IP do vinh vien 
$fw_conf['max_connect']=15;//So ket noi toi da dc gioi han boi $fw_conf['time_limit']
$fw_conf['time_limit']=3;//Thoi gian dc thuc hien toi da $fw_conf['max_connect'] ket noi
$fw_conf['time_wait']=5;//Thoi gian cho de dc mo khoa khi IP bi khoa tam thoi
$fw_conf['email_admin']='nina@nina.vn';//Email lien lac voi Admin
$fw_conf['htaccess']=".htaccess";//Duong dan toi file htaccess tren server
$fw_conf['ip_allow']='';
$fw_conf['ip_deny']='';

$iphost = '127.0.0.1';
$userhost = 'noreply@demo24';
$passhost = 'Dung@<>12345';
?>