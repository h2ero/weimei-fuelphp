
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('admin.css'); ?>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a href="./index.html" class="brand">XSS Platform</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="#">Home</a>
              </li>
              <li class="">
                <a href="#">Get started</a>
              </li>
              <li class="active">
                <a href="./scaffolding.html">Reports</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</div>
<!--- nav bar-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <ul class="nav nav-list">
            <li class="active"><a href="#"><i class="icon-chevron-right"></i>Home</a></li>
            <li><a href="#"><i class="icon-chevron-right"></i>Today</a></li>
            </ul>
        <!--Sidebar content-->
        </div>
        <div class="span9">
            <div class="page-header">
                <h1>XSS PLATFORM <small>REPORTS</small></h1>
            </div>
        <!--Body content-->
        </div>
    </div>
</div>
</body>
</html>
