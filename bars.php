<? 
	$title = 'Бары';
	include('parent.php'); 
?>

<script type="text/javascript">
	$(function() {
		var tab1 = new Tabs($('#tabs1'));
		var tab2 = new Tabs($('#tabs2'));
		var tab3 = new Tabs($('#tabs3'));
	});
</script>

<div class="grid">
	<div class="col-9">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Бары</div>
		
		<a name="taskbar"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Навигационная панель</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Верхняя навигационная панель (taskbar)</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы верхней навигационной панели можно использовать совместно друг с другом</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="taskbar">
						<div class="taskbar__item taskbar__item--image taskbar__item--no-select"><img src="https://cdn3.iconfinder.com/data/icons/fruits-flat-icon-set/256/icon-blueberry-512.png"></div>
						<div class="taskbar__item taskbar__item--logo">BLUEBERRY HILLS</div>
						<div class="taskbar__item">Shop</div>
						<div class="taskbar__item">Suggestions</div>
						<div class="taskbar__item">Support</div>
						<div class="taskbar__item taskbar__item--pin-right"><i class="fa fa-shopping-cart"></i></div>
					</div>
				</div>

				<div id="tabs1Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item</code></div>
						<div class="col-7 size-fix padding-1">Раздел панели навигации</div>
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема для панели навигации</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar--fixed</code></div>
						<div class="col-7 size-fix padding-1">Фиксированное положение на странице</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--logo</code></div>
						<div class="col-7 size-fix padding-1">Элемент используется как логотип</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--no-select</code></div>
						<div class="col-7 size-fix padding-1">Элемент не имеет выделения при наведении</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--pin-right</code></div>
						<div class="col-7 size-fix padding-1">Элемент прикрепляется к правой стороне (аналог модификатора <code>.pin-right</code>)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--form</code></div>
						<div class="col-7 size-fix padding-1">Элемент является частью формы (например, текстовое поле)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--button</code></div>
						<div class="col-7 size-fix padding-1">Элемент является кнопкой</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--image</code></div>
						<div class="col-7 size-fix padding-1">Элемент является картинкой</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--hover-color-*</code></div>
						<div class="col-7 size-fix padding-1">При наведении изменяется цвет текста, на указанный. Вместо * нужно указать значение цвета. Для элементов верхней панели доступны все цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;taskbar&quot;&gt;
	&lt;div class=&quot;taskbar__item taskbar__item--image taskbar__item--no-select&quot;&gt;&lt;img src=&quot;https://cdn3.iconfinder.com/data/icons/fruits-flat-icon-set/256/icon-blueberry-512.png&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;taskbar__item taskbar__item--logo&quot;&gt;BLUEBERRY HILLS&lt;/div&gt;
	&lt;div class=&quot;taskbar__item&quot;&gt;Shop&lt;/div&gt;
	&lt;div class=&quot;taskbar__item&quot;&gt;Suggestions&lt;/div&gt;
	&lt;div class=&quot;taskbar__item&quot;&gt;Support&lt;/div&gt;
	&lt;div class=&quot;taskbar__item taskbar__item--pin-right&quot;&gt;&lt;i class=&quot;fa fa-shopping-cart&quot;&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="sidebar"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Боковая панель</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Боковая навигационная панель (sidebar)</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы боковой навигационной панели можно использовать совместно друг с другом</div>
				</div>

				<alert class="alert--color-blue">
					<div class="alert__content">По умолчанию боковое меню располагается на всю высоту страницы, перекрывая и верхнее навигационное меню. Чтобы она располагалась под верхним навигационном меню, используйте модификатор .sidebar--under-taskbar</div>
				</alert>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs2Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs2JS">JavaScript</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<button class="button--color-blue" id="exampleShowSidebar">Открыть панель</button>
				</div>

				<div id="tabs2Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__cover</code></div>
						<div class="col-7 size-fix padding-1">Обложка боковой панели</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__cover__title</code></div>
						<div class="col-7 size-fix padding-1">Заголовок на обложке боковой панели</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__menu</code></div>
						<div class="col-7 size-fix padding-1">Навигационное меню</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__menu__title</code></div>
						<div class="col-7 size-fix padding-1">Заголовок навигационного меню</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__menu__item</code></div>
						<div class="col-7 size-fix padding-1">Элемент навигационного меню</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__menu__item__icon</code></div>
						<div class="col-7 size-fix padding-1">Дополнительная иконка элемента навигационного меню</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__menu__separator</code></div>
						<div class="col-7 size-fix padding-1">Горизонтальный разделитель элементов меню</div>
					</div>
				</div>

				<div id="tabs2JS">

