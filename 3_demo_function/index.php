<?php
include 'component.php';

$ihc_navigation = get_navigation();
$ihc_content    = get_content();
$ihc_extra      = get_extra();


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Layout Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
  
  <div id="header">
    <h1>國家公園</h1>
  </div>
  
  <div id="wrapper">
    <div id="content">
      {$ihc_content}
    </div>
  </div>
  
  <div id="navigation">
    {$ihc_navigation}
  </div>
  
  <div id="extra">
    {$ihc_extra}
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