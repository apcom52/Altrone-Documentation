<? 
	$title = 'Вкладки';
	include('parent.php'); 
?>

<script type="text/javascript">
	$(function() {
		var tab1 = new Tabs($('#tabs1'));
		var tab2 = new Tabs($('#tabs2'));
		var tab3 = new Tabs($('#tabs3'));

		var tabs = new Tabs($('#myTabId'));
		var tabs2 = new Tabs($('#tab2ID'));
		var tabs3 = new Tabs($('#tab3ID'));
	});
</script>

<div class="grid">
	<div class="col-9">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Вкладки</div>
		
		<a name="tabs"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Вкладки</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Вкладки помогают удобно разделить контент на странице</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Можно автоматически назначить переключение вкладок</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы вкладок можно использовать совместно друг с другом</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs1Attr">Атрибуты</div>
					<div class="tabs__item" data-tab-target="tabs1JS">Javascript</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="tabs" id="myTabId">
						<div class="tabs__item tabs__item--active" data-tab-target="tab1">Shop</div>
						<div class="tabs__item" data-tab-target="tab2">Suggestions</div>
						<div class="tabs__item" data-tab-target="tab3">Support</div>
					</div>

					<div id="tab1">Tab 1 Content</div>
					<div id="tab2">Tab 2 Content</div>
					<div id="tab3">Tab 3 Content</div>
				</div>

				<div id="tabs1Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs__item</code></div>
						<div class="col-7 size-fix padding-1">Вкладка</div>
					</div>
				</div>

				<div id="tabs1Attr">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название атрибута</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>data-tab-target</code></div>
						<div class="col-7 size-fix padding-1">DOM id блока, на который ссылается текущая вкладка</div>
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема для вкладок</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет фона вкладок. Вместо * нужно указать значение цвета. Для элементов вкладок доступны все цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--vertical</code></div>
						<div class="col-7 size-fix padding-1">Вертикальная ориентация вкладок</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--smooth</code></div>
						<div class="col-7 size-fix padding-1">Добавляет небольшое скругление вкладкам</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--rounded</code></div>
						<div class="col-7 size-fix padding-1">Добавляет сильное скругление вкладкам</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--centered</code></div>
						<div class="col-7 size-fix padding-1">Располагает вкладки посередине</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.tabs--pin-right</code></div>
						<div class="col-7 size-fix padding-1">Располагает вкладки справа</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.taskbar__item--disabled</code></div>
						<div class="col-7 size-fix padding-1">Неактивная вкладка</div>
					</div>					
				</div>

				<div id="tabs1JS">
<pre><code class="js">var tabs = new Tabs($('#myTabId'));</code></pre>
					<h4>Методы и свойства Sidebar</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Tabs(element)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает element, который является jQuery DOM объектом</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>openTab(index)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Открывает вкладку с индексом index. Индексы вкладок начинаются с нуля.</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>currentIndex</code></div>
						<div class="col-3 size-fix padding-1">int</div>
						<div class="col-6 size-fix padding-1">Индекс текущей активной вкладки</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>tabs</code></div>
						<div class="col-3 size-fix padding-1">array[]</div>
						<div class="col-6 size-fix padding-1">Массив вкладок (состоит из jQuery DOM объектов)</div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;tabs&quot; id=&quot;myTabId&quot;&gt;
	&lt;div class=&quot;tabs__item tabs__item--active&quot; data-tab-target=&quot;tab1&quot;&gt;Shop&lt;/div&gt;
	&lt;div class=&quot;tabs__item&quot; data-tab-target=&quot;tab2&quot;&gt;Suggestions&lt;/div&gt;
	&lt;div class=&quot;tabs__item&quot; data-tab-target=&quot;tab3&quot;&gt;Support&lt;/div&gt;
&lt;/div&gt;

