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
	    <link rel="stylesheet" type="text/css" href="lib/JqueryPagination/jquery.pagination.css"/>
	</head>

	<body>
		<?php
		   include_once("./header.html");
		?>

        <!--模板内容的开始-->
        <div class="container">
        	<table class="table">
        		<tr>
        			<th>姓名</th>
        			<th>账号</th>
        			<th>手机</th>
        		</tr>
        		<tbody id="userlists">
        			
        		</tbody>
        	</table>
        	<div id="mypager">
		        <section id="demo">
		            <h4>default demo</h4>
		            <div id="page" class="m-pagination"></div>
		            <div id="eventLog"></div>
		        </section>
        	</div>
        </div>
        <!--模板内容的结束-->
		
		<?php
		   include_once("./footer.html");
		?>
	</body>
    <!--引入jquery库-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/JqueryPagination/jquery.pagination-1.2.7.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap核心js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
    
    <script src="lib/JqueryPagination/jquery.tmpl.js" type="text/javascript" charset="utf-8"></script>
    <script id="userTmpl" type="text/html">
    	<tr>
			<td>${realname}</td>
			<td>${username}</td>
			<td>${mobile}</td>
		</tr>
    </script>
    <script type="text/javascript">
//  	$.get("api/getUsers.php",function (users) {
//  		console.log(users);
//  		//{userid: "5", username: "webadmin", nickname: null, password: "123456", sex: "男", …}
//  		var totalCount=users.pop();
//  		//console.log(users,totalCount);
//  		var htmlStr=$("#userTmpl").tmpl(users);
//  		$("#userlists").html(htmlStr);
//  	},"json");
    	
    	//全局变量
    	var pageSize=2;
    	//分页
    	function pagerFn() {
    		$("#page").page({
	            debug: true,
	            showInfo: true,
	            showJump: true,
	            pageSize: pageSize,
	            showPageSizes: true,
	            remote: {
	                url: 'api/getUsers.php',
	                success: function (users) {
	                    //console.log(users);
	                    var htmlStr=$("#userTmpl").tmpl(users.list);
	  					$("#userlists").html(htmlStr);
	                }
	            }
	        });
    	}
    	
    	//默认
    	pagerFn();

        $("#page").on("pageClicked", function (event, pageIndex) {
        	pagerFn();
            //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
        	pagerFn();
            //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            pageSize=pageSize;
        	pagerFn();
            //$("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
    </script>
</html>