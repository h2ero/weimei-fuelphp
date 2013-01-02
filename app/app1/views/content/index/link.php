<div id="link">
    <h2 class="h2-t">酷站推荐······</h2>
    <?php foreach($links as $link){?>
        <li><a href="<?php echo $link['link']?>" target="_blank"><?php echo $link['name'] ?></a></li>
    <?php } ?>
</div>
