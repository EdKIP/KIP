<!DOCtype html>

<html>
	<head>
		<meta charset=“utf-8”> <title>Приют "Котикус"</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <link href="css/bootstrap.min.css" rel="stylesheet"> 
		<style> [class*="col-"] { background-color: #eee; text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 10px; font-size: 2rem; }
		</style> 

	</head>
	<body>
		<script src="js/jquery.min.js"></script> 
		<script src="js/bootstrap.min.js"></script> 
		<style>
			p {
    			font-size: 120%;
    		}			
			
			.col-lg-6:first-child {
  				background-color: white;
			}

			.table-responsive {
  				font-size: 120%;
  				background-color: #eee;
			}

			.label-default{
			  background-color: #337ab7;
			}
		</style>

		<?php
		if (isset($_COOKIE['logined']))
		{
			print('
					<ul class="nav nav-pills">
					<li role="presentation"><a href="#"><b>Добро пожаловать, '.base64_decode($_COOKIE['logined']).'</b></a></li>
					<li role="presentation"><a href="./index.php">Основное</a></li>
					<li role="presentation"><a href="./history.php">История породы</a></li>
					<li role="presentation"><a href="./veterinary.php">Уход</a></li>
					<li role="presentation"><a href="./other.php">Спонсоры</a></li>
					<li role="presentation" class="active"><a href="#">О нас</a></li>
					<li role="presentation"><a href="./canvas.php">Canvas</a></li>
					<li role="presentation"><a href="./js.php">Javascript</a></li>
					<li role="presentation"><a href="./php.php">PHP</a></li>
					<li role="presentation"><a href="./computergraph.php">Графика</a></li>
					<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						Игры 
						<b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="./citygame.php">Игра "Города" на PHP</a></li>
							<li><a href="./snakegame.php">Игра "Змейка" на JS</a></li>
						</ul>
					</li>
					</ul>'
				);
		}

		else if (isset($_COOKIE['registrated']))
			{
				print('
					<ul class="nav nav-pills">
					<li role="presentation"><a href="./login.php">Вход</a></li>
					<li role="presentation"><a href="./index.php">Основное</a></li>
					<li role="presentation"><a href="./history.php">История породы</a></li>
					<li role="presentation"><a href="./veterinary.php">Уход</a></li>
					<li role="presentation"><a href="./other.php">Спонсоры</a></li>
					<li role="presentation" class="active"><a href="#">О нас</a></li>
					<li role="presentation"><a href="./canvas.php">Canvas</a></li>
					<li role="presentation"><a href="./js.php">Javascript</a></li>
					<li role="presentation"><a href="./php.php">PHP</a></li>
					<li role="presentation"><a href="./computergraph.php">Графика</a></li>
					<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						Игры 
						<b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="./citygame.php">Игра "Города" на PHP</a></li>
							<li><a href="./snakegame.php">Игра "Змейка" на JS</a></li>
						</ul>
					</li>
					</ul>'
				);
			}

		else
		{
				print('
					<ul class="nav nav-pills">
					<li role="presentation"><a href="./login.php">Регистрация</a></li>
					<li role="presentation"><a href="./index.php">Основное</a></li>
					<li role="presentation"><a href="./history.php">История породы</a></li>
					<li role="presentation"><a href="./veterinary.php">Уход</a></li>
					<li role="presentation"><a href="./other.php">Спонсоры</a></li>
					<li role="presentation" class="active"><a href="#">О нас</a></li>
					<li role="presentation"><a href="./canvas.php">Canvas</a></li>
					<li role="presentation"><a href="./js.php">Javascript</a></li>
					<li role="presentation"><a href="./php.php">PHP</a></li>
					<li role="presentation"><a href="./computergraph.php">Графика</a></li>
					<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						Игры 
						<b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="./citygame.php">Игра "Города" на PHP</a></li>
							<li><a href="./snakegame.php">Игра "Змейка" на JS</a></li>
						</ul>
					</li>
					</ul>'
				);
		}
			
		?>

		<h1>Контактные данные</h1>
		<br>
		<p><span class="label label-default">Телефон:</span> +79999999999<br>
		<span class="label label-default">E-mail:</span> test@test.com<br>
		<span class="label label-default">Адрес:</span> Москва, ул. Осташковская, д. 14 стр. 2<br>
		<span class="label label-default">Время работы:</span> 9.00 - 21.00 (без перерывов и выходных)<br>
		</p>
		<h2>Как добраться:</h2>
 
		<p>Самый быстрый вариант: от станции метро "Медведково": 1 вагон из центра, из стеклянных дверей направо, перейти по диагонали на другую сторону дороги, автобус 601 до остановки "Погранинститут" (около 7 минут в пути)</p>

		<h2>Другие пути</h2>

		<ul class="list-group">
		  <li class="list-group-item"><p>От станции метро "Бабушкинская": 1 вагон из центра, из стеклянных дверей направо, затем налево, автобус 649к (именно 649 с буквой К, в тот который без буквы не садитесь!) до остановки "Погранинститут"(около 10 минут в пути)</p></li>
		  <li class="list-group-item"><p>От станции МЦК "Ростокино": автобус 93 до остановки "Погранинститут" (около 20 минут в пути)</p></li>
		  <li class="list-group-item"><p>От жд платформы "Лось" Ярославского направления: автобус 696 до остановки "Оборонная улица" (около 10 минут в пути)</p></li>
		</ul>

		<h2>Мы в социальных сетях:</h2>
		<p>
			<span class="label label-default">VK:</span> http://vk.com/catsforpeople<br>
			<span class="label label-default">Instagram:</span> @priyt_murkosha_moscow<br>
			<span class="label label-default">Facebook:</span> http://fb.com/catsforpeople<br>
			<span class="label label-default">Одноклассники:</span> http://ok.ru/murkosha<br>
		<p>
		<?php

if (isset($_COOKIE['logined']))
		{
			print("
			<form action='./php/loginlogic/exitbutton.php' method='POST'>
			<button type='submit' class='btn btn-primary btn-lg'>Выход</button><br>
			</form>");
		}
?>
	   
<small>Данная организация работает исключительно на деньги с ВАШИХ пожертвований</small>
</body>

</html>