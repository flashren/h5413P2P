<?php
   //1. 引入公共连接配置
   include_once("conn.php");
   
   //2. 接收数据
   $username=$_POST["username"];
   $password=$_POST["password1"];
   
   //3. 构造sql语句
   $sqlStr="select * from userinfo where username='$username' and password='$password'";
   
   //4. 执行sql语句返回结果集（记录集）
   $rs=mysqli_query($conn, $sqlStr);
   
   //5. 根据执行的结果返回json到前端
   //方法1： mysqli_num_rows(); //得到当前结果集中的记录的个数，根据个数确定是否存在，个数大于0就是合法
   //方法2：mysqli_fetch_assoc(); 返回结果集中行的关联数组，如何没有行的记录返回null
   $row=mysqli_fetch_assoc($rs);
   if($row){
   	  //成功
   	  $jsonArray=["isSuccess"=>true,"msg"=>"登录成功!"];
	  echo json_encode($jsonArray);
	  
	  //验证用户登录成功就创建session
	  session_start();
	  $_SESSION["username"]=$row["username"];
	  $_SESSION["userid"]=$row["userid"];
   }
   else{
   	  //失败
   	  $jsonArray=["isSuccess"=>false,"msg"=>"登录失败!"];
	  echo json_encode($jsonArray);
   }
?>