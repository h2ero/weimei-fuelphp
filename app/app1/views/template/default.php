<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
	<HEAD>
		<META content="text/html; charset=utf-8" http-equiv=Content-Type>
		<title><?php echo $title;?></title>
		<meta name="author" content="h2ero" />
		<meta name="keywords" content="<?php echo $keywords;?>" />
		<meta name="description" content="<?php echo $description;?>" />
		<link rel="shortcut icon" href="favicon.ico"/>
		<!-- Date: 2011-10-23 -->
		<link rel="stylesheet/less" href="/assets/css/style.less">
		<?php echo Asset::css($css);?>
		<?php echo Asset::js($js);?>
		<script type="text/javascript">
		</script>
	</head>
	<body>
<div id="container">
	<?php echo $header;?>
		<div id="main">
			<div id="left">
			</div>
			<!---left end--->
			<div id="right">
			</div>
			<div class="fn-clear"></div>
		</div>
	<?php echo $footer;?>
</div>
<!--container-->
	</body>
</html>