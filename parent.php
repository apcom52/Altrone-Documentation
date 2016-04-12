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
	<title><? echo $title; ?> - Altrone CSS</title>

	<script type="text/javascript">
		$(function() {
			var sidebar = new Sidebar($('#sidebar'));

			$('#showSidebar, #exampleShowSidebar').click(function() {
				sidebar.toggle();
			});

			hljs.initHighlightingOnLoad();	        
		    /*$("pre.css").snippet("css",{style:"emacs"});		    
		    $("pre.js").snippet("javascript",{style:"emacs"});*/
		});
	</script>


</head>
<body style="background-color: #f1f2f4;">
<div class="taskbar taskbar--invert taskbar--fixed margin-top-0">
	<div class="taskbar__item taskbar__item--hover-color-teal" id="showSidebar"><i class="fa fa-bars"></i></div>
	<div class="taskbar__item taskbar__item--logo taskbar__item--no-select">Altrone CSS :: <? echo $title; ?></div>
</div>

<div class="sidebar sidebar--under-taskbar sidebar--invert sidebar--color-teal" id="sidebar">
	<div class="sidebar__cover">
		<img src="http://vignette2.wikia.nocookie.net/marveldatabase/images/0/05/Ultron-icon.png/revision/latest?cb=20150423093134" alt="Altrone" width="64" height="auto">
		<div class="sidebar__cover__title">Altrone CSS</div>
		<button class="button--size-small button--color-green button--icon"><i class="fa fa-download"></i>Загрузить</button>
	</div>	
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
	</div>
</div>

<br>
<br>
<br>
<br>
<br>