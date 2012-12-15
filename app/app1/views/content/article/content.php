<div id="left">
<h1 id="title"><?=$article['name']?></h1>
<pre>
<?=$article['content'];?>
</pre>
<div class="fn-clear"></div>
<?php echo $like; ?>
<?php echo $comment;?>
</div>
<!---left end--->
<div id="right">
	<div id="r-u-a" class="right-box">
		<h2 class='h2-t'>WHO...?</h2>
		<a href="/user/i/<?= $article['user_id'];?>"><img src="<?= Helper::get_mini_pic($article['icon']) ?>"></a>
		<span><a href="/user/i/<?= $article['user_id']?>"><?= $article['username']?></a>加入于<?= $article['date']?></span>
	</div>
<!-- right user msg end-->
<?php echo $tag; ?>
<!--tags end -->

</div>
<div class="fn-clear"></div>