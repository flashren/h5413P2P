<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入bootstrapValidator的核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css"/>
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
		include_once ("./header.html");
		?>

		<!--模板内容的开始-->
		<div class="container" id="mainContent">
			<div class="row">
				<!--左侧菜单-->
				<div id="leftMenu" class="col-sm-3 col-xs-6">
					<?php
					include_once ("./leftMenuTree.html");
					?>
				</div>
				<!--右侧内容-->
				<div class="col-sm-9 col-xs-12" id="rightCon">
					<div class="panel panel-default">
						<button type="button" id="toggleMenu" class="btn btn-primary btn-xs">
						菜单切换
						</button>
						<div class="panel-body">
							<div class="row">
								<div class="el-tip-info">
									<h3>信用借款</h3>
									<p>
										<span class="text-info">授信额度：</span><span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
										<span class="text-info">可借金额：</span><span class="text-danger">2000</span>
									</p>
								</div>
					
								<div class="page-header lead">
									借款信息
									<label class="label label-primary">信用标</label>
								</div>
								<form id="borrowForm" class="form-horizontal el-borrow-form" method="post">
									<div class="form-group">
										<label class="control-label">
											借款类型
										</label>
										<select class="form-control" name="borrowType">
											<option value="1">信用贷</option>
											<option value="2">车易贷</option>
											<option value="3">房易贷</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款金额
										</label>
										<div class="input-group">
											<input class="form-control" name="borrowAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款利息
										</label>
										<div class="input-group">
											<input class="form-control" name="currentRate" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款期限
										</label>
										<div class="input-group">
											<select class="form-control" name="monthes2Return">
												<option value="1">1</option>
												<option value="3">3</option>
												<option value="6">6</option>
												<option value="9">9</option>
												<option value="12">12</option>
												<option value="24">24</option>
											</select>
											<span class="input-group-addon">月</span>
										</div>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											还款方式
										</label>
										<label class="radio-inline">
											<input type="radio" value="0" checked="checked" name="repayment" />
											按月分期
										</label>
										<label class="radio-inline">
											<input type="radio" value="1" name="repayment" />
											按月到期
										</label>
									</div>
					
									<div class="form-group">
										<label class="control-label">
											最小投标
										</label>
										<div class="input-group">
											<input class="form-control" name="minAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											最大投标
										</label>
										<div class="input-group">
											<input class="form-control" name="maxAmount" />
											<span class="input-group-addon">元</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											投标奖金
										</label>
										<div class="input-group">
											<input class="form-control" name="rewardAmount" value="0" />
											<span class="input-group-addon">%</span>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label">
											招标天数
										</label>
										<div class="input-group">
											<select class="form-control" name="disableDays">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
											<span class="input-group-addon">天</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label">
											借款标题
										</label>
										<input name="borrowTitle" class="form-control" />
									</div>
									<div class="form-group">
										<label>
											借款描述
										</label>
										<textarea name="description" rows="4" class="form-control col-sm-6" style="resize: none;"></textarea>
									</div>
									<div class="form-group">
										<button class="btn btn-primary" type="submit" data-loading-text="提交">
											提交申请
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--模板内容的结束-->

		<?php
		include_once ("./footer.html");
		?>
	</body>
	<!--引入bootstrap核心js库-->
	<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<!-- 引入 ECharts 文件 -->
	<script src="lib/echarts/echarts-all.js"></script>
	<!--引入bootstrapValidator的插件js库-->
    <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
    <!--表单验证的参数配置-->
    <script src="src/javascript/formValidator.js" type="text/javascript" charset="utf-8"></script>
</html>