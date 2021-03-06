<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cinema XXII</title>

<link href="{{asset('favicon.png')}}" rel='shortcut icon' />

<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('js/control.js')}}"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a class="active" href="{{url('home', $parameters = array(), $secure = null)}}"><i class="home"></i></a></li>
					<li><a href="{{url('reviews', $parameters = array(), $secure = null)}}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="{{url('contacto', $parameters = array(), $secure = null)}}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">





		@yield('content')




	<div class="footer">
		<h6>Aclaración: </h6>
		<p class="claim">Esto es un freebies y no un sitio web oficial, no tengo intención de revelar ninguna película, marca, noticias. Mi objetivo aquí es entrenar o ejercitar mi habilidad y compartir estos conocimientos.</p>
		<div class="copyright">
			<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
		</div>
	</div>	
	</div>
	</div>
	<div class="clearfix"></div>

	{!!Html::script('../resources/views/admin/js/bootstrap.min.js')!!} 
	
</body>
</html>