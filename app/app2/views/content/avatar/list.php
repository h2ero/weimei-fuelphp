<div id="class-bar"><span>分类 · · · · · ·
<a href="/weimei/alist/">唯美意境头像</a> 
<a href="/mingxing/alist/">明星头像</a>
<a href="/feizhuliu/alist/">非主流头像</a>
|
<a href="/katong/alist/">卡通头像</a>
<a href="/heibai/alist/">黑白头像</a>
<a href="/shanggan/alist/">伤感头像</a>
|
<a href="/dongtai/alist/">可爱头像</a>
<a href="/qita/alist/">个性头像</a>
<a href="/qinglv/alist/">情侣头像</a>
|
<a href="/shantu/alist/">动态头像</a>
<a href="/nansheng/alist/">男生头像</a>
<a href="/quntouxiang/alist/">群头像</a>
<a href="/fabiao/alist/">精选头像</a>
|
<a href="/jiemei/alist/">姐妹头像</a>
</span>
<!-- <span id="create"><a href="/avatar/upload">发布照片</a></span>--></div>

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
<?php
if(strpos('头像',$a['name'])===false&&USER_AGENT!=false){
    $a['name']='QQ'.$a['name'].'头像.'.$a['name'].'QQ空间头像';
}
?>
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
