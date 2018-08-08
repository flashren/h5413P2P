<?php
   header("Content-Type:text/html;charset=utf-8");
   session_start();
   session_destroy(); //销毁session
   echo "<script>alert('退出成功！ 欢迎下次再来! '); location.href='/';</script>";
?>