<div id="left">
<h1 id="title"><?php echo $avatar[1]['name'] ?></h1>
<div class="height1"></div>
<div id="avatarShowAll">
<div style="display: none; left: 301px; top: 466px;" id="show"><img src="/uploads/20120303/1330773474_562.jpg"></div>
<?php foreach($avatar[1]['avatar'] as $a){ ?>
<li><img src="<?php echo $a->src; ?>" alt="<?php echo $avatar[1]['name'] ?>"></li>
<?php } ?>
<div class="fn-clear"></div>
</div>
<?php echo $like; ?>
<?php echo $comment?>
<!---left end--->
<div id="right">
	<div id="r-u-a" class="right-box">
	<h2 class="h2-t">WHO...?</h2>
	<a href="/user/i/1"><img src="/uploads/icon/1.jpg.min.jpg"></a><span><a href="/user/i/1">h2ero</a>2012-03-03 19:15:27</span>
	</div>
		<!-- right user msg end-->
	<div id="labels" class="right-box">
		<h2 class="h2-t">标签...</h2>
	<div id="labels-list">
				</div>
		<div class="fn-clear"></div>
		<div class="labels-add"><span>添加标签有助于整理你的分享，多个标签请用逗号分隔</span>
<br>
<form method="post"><input name="tags" id="tags" placeholder="标签1,标签2,标签3" type="text"><input id="tag-btn" class="red-btn" value="添加" type="button"> 
<input id="tid" name="tid" value="a4" type="hidden"></form>
</div>
	</div>
	<!--tags end -->
</div>
<div class="fn-clear"></div>