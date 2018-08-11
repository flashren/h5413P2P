<?php
   //1. 引入公共连接配置
   include_once("conn.php");
   
   //http://localhost/api/getUsers.php?pageIndex=0&pageSize=5
   $pageIndex=$_GET["pageIndex"];
   $pageSize=$_GET["pageSize"];
   $skipIndex=$pageIndex*$pageSize;

   //3. 构造sql语句
   $sqlStr="select * from userinfo";
   
   //4. 执行sql语句返回结果集（记录集）
   $rs=mysqli_query($conn, $sqlStr);
   $totalCount=mysqli_num_rows($rs);
   
   //5. 根据执行的结果返回json到前端
   $sqlStr.=" limit $skipIndex,$pageSize";
   $rs=mysqli_query($conn, $sqlStr);
   $users=[];
   while($row=mysqli_fetch_assoc($rs)){
   	  array_push($users,$row);
   }
   
   $userJson=["total"=>$totalCount,"list"=>$users];
   //array_push($users,$totalCount);
   
   echo json_encode($userJson);
?>