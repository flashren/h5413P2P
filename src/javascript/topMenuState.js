$(function () {
	//前端的所有页面的登录状态的菜单定制
	$.get("api/checkState.php",function (result) {
		//console.log("身份验证的结果",result);
		//登录后显示的菜单是：会员中心、赶快充值 、注销
		var htmlStr;
		if(result.isSuccess){
			htmlStr=`
				<li><a href="personal.php"><span class="fa fa-user"></span>${result.username}</a></li>
				<li><a href="recharge.php"><span class="fa fa-money-bill-alt"></span>赶快充值</a></li>
				<li><a href="/api/loginOut.php"><span class="fa fa-sign-out-alt">注销</a></li>
			`;
		}
		//没有登录显示的菜单：立即登录、立即注册
		else{
			htmlStr=`
				<li><a href="login.php"><span class="fa fa-sign-in-alt"></span>立即登录</a></li>
				<li><a href="register.php"><span class="fa fa-user"></span>立即注册</a></li>
			`;
		}
		//把菜单的结果插入到首页后面
		/*
		   父元素里面插入子元素
		 append() - 在被选元素的结尾插入内容
		 prepend() - 在被选元素的开头插入内容
		 
		   兄弟元素的前后插入平级元素
		 after() - 在被选元素之后插入内容
		 before() - 在被选元素之前插入内容
		 */
		$("#homepage").after(htmlStr);
	},"json");
	
	//主导航激活样式的实现
	var reqPath=location.href;
	//http://localhost/index.php?mid=0
	var mid=reqPath.split("=")[1];
	//console.log("菜单的id",mid);
	//索引对应的li添加active激活样式，其他兄弟li移出active
	$("#main_Menu ul li").eq(mid).addClass("active").siblings("li").removeClass("active");
});