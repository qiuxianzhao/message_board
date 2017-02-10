<?php
    var_dump($_POST);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/message.css" />
	<title>留言板</title>
    <script>
    (function(){  /* 匿名函数自执行(function(){})() */
    window.onload = function(){
        avatar.onclick = function(event){ /* 事件委托 */
            var e = e || window.event;
            var target = e.srcElement || e.target;
            var arr = target.src.split('/'); /* 字符分割 */
            document.forms['message'].elements['avatar'].value = arr[arr.length-1];
        }
    }
    })();
    </script>
</head>
<body>
	<!-- 留言表单 message form -->
	<div class="message-form">
		<form name="message" action="" method="post">
			<div class="text">username:</div>
			<input type="text" name="username" />
			<div class="text">avatar:</div>
			<div class="text" id="avatar"><!-- 选择头像 -->
				<img class="avatar" src="./style/images/1.jpg" alt="" />
				<img class="avatar" src="./style/images/2.jpg" alt="" />
				<img class="avatar" src="./style/images/3.jpg" alt="" />
				<img class="avatar" src="./style/images/4.jpg" alt="" />
				<img class="avatar" src="./style/images/5.jpg" alt="" />
				<img class="avatar" src="./style/images/6.jpg" alt="" />
				<img class="avatar" src="./style/images/7.jpg" alt="" />
				<img class="avatar" src="./style/images/8.jpg" alt="" />
				<img class="avatar" src="./style/images/9.jpg" alt="" />
				<div class="clear"></div>
			</div>
			<input type="hidden" name="avatar" value="1" />
			<div class="text">message:</div>
			<textarea name="content"></textarea>
			<input type="submit" value="&nbsp;" />	
		</form>
	</div>
	<!-- 留言列表 message list -->
	<div class="message-list">
		<h3>目前有4 条留言</h3>
		<ol class="commentlist">
			<li class="comment depth-1">
				<div class="comment-body">
					<div class="vcard">
						<img src="./style/images/1.jpg" class="avatar">
						<p class="floor">4楼</p>
						<strong>寻风问雨</strong>:
					</div>
					<p>博主的网站不错~~</p>
				<div class="clear"></div>
				<time class="time">2015-03-12 13:32 </time>
			</li>
			<li class="comment depth-1">
				<div class="comment-body">
					<div class="vcard">
						<img src="./style/images/2.jpg" class="avatar" />
						<p class="floor">地板</p>
						<strong>千寻</strong>:
					</div>
					<p>博主，交换友链吗？ PR值2,收录300+</p>
				<div class="clear"></div>
				<time class="time">2015-03-12 13:32 </time>
			</li>
			<li class="comment depth-1">
				<div class="comment-body">
					<div class="vcard">
						<img src="./style/images/3.jpg" class="avatar" />
						<p class="floor">板凳</p>
						<strong>老菜鸟</strong>:
					</div>
					<p>博主，想和你探讨下这方面的知识，能丢个联系吗？~~</p>
				<div class="clear"></div>
				<time class="time">2015-03-12 13:32 </time>
			</li>
			<li class="comment depth-1">
				<div class="comment-body">
					<div class="vcard">
						<img src="./style/images/4.jpg" class="avatar" />
						<p class="floor">沙发</p>
						<strong>荒</strong>:
					</div>
					<p>干货啊~~感谢博主的分享</p>
				<div class="clear"></div>
				<time class="time">2015-03-12 13:32 </time>
			</li>
		</ol>
	</div>
</body>
</html>