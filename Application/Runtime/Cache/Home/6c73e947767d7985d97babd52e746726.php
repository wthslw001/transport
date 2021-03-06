<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>天津物流信息科技有限公司</title>
		<link rel="short icon" type="image/x-icon" href="http://chuantu.biz/t6/195/1514986096x-1404795820.png">
		<!-- Bootstrap -->
		<link href="/trans/Public/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome Icons -->
		<link href="/trans/Public/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- PE Icon 7 Stoke -->
		<link href="/trans/Public/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"  rel="stylesheet">
		<link href="/trans/Public/fonts/pe-icon-7-stroke/css/helper.css"  rel="stylesheet">
		<!-- PE Icon Social -->
		<link href="/trans/Public/fonts/pe-icon-social/css/pe-icon-social.css" rel="stylesheet">
		<link href="/trans/Public/fonts/pe-icon-social/css/helper.css"  rel="stylesheet">
		<!-- Quicksand Dash -->
		<link href="/trans/Public/fonts/quicksand-dash/stylesheet.css"  rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="/trans/Public/css/owl.carousel.css"  rel="stylesheet">
		<link href="/trans/Public/css/owl.theme.default.css"  rel="stylesheet">
		<!-- Sweet Alert -->
		<link href="/trans/Public/css/sweetalert.css" rel="stylesheet">
		<!-- Animate -->
		<link href="/trans/Public/css/animate.min.css"  rel="stylesheet">
		<!-- Nivo Lightbox -->
		<link href="/trans/Public/scripts/Nivo-Lightbox/nivo-lightbox.css"  rel="stylesheet">
		<link href="/trans/Public/scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
		<!-- NoUISlider -->
		<link href="/trans/Public/css/jquery.nouislider.min.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="/trans/Public/css/style.css" rel="stylesheet">
		
		<!-- sweatAlert -->
		<script src="/trans/Public/lib/sweetalert/sweetalert.min.js"></script>
   		<link rel="stylesheet" type="text/css" href="/trans/Public/lib/sweetalert/sweetalert.css">

   		<!-- doT.js -->
   		<script src="/trans/Public/js/doT.min.js"></script>

   		<!-- DateTime Picker-->
	    <link href="/trans/Public/lib/bootstrapDatetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	    <script src="/trans/Public/lib/bootstrapDatetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	    <style type="text/css">

	    	/*.photo_preview_box{
	    		display: none;
	    	}*/
	    </style>
	</head>
	<body>
		
		<header class="header clearfix">
			<div class="left">
				<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/trans/Public/images/logo.png" style="width: 45px;height: auto" class="img-responsive"></a></div> <!-- end .logo -->
				<!-- <form class="header-search">
					<input type="text" placeholder="I’m searching for ...">
					<button type="submit"><i class="pe-7s-search"></i></button>
				</form> -->
			</div> <!-- end .left -->
			<div class="navigation clearfix">
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li class="menu-item-has-children">
							<a href="<?php echo U('NearBy/nearBy');?>">地图查询</a>
							<ul>
								<li><a href="<?php echo U('NearBy/nearBy');?>">地图查询</a></li>
							</ul>
						</li>
						<?php if(strtoupper($_SESSION['userId']) != '' && strtoupper($_SESSION['type']) == '2'): ?><li class="menu-item-has-children">
								<a href="<?php echo U('AddTask/addTask');?>">发布任务</a>
								<ul>
									<li><a href="<?php echo U('AddTask/addTask');?>">发布任务</a></li>
								</ul>
							</li><?php endif; ?>
						
						<li class="menu-item-has-children">
							<a href="<?php echo U('TaskList/taskList');?>">全部信息</a>
							<ul>
								<li><a href="<?php echo U('TaskList/taskList');?>">全部信息</a></li>
							</ul>
						</li>
						<?php if(strtoupper($_SESSION['userId']) && strtoupper($_SESSION['type']) == '1'): ?><li class="menu-item-has-children">
								<a href="<?php echo U('SelfCenter/selfCenter');?>" >与我相关</a>
								<ul>
									<li><a href="<?php echo U('SelfCenter/selfCenter');?>">司机中心</a></li>
								</ul>
							</li><?php endif; ?>
						<?php if(strtoupper($_SESSION['userId']) && strtoupper($_SESSION['type']) == '2'): ?><li class="menu-item-has-children">
								<a href="<?php echo U('OwnerSelfCenter/ownerSelfCenter');?>" >与我相关</a>
								<ul>
									<li><a href="<?php echo U('OwnerSelfCenter/ownerSelfCenter');?>">货主中心</a></li>
								</ul>
							</li><?php endif; ?>
						
					</ul>
				</nav> <!-- end .main-nav -->
				<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
			</div> <!-- end .navigation -->
			<?php if(strtoupper($_SESSION['userId']) == ''): ?><div class="right">
					<a href="#" class="button signup-open border" >没有账号？注册</a>
					<a href="#" class="button login-open" >登录</a>
				</div>
				<?php else: ?>
					<div class="right">
						<div class="user">
							<div class="avatar"><img src="/trans/Public/images/avatar04.jpg"></div>
							<?php echo (session('userName')); ?> <a href="<?php echo U('Index/loginOut');?>">注销</a>
						</div>
					</div><?php endif; ?>

			 <!-- end .left -->
		</header> <!-- end .header -->

		<div class="login-wrapper">
			<div class="login">
				<form action="<?php echo U('Index/login');?>" method="POST" >
					<div class="form-group">
						<input type="text" id="login_userName" name="account" placeholder="请输入您的用户名">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<input type="password" id="login_password" name="password" placeholder="请输入您的密码">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox" style="width:100%;height: 30px;">
							<div style="width: 50%;float: left;padding-left: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" checked="true" value="1"> 司机
								</label>
							</div>
							<div style="width: 50%;float: right;padding-right: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" value="2"> 货主
								</label>
							</div>
							
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div>
					<div class="clearfix">
						<div class="checkbox">
							<label>
								<input type="checkbox"> 记住密码
							</label>
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div> <!-- end .clearfix -->
					<div class="button-wrapper"><button type="submit" class="button" onclick="login()">登录</button></div>
					<div class="text-center">
						<p>还没有账号 ? <a href="" class="signup-open">前往注册</a></p>
					</div>
				</form>
			</div> <!-- end .login -->
		</div> <!-- end .login-wrapper -->

		<div class="signup-wrapper">
			<div class="signup">
				<form action="/trans/index.php/Home/SelfCenter/register" method="POST" ><!-- <?php echo U('Login/regiser');?> -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="text" placeholder="姓名" id="register_name" name="name">
					</div>
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="text" placeholder="用户名" id="register_userName" name="account">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="password" placeholder="密码" id="regiser_password" name="password">
					</div> <!-- end .form-group -->
					<div class="form-group">
						<label style="color: red;display: inline-block;">*</label><input type="password" placeholder="确认密码" id="regiser_affirmPassword" name="affirmPassword">
					</div> <!-- end .form-group -->
					<div class="clearfix">
						<div class="checkbox" style="width:100%;height: 30px;">
							<div style="width: 50%;float: left;padding-left: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" checked="true" value="1"> 司机
								</label>
							</div>
							<div style="width: 50%;float: right;padding-right: 60px;">
								<label>
									<input type="radio" onchange="changeRadio(this)"  name="type" value="2"> 货主
								</label>
							</div>
							
						</div>
						<!-- <a href="" class="lost-password">Lost your password ?</a> -->
					</div>
					<input id="tel1" class="form-control" type="text" placeholder="联系方式" name="tel">
					<div id="master" hidden="">
            			<input id="address" class="form-control" type="text" placeholder="住址" name="add">
            		</div>
            		<div id="car">
            			
            		</div>
					<div class="text-center">
						<p>完成后请及时对信息进行完善</p>
					</div> <!-- end .text-center -->
					<div class="button-wrapper"><button type="submit" class="button">注册</button></div>
					<div class="text-center">
						<p>Already have an account? <a href="" class="login-open">Log in</a></p>
					</div>
				</form>
			</div> <!-- end .signup -->
		</div> <!-- end .signup-wrapper -->



		<!-- 登录注册登出方法 -->
		<script type="text/javascript">
			function changeRadio(el){
	    		var radioVal = $(el).val();
	    		clearForm();
	    		if (radioVal == 1) {
	    			$("#master").hide();
					$("#car").show();
				}else{
					$("#master").show();
					$("#car").hide();
				}
	    	}
	    	function clearForm(){
	    		$(':input','#registerForm')

			       .not(':button,:submit,:reset,:hidden,:radio')   //将myform表单中input元素type为button、submit、reset、hidden排除

			       .val('')  //将input元素的value设为空值

			       .removeAttr('checked')

			       .removeAttr('checked') // 如果任何radio/checkbox/select inputs有checked or selected 属性，将其移除
	    	}

			//根据任务名称、出发地、到达地、类别（时间超过的就不在显示）
			function search(){

			}
			window.alert = function(text){
			    swal("提示",text);
			}
			window.confirm=function(text,type){
			    swal("提示", text, type,function(res){
			    	return res;
			    })
			}
			// 登录方法
			// function login(){
			// 	var login_userName= $("#login_userName").val();
			// 	var login_password = $("#login_password").val();
			// 	if(login_userName=='' || login_password==''){
			// 		alert("您还有信息未输入");
			// 		return false;
			// 	};
			// }

			//登出方法
			function loginOut(){

			}

			//注册方法
			// function register(){
			// 	var register_userName= $("#register_userName").val();
			// 	var register_password = $.trim($("#register_password").val());
			// 	var register_affirmPassword = $.trim($("#register_affirmPassword").val());
			// 	if(register_userName=='' || register_password=='' || register_affirmPassword == ''){
			// 		alert("您还有信息未输入");
			// 		return false;
			// 	};
			// 	if (register_password != register_affirmPassword) {
			// 		alert("两次密码输入不正确，请您检查一下！");
			// 		return false;
			// 	}
			// }
