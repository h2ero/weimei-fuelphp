<div id="likes"><a href="#" id="like"></a><a href="#" class="like-tip">喜欢</a><a href="#" class="like-count"><?=$like_count;?></a><div class="fn-clear"></div></div>
<h2 class='h2-t'>这些人也喜欢······</h2>
<div id="like-user">
<?php foreach ($like_user as $l){?>
<a href=/user/i/<?=$l['id']?> title="<?=$l['name']?>"><img src="<?=$l['icon']?>"></a>
<?php }?>
</div>