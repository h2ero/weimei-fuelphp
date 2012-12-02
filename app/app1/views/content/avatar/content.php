<div id="left">
<h1 id="title"><?php echo $avatar['res']['name'] ?></h1>
<div class="height1"></div>
<div id="avatarShowAll">
<div style="display: none; left: 301px; top: 466px;" id="show"><img src="/uploads/20120303/1330773474_562.jpg"></div>
<?php foreach($avatar['res']['avatar'] as $a){ ?>
<li><img src="<?php echo $a->src; ?>" alt="<?php echo $avatar['res']['name'] ?>"></li>
<?php } ?>
<div class="fn-clear"></div>
</div>
<?php echo $like; ?>
<?php echo $comment; ?>
</div>
<!---left end--->
<div id="right">
	<div id="r-u-a" class="right-box">
	<h2 class="h2-t">WHO...?</h2>
	<a href="/user/i/1"><img src="/uploads/icon/1.jpg.min.jpg"></a><span><a href="/user/i/1">h2ero</a>2012-03-03 19:15:27</span>
	</div>
	<!-- right user msg end-->
<?php echo $tag ?>
	
</div>
<div class="fn-clear"></div>