<div id="similar" class="right-box">
<h2 class="h2-t">相似推荐...</h2>
<ol id="similar-list">
<?php foreach ($similar_list as $sl) { ?>
 <?php 
if(strpos($sl['name'],'头像')===false)
    $sl['name'].='头像';
if($sl['dir_name']=='quntouxiang'||$sl['dir_name']=='fabiao'){?>
    <li><a href="/<?php echo $sl['dir_name'] ?>/qq<?php echo $sl['id'] ?>.html"><?php echo $sl['name'] ?></a></li>
<?php }else{ ?>
    <li><a href="/<?php echo $sl['dir_name'] ?>/<?php echo $sl['id'] ?>qq.html"><?php echo $sl['name'] ?></a></li>
<?php } ?>

<?php } ?>
</ol>
<div class="fn-clear"></div>
</div>
<!--tags end -->
