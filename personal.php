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
		<link rel="stylesheet" type="text/css" href="dist/css/min/personal.min.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <!--引入jquery库-->
    	<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    	<!--检测用户登录状态的js-->
    	<script src="src/javascript/checkLogin.js" type="text/javascript"></script>
	</head>

	<body>
		<?php
		   include_once("./header.html");
		?>

        <!--模板内容的开始-->
        <div class="container" id="mainContent">
        	<div class="row">
        		<!--左侧菜单-->
        		<div id="leftMenu" class="col-sm-3 col-xs-6">
        			<?php
        			   include_once("./leftMenuTree.html");
                    ?>
        		</div>
        		<!--右侧内容-->
        		<div class="col-sm-9 col-xs-12" id="rightCon">
        			<div class="panel panel-default">
					  <button type="button" id="toggleMenu" class="btn btn-primary btn-xs">菜单切换</button>
					  <div class="panel-body">
					    <div class="row">
	        				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	        					<img class="img-thumbnail" src="static/images/head_icon.jpg"/>
	        				</div>
	        				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	        				    <p>昵 称：源代码教育</p>
	        				    <p>用户名：<span id="username"></span></p>
	        				    <p>最后登录：2016-10-25 15:30:10</p>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-4 col-xs-12">
	        					总金额：<span class="text-primary">10000</span>元
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					可用金额：<span class="text-primary">8000</span>元
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					冻结金额：<span class="text-primary">2000</span>元
	        				</div>
	        			</div>
	        			<div class="row text-center">
	        				<button type="button" class="btn btn-primary btn-lg">账号充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账号提现</button>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon">
	        						<p>实名认证</p>
	        						<p>未认证 马上认证</p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        			</div>
					  </div>
					</div>
        			
        		</div>
        	</div>
        </div>
        <!--模板内容的结束-->
		
		<?php
		   include_once("./footer.html");
		?>
	</body>
    <!--引入bootstrap核心js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
</html>