</script>

<div class="responsive-menu">
	<a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
	<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->

<div class="page-title" style="background-image: url('/trans/Public/images/background16.jpg')/*tpa=http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/images/background16.jpg*/;">
	<div class="inner">
		<h2>个人中心</h2>
		<p>You can see the tasks of you</p>
	</div> <!-- end .inner -->
</div> <!-- end .page-title -->

<div class="section boxed-section light">
	<div class="inner">
		<div class="container">
			<div class="box transparent">
				<div class="row">
					<div class="col-md-4">
						<div class="shop-sidebar">
							<div class="sidebar-widget">
								<h5>功能表</h5>
								<form class="searchform">
									<input type="text" placeholder="Search there...">
									<button><i class="pe-7s-search"></i></button>
								</form>
							</div> <!-- end .sidebar-widget -->
							<div class="sidebar-widget">
								<h5>操作列表</h5>
								<div class="categories" id="func">
									<a href="<?php echo U('SelfCenter/selfCenter');?>"  >所有任务<i class="pe-7s-right-arrow"></i></a>
									<a href="<?php echo U('SelfCenter/applying');?>">申请中<i class="pe-7s-right-arrow"></i></a>
									<a  href="<?php echo U('SelfCenter/waittrans');?>">申请成功未处理<i class="pe-7s-right-arrow"></i></a>
									<a  href="<?php echo U('SelfCenter/transing');?>">运输中<i class="pe-7s-right-arrow"></i></a>
									<a href="<?php echo U('SelfCenter/done');?>">已完成<i class="pe-7s-right-arrow"></i></a>
									<a href="<?php echo U('SelfCenter/myCar');?>" class="active" id="my_car">我的车辆<i class="pe-7s-right-arrow"></i></a>
									<a href="" id="add_car" data-toggle="modal" data-target="#add_car_modal" >添加车辆<i class="pe-7s-right-arrow"></i></a>

								</div>
							</div> <!-- end .sidebar-widget -->
						</div>
					</div>
					<div class="col-md-8">
						<div class="row products" id="allTaskContainer">


							<div class="col-sm-6">
								<div class="product">
									<div id="rowContainer">

									</div>
								</div> <!-- end .content -->

							</div> <!-- end .product -->
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .col-md-8 -->
			</div> <!-- end .row -->
			<div class="text-center">
				<a href="" id="products-load-more" class="button">Load More</a>
			</div> <!-- end .blog-load-more -->
		</div> <!-- end .box -->
	</div> <!-- end .container -->
