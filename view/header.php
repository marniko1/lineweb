<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->data['title']; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/lineweb/assets/css/main.css" media="screen">
		<link rel="stylesheet" type="text/css" href="/lineweb/assets/css/responsive.css" media="screen">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				$('.nav_btn').on('click', function(e){
					e.preventDefault();
					if ($('nav').hasClass('shown')) {
						$('nav').removeClass('shown');
						$('nav').addClass('hidden');
						$('nav').slideUp();
					} else {
						$('nav').removeClass('hidden');
						$('nav').addClass('shown');
						$('nav').slideDown();
					}
				});
			});
	  //     	$(document).on('click', '.pagination a', function(e) {
			//     e.preventDefault();
			//     var url = $(this).attr("href");
			//     $('body').load(url);
			// });
			    $(document).on('click', '.pagination a', function(e) {
				    e.preventDefault();
				    var page = $(this).attr("href");
				    $('#content').load('/lineweb/news/'+ page +' #content');
				});
		</script>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="nav_btn">
					<div class="container" onclick="myFunction(this)">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
					</div>
				</div>
				<a href="/lineweb/"><div class="logo_img"></div></a>
				<div class="pusher clearfix"></div>
				<nav>
					<ul class="clearfix">
						<li><a href="/lineweb/work/index">work</a></li>
						<li><a href="/lineweb/about/index">about</a></li>
						<li><a href="/lineweb/news/index">news</a></li>
						<li><a href="/lineweb/contact/index">contact</a></li>
					</ul>
				</nav>
			</header>