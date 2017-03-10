<!DOCTYPE html>
<html>
	<head>
		<title>Titulo do Site</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo BASE_URL?>/assets/css/style.css" rel="stylesheet"/>
		<meta charset="UTF-8">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?=BASE_URL?>">MVC Básico</a>
					</div>
					<div class="nav navbar-right navbar-nav">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
							<li><a href="#">Empresa</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
						<!--<p class="navbar-text"><?=$viewData['nome'];?></p>
						<a href="<?php echo BASE_URL.'/login/sair'?>" class="btn btn-default navbar-btn">Sair</a>-->
					</div>
				</div>
			</nav>
		</header>
		<main class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</main>
		<footer class="container">
			
		</footer>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo BASE_URL?>/assets/js/custom.js"></script>
	</body>
</html> 