</div> <!-- end .inner -->
</div> <!-- end .section -->

<footer class="footer">
	<div class="top">
		<div class="left">
			<div class="logo"><a href="<?php echo U('Index/index');?>" style="width: 45px;height: auto;" ><img src="/trans/Public/images/logo.png" class="img-responsive"></a></div> <!-- end .logo -->
		</div> <!-- end .left -->
		<div class="social-icons">
			<a href=""><i class="pe-so-facebook"></i></a>
			<a href=""><i class="pe-so-twitter"></i></a>
			<a href=""><i class="pe-so-vimeo"></i></a>
			<a href=""><i class="pe-so-tripadvisor"></i></a>
			<a href=""><i class="pe-so-instagram"></i></a>
			<a href=""><i class="pe-so-google-plus"></i></a>
		</div>
		<!-- <div class="right">Proudly Made in Viet Nam<a href="">+84 968796789</a></div> --> <!-- end .left -->
	</div> <!-- end .top -->
	<div class="bottom">Copyright &copy; 2018. All Rights Reserved By <a href="">天津物流信息科技有限公司</a></div>
</footer> <!-- end .footer -->

<!-- 添加车辆modal -->
<div class="modal fade"  id="add_car_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" style="text-align: left" id="header">添加车辆</h4>
			</div>
			<div class="modal-body" style"padding-bottom: 0px">
			<form name="addCarForm" enctype="Multipart/form-data" action="/trans/index.php/Home/SelfCenter/addCar" method="post" id="addCarForm" class="add-listing-form light-inputs">
				<div class="row" >
					<div class="col-md-2">
						<h6>车牌号</h6>
					</div>
					<div class="col-md-10">
						<input type="text" name="id" class="form-control" id="id"  >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-2">
						<h6>载重（kg)</h6>
					</div>
					<div class="col-md-10">
						<input type="text" name="weight" class="form-control"  id="weight" >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-2">
						<h6>车长（m）</h6>
					</div>
					<div class="col-md-10">
						<input type="text" name="length" class="form-control" id="length"  >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-2">
						<h6>车宽（m）</h6>
					</div>
					<div class="col-md-10">
						<input type="text" class="form-control" name="width" id="width"  >
						<label class="control-label message"></label>
					</div>
				</div>
				<div class="form-group add_photo">
					<button onclick="getElementById('file').click()" type="button" class="button">上传图片</button>
					<input type="file" multiple="multiple" id="file" name='car_pic' style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" onchange="preview(this)" /><!--原来按钮的样式-->
					<span>1 Photo</span>
				</div> <!-- end .text-left .add_photo -->
			

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" id="close">关闭</button>
			<button type="submit" class="btn btn-primary" id="save">添加</button>
		</div>
		</form>
	</div>
