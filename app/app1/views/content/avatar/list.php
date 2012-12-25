<div id="class-bar"><span>分类 · · · · · ·</span>
<span id="create"><a href="/avatar/upload">发布照片</a></span></div>

<div id="avatar">
<?php foreach ($avatar as $a) { ?>
<div class="avatarBox">
<div class="avatarInnerBox">
<a href="/avatar/<?=$a['id']?>"><img src="<?=$a['src'];?>"></a>
</div>
<div class="avatarDesc">
<a href="/avatar/<?=$a['id']?>"><?=$a['name'];?></a>
<span>作者:<a href="/user/i/<?=$a['user_id']?>"><?=$a['username']?></a></span>
<span><?=$a['date']?>创建</span></div>
</div>
<?php } ?>
<div class="fn-clear"></div>
</div>
