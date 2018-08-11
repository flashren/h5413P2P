<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow.min.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<?php
		   include_once("./header.html");
		?>

        <!--模板内容的开始-->
        <div class="container el-borrow">
			<div class="row">
				<div class="el-borrow-item col-sm-4">
					<div class="el-borrow-item-title" style="background-color: #40d47e;">
						信用贷</div>
					<div class="el-borrow-item-content">
						<p>
							可借金额 <i>¥ 2,000.00</i>
						</p>
						<a href="#" class="text-primary">申请条件</a>
						<p class="help-block">仅限成都地区</p>
						<ul>
							<li>填写基本资料</li>
							<li>身份认证</li>
							<li>视频认证</li>
						</ul>
						<a href="borrow_apply.php" class="el-borrow-apply">
							立刻申请
						</a>
					</div>
				</div>
				<div class="el-borrow-item col-sm-4">
					<div class="el-borrow-item-title">车易贷</div>
					<div class="el-borrow-item-content">
						<p>
							可借金额 <i>¥ 2,000.00</i>
						</p>
						<a href="#" class="text-primary">申请条件</a>
						<p class="help-block">仅限成都地区</p>
						<ul>
							<li>填写基本资料</li>
							<li>身份认证</li>
							<li>视频认证</li>
						</ul>
						<a href="borrow_apply.php" class="el-borrow-apply">
							立刻申请
						</a>
					</div>
				</div>
				<div class="el-borrow-item col-sm-4">
					<div class="el-borrow-item-title" style="background-color: #2ca2ee;">
						房易贷</div>
					<div class="el-borrow-item-content">
						<p>
							可借金额 <i>¥ 12,000.00</i>
						</p>
						<a href="#" class="text-primary">申请条件</a>
						<p class="help-block">仅限成都地区</p>
						<ul>
							<li>填写基本资料</li>
							<li>身份认证</li>
							<li>视频认证</li>
						</ul>
						<a href="borrow_apply.php" class="el-borrow-apply">
							立刻申请
						</a>
					</div>
				</div>
			</div>
		</div>
        <!--模板内容的结束-->
		
		<?php
		   include_once("./footer.html");
		?>
	</body>
    <!--引入jquery库-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap核心js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
</html>