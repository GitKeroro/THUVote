<?php if (!defined('THINK_PATH')) exit();?>  
<html lang="zh-cn">
    
    <head>
  
    <meta charset="utf-8">
    <title>清华大学第14届良师益友</title>
    <meta name="description" content="清华大学第十四届良师益友">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/THUVote/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/THUVote/dist/css/style.css" >
    <link href="/LocalProject/Public/Css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/THUVote/dist/css/site.min.css">

	</head>
	
	<body class="archive-template" style="">
	
	
	<!-- 导航条
================================================== -->
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo U('Index/index');?>" style="font-family: '微软雅黑'">良师益友</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo U('Index/index');?>" style="font-family: '微软雅黑'">首页</a></li>
				<li><a href="<?php echo U('Vote/index');?>" style="font-family: '微软雅黑'">投票</a></li>
				<li><a href="<?php echo U('CelebrityHall/celebrityHall');?>" style="font-family: '微软雅黑'">名人堂</a></li>
				<li><a href="<?php echo U('Message/index');?>" style="font-family: '微软雅黑'">留言板</a></li>
			</ul>

			<?php if(is_login()): ?><ul class="nav navbar-nav navbar-right" style="margin-right: 0">
					<li><a href="<?php echo U('User/logout');?>" style="font-family: '微软雅黑'">退出</a></li>
				</ul>
			<?php else: ?>
				<ul class="nav navbar-nav navbar-right" style="margin-right: 0">
					<li><a href="<?php echo U('Index/index');?>" style="font-family: '微软雅黑'">登录</a>
					</li>
				</ul><?php endif; ?>
		</div>
		<!--/.nav-collapse -->
	</div>
	<!--container-->
