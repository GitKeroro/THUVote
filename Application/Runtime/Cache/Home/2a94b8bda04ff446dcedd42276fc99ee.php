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
        


<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->

	<div class="carousel-inner">
		<div class="item active">
			<img src="img/header_1.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">
					<h1 style="font-family: '微软雅黑'">第X届良师益友投选活动</h1>
					<p style="font-family: '微软雅黑'">主办：清华大学研究生会 （学术部）</p>
					<p>
						<a class="btn btn-lg btn-primary" href="#" role="button">我要投票！</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.carousel --> <!-- Marketing messaging and featurettes
    ================================================== --> <!-- Wrap the rest of the page in another container to center all the content. -->




<div class="container marketing">

	<h1 style="font-family: '微软雅黑'">活动介绍</h1>
	
	<hr class="featurette-divider">
	

	<!-- Three columns of text below the carousel -->
		 <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/280x280" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/280x280" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="holder.js/280x280" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	

<hr class="featurette-divider">

	  <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </div>
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
      </div>
	
	
</div>

<hr class="featurette-divider">



<!-- /.container --> 
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