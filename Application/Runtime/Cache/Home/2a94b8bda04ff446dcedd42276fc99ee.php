<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

	<!-- 可选的Bootstrap主题文件（一般不使用） -->
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap-theme.min.css"></script>

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<!-- 注册页面CSS js -->
	<link href="/trans/Public/css/index/login-register.css" rel="stylesheet">
	<script src="/trans/Public/js/index/login-register.js" type="text/javascript"></script>
	<!-- 注册页面结束 -->

	<!-- 首页展示 CSS JS-->
	<link href="/trans/Public/css/index/style.css" rel="stylesheet">
	<link href="/trans/Public/css/index/styleNav.css" rel="stylesheet">
		<!-- 左右箭头 CSS -->
		<link href="/trans/Public/css/index/pe-icon-7-stroke.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="/trans/Public/css/index/owl.carousel.css" rel="stylesheet">
		<link href="/trans/Public/css/index/owl.theme.default.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<script src="/trans/Public/js/index/owl.carousel.min.js"></script>
		<!-- Scripts.js -->
		<script src="/trans/Public/js/index/scripts.js"></script>
</head>
<body>
	<div class="container">
        <section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top skrollable skrollable-between" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);" style="line-height: 100px; height: 100px; background-color: rgba(0, 0, 0, 0.3);">
			 <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1>
						<img src="/trans/Public/images/carIcon.png" style="width: 60px;height: auto;float: left;margin-right:20px;display: inline-block;margin-top: 22px">
						<a class="navbar-brand skrollable skrollable-between" href="#" data-0="line-height:90px;" data-300="line-height:50px;" style="line-height: 90px;">			物流运输平台
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav skrollable skrollable-between" data-0="margin-top:20px;" data-300="margin-top:5px;" style="margin-top: 20px;">
						<li class=""><a href="#">Home</a></li>
						<li class=""><a href="#">About</a></li>
						<li><a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">登陆</a></li>
						<li><a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">注册</a></div></li>
					</ul>
				</div><!--/.navbar-collapse -->
				<!-- <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">登陆</a>
        		<a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">注册</a></div> -->

			</div>
		</div>



        


        <div class="section dark" style="margin-top: 100px">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">运输信息<small><!-- Browse the latest articles and tips from our blog. --></small></h2>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="blog-post quote">
								<img src="/trans/Public/images/blog-post01.jpg" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="/trans/Public/images/blog-author01.jpg" alt="author"></div>
								<div class="type"><img src="/trans/Public/images/blog-category-quote.png" alt="quote"></div>
								<div class="content">
									<p>By Quam Lobortis</p>
									<h3><a href="#">“Sed ut perspiciatis unde omnis iste ... ”</a></h3>
									<div class="meta">July 09, 2016 - <a href="#">Food</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="blog-post video">
								<img src="/trans/Public/images/blog-post03.jpg" alt="image" class="img-responsive">
								<div class="overlay"></div>
								<div class="avatar"><img src="/trans/Public/images/blog-author03.jpg" alt="author"></div>
								<div class="type"><img src="/trans/Public/images/blog-category-video.png" alt="video"></div>
								<div class="content">
									<a href="#" class="play-video"><i class="pe-7s-play"></i></a>
									<p>By Proin Mattis</p>
									<h3><a href="#">Nightlife at NewYork</a></h3>
									<div class="meta">July 03, 2016 - <a href="#">Nightlife</a></div>
								</div> <!-- end .content -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
					<div class="blog-view-more"><a href="#" class="button">View All</a></div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<div class="section white">
			<div class="inner">
				<div class="container-fluid">
					<h2 class="text-center">Best Things to Do in the City<small>Explore some of the best tips from around the city from our partners and friends.</small></h2>
					<div class="directory-slider owl-carousel owl-theme owl-center owl-loaded">
						 <!-- end .directory-item -->
						 <!-- end .directory-item -->
						 <!-- end .directory-item -->
						 <!-- end .directory-item -->
					<div class="owl-stage-outer"><div class="owl-stage" style="transition: 0s; width: 1393px; transform: translate3d(174.125px, 0px, 0px);"><div class="owl-item active" style="width: 348.25px; margin-right: 0px;"><div class="directory-item">
							<img src="/trans/Public/images/directory-slider01.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="/trans/Public/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Not Just Coffee</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" alt="location">Thomas St , NewYork</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="/trans/Public/images/directory-category-food.png" alt="food"></a>
								<a href="#"><img src="/trans/Public/images/directory-category-drink.png" alt="drink"></a>
							</div> <!-- end .category -->
						</div></div><div class="owl-item active center" style="width: 348.25px; margin-right: 0px;"><div class="directory-item">
							<img src="/trans/Public/images/directory-slider02.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="/trans/Public/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Nunc Restaurant</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" alt="location">Leonard St , NewYork</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="/trans/Public/images/directory-category-dining.png" alt="dining"></a>
								<a href="#"><img src="/trans/Public/images/directory-category-wine.png" alt="wine"></a>
							</div> <!-- end .category -->
						</div></div><div class="owl-item active" style="width: 348.25px; margin-right: 0px;"><div class="directory-item">
							<img src="/trans/Public/images/directory-slider03.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="/trans/Public/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">DJ Party</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" alt="location">Knightsbridge 66</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="/trans/Public/images/directory-category-party.png" alt="party"></a>
							</div> <!-- end .category -->
						</div></div><div class="owl-item active" style="width: 348.25px; margin-right: 0px;"><div class="directory-item">
							<img src="/trans/Public/images/directory-slider04.jpg" alt="bg" class="img-responsive">
							<div class="overlay"></div>
							<div class="rating">4.0</div>
							<a href="#" class="wishlist"><img src="/trans/Public/images/directory-heart.png" alt="wishlist"></a>
							<div class="content">
								<h3><a href="#">Quisque Tinibus Hotel</a></h3>
								<p>Suspendisse tristique orci justo</p>
								<div class="location"><img src="/trans/Public/images/directory-location.png" alt="location">Knightsbridge 66</div>
							</div> <!-- end .content -->
							<div class="category">
								<a href="#"><img src="/trans/Public/images/directory-category-hotel.png" alt="hotel"></a>
							</div> <!-- end .category -->
						</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="pe-7s-angle-left"></i></div><div class="owl-next" style=""><i class="pe-7s-angle-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div> <!-- end .directory-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->









        <!-- 登陆注册dialog -->
        <div class="modal fade login" id="loginModal">
        	<div class="modal-dialog login animated">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        				<h4 class="modal-title">Login with</h4>
        			</div>
        			<div class="modal-body">  
        				<div class="box">
        					<div class="content">
        						<div class="social">
        							<label class="circle github"><input type="radio" onchange="changeRadio(this)"  name="role" checked="true" value="1">
        								货主
        							</label>
        							<a class="circle facebook" href="#">
        								<input type="radio" onchange="changeRadio(this)" name="role" value="2">司机
        							</a></label>
                                </div>
                                <div class="division">
                                	<div class="line l"></div>
                                	<span>信息</span>
                                	<div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                	<form method="post" action="#" accept-charset="UTF-8">
                                		<input id="email" class="form-control" type="text" placeholder="账号" name="email">
                                		<input id="password" class="form-control" type="password" placeholder="密码" name="password">
                                		<input class="btn btn-default btn-login" type="button" value="登陆" onclick="loginAjax()">
                                	</form>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                        	<div class="content registerBox" style="display:none;">
                        		<div class="form" >
                        			<form method="post" id="registerForm" data-remote="true" action="#" accept-charset="UTF-8">
                        				<input id="userName" class="form-control" type="text" placeholder="账号" name="email">
                        				<input id="password" class="form-control" type="password" placeholder="密码" name="password">
                        				<input id="password_confirmation" class="form-control" type="password" placeholder="确认密码" name="password_confirmation">
                        				<input id="name" class="form-control" type="text" placeholder="姓名" name="email">
                                		<div id="master">
                                			<input id="phone" class="form-control" type="text" placeholder="联系方式" name="email">
                                			<input id="address" class="form-control" type="text" placeholder="住址" name="email">
                                		</div>
                                		<div id="car">
                                			<input id="phone" class="form-control" type="text" placeholder="车型" name="email">
                                			<input id="address" class="form-control" type="text" placeholder="车牌号" name="email">
                                			<input id="address" class="form-control" type="text" placeholder="可运输类型" name="email">
                                		</div>
                                		
                                		
                                		<input class="btn btn-default btn-register" type="submit" value="注册" name="commit">
                                		<button type="reset" style="display:none;"></button> 
                        			</form>
                        		</div>
                        	</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    	<div class="forgot login-footer">
                    		<span>点击 
                    			<a href="javascript: showRegisterForm();">注册</a>
                    		?</span>
                    	</div>
                    	<div class="forgot register-footer" style="display:none">
                    		<span>已经有账号了?</span>
                    		<a href="javascript: showLoginForm();">前往登陆</a>
                    	</div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    	$(function(){
    		$("#car").hide();
			$("#master").show();
    	})
    	function changeRadio(el){
    		var radioVal = $(el).val();
    		clearForm();
    		if (radioVal == 1) {
    			$("#car").hide();
				$("#master").show();
			}else{
				$("#master").hide();
				$("#car").show();
			}
    	}
    	function clearForm(){
    		$(':input','#registerForm')

		       .not(':button,:submit,:reset,:hidden,:radio')   //将myform表单中input元素type为button、submit、reset、hidden排除

		       .val('')  //将input元素的value设为空值

		       .removeAttr('checked')

		       .removeAttr('checked') // 如果任何radio/checkbox/select inputs有checked or selected 属性，将其移除
    	}
    </script>
</body>
</html>