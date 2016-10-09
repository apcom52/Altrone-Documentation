<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="resources/altrone/altrone.css">
	<link rel="stylesheet" href="resources/altrone/font-awesome.css">
	<link rel="stylesheet" href="darkula.css">
	<script type="text/javascript" src="resources/altrone/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="resources/altrone/altrone.js"></script>
	<!-- <script type="text/javascript" src="resources/altrone/altrone-dev.js"></script> -->
	<script type="text/javascript" src="highlight.pack.js"></script>
	<title>Altrone CSS</title>

	<script type="text/javascript">
		$(function() {
			var sidebar = new Sidebar($('#sidebar'));

			$('#showSidebar, #exampleShowSidebar').click(function() {
				sidebar.toggle();
			});

			hljs.initHighlightingOnLoad();	        
		});
	</script>

	<style>
		.c-col {
			background-color: #f1f2f4;
		}
		html {
			background: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/sativa.png);
		}
	</style>

	<script>
		$(function() {
			var accordion = new Accordion($('#accordionExample'), {});
			var tabs = new Tabs($('#tabsExample'));
		});
	</script>
</head>
<body>
<div class="grid">
	<div class="col-12">
		<div class="taskbar taskbar--invert taskbar--transparent absolute">
			<div class="taskbar__item taskbar__item--hover-color-orange taskbar__item--icon" id="showSidebar"><i class="fa fa-bars"></i></div>
		</div>
		<div class="jumbotron jumbotron--invert jumbotron--color-yellow shadow-1">		
			<div class="jumbotron__header helvetica-ultra margin-lm-top-1">Altrone-CSS</div>
			<div class="jumbotron__subheader helvetica-light">Фреймворк для быстрого прототипирования веб-приложений</div>
		</div>
	</div>

	<div class="col-12">
		<div class="card card--no-smooth">
			<div class="card__content">
				<div class="grid">
					<div class="col-8 col-lm-6">
						<div class="alert alert--color-green">
							<div class="alert__header">Последняя стабильная версия</div>
							<div class="alert__content">Последняя стабильная версия Altrone-CSS: <b>2.1.3</b></div>
							<a href="https://github.com/apcom52/Altrone2-CSS/releases/tag/2.1.3"><button>Что нового?</button></a>
						</div>
						<div class="alert alert--color-yellow">
							<div class="alert__header">Актуальные версии</div>
							<div class="alert__content">
								<ul>
									<li><b>2.1.2</b> Blinked Basilisk</li>
									<li><b>2.1.1</b> Blinked Basilisk</li>
									<li><b>2.1</b> Blinked Basilisk</li>
									<li><b>2.0.2</b> Angry Acromantula</li>
								</ul>
							</div>
							<a href="https://github.com/apcom52/Altrone2-CSS/releases"><button>Все версии</button></a>
						</div>
					</div>
					<div class="col-4 col-lm-6">
						<a href="https://github.com/apcom52/Altrone2-CSS/releases/download/2.1.3/2.1.3.zip"><button class="button--color-green button--size-large button--fit button--icon"><i class="fa fa-download"></i>Загрузить 2.1.3</button></a>
						<div class="col-6"><a href="https://github.com/apcom52/Altrone2-CSS"><button class="button--icon button--fit"><i class="fa fa-github"></i>Исходный код</button></a></div>
						<div class="col-6"><a href="https://github.com/apcom52/Altrone2-CSS/raw/altrone2.1-dev/dist/2.0.2.zip"><button class="button--icon button--fit"><i class="fa fa-download"></i>Загрузить (2.0.2)</button></a></div>
						<div class="col-12">
							<div class="col-6">
								<div class="list list--color-blue">
									<a href="global.php"><div class="list__item">Глобальные модификаторы</div></a>
									<a href="buttons.php"><div class="list__item">Кнопки</div></a>
									<a href="alert.php"><div class="list__item">Сообщения</div></a>
									<a href="tabs.php"><div class="list__item">Вкладки</div></a>
									<a href="more.php"><div class="list__item">Прочее</div></a>
								</div>
							</div>
							<div class="col-6">
								<div class="list list--color-blue">
									<a href="grid.php"><div class="list__item">Сетка</div></a>
									<a href="forms.php"><div class="list__item">Формы</div></a>
									<a href="list.php"><div class="list__item">Списки</div></a>
									<a href="cards.php"><div class="list__item">Карточки</div></a>
									<a href="bars.php"><div class="list__item">Бары</div></a>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="masonry masonry--columns-3 masonry--t-columns-2 masonry--lm-columns-1 margin-top-1">
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Цитаты</h3>
						<blockquote>
							Весь мир театр, а люди в нем актеры
							<div class="blockquote__author">Уильям Шекспир</div>
						</blockquote>
					</div>
				</div>
			</div>
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Сообщения</h3>
						<div class="alert alert--color-olive">
							<div class="alert__header">Отлично!</div>
							<div class="alert__content">Ваш документ загружен успешно</div>
						</div>
						<div class="alert alert--color-red">
							<div class="alert__header">:(</div>
							<div class="alert__content">Что-то пошло не так</div>
						</div>
					</div>
				</div>
			</div>
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Stacked List</h3>
						<div class="stacked-list">
							<div class="stacked-list__item">Математика</div>
							<div class="stacked-list__item">Литература</div>
							<div class="stacked-list__item">Физическая культура</div>
							<div class="stacked-list__item">Физика</div>
						</div>
					</div>
				</div>
			</div>
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Аккордеон</h3>
						<div class="accordion" id="accordionExample">
							<div class="accordion__item">
								<div class="accordion__item__title">Война и мир</div>
								<div class="accordion__item__content">
									<p>Наверное, это одно из тех немногих произведений, которое должен прочесть каждый человек, считающий себя образованным. Так как в этой книге передается время и характер, вся наша история и жизнь наших предков.</p>
									<p>Толстой показывает нам все события субъективно и пристрастно. Наполеона он представляет нам как жалкого ничтожного человека.</p>
									<p>Роман - это гимн жизни, который учит нас любить её и ценить, воспевает доброту и искренность.</p>
								</div>
							</div>
							<div class="accordion__item">
								<div class="accordion__item__title">Преступление и наказание</div>
								<div class="accordion__item__content">
									<p>Ни одного читателя не оставляет равнодушным социальная драма, облеченная в увлекательную форму криминального романа, и философская составляющая романа.</p>
								</div>
							</div>
							<div class="accordion__item">
								<div class="accordion__item__title">Мастер и Маргарита</div>
								<div class="accordion__item__content">
									<p>Мастер с гениальным озарением описал последние дни жизни Иисуса в своем романе о Понтии Пилате. За этот роман он поплатился свободой и был отправлен в больницу. Маргарита - его тайная возлюбленная, ради спасения любимого и встречи с ним готова на сделку с дьяволом. В это время некто Воланд, прибывший в Москву со своими слугами, наводит страх на всех москвичей. Но в мире, где укоренилось зло, и засела нечистая сила, проделки сатаны, окрашенные искрометным юмором, оборачиваются возмездием за людские грехи и пороки.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Сетка</h3>
						<p class="helvetica-medium">Модуль сетки в Altrone2-CSS имеет большое количество возможностей. Они представлены на отдельной демонстрационной странице</p>
						<div class="align-center"><a href="grid-demo.html"><button class="button--color-blue">Возможности сетки</button></a></div>
					</div>
				</div>
			</div>	
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">"Хлебные крошки"</h3>
						<div class="breadcrumbs">
							<div class="breadcrumbs__item">Главная</div>
							<div class="breadcrumbs__item">Потребителям</div>
							<div class="breadcrumbs__item">Каталог</div>
						</div>
					</div>
				</div>
			</div>		
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Флажки</h3>
						<div class="checkbox checkbox--color-orange">
							<input type="checkbox" id="checkboxExample">
							<label for="checkboxExample">
								<div class="checkbox__title">Проголосовать за ЛДПР!</div>
								<div class="checkbox__meta">Владимир Жириновский</div>
							</label>
						</div>
					</div>
				</div>
			</div>	
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Переключатели</h3>
						<div class="toggle toggle--color-blue">
							<input type="checkbox" id="toggleExample">
							<label for="toggleExample">
								<div class="toggle__title">Wi-Fi</div>
								<span class="toggle__meta">Включить беспороводную сеть</span>
							</label>
						</div>
					</div>
				</div>
			</div>	
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Картинки</h3>
						<div class="grid">
							<div class="col-12"><img src="http://files.flipsnack.net/collections/items/0c851322fcad4de3d2eec2fi54184781/covers/page_1/small" class="img--responsive"></div>
							<div class="col-4 padding-05 size-fix"><img src="http://www.oldskoolman.de/bilder/plog-content/thumbs/hintergrundbilder/1920x1200/large/3078-wallpaper-hirsch.jpg" alt="" class="img--responsive img--circle size-fix"></div>
							<div class="col-4 padding-05 size-fix"><img src="http://agbirds.com/galleriffic-2.0/imgs/ani%20lar/l4.jpg.jpg" alt="" class="img--responsive img--roundedsize-fix"></div>
							<div class="col-4 padding-05 size-fix"><img src="http://petspark.ru/image/data/42169_Sika_deer_Japanese_deer.jpg" alt="" class="img--responsive img--border card_shadow size-fix"></div>
						</div>
					</div>
				</div>
			</div>	
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Формы</h3>
						<div class="form form--fit">
							<label for="formLogin">Логин</label>
							<input type="text" placeholder="Логин" id="formLogin">
							<label for="formPassword">Пароль</label>
							<input type="password" placeholder="Пароль" id="formPassword">
						</div>
					</div>
				</div>
			</div>
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Кнопки</h3>
						<div class="grid">
							<div class="col-4"><button>Обычная кнопка</button></div>
							<div class="col-4"><button class="button--color-blue">Синяя кнопка</button></div>
							<div class="col-4"><button class="button--only-borders button--color-violet">Кнопка-призрак</button></div>
							<div class="col-12"><button class="button--fit button--icon button--color-yellow"><i class="fa fa-bolt"></i>Сделать красиво</button></div>
						</div>
					</div>
				</div>
			</div>	
			<div class="masonry__item">
				<div class="card card--no-smooth">
					<div class="card__content">
						<h2 class="helvetica-thin">Вкладки</h3>

						<div class="tabs tabs--centered tabs--fit tabs--ios-style tabs--color-red" id="tabsExample">
							<div class="tabs__item tabs__item--active" data-tab-target="rus">Русский</div>
							<div class="tabs__item" data-tab-target="eng">English</div>
						</div>
						<div id="rus">
							<div class="list list--color-blue">
								<div class="list__item">Мусорка</div>
								<div class="list__item">Стол</div>
								<div class="list__item">Телефон</div>
							</div>
						</div>
						<div id="eng">
							<div class="list list--color-red">
								<div class="list__item">Trash</div>
								<div class="list__item">Table</div>
								<div class="list__item">Phone</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</div>	
</div>

<div class="sidebar sidebar--invert sidebar--color-yellow" id="sidebar">
	<a href="index.php"><div class="sidebar__cover align-center">
		<h1 class="helvetica-thin sidebar__cover__title">Altrone CSS</h3>
	</div></a>
	<div class="sidebar__menu">
		<a href="global.php"><div class="sidebar__menu__item <? if ($title=="Глобальные модификаторы")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-globe"></i>Глобальные модификаторы</div></a>
		<a href="grid.php"><div class="sidebar__menu__item <? if ($title=="Сетка")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-th"></i>Сетка</div></a>
		<a href="buttons.php"><div class="sidebar__menu__item <? if ($title=="Кнопки")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-minus-square"></i>Кнопки</div></a>
		<a href="forms.php"><div class="sidebar__menu__item <? if ($title=="Формы")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-th-list"></i>Формы</div></a>
		<a href="alert.php"><div class="sidebar__menu__item <? if ($title=="Сообщения")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-clone"></i>Сообщения</div></a>
		<a href="list.php"><div class="sidebar__menu__item <? if ($title=="Списки")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-bars"></i>Списки</div></a>
		<a href="tabs.php"><div class="sidebar__menu__item <? if ($title=="Вкладки")  { echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-ellipsis-h"></i>Вкладки</div></a>
		<a href="cards.php"><div class="sidebar__menu__item <? if ($title=="Карточки") {  echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-credit-card"></i>Карточки</div></a>
		<a href="bars.php"><div class="sidebar__menu__item <? if ($title=="Бары") {  echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-tasks"></i>Бары</div></a>
		<a href="more.php"><div class="sidebar__menu__item <? if ($title=="Прочее") {  echo "sidebar__menu__item--active"; } ?>"><i class="fa fa-cogs"></i>Другие компоненты</div></a>
	</div>
</div>