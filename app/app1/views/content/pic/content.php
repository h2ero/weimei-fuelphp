<a name="image"></a>
<div id="left">
    <h1 id="title"><?= $pic['name'];?></h1>
    <div class="height1"></div>
    <p id="picOne">
        <a  href="<?= $pic['src'];?>"><img src="<?=$pic['src'];?>" /></a>
    </p>
    <div class="fn-clear"></div>
    <?php echo $like; ?>
<h2 class="h2-t"><img src="/assets/images/location.png"><a target="_blank" href="<?php echo $pic['location']; ?>" id="location"><?php echo $pic['location']; ?></a></h2>
    <?php echo $comment;?>
</div>

    <!---left end--->
    <div id="right">
        <div id="r-u-a" class="right-box">
            <h2 class='h2-t'>WHO...?</h2>
            <a href="/user/i/<?= $pic['user_id'];?>"><img src="<?= Helper::get_mini_pic($pic['icon']) ?>"></a><span><a href="/user/i/<?= $pic['user_id']?>"><?= $pic['username']?></a><fn-clear>加入于<?= $pic['date']?></span>
        </div>
        <!-- right user msg end-->
        <div class="right-box" id="next-pre">
            <h2 class="h2-t">上一张&下一张</h2>
            <a href="/pic/<?= $next_pre['pre']['id'] ?>#image" title="上一张"><img src="<?= Helper::mini_pic($next_pre['pre']['src']) ?>" alt="<?= $next_pre['pre']['name'] ?>"></a>
            <a href="/pic/<?= $next_pre['next']['id'] ?>#image" title="下一张"><img src="<?= Helper::mini_pic($next_pre['next']['src']) ?>" alt="<?= $next_pre['next']['name'] ?>"></a>
            <div class='fn-clear'></div>
        </div>

        <?php echo $tag; ?>

        <div  class="right-box" id="relate-pic">
            <h2 class='h2-t'>相关图片...</h2>
            <?php
            foreach ($user_pic as $pic) {
                echo '<a href="/pic/' . $pic['id'] . '#image"><img src="' . Helper::mini_pic($pic['src']) . '"/></a>';
            }
            ?>
            <div class='fn-clear'></div>
        </div>
<!-- relate pic -->
<!---left end---></div>
<div class="fn-clear"></div>
