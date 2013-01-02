<div id="left">

<?php 
if(strpos($avatar[0]['name'],'头像')!==false){
    $title=$avatar[0]['name']; 
}else{
    $title=$avatar[0]['name'].'头像'; 
}
?>

<h1 id="title"><?=$title?></h1>
<div class="height1"></div>
<div id="avatarShowAll">
<div style="display: none; left: 301px; top: 466px;" id="show"><img src="/uploads/20120303/1330773474_562.jpg"></div>
<?php foreach($avatar as $a){ ?>
<li><img src="<?php echo $a['src']; ?>" alt="<?=$title?>"></li>
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
    <a href="/user/i/<?php echo $avatar[0]['user_id'] ?>"><img src="<?php echo Helper::get_mini_pic($avatar[0]['icon']); ?>"></a><span><a href="/user/i/<?php echo $avatar[0]['user_id'];?>"></a><?php echo $avatar[0]['date'];?></span>
    </div>
    <!-- right user msg end-->
<?php echo $tag ?>
    
</div>
<div class="fn-clear"></div>
