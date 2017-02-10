<?php
  header('Content-Type:text/html;charset=utf-8');
  if($_POST){ //判断是否有表单post提交数据
    
    //接收文件上传信息
    if( $_FILES['pic']['name'] ){
      copy($_FILES['pic']['tmp_name'],'./'.$_FILES['pic']['name']);
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
    个人近照： <input type="file" name="pic"><br><br>
    <input type="submit" value="提交">
  </form>
</body>
</html>