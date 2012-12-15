<div id="left">
<div id="class-bar"><span>分类 · · · · · ·</span> <span id="create"><a href="/article/add">发布文章</a></span></div>
<div id="article">
<?php foreach ($articles as $a){?>
	<li><img src="<?=  \Helper::mini_pic($a['nail'])?>" style="width: 110px; height: 82px;">
<a class="e-t" href="/article/<?=$a['id']?>"><?=$a['name']?></a>
<span><?=$a['username']?>|<?=$a['date']?></span>
<p><?=$a['description']?>...</p>
</li>
<?php }?>
<div class="fn-clear"></div>
</div>
<!---pic end--->
</div>
<div id="right"></div>
<div class="fn-clear"></div>