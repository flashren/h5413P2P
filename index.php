<<<<<<< .mine
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--�ӿ�: �����ƶ���-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--����bootstrap������ʽ-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--����ͼ������-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		<!--�Զ�����ʽ-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/index.min.css"/>
		<!--���ݵͰ汾�������-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<?php
		   include_once("./header.html");
		?>
		
		<!--��ͻ-->
		<h1>��ͻ��ʾ</h1>

		<h1>�Ż�--��ͻ100</h1>
			
		<!--�ֲ�ͼ-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="static/images/banner01.jpg" alt="���1">
		      <div class="carousel-caption"></div>
		    </div>
		    <div class="item">
		      <img src="static/images/banner02.jpg" alt="���2">
		      <div class="carousel-caption"></div>
		    </div>
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		<!--������ɫ-->
		<div class="container" id="feature">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>Ͷ�����</h4>
                    <p>�ȶ�Ͷ�ʡ������桢�����ޣ����ڴ������⸶������Ͷ����Ȩ�档</p>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>Ͷ�����</h4>
                    <p>�ȶ�Ͷ�ʡ������桢�����ޣ����ڴ������⸶������Ͷ����Ȩ�档</p>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>Ͷ�����</h4>
                    <p>�ȶ�Ͷ�ʡ������桢�����ޣ����ڴ������⸶������Ͷ����Ȩ�档</p>
				</div>
			</div>
		</div>
		
		<!--Ͷ����Ϣ�б�-->
		<div class="container" id="invest">
			<!--���Ľṹ-->
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<h1>�����н��</h1>
			  	<p><a href="#">����Ͷ���б�</a></p>
			  </div>
			  <table class="table el-table table-hover">
		            <thead>
		            <tr>
		                <th>�����</th>
		                <th class="hide620">������</th>
		                <th>������</th>
		                <th>���</th>
		                <th class="hide620">���ʽ</th>
		                <th>����</th>
		                <th>����</th>
		            </tr>
		            </thead>
		            <tbody>
		                <!--��̨ʾ������-->
		                <tr><!--��һ�����ݿ�ʼ-->
		                    <td>����</td>
		                    <td class="hide620">����2000�ȹ��ѹ�</td>
		                    <td class="text-info"> 10.00%
		                    </td>
		                    <td class="text-info">2,000.00</td>
		                    <td class="hide620">
		                        ���·��ڻ���
		                    </td>
		                    <td>78.00%</td>
		                    <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=1">�鿴</a></td>
		                </tr><!--��һ�����ݽ���-->
		                <tr><!--�ڶ������ݿ�ʼ-->
		                    <td>����</td>
		                    <td class="hide620">�����ȼ�����100�Է�</td>
		                    <td class="text-info"> 12.00%
		                    </td>
		                    <td class="text-info">100.00</td>
		                    <td class="hide620">
		                        ���µ��ڻ���
		                    </td>
		                    <td>100.00%</td>
		                    <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=1">�鿴</a></td>
		                </tr><!--�ڶ������ݽ���-->
		
		                <!--
		                    �����̨û������,Ĭ�����
		
		                <tr>
		                    <td colspan="7" align="center">
		                        <p class="text-danger">Ŀǰ��ʱû�н����еĽ��</p>
		                    </td>
		                </tr>
		                 -->
		            </tbody>
		
		        </table>
			</div>
		</div>
		
		<!--������Ϣ-->
		<div class="container" id="article">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--���Ľṹ-->
					<div class="panel panel-default">
					  <!--����-->
					  <div class="panel-heading">
					  	<h1>��ҵ������Ѷ</h1>
					  	<p><a href="#">������Ѷ</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--���Ľṹ-->
					<div class="panel panel-default">
					  <!--����-->
					  <div class="panel-heading">
					  	<h1>�û�����</h1>
					  	<p><a href="#">������Ѷ</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--���Ľṹ-->
					<div class="panel panel-default">
					  <!--����-->
					  <div class="panel-heading">
					  	<h1>��ƾ���</h1>
					  	<p><a href="#">������Ѷ</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--���Ľṹ-->
					<div class="panel panel-default">
					  <!--����-->
					  <div class="panel-heading">
					  	<h1>�����</h1>
					  	<p><a href="#">������Ѷ</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     	<li>������ͦ���������� <span>�������ڣ�2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<!--ҳ��-->
		<?php
		   include_once("./footer.html");
		?>
	</body>
    <!--����jquery��-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--����bootstrap����js��-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--�Զ�����Ч-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
</html>
=======







































































































































































































































>>>>>>> .theirs
