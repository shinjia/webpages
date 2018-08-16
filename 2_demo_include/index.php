<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Free Css Layout</title>
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
      <?php include 'part_content.html'; ?>
    </div>
  </div>
  
  <div id="navigation">
    <?php include 'part_navigation.html'; ?>
  </div>
  
  <div id="extra">
    <?php include 'part_extra.html'; ?>
  </div>
  
  <div id="footer">
    <p>版權沒有．歡迎拷貝</p>
  </div>
  
</div>
</body>
</html>