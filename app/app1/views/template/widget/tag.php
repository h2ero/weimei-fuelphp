<div id="labels" class="right-box">
<h2 class="h2-t">标签...</h2>
<div id="labels-list">
	<?php foreach($tag as $t){?>
	<a href="/tag/<?php echo $t['name'];?>"><?php echo $t['name'];?></a>
	<?php } ?>
</div>
<div class="fn-clear"></div>
<div class="labels-add"><span>添加标签有助于整理你的分享，多个标签请用逗号分隔</span>
<br>
<form method="post"><input name="tags" id="tags" placeholder="标签1,标签2,标签3" type="text"><input id="tag-btn" class="red-btn" value="添加" type="button"> 
<input id="tid" name="tid" value="a4" type="hidden"></form>
</div>
</div>
<!--tags end -->