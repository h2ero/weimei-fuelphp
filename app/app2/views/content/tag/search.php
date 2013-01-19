<div id="left">
<div id="class-bar"><span><?=$title?></span></div>
<div id="tag">
<?php 
if(isset($result['a']))
foreach ($result['a'] as $r){
if($r['dir_name']=='quntouxiang'||$r['dir_name']=='fabiao'){
?>
<div class='tag-item'><a href="/<?=$r['dir_name']?>/qq<?=$r['id']?>.html" class='e-t'><?php echo $r['name']; ?></a><?php echo "${r['username']}|${r['date']}"; ?> ◆头</div>
<?php
}else{
?>
<div class='tag-item'><a href="/<?=$r['dir_name']?>/<?=$r['id']?>qq.html" class='e-t'><?php echo $r['name']; ?></a><?php echo "${r['username']}|${r['date']}"; ?> ◆头</div>
<?php
}}
if(isset($result['p']))
foreach ($result['p'] as $r){
?>

<div class='tag-item'><a href='/pic/<?php echo $r['id']; ?>' class='e-t'><?php echo $r['name'] ?></a><?php echo "${r['username']}|${r['date']}"; ?> ◆图</div>

<?php
}
if(isset($result['e']))
foreach ($result['e'] as $r){
?>
<div class='tag-item'><a href='/article/<?php echo $r['id'] ?>' class='e-t'><?php echo $r['name']; ?></a><?php echo "${r['username']}|${r['date']}"; ?> ◆文</div>
<?php }?>
</div>
<div class="fn-clear"></div>
<ul id="pagelist"> </ul>
</div>
<div id="right"></div>
