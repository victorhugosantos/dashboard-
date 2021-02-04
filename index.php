<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="sidebar">
		<div class="topo">
			<h3>Tuttistore</h3>
		</div><!--topo-->
		<div class="menu">
			<ul>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Home</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Home</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Home</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Home</a></li>
			</ul>
		</div><!--menu-->
	</div><!--sidebar-->

	<!--FIM DA SIDEBAR-->

	<div class="main-content">
		<header>

			<div class="nome-usuario">
				<h2><i class="fas fa-align-justify"></i></h2>
			</div>
	<div class="pesquisa-campo">
				<div class="icone-pesquisa"><i class="fas fa-search"></i></div><form><input type="text" /></form>
			</div><!--pesquisa-campo-->

			<div class="icone-alerta">
				<p>2</p>
				<i class="fas fa-bell"></i>
			</div><!--icone-alerta-->

			<div class="clear"></div>
		</header>

		<div class="content1">
			<div class="panel">
				<h2>Bem-vindo, victor hugo!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
		<div style="width: 49%;margin-right: 1%;" class="panel">
				<h2>Bem-vindo, victor hugo!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			
		<div style="width: 49%;margin-left: 1%;" class="panel">
				<h2>Bem-vindo, victor hugo!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
			<div class="clear"></div>
			<div class="panel">
				<h2>Bem-vindo, victor hugo!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed purus libero. Nam iaculis felis sed dignissim tincidunt. Sed eu odio enim. Morbi leo orci, ultricies eget pretium imperdiet, bibendum sit amet dui. Aliquam sit amet consequat ligula. Nam accumsan quis nisl vel maximus. Quisque malesuada mauris sit amet elit feugiat placerat. Vestibulum consequat vel diam a aliquam. Pellentesque iaculis congue dui vitae hendrerit. Mauris consequat facilisis nisi non vulputate. Integer et suscipit nisl. Sed nec ligula erat.</p>
			</div><!--panel-->
		</div><!--content1-->
		
		<div class="ultimas-atividades">
			<div class="atividades-topo">
				<h2>Últimas atividades</h2>
			</div><!--atividades-topo--->
			<br />
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
						<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>

						<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
		</div>

	</div><!--main-content-->



	
	<div class="clear"></div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
	$(function(){
		var windowWidth = $(window)[0].innerWidth;
		if(windowWidth <= 768){
		$('.nome-usuario h2').click(function(){
			var el = $('.sidebar');
			if(el.is(':visible'))
			{
				el.hide();
				$('.main-content').css('left','0');
			}else{
				el.show();
				$('.main-content').css('left','300px');
			}
		})
	}

	$(window).resize(function(){
	 	windowWidth = $(window)[0].innerWidth;
	})


	})
</script>

</body>
</html>