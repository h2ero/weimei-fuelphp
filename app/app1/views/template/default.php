<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
    <HEAD>
        <META content="text/html; charset=utf-8" http-equiv=Content-Type>
        <title><?php echo ($title?$title.'-':'').$site_title;?></title>
        <meta name="author" content="h2ero" />
        <meta name="keywords" content="<?php echo $keywords;?>" />
        <meta name="description" content="<?php echo $description;?>" />
        <link rel="shortcut icon" href="favicon.ico"/>
        <!-- Date: 2011-10-23 -->
        <link rel="stylesheet/less" href="/assets/css/style.less">
        <?php echo Asset::css($css);?>
        <script type="text/javascript">
            <?php echo Helper::array2var($vars); ?>
        </script>
        <?php echo Asset::js($js);?>
    </head>
    <body>
<div id="container">
    <?php echo $header;?>
    <?php echo $slogan;?>
    <?php echo $nav_bar;?>
        <div id="main">
            <?php echo $content; ?>
            <div class="fn-clear"></div>
        </div>
    <?php echo $pagination;?>
    <?php echo $link;?>
    <?php echo $footer;?>
</div>
<!--container-->
    </body>
</html>
