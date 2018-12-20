<!DOCtype html>

<html>
	<head>
		<meta charset=“utf-8”>
		<title>Приют "Котикус"</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <link href="css/bootstrap.min.css" rel="stylesheet"> 
		<style> [class*="col-"] { background-color: #eee; text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 10px; font-size: 2rem; }
		</style> 

	</head>
	<body>
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
		<script src="js/jquery.min.js"></script> 
		<script src="js/bootstrap.min.js"></script> 
			
		<?php
		if (isset($_COOKIE['logined']))
		{
			print('
					<ul class="nav nav-pills">
					<li role="presentation"><a href="#"><b>Добро пожаловать, '.base64_decode($_COOKIE['logined']).'</b></a></li>
					<li role="presentation" class="active"><a href="#">Основное</a></li>
					<li role="presentation"><a href="./history.php">История породы</a></li>
					<li role="presentation"><a href="./veterinary.php">Уход</a></li>
					<li role="presentation"><a href="./other.php">Спонсоры</a></li>
					<li role="presentation"><a href="./about.php">О нас</a></li>
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
					<li role="presentation" class="active"><a href="#">Основное</a></li>
					<li role="presentation"><a href="./history.php">История породы</a></li>
					<li role="presentation"><a href="./veterinary.php">Уход</a></li>
					<li role="presentation"><a href="./other.php">Спонсоры</a></li>
					<li role="presentation"><a href="./about.php">О нас</a></li>
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
					<li role="presentation" class="active"><a href="#">Основное</a></li>
					<li role="presentation"><a href="./history.php">История породы</a></li>
					<li role="presentation"><a href="./veterinary.php">Уход</a></li>
					<li role="presentation"><a href="./other.php">Спонсоры</a></li>
					<li role="presentation"><a href="./about.php">О нас</a></li>
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

		<div class="jumbotron">
  			<h1>Сиамская кошка</h1>
  			<p>Активные кошки. Нуждаются во внимании, любят физический контакт. Общительные, ласковые и доверчивые. Легко поддаются дрессировке.</p>
  			<p><a class="btn btn-primary btn-lg" href="https://murkosha.ru" role="button">Купить</a></p>
  		</div>

  		<h4>Уже приютили 20% от всех кошек</h4>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">20%
			</div>
		</div>

		<div class="row">
			  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="./img/cat1.jpg" alt="...">
	      <div class="caption">
	        <h3>ЛАСКУН</h3>
	        <p><a href="#" class="btn btn-primary" role="button">Купить</a></p>
	      </div>
	    </div>
	  </div>
	  	<div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="./img/cat2.jpg" alt="...">
	      <div class="caption">
	        <h3>ВИТОША</h3>
	        <p><a href="#" class="btn btn-primary" role="button">Купить</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="./img/cat3.jpg" alt="...">
	      <div class="caption">
	        <h3>МАХА</h3>
	        <p><a href="#" class="btn btn-primary" role="button">Купить</a></p>
	      </div>
	    </div>
	  </div>
	  	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="./img/cat4.jpg" alt="...">
	      <div class="caption">
	        <h3>КАРИНА</h3>
	        <p><a href="#" class="btn btn-primary" role="button">Купить</a></p>
	      </div>
	    </div>
	  </div>
	  	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="./img/cat5.jpg" alt="...">
	      <div class="caption">
	        <h3>РОБИНЗОН</h3>
	        <p><a href="#" class="btn btn-primary" role="button">Купить</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="./img/cat6.jpg" alt="...">
	      <div class="caption">
	        <h3>ПЕТРАКОВ</h3>
	        <p><a href="#" class="btn btn-primary" role="button">Купить</a></p>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Поиск...">
      <span class="input-group-btn" .bg-light>
        <button class="btn btn-default" type="button">
        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
      </span>
    </div>
  </div>
</div>
  		<h2>Характер <span class="label label-default">индивидуально</span></h2>
		<p>Активные кошки. Нуждаются во внимании, любят физический контакт. Общительные, ласковые и доверчивые. Кошки из сиамо-ориентальной группы умеют пользоваться своими голосовыми связками, меняя тональность и высоту звука для выражения своих требований и чувств. Легко поддаются дрессировке.</p>

		  <h2>Виды</h2>
  <p>Существует несколько подвидов данной породы:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Вид</th>
        <th>Описание</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Балийская</td>
        <td>длинношёрстная порода кошек</td>
      </tr>
      <tr>
        <td>Бурманская</td>
        <td>порода кошек, выведенная из породы «Wong Mau». Джозеф Томпсон обнаружил её в Бирме в 1930 году. Он привез её в Калифорнию, где и была выведена бирманская порода кошек путём скрещивания «Wong Mau» с сиамской.</td>
      </tr>
      <tr>
        <td>Гималайская</td>
        <td>длинношёрстная порода кошек, выведенная путём скрещивания персидской и сиамской кошки.</td>
      </tr>
      <tr>
        <td>Яванская (Ориентальная длинношёрстная)</td>
        <td>длинношёрстная порода кошек</td>
      </tr>
      <tr>
        <td>Тайская</td>
        <td>старотипный экстерьер сиамской кошки. Сохранён. Сейчас выделен в отдельную породу.</td>
      </tr>
    </tbody>
  </table>
  </div>

<h2>Внешний вид</h2>

		<p>Современная сиамская кошка имеет весьма характерную внешность, отличительными чертами которой являются тонкое, длинное, трубообразное гибкое тело, голова в виде длинного клина, большие миндалевидные косо поставленные глаза ярко-синего цвета, очень большие уши, широкие в основании и заостренные на концах, поставленные таким образом, чтобы между мочкой носа и кончиками ушей образовывался равносторонний треугольник. Шерсть короткая, плотно прилегающая к телу, без подшерстка. Очень длинный хлыстообразный хвост, тонкий от самого основания с заостренным длинным кончиком.</p>
		<p>Для сиамских кошек характерен окрас колор-поинт (светлая шерсть с более тёмным окрасом на лапах, морде, ушах и хвосте). Такой окрас — это проявление неполного альбинизма, называемого акромеланизм. Действие акромеланизма связано с температурными особенностями живого организма: в теплых частях тела вырабатывается меньше пигмента, чем в холодных, поэтому уши, лапы, хвост и морда окрашены в более тёмный по сравнению с остальным телом цвет. С возрастом контраст поинтов по сравнению с телом может стать меньше. После года большинство кошек поинтового окраса имеют затемнение по корпусу. Сиамские котята рождаются абсолютно белыми, через несколько дней после рождения начинают темнеть поинты, окончательно окрас устанавливается в 6—10 месяцев.</p>
<small>Данная организация работает исключительно на деньги с ВАШИХ пожертвований</small>

	<?php
	if (isset($_COOKIE['logined']))
			{
				print("
				<form action='./php/loginlogic/exitbutton.php' method='POST'>
				<button type='submit' class='btn btn-primary btn-lg'>Выход</button><br>
				</form>");
			}
	?>

</body>

</html>