<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!--<link rel="shortcut icon" href="/docs-assets/ico/favicon.png"> -->

<title>TAES-Tsinghua Algorithm Evaluation System</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/theme.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">
<link href="carousel.css" rel="stylesheet">
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
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="<?php echo U('Index/main');?>">TAES Bingo!</a>
     </div>
     <div class="navbar-collapse collapse">
       <ul class="nav navbar-nav">
         <li class="active"><a href="#">Home</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#contact">Contact</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
           <ul class="dropdown-menu">
             <li><a href="#">Action</a></li>
             <li><a href="#">Another action</a></li>
             <li><a href="#">Something else here</a></li>
             <li class="divider"></li>
             <li class="dropdown-header">Nav header</li>
             <li><a href="#">Separated link</a></li>
             <li><a href="#">One more separated link</a></li>
           </ul>
         </li>
       </ul>
       
       <?php if(is_login()): ?><ul class="nav navbar-nav navbar-right" style="margin-right:0">
               <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-left:0;padding-right:0"><?php echo get_username();?> <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                       <li><a href="<?php echo U('User/profile');?>" style="font-family: '微软雅黑'">修改密码</a></li>
                       <li><a href="<?php echo U('User/logout');?>" style="font-family: '微软雅黑'">退出</a></li>
                   </ul>
               </li>
           </ul>
       <?php else: ?>
           <ul class="nav navbar-nav navbar-right" style="margin-right:0">
               <li>
                   <a href="<?php echo U('User/login');?>" style="font-family: '微软雅黑'">登录</a>
               </li>
               <li>
                   <a href="<?php echo U('User/register');?>" style="padding-left:0;padding-right:0;font-family: '微软雅黑'">注册</a>
               </li>
           </ul><?php endif; ?>
     </div><!--/.nav-collapse -->
   </div><!--container-->
 </div><!--navbar-->

	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1 style="color: #e53333; font-family: '微软雅黑'; font-style: normal;font-weight:bold;">良师益友</h1>
            <p class="lead">Built using Bootstrap</p>
            <ul class="nav nav-pills">
              <li class="active"><a href="<?php echo U('Index/main');?>" style="font-family: '微软雅黑'">首页</a></li>
 
              <li><a href="#" style="font-family: '微软雅黑'">投票</a></li>
              <li><a href="#" style="font-family: '微软雅黑'">统计</a></li>
              <li><a href="#" style="font-family: '微软雅黑'">留言</a></li>
            </ul>
        </div>
    </header>

<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
 	    <!-- Carousel
    ================================================== -->
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
      		<!-- Indicators -->
      		<ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      		<div class="carousel-inner">
        <div class="item active">
          <img src="img/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="font-family: '微软雅黑'">算法演示</h1>
              <p style="font-family: '微软雅黑'">提供字典序法、递增进位法、递减进位法、邻位对换法四种算法的过程演示，帮助您对排列生成算法有更深入的理解.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="font-family: '微软雅黑'">算法评估</h1>
              <p style="font-family: '微软雅黑'">从空间、时间、结果的角度全方位评测算法，给出详细的运算结果对比.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="font-family: '微软雅黑'">算法排名</h1>
              <p style="font-family: '微软雅黑'">针对不同的排列生成算法，提供在排列数的复杂度不同的情况下算法的运行效率变化.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    	</div><!-- /.carousel -->
	</div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <h1>Introduction</h1>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3">
          <img class="img-responsive" src="img/demo.jpg" alt="Generic placeholder image">
          <h2 style="font-family: '微软雅黑'">演示</h2>
          <p>本系统的演示模块以文字描述及动画的形式，将几种经典的全排列生成算法进行剖析，讲解排列数、中介数、序号之间的相互转换过程.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-responsive" src="img/rank.jpg" alt="Generic placeholder image">
          <h2 style="font-family: '微软雅黑'">排行</h2>
          <p>本系统的排行模块用来展示各种经典算法在不同位数的情况下具有怎样的运行效率，同时将用户提交的算法按照运行时间、所需内存进行从小到大的排序.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-responsive" src="img/check.jpg" alt="Generic placeholder image">
          <h2 style="font-family: '微软雅黑'">评测</h2>
          <p>本系统的评测模块允许用户提交代码文本或代码文件，上传成功后通过tab页面可以看到所有提交的评测结果.本系统不仅能够分析结果的正确性，同时可以检测出是否重复、遗漏、增加的问题.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-responsive" src="img/achieve.jpg" alt="Generic placeholder image">
          <h2 style="font-family: '微软雅黑'">成就</h2>
          <p>本系统的成就模块用以展示用户所有提交正确的算法的全站排名，同时给出所有用户提交结果的宏观分析.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" style="font-family: '微软雅黑'">算法演示  <span class="text-muted">便于更好地理解.</span></h2>
          <p class="lead">采用CSS及Javascript的动画脚本代替以往的Flash影片，依靠SenchaAnimator可以做出各种各样内容丰富的交互演示.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/main-ys.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <!-- /END THE FEATURETTES -->
      
    </div><!-- /.container -->

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
<script src="js/holder.js"></script>

	<!-- /底部 -->
</body>
</html>