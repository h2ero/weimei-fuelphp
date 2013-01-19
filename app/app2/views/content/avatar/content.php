<div id="left">

<?php 
$a_title=$avatar[0]['name'];
if(strpos($a_title,'头像')!==false){
    //nothing
    $title=$a_title;
}else{
    $title=$a_title.'头像'; 
}
if(USER_AGENT!=FALSE){
    $pattern='qqtitle头像,titleQQ空间头像,高清title头像';
    $title.=str_replace('title',$a_title,$pattern);
}
?>

<h1 id="title"><?=$title?></h1>
<div class="height1"></div>
<div class="ads300"><?php Helper::get_ads('content-left*300');?></div>
<div class="ads300"><?php Helper::get_ads('content-right*300');?></div>
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
