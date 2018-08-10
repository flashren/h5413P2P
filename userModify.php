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
	        				<form id="modifyForm" method="post">
							  <div class="form-group">
							    <label for="username">用户账号</label>
							    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
							  </div>
							  <div class="form-group">
							    <label for="realname">真实姓名</label>
							    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
							  </div>
							  <div class="form-group">
							    <label for="mobile">手机号码</label>
							    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
							  </div>
							  <div class="form-group">
							    <label>用户性别</label>
							    <div class="radio">
							    	<label>
									  <input type="radio" name="sex" value="男">男
									</label>
							    </div>
							    <div class="radio">
									<label>
									  <input type="radio" name="sex" value="女">女
									</label>
								</div>
							  </div>
							  <div class="form-group">
							    <label for="">身份证号</label>
							    
							  </div>
							  <div class="form-group">
							    <label for="">联系电话</label>
							    
							  </div>
							  <div class="form-group">
							    <label for="">电子邮件</label>
							    
							  </div>
							  <div class="form-group">
							    <label for="education">个人学历</label>
							    <select name="education" id="education" class="form-control">
								  <option>博士</option>
								  <option>硕士</option>
								  <option>本科</option>
								  <option>大专</option>
								  <option>高中/中专</option>
								  <option>初中</option>
								  <option>小学</option>
								</select>
							  </div>
							  <div class="form-group">
							    <label for="">个人收入</label>
							    
							  </div>
							  <div class="form-group">
							    <label for="">联系地址</label>
							    
							  </div>
							  <button type="submit" class="btn btn-danger">资料修改</button>
						</form>
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