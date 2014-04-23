<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!--<link rel="shortcut icon" href="/docs-assets/ico/favicon.png"> -->

<title>第X届良师益友投选活动网站</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="{{ page.base_url }}docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
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
					<li><a href="<?php echo U('Index/logout');?>" style="font-family: '微软雅黑'">退出</a></li>
				</ul>
			<?php else: ?>
				<ul class="nav navbar-nav navbar-right" style="margin-right: 0">
					<li><a href="<?php echo U('Index/login');?>" style="font-family: '微软雅黑'">登录</a>
					</li>
				</ul><?php endif; ?>
		</div>
		<!--/.nav-collapse -->
	</div>
	<!--container-->
</div>
  <div style="margin-top: 36pt;"></div>
<!--navbar-->

	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div id="main-container" class="container">
    <div class="row">
        

  <!-- 主体 -->
    <div class="container">
	<div class="row">
		<div class="span12">
			
	
	 <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">投票须知</h3>
        </div>
        <div class="panel-body">
          Panel content
          	<div class="alert alert-warning">Warning! Best check yo self, you're not looking too good.</div>
          	<div class="alert alert-success"> Well done! You successfully read this important alert message.</div>
			<div class="alert alert-info">Heads up! This alert needs your attention, but it's not super important.</div>
          
        </div>
      </div>
      
            <h1 style="text-align: center;font-family:'微软雅黑'">入选教师</h1>
      <hr class="featurette-divider">


<!-- begin row -->
	<div class="row">
		
        <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/150x150" alt="Generic placeholder thumbnail">
            <div class="caption">
            	<p style="text-align: center"> <strong>吴建平</strong>
            		<button type="button" class="btn btn-danger  btn-xs">详情</button>
            		
            	</p>
              <p>计算机科学技术系 </p>
              <p>
              	<a href="#" class="btn btn-primary" role="button">投票！</a> 
              	<a href="#" class="btn btn-default" role="button">我要说</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/150x150" alt="Generic placeholder thumbnail">
            <div class="caption">
            	<p> <strong>吴建平</strong>
            		<span class="label label-danger">详情</span>
            	</p>
              <p>计算机科学技术系 </p>
              <p>
              	<a href="#" class="btn btn-primary" role="button">投票！</a> 
              	<a href="#" class="btn btn-default" role="button">我要说</a>
              </p>
            </div>
          </div>
        </div>
        
       <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/150x150" alt="Generic placeholder thumbnail">
            <div class="caption">
            	<p> <strong>吴建平</strong>
            		<span class="label label-danger">详情</span>
            	</p>
              <p>计算机科学技术系 </p>
              <p>
              	<a href="#" class="btn btn-primary" role="button">投票！</a> 
              	<a href="#" class="btn btn-default" role="button">我要说</a>
              </p>
            </div>
          </div>
        </div>

	
       <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/150x150" alt="Generic placeholder thumbnail">
            <div class="caption">
            	<p> <strong>吴建平</strong>
            		<span class="label label-danger">详情</span>
            	</p>
              <p>计算机科学技术系 </p>
              <p>
              	<a href="#" class="btn btn-primary" role="button">投票！</a> 
              	<a href="#" class="btn btn-default" role="button">我要说</a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/150x150" alt="Generic placeholder thumbnail">
            <div class="caption">
            	<p> <strong>吴建平</strong>
            		<span class="label label-danger">详情</span>
            	</p>
              <p>计算机科学技术系 </p>
              <p>
              	<a href="#" class="btn btn-primary" role="button">投票！</a> 
              	<a href="#" class="btn btn-default" role="button">我要说</a>
              </p>
            </div>
          </div>
        </div>

	
       <div class="col-sm-3 col-md-2">
          <div class="thumbnail">
            <img data-src="holder.js/150x150" alt="Generic placeholder thumbnail">
            <div class="caption">
            	<p> <strong>吴建平</strong>
            		<span class="label label-danger">详情</span>
            	</p>
              <p>计算机科学技术系 </p>
              <p>
              	<a href="#" class="btn btn-primary" role="button">投票！</a> 
              	<a href="#" class="btn btn-default" role="button">我要说</a>
              </p>
            </div>
          </div>
        </div>
   </div>

<!-- end row -->



		</div>
</div>


    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	<p></p>

<div class="container">
    <!-- FOOTER -->
    <hr class="featurette-divider">
    <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p class="text-muted credit">本站由 <a href="http://www.bootcss.com/">Bootstrap</a> 及 <a href="http://www.thinkphp.cn/">ThinkPHP</a> 强力驱动.</p>
    </footer>
</div>


<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/THUVote", //当前网站地址
		"APP"    : "/THUVote/index.php?s=", //当前项目地址
		"PUBLIC" : "/THUVote/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/holder.js"></script>

	<!-- /底部 -->
</body>
</html>