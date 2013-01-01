<div id="class-bar"><span>分类 · · · · · ·</span>
<span id="create"><a href="/avatar/upload">发布照片</a></span></div>

<div id="avatar">
<?php foreach ($avatar as $a) { ?>
<div class="avatarBox">
<div class="avatarInnerBox">
<?php if($a['dir_name']=='quntouxiang'||$a['dir_name']=='fabiao'){?>
    <a href="/<?=$a['dir_name']?>/qq<?=$a['id']?>.html"><img src="<?=$a['src'];?>"></a>
<?php }else{ ?>
    <a href="/<?=$a['dir_name']?>/<?=$a['id']?>qq.html"><img src="<?=$a['src'];?>"></a>
<?php } ?>
</div>
<div class="avatarDesc">
<?php if($a['dir_name']=='quntouxiang'||$a['dir_name']=='fabiao'){?>
    <a href="/<?=$a['dir_name']?>/qq<?=$a['id']?>.html"><?=$a['name'];?></a>
<?php }else{ ?>
    <a href="/<?=$a['dir_name']?>/<?=$a['id']?>qq.html"><?=$a['name'];?></a>
<?php } ?>
<span>作者:<a href="/user/i/<?=$a['user_id']?>"><?=$a['username']?></a></span>
<span><?=$a['date']?>创建</span></div>
</div>
<?php } ?>
<div class="fn-clear"></div>
</div>
