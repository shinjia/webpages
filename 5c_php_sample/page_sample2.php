<?php
$code = isset($_GET['code']) ? $_GET['code'] : 'HOME'; 


// 定義各參數的對應值
$a_banner = array(
   'a'=>'images/banner_a.jpg', 
   'b'=>'images/banner_b.jpg', 
   'c'=>'images/banner_c.jpg', 
   'd'=>'images/banner_d.jpg', 
   'e'=>'images/banner_e.jpg', 
   'f'=>'images/banner_f.jpg', 
   'x'=>''  );

$a_title = array(
   'a'=>'墾丁國家公園',
   'b'=>'玉山國家公園',
   'c'=>'陽明山國家公園',
   'd'=>'太魯閣國家公園',
   'e'=>'雪霸國家公園',
   'f'=>'金門國家公園',
   'x'=>'' );

$a_filename = array(
   'a'=>'part1.html',
   'b'=>'part2.html',
   'c'=>'part3.html',
   'd'=>'part4.html',
   'e'=>'part5.html',
   'f'=>'part6.html',
   'x'=>'' );


// 指定各區域對應的內容
$web_banner = (isset($a_banner[$code])) ? $a_banner[$code] : 'images/banner_home.jpg';
$web_title = (isset($a_title[$code])) ? $a_title[$code] : '國家公園首頁';
$filename = (isset($a_filename[$code])) ? $a_filename[$code] : 'page_home.html';


// 讀取各自的內容檔案
$file = 'data/' . $filename;
$web_content = file_get_contents($file);


// 設定額外資訊區的內容
$web_extra   = '<p>國家公園設置的目標在於透過有效的經營管理與保育措施，以維護國家公園特殊的自然環境與生物多樣性。因此，管理單位明確地掌握與瞭解園區內環境與生物多樣性之狀況與變化，針對可能威脅園區內環境與生物多樣性健全之因素，加以妥善地因應與處理，同時監測與評估經營管理的成效，對於達成國家公園設置的目標至為重要。</p>';


/* 
// 要設定下列資料
$web_banner = 'images/banner_a.jpg';
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
<link rel="stylesheet" href="style.css">
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
         <li><a href="?code=a">墾丁國家公園</a></li>
         <li><a href="?code=b">玉山國家公園</a></li>
         <li><a href="?code=c">陽明山國家公園</a></li>
         <li><a href="?code=d">太魯閣國家公園</a></li>
         <li><a href="?code=e">雪霸國家公園</a></li>
         <li><a href="?code=f">金門國家公園</a></li>
      </ul>
  </div>
  
  <div id="extra">
    {$web_extra}
  </div>
  
  <div id="footer">
    <p>版權沒有．歡迎拷貝</p>
  </div>
  
</div>
</body>
</html>
HEREDOC;

echo $html;
?>