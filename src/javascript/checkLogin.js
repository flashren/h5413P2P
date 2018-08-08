$(function () {
	//会员中心的所有页面的业务逻辑
	$.get("api/checkState.php",function (result) {
		//console.log("身份验证的结果",result);
		//登录后就停留在会员中心，并显示用户名
		if(result.isSuccess){
			$("#username").text(result.username);
		}
		//没有登录就跳转到登录页面
		else{
			alert(result.msg);
			location.href="login.php";
		}
	},"json");
});