</div>


<!-- jQuery -->
<script src="/trans/Public/js/jquery-3.1.0.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="http://img3.job1001.com/js/ZeroClipboard/jquery.zclip.min.js"></script> 
		
<!-- Bootstrap -->
<script src="/trans/Public/js/bootstrap.min.js" tppabs="http://view.jqueryfuns.·com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/bootstrap.min.js"></script>

<!-- BaiDu maps -->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=	kh7UFEyOR81HUvnaY81VFVxqGu0SimDa"></script>
<!-- rich marker -->
<script src="/trans/Public/js/richmarker.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/richmarker.js"></script>
<!-- Owl Carousel -->
<script src="/trans/Public/js/owl.carousel.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/owl.carousel.min.js"></script>
<!-- Countdown -->
<script src="/trans/Public/js/countdown.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/countdown.js"></script>
<!-- Sweet Alert -->
<script src="/trans/Public/js/sweetalert.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/sweetalert.min.js"></script>
<!-- Nivo Lightbox -->
<script src="/trans/Public/scripts/Nivo-Lightbox/nivo-lightbox.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
<!-- NoUISlider -->
<script src="/trans/Public/js/jquery.nouislider.all.min.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/jquery.nouislider.all.min.js"></script>
<!-- Scripts.js -->
<script src="/trans/Public/js/scripts.js" tppabs="http://view.jqueryfuns.com/%E9%A2%84%E8%A7%88-/2016/12/29/6a0a797a5260488eadc7cab49af24dac/js/scripts.js"></script>

</body>
</html>


<script>
	window.onload=function(){
		$.ajax({
			url:"/trans/index.php/Home/SelfCenter/carList",
			method:"get",
			dataType:"json",
			success:function(res){
				console.log(res)
				var topTemplate = doT.template(document.getElementById("selfCenterTemplate").innerHTML);
				document.getElementById("allTaskContainer").innerHTML = topTemplate(res);
			}
		})
	}
	
	function deleteCar(el){
		var carId = $(el).attr("data-carId")
		swal({ 
		  title: "提示", 
		  text: "您确定要删除该车辆吗？", 
		  type: "warning", 
		  showCancelButton: true, 
		  closeOnConfirm: true,
		},
		function(res){ 
			if (res == true) {
		  		$.ajax({
		           url:"deleteCar?car_id="+carId,
		           type:"GET",
		           dataType:"text",
		           success:function(data){
		           		if (data == "success") {
		           			swal({ 
							  title: "删除成功！", 
							  text: "", 
							  type: "success",
							  showCancelButton: false, 
							  confirmButtonColor: "#DD6B55",
							  confirmButtonText: "确定", 
							  closeOnConfirm: true, 
							},
							function(isConfirm){ 
							  if (isConfirm) { 
							    	location.reload()
							  } 
							});
		           			return ;
		  				}else if(data == "fail"){
		           			alert("删除失败，请重试！")
		  				}
		           }     
		   		});
			}else{
		  		swal.close();
		  	}
		});
	}


</script>

<script  id="selfCenterTemplate" type="text/x-dot-template">
	{{ for(var x in it) { }}
	<div class="col-sm-6">
		<div class="product">
			<img src="http://139.199.172.116:80/trans{{=it[x].car_pic}}"  class="img-responsive" ><!--http:139.199.172.116:80/transport{{=it[x].task_pic1}}-->
			<div class="overlay"></div>
			<div class="content">
				<h3><a href="">{{=it[x].car_no}}</a></h3>
				<p>车长（m）:{{=it[x].car_length}}</p>
				<p>车宽（m）:{{=it[x].car_width}}</p>
				<p>载重（kg）{{=it[x].car_weight}}</p>
			</div>
			<a href="javascript:void(0)" class="button" style="background: red;" onclick="deleteCar(this)" data-carId="{{=it[x].car_id}}">删除该车辆</a>
		</div>
	</div>
	{{ }}}

</script>