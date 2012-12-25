<div id="pic" data-count="<?=$now_count;?>">
<?php $imgss=  Helper::sort3Array($pic);
foreach ( $imgss[0] as $key=>$imgs ) { ?>
    <div class="pic-list" data-h='<?php echo $imgss[0][$key][0]['height']-$imgss[1][$key][0]; ?>' >
        <?php foreach($imgs as $img){ ?>
            <div class="pic-item">
                <div class="pic-desc">
                    <h2><?=$img['name']?></h2>
                    <span>加入于<?=  Helper::get_time(strtotime($img['date']))?></span><a href="/user/i/<?=$img['user_id']?>"><?=$img['username']?></a>
                </div>
                <a href="/pic/<?=$img['id']?>"><img src="<?=  Helper::get_mini_pic($img['src'])?>"></a>
            </div>
        <?php } ?>
    </div>
<?php } ?>
<div class="fn-clear"></div>
</div>
<!--pic-->
