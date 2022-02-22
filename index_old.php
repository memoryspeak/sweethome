<?php
session_start();
?>

<!doctype html>
<html lang="ru">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Платформа семейного быта, домашняя социальная сеть Sweet&#128512;&#128149;Home": семейные фото, расписания, календарь, документы, аналитика расходов, генеалогическое дерево...>
	<meta name="author" content="@memoryspeak, iliya.abdrakhimov@gmail.com">
	<meta name="generator" content="Bootstrap v5.0">
	<title>Sweet&#128512;&#128149;Home</title>
	<link rel="canonical" href="/">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
	
	<style>
	    .bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		user-select: none;
	    }
	    @media (min-width: 768px) {
		.bd-placeholder-img-lg {
		    font-size: 3.5rem;
		}
	    }
	    .item-wrapper {
		overflow: hidden;
	    }
	</style>
	
	<link rel="stylesheet" href="assets/dist/css/carousel.css">
    </head>
    
    <body>
	<header>
	    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
		    <a class="navbar-brand" href="/">Sweet&#128512;&#128149;Home</a>
		    <div class="flex-shrink-0 dropdown">
			<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
			    <img src="databases/user_db/admin/profile/icon/profile.png" alt="mdo" width="32" class="rounded-circle">
			</a>
			<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
			    <li><a class="dropdown-item" href="#">Моя семья</a></li>
			    <li><hr class="dropdown-divider"></li>
			    <li><a class="dropdown-item" href="#">Настройки</a></li>
			    <li><a class="dropdown-item" href="#">Профиль</a></li>
			    <li><hr class="dropdown-divider"></li>
			    <li><a class="dropdown-item" href="#">Sign out</a></li>
			</ul>
		    </div>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
			    <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="/">Домой</a>
			    </li>
			    <li class="nav-item">
				<a class="nav-link" href="/">Фото</a>
			    </li>
			    <li class="nav-item">
				<a class="nav-link disabled" href="/" tabindex="-1" aria-disabled="true">Disabled</a>
			    </li>
			</ul>
			<form class="d-flex">
			    <input class="form-control me-2" type="search" placeholder="&#128269;" aria-label="Search">
			    <button class="btn btn-outline-success" type="submit">Поиск</button>
			</form>
		    </div>
		</div>
	    </nav>
	</header>
	
	<main>
	    <div id="myCarousel" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-indicators">
		    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>
		<!--<div class="carousel-inner">
		    <div class="carousel-item active">
			<div class="stream_vertical">
			    <img src="databases/family_db/photos/img_11.jpg" alt="img_11.jpg">
			</div>
		    </div>
		    <div class="carousel-item">
			<div class="stream_horizontal">
			    <img src="databases/family_db/photos/img_33.jpg" alt="img_33.jpg">
			</div>
		    </div>
		</div>-->
		<div class="carousel-inner">
		    <div class="carousel-item slider-image item active">
			<div class="item-wrapper">
			    <img class="d-block w-100" src="databases/family_db/photos/img_11.jpg">
			    
			</div>
		    </div>
		    <div class="carousel-item slider-image item">
			<div class="item-wrapper">
			    <img class="d-block w-100" src="databases/family_db/photos/img_33.jpg">
			    
			</div>
		    </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Предыдущий</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Следующий</span>
		</button>
	    </div>
	    <footer class="container">
		<p class="float-end"><a href="#">Вернутся наверх</a></p>
		<p>&copy; 2022 Sweet&#128512;&#128149;Home, Inc. &middot; <a href="#">Политика конфиденциальности</a> &middot; <a href="#">Условия использования</a></p>
	    </footer>
	</main>
	
	<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
