<!-- //表单：
//s.php

//要在选择上传文件时能一次选择多个文件，那么就加multiple="multiple" ,还有注意下name="myFile1"和name="myFile[]"的区别，单文件、多文件上传.
 -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="sss.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myFile1" /><br/>
    <input type="file" name="myFile2" /><br/>
    <input type="file" name="myFile[]" /><br/>
    <input type="file" name="myFile[]" /><br/>
    <input type="file" name="myFile[]" multiple="multiple"/><br/>
    <input type="submit" value="上传文件"/>
</form>
</body>
</html>