&lt;div id=&quot;tab1&quot;&gt;Tab 1 Content&lt;/div&gt;
&lt;div id=&quot;tab2&quot;&gt;Tab 2 Content&lt;/div&gt;
&lt;div id=&quot;tab3&quot;&gt;Tab 3 Content&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="styles"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Стили вкладок</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Кроме стандартного стиля вкладок, доступно еще несколько вариантов</div>
				</div>

				<div class="alert alert--color-red">
					<div class="alert__content">Не все модификаторы обычных вкладок могут работать с разными стилями. Читайте список доступных модификаторов для каждого стиля</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<div class="tabs tabs--ios-style tabs--color-blue" id="tab2ID">
						<div class="tabs__item tabs__item--active">Shop</div>
						<div class="tabs__item">Suggestions</div>
						<div class="tabs__item">Support</div>
					</div>
					<div class="tabs tabs--transparent tabs--color-red" id="tab3ID">
						<div class="tabs__item">Shop</div>
						<div class="tabs__item tabs__item--active">Suggestions</div>
						<div class="tabs__item">Support</div>
					</div>
				</div>

				<div id="tabs2Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--ios-style</code></div>
						<div class="col-7 size-fix padding-1">Вкладки выглядят в стиле iOS. Доступные модификаторы:
						<ul>
							<li>.tabs--color-*</li>
							<li>.tabs__item--disabled</li>
							<li>.tabs__item--active</li>
						</ul>
						</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.sidebar--transparent</code></div>
						<div class="col-7 size-fix padding-1">Вкладки не имеют фона. Доступные модификаторы:
						<ul>
							<li>.tabs--invert</li>
							<li>.tabs--color-*</li>
							<li>.tabs--vertical</li>
							<li>.tabs__item--disabled</li>
							<li>.tabs__item--active</li>
						</ul>
						</div>
					</div>					
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;tabs tabs--ios-style tabs--color-blue&quot;&gt;
	&lt;div class=&quot;tabs__item tabs__item--active&quot;&gt;Shop&lt;/div&gt;
	&lt;div class=&quot;tabs__item&quot;&gt;Suggestions&lt;/div&gt;
	&lt;div class=&quot;tabs__item&quot;&gt;Support&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;tabs tabs--transparent tabs--color-red&quot;&gt;
	&lt;div class=&quot;tabs__item&quot;&gt;Shop&lt;/div&gt;
	&lt;div class=&quot;tabs__item tabs__item--active&quot;&gt;Suggestions&lt;/div&gt;
	&lt;div class=&quot;tabs__item&quot;&gt;Support&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="pagination"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Навигация по страницам</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Если контент страницы слишком длинный, то рекомендуется разделить его на несколько страниц. Переходы между страницами можно сделать с помощью данного блока.</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы навигации можно использовать совместно друг с другом. </div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="pagination pagination--color-pink">
						<div class="pagination__button"><i class="fa fa-arrow-left"></i></div>
						<div class="pagination__page pagination__page--active">1</div>
						<div class="pagination__page">2</div>
						<div class="pagination__page">3</div>
						<div class="pagination__separator">...</div>
						<div class="pagination__page">7</div>
						<div class="pagination__button"><i class="fa fa-arrow-right"></i></div>
					</div>
				</div>

				<div id="tabs3Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.pagination__button</code></div>
						<div class="col-7 size-fix padding-1">Кнопки навигации</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.pagination__page</code></div>
						<div class="col-7 size-fix padding-1">Номер страницы</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.pagination__separator</code></div>
						<div class="col-7 size-fix padding-1">Разделитель</div>
					</div>
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.pagination--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.pagination--color-*</code></div>
						<div class="col-7 size-fix padding-1">Акцентный цвет навигации. Вместо * нужно указать значение цвета. Для номер страниц доступны все цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs3Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;pagination pagination--color-pink&quot;&gt;
	&lt;div class=&quot;pagination__button&quot;&gt;&lt;i class=&quot;fa fa-arrow-left&quot;&gt;&lt;/i&gt;&lt;/div&gt;
	&lt;div class=&quot;pagination__page pagination__page--active&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;pagination__page&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;pagination__page&quot;&gt;3&lt;/div&gt;
	&lt;div class=&quot;pagination__separator&quot;&gt;...&lt;/div&gt;
	&lt;div class=&quot;pagination__page&quot;&gt;7&lt;/div&gt;
	&lt;div class=&quot;pagination__button&quot;&gt;&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/div&gt;
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
					<a href="#tabs"><div class="list__item">Вкладки</div>
					<a href="#styles"><div class="list__item">Стили вкладок</div></a>
					<a href="#pagination"><div class="list__item">Навигация по страницам</div></a>
				</div>				
			</div>
		</div>
	</div>
</div>