</div>
<!--navbar-->
	
	
	
	
		<div class="wrap">	
			<div class="header" style="background-image: url(/THUVote/img/img8.jpg)">
			  <div class="logoimg">
			    <a href="/THUVote/index.php?s=/Home/CelebrityHall/index" target="_blank"><img src="/THUVote/img/img2.jpg" alt="清华大学第14届良师益友" width="78"></a>
			  </div>
			  <div class="container">
			    <div class="row">
			      <div class="col-xs-12">
			      	<div class="logotxt">
			      		<h1><a href="/THUVote/index.php?s=/Home/CelebrityHall/index" target="_blank">清华大学第14届良师益友</a></h1>
			      	</div> 
			      	<h2 class="text-center">返回首页</h2>
			      </div>
			  	</div>
			  </div>
			</div>
				
			<main class="margintop" role="main">
		    	<div class="container">
		        	<div class="row">         
		            	
		            	<div class="col-xs-12 col-md-6 col-lg-6">
		                <article class="post tag-bs2">
		                    <section class="post-featured-image">
		                        <a class="thumbnail" href="/THUVote/index.php?s=/Home/CelebrityHall/teacher/" data-toggle="modal" data-target="#myModal">
		                          <img src="/THUVote/img/loader.gif" width="800" height="600" alt="Infinum">
		                        </a>
		                        <span class="bs2"></span>
		                    </section>
		                    <header class="post-header">
		                        <h2 class="post-title"><a href="/THUVote/index.php?s=/Home/CelebrityHall/teacher/ " data-toggle="modal" data-target="#myModal">老师1</a></h2>   
		                    </header>
		                    <section class="post-content">
								<p><img src="/THUVote/img//img3.jpg" alt="Infinum"></p>
		                    </section>
		                </article>
		            </div>
		       
		            <div class="col-xs-12 col-md-6 col-lg-6">
		                <article class="post tag-bs2">
		                    <section class="post-featured-image">
		                        <a class="thumbnail" href="/THUVote/index.php?s=/Home/CelebrityHall/teacher2/"  data-toggle="modal" data-target="#myModal">
		                          <img src="/THUVote/img/loader.gif" width="800" height="600" alt="Fortrabbit" >
		                        </a>
		                        <span class="bs2"></span>
		                    </section>
		                    <header class="post-header">
		                        <h2 class="post-title"><a href="/THUVote/index.php?s=/Home/CelebrityHall/teacher2/" data-toggle="modal" data-target="#myModal">老师2</a></h2>
		                    </header>
		                    <section class="post-content">
								<p><img src="/THUVote/img/img4.jpg" alt="Fortrabbit"></p>
		                    </section>
		                </article>
		            </div>
				             
		            <div class="col-xs-12 col-md-6 col-lg-6">
		                <article class="post tag-bs3">
		                    <section class="post-featured-image">
		                        <a class="thumbnail" href="../TeacherInfo/TeacherInfo.php" target="_blank">
		                          <img src="/THUVote/img/loader.gif" width="800" height="600" alt="Inc" >
		                        </a>
		                        <span class="bs3"></span>
		                    </section>
		                    <header class="post-header">
		                        <h2 class="post-title"><a href="../TeacherInfo/TeacherInfo.php">老师3</a></h2>
		                    </header>
		                    <section class="post-content">                        
								<p><img src="/THUVote/img/img5.jpg" alt="Inc"></p>
		                    </section>
		                </article>
		            </div>
		             
		            <div class="col-xs-12 col-md-6 col-lg-6">
		                <article class="post tag-bs2">
		                    <section class="post-featured-image">
		                        <a class="thumbnail" href="../TeacherInfo/TeacherInfo.php" target="_blank">
		                          <img src="/THUVote/img/loader.gif" width="800" height="600" alt="ooomf" >
		                        </a>
		                        <span class="bs2"></span>
		                    </section>
		                    <header class="post-header">
		                        <h2 class="post-title"><a href="../TeacherInfo/TeacherInfo.php">老师4</a></h2>
		                    </header>
		                    <section class="post-content">                       
								<p><img src="/THUVote/img/img6.jpg" alt="ooomf"></p>
		                    </section>
		                </article>
		            </div>
		
		            <div class="col-xs-12 col-md-6 col-lg-6">
		                <article class="post tag-bs3">
		                    <section class="post-featured-image">
		                        <a class="thumbnail" href="../TeacherInfo/TeacherInfo.php" target="_blank">
		                          <img src="/THUVote/img/loader.gif" width="800" height="600" alt="Flywheel" >
		                        </a>
		                        <span class="bs3"></span>
		                    </section>
		                    <header class="post-header">
		                        <h2 class="post-title"><a href="../TeacherInfo/TeacherInfo.php">老师5</a></h2>
		                    </header>
		                    <section class="post-content">                        
								<p><img src="/THUVote/img/img7.jpg" alt="Flywheel"></p>
		                    </section>
		                </article>
		            </div>
			             
		            <div class="col-xs-12 col-md-6 col-lg-6">
		                <article class="post tag-bs2">
		                    <section class="post-featured-image">
		                        <a class="thumbnail" href="../TeacherInfo/TeacherInfo.php" target="_blank">
		                          <img src="/THUVote/img/loader.gif" width="800" height="600" alt="Sentry" >
		                        </a>
		                        <span class="bs2"></span>
		                    </section>
		                    <header class="post-header">
		                        <h2 class="post-title"><a href="../TeacherInfo/TeacherInfo.php">老师6</a></h2>
		                    </header>
		                    <section class="post-content">
		                      
								<p><img src="/THUVote/img/img3.jpg" alt="��ʦ1"></p>
	
		                    </section>
		                </article>
		            </div> 
		        </div>
		        
		        <nav class="pagination">    
			    	<span class="page-number">第1页/共7页</span>
			        <a class="older-posts" href="/THUVote/index.php?s=/Home/CelebrityHall/celebrityHall">下一页 →</a>
				</nav>			
		    </div>
		</main>		
		</div>
		
		<footer>
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12">
		                <div class="submit">
		                    <p class="text-center">感谢您关注清华大学第14届良师益友评选活动<a href="mailto:admin@bootcss.com"></a></p>
		                    <p class="text-center">如有任何疑问，请联系清华大学研究生会学术部良师益友组</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>
		    
		<script src="/THUVote/dist/js/jquery.min.js"></script>
		<script src="/THUVote/dist/js/bootstrap.min.js"></script>
		<script src="/THUVote/dist/js/jquery.lazyload.min.js"></script>
		<script src="/THUVote/dist/js/jquery.magnific-popup.min.js"></script>	
		<script type="text/javascript" src="/THUVote/dist/js/index.min.js"></script>
		
	    <!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<script>
	        
	   
			</script>
			</div>
	    <!-- /.modal -->
	</body>

</html>