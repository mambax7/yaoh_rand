<?php
include_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'yr_jsloader.inc.php');
/*
 *版本：0.1 2014/9/28
 *作者：yaoh
 *功能：萬用籤桶主要顯示
 *@para:$edit bool 是否顯示編輯按鈕
 *@para：$options array為設定用陣列
 *		$options[0] 亂數的標的字串1
 *
 *@return:區塊顯示的內容
 */
function list_rand_in_blocks($options){
  global $xoopsDB,$xoopsModuleConfig;
  list($randContent,$repeatAble,$prefix,$postfix,$getNum)=$options;
  $return=yr_jsloader::useBootstrap().yr_jsloader::useJquery();
  $yaohRandID='yaoh_rand_'.uniqid();
  $return.=yr_jsloader::addCss("
  .yaoh_rand {
	cursor:pointer;cursor:hand;
	border:2px dashed gray;
	background:url(".XOOPS_URL."/modules/yaoh_rand/images/pressme.png);
	background-repeat: no-repeat;
	background-position: bottom right;
	padding-bottom:30px;
	padding-top:5px;
	padding-left:5px;
	}
  .yaoh_rand_hover{
	border:3px solid black;
	background:url(".XOOPS_URL."/modules/yaoh_rand/images/pressme_hover.png);
	background-repeat: no-repeat;
	background-position: bottom right;
	padding-bottom:30px;
  }
  .yaoh_rand_hover_div{
	font-size:1.5em;
	color:rgba(255,000,000,0.5);
	position:relative;
	top:0px;
	left:0px;
	font-family:DFKai-sb,Microsoft JhengHei;
  }");
  
  $return.=yr_jsloader::addJava("

	$(document).ready(function(){
		var $yaohRandID=function(){
		var randContent='$randContent';
		var repeatAble='$repeatAble';
		var prefix='$prefix';
		var postfix='$postfix';
		var getNum='$getNum';
		var randContentItemArray=randContent.split(',').sort(function(){return Math.random()-0.5;});
		var randContentItemCount=randContentItemArray.length;
		var outputString='';
		var i=0;
		getNum=(getNum>randContentItemCount)?randContentItemCount:getNum;
		while(i<getNum){
			 if(repeatAble==1){
				rnad_i=Math.floor(Math.random() * getNum);
				 randItem = randContentItemArray[rnad_i];
			 }else{
				randItem = randContentItemArray[i];
			 }
			outputString += '<li>'
			outputString += prefix + '<span class=\'badge badge-important\'>' + randItem + '</span>' + postfix;
			outputString += '</li>'
			i++;
		}
		return outputString;

  }
		$('#$yaohRandID')
			.html($yaohRandID).mousedown(function(e){ e.preventDefault(); })
			.click(function(){
				$(this).html($yaohRandID);
				
				})
			.hover(function(){
				//	$(this).addClass('yaoh_rand_hover').append('<div class=\'yaoh_rand_hover_div\'>點我重新產生</div>');
					$(this).addClass('yaoh_rand_hover');
				}
				,function(){
					$(this).removeClass('yaoh_rand_hover');
					$('.yaoh_rand_hover_div').remove();
					
					});
					

	});
");
  
  //ajax_contenter
	$return.="<div title='"._MB_YAOH_RAND_BLOCK_DIV_TITLE."' id='{$yaohRandID}' class='yaoh_rand'>";
	$return.="</div>";
	return $return;
}

/*
 *版本：0.1 2014/9/28
 *作者：yaoh
 *功能：輸出區塊設定的表單
 *@para：$options array為設定用陣列
 *				$options[0] 亂數的標的字串1
 *@return:輸出區塊設定的表單
 */
function edit_list_rand($options){
  $return= "<ol>";
  	//亂數內容，用半形逗號分隔
  $return.=_MB_YAOH_RAND_CONTENT;
  $return.="<textarea  name='options[0]'>{$options[0]}</textarea>
   </li><br><li>";
  //可否重複
   $return.=_MB_YAOH_RAND_REAPEAT_ABLE;
   if($options[1]=='1'){
		$return.="<input type='radio' name='options[1]' value='1' ,checked='checked'>"._MB_YAOH_RAND_REAPEAT_ABLE_YES."</input>
				<input type='radio' name='options[1]' value='0' >"._MB_YAOH_RAND_REAPEAT_ABLE_NO."</input>";
		}else{
		$return.="<input type='radio' name='options[1]' value='1' >"._MB_YAOH_RAND_REAPEAT_ABLE_YES."</input>
				<input type='radio' name='options[1]' value='0' checked='checked'>"._MB_YAOH_RAND_REAPEAT_ABLE_NO."</input>";
		}
	$return.="
  </li><br><li>";
   //前綴字串
   $return.=_MB_YAOH_RAND_PREFIX;
   $return.="<input type='text' name='options[2]' value='{$options[2]}' size=20>
  </li><br><li>";
	//旋轉角度(空白或0為正常角度)
  $return.=_MB_YAOH_RAND_POSTFIX;
    $return.="<input type='text' name='options[3]' value='{$options[3]}' size=20>
  </li><br><li>";
  //一次取幾個
  $return.=_MB_YAOH_RAND_GET_NUM;
    $return.="<input type='number' name='options[4]' value='{$options[4]}' size=3>
	</li>  <br></ol>";

return $return;
}
?>
