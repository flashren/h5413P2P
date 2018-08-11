<?php
   //1. 引入公共连接配置
   include_once("conn.php");
   
   //前端ajax请求地址=后台api提供的地址
   //http://localhost/api/getInvestListPager.php?pagesize=2&currentpage=1
   
   //前端传入
   $pagesize=$_GET["pageSize"];
   $pageIndex=$_GET["pageIndex"];
   //计算得来
   $skipNum=$pageIndex*$pagesize;
   
   //2. 构造sql语句
   $sqlStr="select * from borrowinfo";
   
   //3. 执行sql语句返回结果集（记录集）
   $rst=mysqli_query($conn, $sqlStr);
   
   //获取总的记录数
   $totalCount=mysqli_num_rows($rst);
   
   //提示：php中不支持字面量对象,定义对象可以定义为关联数组然后执行转换
   //4. 返回前端的数据的二维数组
   ﻿﻿
   
   //5. 根据执行的结果返回json到前端
   //$sqlStr2="select * from borrowinfo limit $skipNum,$pagesize";   
   //$sql="select * from borrowinfo limit $skipNum,$pagesize";
   //$sqlStr="";
   $rs=mysqli_query($conn, $sqlStr);
   
   $dataJson=[];
   while($row=mysqli_fetch_assoc($rs)){
   	  //$row就是一行投资数据，就是一个关联数组
   	  //var_dump($row);
	  //echo "<br/><hr/>";
	  
	  array_push($dataJson,$row);
   }
  
   //把二维数组转换为一个对象数组返回给前端
   $result=["total" => $totalCount,"list" => $dataJson];
   echo json_encode($result);
?>