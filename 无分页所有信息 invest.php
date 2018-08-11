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
		<link rel="stylesheet" type="text/css" href="dist/css/min/index.min.css"/>
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
        <div class="container">
        	<h4 class="page-title">投资列表</h4>
			<form action="invest_list.html" id="searchForm">
				<div style="margin: 20px 0px;">
					<span class="text-muted">标的状态</span>
				    <div style="margin-left: 30px" class="btn-group" data-toggle="buttons">
					  <label class="btn btn-default active">
					    <input type="radio" name="bidRequestState" value="-1" autocomplete="off" checked />&emsp;全部&emsp;
					  </label>
					  <label class="btn btn-default">
					    <input type="radio" name="bidRequestState" value="2" autocomplete="off" />&emsp;招标中&emsp;
					  </label>
					  <label class="btn btn-default">
					    <input type="radio" name="bidRequestState" value="8" autocomplete="off" />&emsp;还款中&emsp;
					  </label>
					</div>
				</div>
			</form>
			<table class="table el-table table-hover">
				<thead id="gridHead">
					<tr>
						<th>借款人</th>
						<th width="180px">借款标题</th>
						<th>年利率</th>
						<th>金额</th>
						<th>还款方式</th>
						<th>进度</th>
						<th width="80px">操作</th>
					</tr>
				</thead>
				<tbody id="gridBody">
				
				</tbody>
			</table>
			<div style="text-align: center;">
				<ul id="pagination" class="pagination"></ul>
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
    <!--引入jquery模版引擎-->
    <script src="lib/jqueryTemplate/jquery.tmpl.js" type="text/javascript" charset="utf-8"></script>
    <!--定义前端模版-->
    <script id="investTmpl" type="text/html">
    	<tr>
			<td>${userid}</td>
			<td>${borrowTitle}</td>
			<td class="text-info">${currentRate}%</td>
			<td class="text-info">${borrowAmount}</td>
			<td>${repayment}</td>
			<td>${(alreadyAmount/borrowAmount*100).toFixed(2)}%</td>
			<td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=${borrowid}">查看</a></td>
		</tr>
    </script>
    <script type="text/javascript">
    	//页面加载时就发起ajax请求取后台api获取投资数据
    	$.get("api/getInvestList.php",function(dataList){
    		//console.log(dataList);
    		//把数据和模版合成为html代码
    		//语法：$(模版选择器).tmpl(数据对象获取数组)
    		var htmlStr=$("#investTmpl").tmpl(dataList);
    		
    		//把html更新到页面的dom中
    		$("#gridBody").html(htmlStr);
    	},"json");
    </script>
</html>