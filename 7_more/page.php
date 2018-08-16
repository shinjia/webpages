<?php
$code = isset($_GET['code']) ? $_GET['code'] : 'HOME'; 
$css = isset($_GET['css']) ? $_GET['css'] : '';


// 設定對應的 css 檔案
$file_css = 'css/style_' . $css . '.css';
if(!file_exists($file_css))
{
  $file_css = 'css/style.css';
}


// 依參數設定各個不同的變數值
switch($code)
{
	case 'a' :
		$web_banner = 'images/banner_a.jpg';
		$web_title = '墾丁國家公園';
		$filename = 'part1.html';
		break;	
		
	case 'b' :
		$web_banner = 'images/banner_b.jpg';
		$web_title = '玉山國家公園';
		$filename = 'part2.html';
		break;
		
	case 'c' :
		$web_banner = 'images/banner_c.jpg';
		$web_title = '陽明山國家公園';
		$filename = 'part3.html';
		break;
		
	case 'd' :
		$web_banner = 'images/banner_d.jpg';
		$web_title = '太魯閣國家公園';
		$filename = 'part4.html';
		break;
		
	case 'e' :
		$web_banner = 'images/banner_e.jpg';
		$web_title = '雪霸國家公園';
		$filename = 'part5.html';
		break;
		
	case 'f' :
		$web_banner = 'images/banner_f.jpg';
		$web_title = '金門國家公園';
		$filename = 'part6.html';
		break;
		
	default :
		$web_banner = 'images/banner_home.jpg';
		$web_title = '國家公園首頁';
		$filename = 'page_home.html';
		break;
}


// 讀取各自的內容檔案
$file = 'data/' . $filename;
$web_content = file_get_contents($file);


// 設定額外資訊區的內容
$web_extra   = '<p>國家公園設置的目標在於透過有效的經營管理與保育措施，以維護國家公園特殊的自然環境與生物多樣性。因此，管理單位明確地掌握與瞭解園區內環境與生物多樣性之狀況與變化，針對可能威脅園區內環境與生物多樣性健全之因素，加以妥善地因應與處理，同時監測與評估經營管理的成效，對於達成國家公園設置的目標至為重要。</p>';


/*
// 要設定下列資料
$web_banner  = 'images/banner_a.jpg';
$web_title   = 'xxxxxx';
$web_content = 'xxxxxxx';
$web_extra   = 'xxxxxxxxx';
*/


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Pages Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{$file_css}">
</head>
<body>
<div id="container">
  
  <div id="header">
    <img src="{$web_banner}">
  </div>
  
  <div id="wrapper">
    <div id="content">
      <h2>{$web_title}</h2>
      <div>{$web_content}</div>
    </div>
  </div>
  
  <div id="navigation">
      <ul>
         <li><a href="?code=a&css={$css}">墾丁國家公園</a></li>
         <li><a href="?code=b&css={$css}">玉山國家公園</a></li>
         <li><a href="?code=c&css={$css}">陽明山國家公園</a></li>
         <li><a href="?code=d&css={$css}">太魯閣國家公園</a></li>
         <li><a href="?code=e&css={$css}">雪霸國家公園</a></li>
         <li><a href="?code=f&css={$css}">金門國家公園</a></li>
      </ul>
  </div>
  
  <div id="extra">
    {$web_extra}
  </div>
  
  <div id="footer">
    <p>版權沒有．歡迎拷貝 ||| <a href="?css=1">demo1</a> | <a href="?css=7">demo7</a> | <a href="?css=12">demo12</a> |</p>
  </div>
  
</div>
</body>
</html>
HEREDOC;

echo $html;
?>