<pre><code class="js">var sidebar = new Sidebar($('#mySidebarId'));
sidebar.show();
</code></pre>
					<h4>Методы и свойства Sidebar</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Sidebar(element)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает element, который является jQuery DOM объектом</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>show()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Показывает боковое меню</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>hide()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Скрывает боковое меню</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>toggle()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Меняет значение видимости бокового меню на противоположное</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>visible</code></div>
						<div class="col-3 size-fix padding-1">bool</div>
						<div class="col-6 size-fix padding-1">Содержит статус показа бокового меню. True, если меню открыто, false, если оно скрыто</div>
					</div>
				</div>

				<div id="tabs2Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема для панели навигации</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--color-*</code></div>
						<div class="col-7 size-fix padding-1">Акцентный цвет боковой панели. Вместо * нужно указать значение цвета. Для боковой панели доступны все цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar__menu__item--active</code></div>
						<div class="col-7 size-fix padding-1">Активный пункт меню</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--show</code></div>
						<div class="col-7 size-fix padding-1">Боковая панель показывается на странице (при использовании JavaScript, скрипт самостоятельно добавляет или убирает этот модификатор)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--under-taskbar</code></div>
						<div class="col-7 size-fix padding-1">Боковое меню располагается под верхним навигационном меню</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--pin-right</code></div>
						<div class="col-7 size-fix padding-1">Боковая панель появляется с правой стороны</div>
					</div>
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;sidebar sidebar--under-taskbar sidebar--invert sidebar--color-teal&quot; id=&quot;sidebar&quot;&gt;
	&lt;div class=&quot;sidebar__cover&quot;&gt;
		&lt;img src=&quot;http://vignette2.wikia.nocookie.net/marveldatabase/images/0/05/Ultron-icon.png/revision/latest?cb=20150423093134&quot; alt=&quot;Altrone&quot; width=&quot;64&quot; height=&quot;auto&quot;&gt;
		&lt;div class=&quot;sidebar__cover__title&quot;&gt;Altrone CSS&lt;/div&gt;
		&lt;button class=&quot;button--size-small button--color-green button--icon&quot;&gt;&lt;i class=&quot;fa fa-download&quot;&gt;&lt;/i&gt;&#x417;&#x430;&#x433;&#x440;&#x443;&#x437;&#x438;&#x442;&#x44c;&lt;/button&gt;
	&lt;/div&gt;	
	&lt;div class=&quot;sidebar__menu&quot;&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-globe&quot;&gt;&lt;/i&gt;&#x413;&#x43b;&#x43e;&#x431;&#x430;&#x43b;&#x44c;&#x43d;&#x44b;&#x435; &#x43c;&#x43e;&#x434;&#x438;&#x444;&#x438;&#x43a;&#x430;&#x442;&#x43e;&#x440;&#x44b;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-th&quot;&gt;&lt;/i&gt;&#x421;&#x435;&#x442;&#x43a;&#x430;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-minus-square&quot;&gt;&lt;/i&gt;&#x41a;&#x43d;&#x43e;&#x43f;&#x43a;&#x438;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-th-list&quot;&gt;&lt;/i&gt;&#x424;&#x43e;&#x440;&#x43c;&#x44b;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-clone&quot;&gt;&lt;/i&gt;&#x421;&#x43e;&#x43e;&#x431;&#x449;&#x435;&#x43d;&#x438;&#x44f;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item &quot;&gt;&lt;i class=&quot;fa fa-bars&quot;&gt;&lt;/i&gt;&#x421;&#x43f;&#x438;&#x441;&#x43a;&#x438;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-ellipsis-h&quot;&gt;&lt;/i&gt;&#x412;&#x43a;&#x43b;&#x430;&#x434;&#x43a;&#x438;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-credit-card&quot;&gt;&lt;/i&gt;&#x41a;&#x430;&#x440;&#x442;&#x43e;&#x447;&#x43a;&#x438;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item sidebar__menu__item--active&quot;&gt;&lt;i class=&quot;fa fa-tasks&quot;&gt;&lt;/i&gt;&#x411;&#x430;&#x440;&#x44b;&lt;/div&gt;
		&gt;&lt;div class=&quot;sidebar__menu__item&quot;&gt;&lt;i class=&quot;fa fa-code&quot;&gt;&lt;/i&gt;JavaScript &#x43a;&#x43e;&#x43c;&#x43f;&#x43e;&#x43d;&#x435;&#x43d;&#x442;&#x44b;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="progress"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Прогресс-бар</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Индикатор прогресса загрузки</div>
				</div>

				<alert class="alert--color-blue">
					<div class="alert__content">Для того, чтобы установить процент загрузки, используйте встроенные стили и свойство width</div>
				</alert>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы прогресс-бара можно использовать совместно друг с другом. Если используется модификатор .progress--size-thin, то использовать элемент .progress__active__text и модификатор .progress--with-text нельзя.</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="progress progress--color-violet progress--with-text">
						<div class="progress__active" style="width: 26%"><div class="progress__active__text">26%</div></div>
					</div>
				</div>

				<div id="tabs3Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress__active</code></div>
						<div class="col-7 size-fix padding-1">Элемент "пройденной" части прогресс-бара</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress__active__text</code></div>
						<div class="col-7 size-fix padding-1">Подпись прогресс-бара (при использовании модификатора .progress--with-text)</div>
					</div>
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема для прогресс-баров</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress--color-*</code></div>
						<div class="col-7 size-fix padding-1">Акцентный цвет прогресс-бара. Вместо * нужно указать значение цвета. Для прогресс-баров доступны все цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress--size-thin</code></div>
						<div class="col-7 size-fix padding-1">Тонкий прогресс-бар</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress--no-smooth</code></div>
						<div class="col-7 size-fix padding-1">Убирает закругление краев прогресс-бара</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress--rounded</code></div>
						<div class="col-7 size-fix padding-1">Увеличивает закругление краев прогресс-баров</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.progress--with-text</code></div>
						<div class="col-7 size-fix padding-1">Оптимизирует прогресс-бары для добавления подписи (элемент .progress__active__text)</div>
					</div>
				</div>

				<div id="tabs3Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;progress progress--color-violet progress--with-text&quot;&gt;
	&lt;div class=&quot;progress__active&quot; style=&quot;width: 26%&quot;&gt;&lt;span class=&quot;progress__active__text&quot;&gt;26%&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-3" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#taskbar"><div class="list__item">Навигационная панель</div>
					<a href="#sidebar"><div class="list__item">Боковая панель</div></a>
					<a href="#progress"><div class="list__item">Прогрессбар</div></a>
				</div>				
			</div>
		</div>
	</div>
</div>