<?php
$modversion = array();

//---模組基本資訊---//
$modversion['name'] = '萬用籤筒';
$modversion['version'] = 0.1;
$modversion['description'] = '各種狀況都能使用的籤桶';
$modversion['author'] = 'DengYuan';
$modversion['credits'] = '';
$modversion['help'] = 'page=help';
$modversion['license'] = 'GNU GPL 2.0';
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html/';
$modversion['image'] = 'images/logo.png';
$modversion['dirname'] = basename(dirname(__FILE__));


//---模組狀態資訊---//
$modversion['status_version'] = 'RC';
$modversion['release_date'] = '2014/9/28';
$modversion['module_website_url'] = 'https://sites.google.com/a/dcjh.tn.edu.tw/mis/';
$modversion['module_website_name'] = "DengYuan's working space";
$modversion['module_status'] = 'RC';
$modversion['author_website_url'] = 'https://sites.google.com/a/dcjh.tn.edu.tw/mis/';
$modversion['author_website_name'] = 'DengYuan';
$modversion['min_php']=5.2;
$modversion['min_xoops']='2.5';


//---後台使用系統選單---//
$modversion['system_menu'] = 1;


//---模組資料表架構---//
// $modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// $modversion['tables'][0] = 'yaoh_light';

//---後台管理介面設定---//
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';


//---前台主選單設定---//
$modversion['hasMain'] = 0;

//---偏好設定---//
$modversion['config'] = array();

//---搜尋---//
$modversion['hasSearch'] = 0;

$modversion['blocks'] = array();
$i=1;
$modversion['blocks'][$i]['file'] = "yaoh_rand_block.php";
$modversion['blocks'][$i]['name'] = '萬用籤筒';
$modversion['blocks'][$i]['description'] = '各種狀況都能使用的籤桶';
$modversion['blocks'][$i]['show_func'] = "list_rand_in_blocks";
$modversion['blocks'][$i]['template'] = "yaoh_rand_block_tpl.html";
$modversion['blocks'][$i]['edit_func'] = "edit_list_rand";
$modversion['blocks'][$i]['options'] = '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35|0|恭喜|號中獎|1';
$i++;
$modversion['blocks'][$i]['file'] = "yaoh_rand_block.php";
$modversion['blocks'][$i]['name'] = '資安宣導';
$modversion['blocks'][$i]['description'] = '簡易的資安宣導';
$modversion['blocks'][$i]['show_func'] = "list_rand_in_blocks";
$modversion['blocks'][$i]['template'] = "yaoh_rand_block_tpl.html";
$modversion['blocks'][$i]['edit_func'] = "edit_list_rand";
$modversion['blocks'][$i]['options'] = "生活有治安，網路靠資安,密碼設成一二三，入侵只要數到三,資安太兩光，個資看光光,愛我，不要駭我,天天資安，天天心安,馬馬虎虎的資安，生生世世的心酸,掃了再上 e 路順暢,網前停看聽，E 路好安心,有資安有保庇，沒資安出代誌,檔案不亂載、密碼時常改，不怕麻煩只怕駭 ,資安密密，個資秘秘 ,網路陷阱如虎口，自我隱私要謹守,平時不練資安功，駭客入侵一場空,全民同心，隱私安心,資安防護做的好，個人隱私沒煩惱,資訊恆久遠，一漏永流傳,網路飆網停看聽，隱私保護有信心|0|||2";
$i++;
$modversion['blocks'][$i]['file'] = "yaoh_rand_block.php";
$modversion['blocks'][$i]['name'] = '猜答案';
$modversion['blocks'][$i]['description'] = '猜答案';
$modversion['blocks'][$i]['show_func'] = "list_rand_in_blocks";
$modversion['blocks'][$i]['template'] = "yaoh_rand_block_tpl.html";
$modversion['blocks'][$i]['edit_func'] = "edit_list_rand";
$modversion['blocks'][$i]['options'] = "A,B,C,D,E|1|這題猜|好了|1";
$i++;
$modversion['blocks'][$i]['file'] = "yaoh_rand_block.php";
$modversion['blocks'][$i]['name'] = '趣味選號機';
$modversion['blocks'][$i]['description'] = '趣味選號機(僅可用於教學，請勿挪作他用)';
$modversion['blocks'][$i]['show_func'] = "list_rand_in_blocks";
$modversion['blocks'][$i]['template'] = "yaoh_rand_block_tpl.html";
$modversion['blocks'][$i]['edit_func'] = "edit_list_rand";
$modversion['blocks'][$i]['options'] = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46|0|號碼|不錯|6";

$modversion['hasComments'] = 0;
?>
