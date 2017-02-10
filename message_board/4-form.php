<?php
  header('Content-Type:text/html;charset=utf-8');
  if($_POST){ //判断是否有表单post提交数据
    //判断是否有文件上传并且使用 HTTP POST方法上传过来的
    if( $_FILES['pic']['name'] && is_uploaded_file( $_FILES['pic']['tmp_name'] ) ){
      $file = $_FILES['pic'];
      //1. 对错误进行判断处理
      switch($file['error']){
        case 1: 
          echo "上传文件太大";die;
        break;
        case 2:
          echo "上传文件太大";die;
        break;
        case 3: 
          echo "上传文件不完整";die;
        break;
        case 4: 
          echo "没有文件上传";die;
        break;
        case 6: 
          echo "找不到上传文件的临时目录";die;
        break;
        case 7: 
          echo "没有权限";die;
        break;
      }
      
      //2. 对文件大小进行限制
      if( $file['size']>8388608 ){
        echo "上传的文件太大了";die;
      }

      //3. 对文件类型进行限制
      $ext = strtolower( pathinfo($file['name'],PATHINFO_EXTENSION) );
      $type = array('gif','jpeg','jpg','png');
      if( !in_array( $ext,$type ) ){
        echo '上传文件的类型不符';die;
      }

      //4. 对上传文件进行处理，用法和copy一样
      move_uploaded_file($_FILES['pic']['tmp_name'],'./'.$_FILES['pic']['name']);
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
               <input type="hidden" name="MAX_FILE_SIZE" value="8388608">
    <input type="submit" value="提交">
  </form>
</body>
</html>