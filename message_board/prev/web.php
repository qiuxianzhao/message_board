<?php
  header('Content-Type:text/html;charset=utf-8');
  $id_0 = fopen('0.click','r');
  $id_1 = fopen('1.click','r');
  $id_2 = fopen('2.click','r');
  $id_3 = fopen('3.click','r');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>文章[产品]的列表页</title>
</head>
<body>
  <ul>
    <li>
      <a href="detail.php?id=0">文章1</a>
      <span>&nbsp;&nbsp;&nbsp;点击量： <?php echo fgets($id_0); ?></span>
    </li>
    <li>
      <a href="detail.php?id=1">文章2</a>
      <span>&nbsp;&nbsp;&nbsp;点击量： <?php echo fgets($id_1); ?></span>
    </li>
    <li>
      <a href="detail.php?id=2">文章3</a>
      <span>&nbsp;&nbsp;&nbsp;点击量： <?php echo fgets($id_2); ?></span>
    </li>
    <li>
      <a href="detail.php?id=3">文章4</a>
      <span>&nbsp;&nbsp;&nbsp;点击量： <?php echo fgets($id_3); ?></span>
    </li>
  </ul>
</body>
</html>