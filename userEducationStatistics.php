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
								<h3>用户学历统计情况</h3>
								<!--echart报表-->
								<div id="echartsMain" style="width: 100%;height:400px;"></div>
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
	<!--自定义特效-->
	<script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		var myChart = echarts.init(document.getElementById('echartsMain'));

		//指定图表的配置项和数据
		var option = {
			//标题文字
			title: {
				text: '用户学历统计情况',
				subtext: '蓝源p2p平台',
				x: 'center'
			},
			//工具提示
			tooltip: {
				trigger: 'item',
				formatter: "{a} <br/>{b} : {c} ({d}%)"
			},
			//数据的分类
			legend: {
				orient: 'vertical',
				x: 'left',
				data: ['博士', '硕士', '本科', '大专', '高中/中专','初中','小学']
			},
			//定制工具箱
			toolbox: {
				show: true, //是否显示工具箱
				feature: {
					mark: {
						show: false
					},
					dataView: {
						show: false,
						readOnly: false
					},
					magicType: {
						show: false,
						type: ['pie', 'funnel'],
						option: {
							funnel: {
								x: '25%',
								width: '50%',
								funnelAlign: 'left',
								max: 1548
							}
						}
					},
					restore: {
						show: false
					},
					saveAsImage: {
						show: true
					}
				}
			},
			//重新计算
			calculable: true,
			//数据系列
			series: [{
				name: '访问来源',
				type: 'pie', //图表类型
				radius: '55%', //半径
				center: ['50%', '60%'], //位置
				
				//具体数据
				data: []
			}]
		};
		
		//使用刚指定的配置项和数据显示图表。
		myChart.setOption(option);
		
		//数据不能写死，只能从数据库中动态获取
		$.get("api/getUserEdu.php",function (eduData) {
			console.log("后台获取的学历数据",eduData);
			
			//把后端提供的数据动态设置到配置对象中
			option.series[0].data=eduData;
			
			//使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
            
            //隐藏默认的loading动画
            myChart.hideLoading();
		},"json");
</script>
</html>