<?php
  header('Content-Type:text/html;charset=utf-8');

  require "uploads.func.php";

  if($_POST){ //判断是否有表单post提交数据
    //判断是否有文件上传并且使用 HTTP POST方法上传过来的
    if( $_FILES['pic']['name'] ){
      $res = uploads('pic','./uploads/');
      if( $res[0] ){
        echo "上传成功！文件地址： ".$res[1];
      }else{
        echo "上传失败！".$res[1];
      }
    }

  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>表单处理程序</title>
</head>
<body>
  <!-- action如果不指定参数，默认提交到当前页面 -->
  <form action="" method="post" enctype="multipart/form-data">
    帐号： <input type="text" name="user"><br><br>
    密码： <input type="password" name="password"><br><br>
    性别： <label><input type="radio" name="sex" value="1">男</label>
           <label><input type="radio" name="sex" value="2">女</label><br><br>
    爱好： <label><input type="checkbox" name="lve[]" value="ball">打球</label>
           <label><input type="checkbox" name="lve[]" value="swim">游泳</label>
           <label><input type="checkbox" name="lve[]" value="read">看书</label>
           <label><input type="checkbox" name="lve[]" value="shopping">购物</label><br><br>
    喜欢的城市：
           <select name="city[]">
             <option value="gz">广州</option>
             <option value="sz">深圳</option>
             <option value="fs">佛山</option>
             <option value="bj">北京</option>
           </select><br><br>
    个人近照： <input type="file" multiple name="pic"><br><br>
               <input type="hidden" name="MAX_FILE_SIZE" value="8388608">
    <input type="submit" value="提交">
  </form>
</body>
</html>