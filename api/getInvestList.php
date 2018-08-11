<?php
   //1. 引入公共连接配置
   include_once("conn.php");
   
   //2. 构造sql语句
   $sqlStr="select * from borrowinfo";
   
   //3. 执行sql语句返回结果集（记录集）
   $rs=mysqli_query($conn, $sqlStr);
   
   //提示：php中不支持字面量对象,定义对象可以定义为关联数组然后执行转换
   //4. 返回前端的数据的二维数组
   $dataJson=[];
   
   //5. 根据执行的结果返回json到前端
   //mysqli_fetch_assoc(); 返回结果集中行的关联数组，如何没有行的记录返回null
   while($row=mysqli_fetch_assoc($rs)){
   	  //$row就是一行投资数据，就是一个关联数组
   	  //var_dump($row);
	  //echo "<br/><hr/>";
	  
	  array_push($dataJson,$row);
   }
  
   //把二维数组转换为一个对象数组返回给前端
   echo json_encode($dataJson);
?>