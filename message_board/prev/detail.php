<?php
  header('Content-Type:text/html;charset=utf-8');
  $art = [
    ['title'=>'文章标题1','content'=>'文章内容1','author'=>'文章作者1'],
    ['title'=>'文章标题2','content'=>'文章内容2','author'=>'文章作者2'],
    ['title'=>'文章标题3','content'=>'文章内容3','author'=>'文章作者3'],
    ['title'=>'文章标题4','content'=>'文章内容4','author'=>'文章作者4']
  ];
  if( isset($_GET['id']) ){
    $id = $_GET['id'];
  }
  $info = $art[$id];
  
  //每一次有用户点击了文章的详细页，都会增加对应文章的访问次数
  $file = $id.'.click';
  if( file_exists( $file ) ){
    $mode = 'r';
  }else{
    $mode = 'w';
  }
  
  //打开记录网站访问次数的文件
  $res = fopen($file,$mode);
  $click = (int)fread($res,filesize($file)+1);

  //每次访问文章都会增加它的访问次数[点击量]
  $res = fopen($file,'w');
  fwrite($res,$click+1);

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $info['title']; ?></title>
</head>
<body>
  <h1><?php echo $info['title']; ?></h1>
  <p>作者: <?php echo $info['author']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
  点击量： <?php echo $click+1;?></p>
  <p><?php echo $info['content']; ?></p>
</body>
</html>