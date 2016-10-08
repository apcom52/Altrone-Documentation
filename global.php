<? 
	$title = 'Глобальные модификаторы';
	include('parent.php'); 
?>

<script type="text/javascript">
	$(function() {
		var helvetica = new Tabs($('#helveticaTabs'));
		var position = new Tabs($('#positionTabs'));
		var text = new Tabs($('#textTabs'));
		var margins = new Tabs($('#marginsTabs'));
		var colors = new Tabs($('#colorsTabs'));
		var shadows = new Tabs($('#shadowsTabs'));
		var visibility = new Tabs($('#visibilityTabs'));
	});
</script>

<div class="grid">
	<div class="col-3 col-lm-6">
		<div class="card card--no-smooth left-col" style="position: fixed;">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#helvetica"><div class="list__item">Шрифты семейства Helvetica Neue</div>
					<a href="#position"><div class="list__item">Расположение элементов</div></a>
					<a href="#text"><div class="list__item">Оформление текста</div></a>
					<a href="#margins"><div class="list__item">Внешние и внутренние отступы</div></a>
					<a href="#colors"><div class="list__item">Цвета</div></a>
					<a href="#animations"><div class="list__item">Анимации</div></a>
					<a href="#shadows"><div class="list__item">Тень</div></a>
					<a href="#visibility"><div class="list__item">Настройка видимости</div></a>
					<a href="#pos"><div class="list__item">Позиционирование</div></a>
					<a href="#fix"><div class="list__item">Фиксы</div></a>
				</div>				
			</div>
		</div>
	</div>
	<div class="col-9 offset-3 offset-lm-0 col-lm-6">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Глобальные модификаторы</div>
		<a name="helvetica"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Шрифты семейства Helvetica Neue</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">По умолчанию Altrone использует шрифты семейства PT Sans, однако вы можете использовать шрифты из семейства Helvetica Neue, которые доступны в Altrone "из коробки". Некоторые браузеры могут не поддерживать сторонние шрифты</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="helveticaTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="helveticaClasses">Классы</div>
					<div class="tabs__item" data-tab-target="helveticaTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="helveticaExample">Примеры</div>
				</div>				
				<div id="helveticaClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.helvetica-ultra</code></div>
						<div class="col-7 padding-1">Очень тонкий шрифт</div>
						<div class="col-3 padding-1"><code>.helvetica-thin</code></div>
						<div class="col-7 padding-1">Тонкий шрифт</div>
						<div class="col-3 padding-1"><code>.helvetica-light</code></div>
						<div class="col-7 padding-1">Легкий шрифт</div>
						<div class="col-3 padding-1"><code>.helvetica-medium</code></div>
						<div class="col-7 padding-1">Нормальный шрифт</div>
						<div class="col-3 padding-1"><code>.helvetica-bold</code></div>
						<div class="col-7 padding-1">Полужирный шрифт</div>
						<div class="col-3 padding-1"><code>.helvetica-black</code></div>
						<div class="col-7 padding-1">Жирный шрифт</div>
					</div>
				</div>

				<div id="helveticaTemplate">
					<div class="grid">
<pre><code class="html">&lt;h2 class=&quot;helvetica-ultra&quot;&gt;Helvetica Ultra&lt;/h2&gt;
&lt;h2 class=&quot;helvetica-thin&quot;&gt;Helvetica Thin&lt;/h2&gt;
&lt;h2 class=&quot;helvetica-light&quot;&gt;Helvetica Light&lt;/h2&gt;
&lt;h2 class=&quot;helvetica-medium&quot;&gt;Helvetica Medium&lt;/h2&gt;
&lt;h2 class=&quot;helvetica-bold&quot;&gt;Helvetica Bold&lt;/h2&gt;
&lt;h2 class=&quot;helvetica-black&quot;&gt;Helvetica Black&lt;/h2&gt;
</code></pre>						
					</div>
				</div>

				<div id="helveticaExample">
					<h2 class="helvetica-ultra">Helvetica Ultra</h2>
					<h2 class="helvetica-thin">Helvetica Thin</h2>
					<h2 class="helvetica-light">Helvetica Light</h2>
					<h2 class="helvetica-medium">Helvetica Medium</h2>
					<h2 class="helvetica-bold">Helvetica Bold</h2>
					<h2 class="helvetica-black">Helvetica Black</h2>
				</div>
			</div>
		</div>


		<a name="position"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Расположение элементов</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-green">Обновление в 2.0.2</span>
				<div class="alert">
					<div class="alert__content">Если вам необходимо расположить какой-нибудь элемент или группу элементов в нужном месте, то вам нужно воспользоваться группой следующих глобальных классов</div>
				</div>
				<div class="alert alert--color-yellow">
					<div class="alert__content">В версии 2.0.2 модификаторы <b>.align-*</b> получили адаптивность значений. Аналогично сетке, вы можете устанавливать отдельные значения отступов для планшетов и смартфонов в планшетной ориентации и альбомной. Например, <b>.align-t-center</b></div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Обратите внимание, что <b>.align-*</b> применяется на родительский блок, а <b>.pin-*</b> на сам блок, который нужно переместить</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="positionTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="positionClasses">Классы</div>
					<div class="tabs__item" data-tab-target="positionTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="positionExample">Примеры</div>
				</div>				
				<div id="positionClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.align-left</code></div>
						<div class="col-7 padding-1">Расположение с левого края</div>
						<div class="col-3 padding-1"><code>.align-center</code></div>
						<div class="col-7 padding-1">Расположение по центру</div>
						<div class="col-3 padding-1"><code>.align-right</code></div>
						<div class="col-7 padding-1">Расположение с правого края</div>
						<div class="col-3 padding-1"><code>.pin-left</code></div>
						<div class="col-7 padding-1">Прикрепить к левому краю (плавающий объект)</div>
						<div class="col-3 padding-1"><code>.pin-right</code></div>
						<div class="col-7 padding-1">Прикрепить к правому краю (плавающий объект)</div>
					</div>
				</div>

				<div id="positionTemplate">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;l-gray-bg margin-vertical-1 padding-1 align-left&quot;&gt;
	&lt;div class=&quot;red-bg white-fg&quot; style=&quot;width:50px; height: 50px;&quot;&gt;align-left&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;l-gray-bg margin-vertical-1 padding-1 align-center&quot;&gt;
	&lt;div class=&quot;red-bg white-fg&quot; style=&quot;width:50px; height: 50px;&quot;&gt;align-center&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;l-gray-bg margin-vertical-1 padding-1 align-right&quot;&gt;
	&lt;div class=&quot;red-bg white-fg&quot; style=&quot;width:50px; height: 50px;&quot;&gt;align-right&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;l-gray-bg margin-vertical-1 padding-1&quot; style=&quot;overflow: hidden;&quot;&gt;
	&lt;div class=&quot;red-bg white-fg pin-left&quot; style=&quot;width:50px; height: 50px;&quot;&gt;pin-left&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;l-gray-bg margin-vertical-1 padding-1&quot; style=&quot;overflow: hidden;&quot;&gt;
	&lt;div class=&quot;red-bg white-fg pin-right&quot; style=&quot;width:50px; height: 50px;&quot;&gt;pin-right&lt;/div&gt;
&lt;/div&gt;</code></pre>						
					</div>
				</div>

				<div id="positionExample">
					<div class="l-gray-bg margin-vertical-1 padding-1 align-left">
						<div class="red-bg white-fg" style="width:50px; height: 50px;">align-left</div>
					</div>
					<div class="l-gray-bg margin-vertical-1 padding-1 align-center">
						<div class="red-bg white-fg" style="width:50px; height: 50px;">align-center</div>
					</div>
					<div class="l-gray-bg margin-vertical-1 padding-1 align-right">
						<div class="red-bg white-fg" style="width:50px; height: 50px;">align-right</div>
					</div>
					<div class="l-gray-bg margin-vertical-1 padding-1" style="overflow: hidden;">
						<div class="red-bg white-fg pin-left" style="width:50px; height: 50px;">pin-left</div>
					</div>
					<div class="l-gray-bg margin-vertical-1 padding-1" style="overflow: hidden;">
						<div class="red-bg white-fg pin-right" style="width:50px; height: 50px;">pin-right</div>
					</div>
				</div>
			</div>
		</div>


		<a name="text"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Оформление текста</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данный набор классов позволяет оформлять текст в любом блоке вашей страницы</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные классы можно комбинировать между собой</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="textTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="textClasses">Классы</div>
					<div class="tabs__item" data-tab-target="textTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="textExample">Примеры</div>
				</div>				
				<div id="textClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.bold</code></div>
						<div class="col-7 padding-1">Полужирный шрифт</div>
						<div class="col-3 padding-1"><code>.italic</code></div>
						<div class="col-7 padding-1">Курсивное начертание</div>
						<div class="col-3 padding-1"><code>.underline</code></div>
						<div class="col-7 padding-1">Подчеркнутый текст</div>
					</div>
				</div>

				<div id="textTemplate">
					<div class="grid">
<pre><code class="html">&lt;span class=&quot;bold margin-1&quot;&gt;&#x416;&#x438;&#x440;&#x43d;&#x44b;&#x439; &#x442;&#x435;&#x43a;&#x441;&#x442;&lt;/span&gt;
&lt;span class=&quot;italic margin-1&quot;&gt;&#x41a;&#x443;&#x440;&#x441;&#x438;&#x432;&#x43d;&#x44b;&#x439; &#x442;&#x435;&#x43a;&#x441;&#x442;&lt;/span&gt;
&lt;span class=&quot;underline margin-1&quot;&gt;&#x41f;&#x43e;&#x434;&#x447;&#x435;&#x440;&#x43a;&#x43d;&#x443;&#x442;&#x44b;&#x439; &#x442;&#x435;&#x43a;&#x441;&#x442;&lt;/span&gt;</code></pre>						
					</div>
				</div>

				<div id="textExample">
					<span class="bold margin-1">Жирный текст</span><span class="italic margin-1">Курсивный текст</span><span class="underline margin-1">Подчеркнутый текст</span>
				</div>
			</div>
		</div>


		<a name="margins"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Внешние и внутренние отступы</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-green">Обновление в 2.0.2</span>
				<div class="alert">
					<div class="alert__content">Данный набор классов позволяет располагать элементы относительно друг друга на определенном расстоянии с помощью внешних или внутренних отступов</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Чтобы убрать отступы полностью используйте значение 0</div>
				</div>
				<div class="alert alert--color-yellow">
					<div class="alert__content">В версии 2.0.2 внутренние и внешние отступы получили адаптивность значений. Аналогично сетке, вы можете устанавливать отдельные значения отступов для планшетов и смартфонов в планшетной ориентации и альбомной. Например, <b>.margin-lm-left-2</b></div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные классы можно комбинировать между собой</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="marginsTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="marginsClasses">Классы</div>
					<div class="tabs__item" data-tab-target="marginsTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="marginsExample">Примеры</div>
				</div>				
				<div id="marginsClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.margin-top-*</code></div>
						<div class="col-7 padding-1">Внешний отступ сверху (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.margin-left-*</code></div>
						<div class="col-7 padding-1">Внешний отступ слева (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.margin-bottom-*</code></div>
						<div class="col-7 padding-1">Внешний отступ снизу (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.margin-right-*</code></div>
						<div class="col-7 padding-1">Внешний отступ справа (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.margin-vertical-*</code></div>
						<div class="col-7 padding-1">Внешний отступ сверху и снизу (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.margin-horizontal-*</code></div>
						<div class="col-7 padding-1">Внешний отступ слева и справа (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.margin-*</code></div>
						<div class="col-7 padding-1">Внешний отступ со всех сторон (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>

						<div class="col-3 padding-1"><code>.padding-top-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ сверху (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.padding-left-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ слева (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.padding-bottom-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ снизу (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.padding-right-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ справа (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.padding-vertical-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ сверху и снизу (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.padding-horizontal-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ слева и справа (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
						<div class="col-3 padding-1"><code>.padding-*</code></div>
						<div class="col-7 padding-1">Внутренний отступ со всех сторон (Вместо * нужно подставить значения - 0, 1, 3 или 5)</div>
					</div>
				</div>

				<div id="marginsTemplate">
					<div class="grid">
<pre><code class="html">&lt;p&gt;&#x412;&#x43d;&#x435;&#x448;&#x43d;&#x438;&#x435; &#x43e;&#x442;&#x441;&#x442;&#x443;&#x43f;&#x44b;&lt;/p&gt;
&lt;div class=&quot;u-gray-bg padding-1&quot; style=&quot;display: flex; align-items: center;&quot;&gt;
	&lt;div class=&quot;olive-bg margin-left-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;Left 1&lt;/div&gt;
	&lt;div class=&quot;olive-bg margin-top-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;Top 1&lt;/div&gt;
	&lt;div class=&quot;olive-bg margin-right-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;Right 1&lt;/div&gt;
	&lt;div class=&quot;olive-bg margin-bottom-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;Bottom 1&lt;/div&gt;
	&lt;div class=&quot;olive-bg margin-vertical-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;Vertical 1&lt;/div&gt;
	&lt;div class=&quot;olive-bg margin-horizontal-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;Horizontal 1&lt;/div&gt;
	&lt;div class=&quot;olive-bg margin-1 pin-left&quot; style=&quot;flex:1; height: 50px; padding: 0.5em;&quot;&gt;All 1&lt;/div&gt;
&lt;/div&gt;	
&lt;p&gt;&#x412;&#x43d;&#x443;&#x442;&#x440;&#x435;&#x43d;&#x43d;&#x438;&#x435; &#x43e;&#x442;&#x441;&#x442;&#x443;&#x43f;&#x44b;&lt;/p&gt;
&lt;div class=&quot;u-gray-bg padding-1&quot; style=&quot;overflow: hidden;&quot;&gt;
	&lt;div class=&quot;red-bg padding-left-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;Left 3&lt;/div&gt;
	&lt;div class=&quot;orange-bg padding-top-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;Top 3&lt;/div&gt;
	&lt;div class=&quot;yellow-bg padding-right-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;Right 3&lt;/div&gt;
	&lt;div class=&quot;green-bg padding-bottom-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;Bottom 3&lt;/div&gt;
	&lt;div class=&quot;pink-bg padding-vertical-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;Vertical 3&lt;/div&gt;
	&lt;div class=&quot;brown-bg padding-horizontal-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;Horizontal 3&lt;/div&gt;
	&lt;div class=&quot;purple-bg padding-3 pin-left&quot; style=&quot;height: 50px;&quot;&gt;All 3&lt;/div&gt;
&lt;/div&gt;</code></pre>						
					</div>
				</div>

				<div id="marginsExample">
					<p>Внешние отступы</p>
					<div class="u-gray-bg padding-1" style="display: flex; align-items: center;">
						<div class="olive-bg margin-left-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">Left 1</div>
						<div class="olive-bg margin-top-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">Top 1</div>
						<div class="olive-bg margin-right-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">Right 1</div>
						<div class="olive-bg margin-bottom-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">Bottom 1</div>
						<div class="olive-bg margin-vertical-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">Vertical 1</div>
						<div class="olive-bg margin-horizontal-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">Horizontal 1</div>
						<div class="olive-bg margin-1 pin-left" style="flex:1; height: 50px; padding: 0.5em;">All 1</div>
					</div>	
					<p>Внутренние отступы</p>
					<div class="u-gray-bg padding-1" style="overflow: hidden;">
						<div class="red-bg padding-left-3 pin-left" style="height: 50px;">Left 3</div>
						<div class="orange-bg padding-top-3 pin-left" style="height: 50px;">Top 3</div>
						<div class="yellow-bg padding-right-3 pin-left" style="height: 50px;">Right 3</div>
						<div class="green-bg padding-bottom-3 pin-left" style="height: 50px;">Bottom 3</div>
						<div class="pink-bg padding-vertical-3 pin-left" style="height: 50px;">Vertical 3</div>
						<div class="brown-bg padding-horizontal-3 pin-left" style="height: 50px;">Horizontal 3</div>
						<div class="purple-bg padding-3 pin-left" style="height: 50px;">All 3</div>
					</div>					
				</div>
			</div>
		</div>


		<a name="colors"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Цвета</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-green">Обновление в 2.0.1</span>
				<div class="alert">
					<div class="alert__content">Данный набор классов позволяет устанавливать цвет фона или текста для каждого элемента страницы</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Для большинства элементов есть свои модификаторы изменения цвета. Тогда для них надобность использования этих классов отпадает. Обратите внимание, что для собственных модификаторов могут поддерживаться не все цвета из представленных в таблице ниже.</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные классы можно комбинировать между собой</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="colorsTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="colorsClasses">Классы</div>
					<div class="tabs__item" data-tab-target="colorsTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="colorsExample">Примеры</div>
				</div>				
				<div id="colorsClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.*-bg</code></div>
						<div class="col-7 padding-1">Устанавливает цвет фона. Вместо * нужно выбрать подходящий цвет из таблицы ниже (Поддерживаются все доступные варианты цветов)</div>
						<div class="col-3 padding-1"><code>.*-fg</code></div>
						<div class="col-7 padding-1">Устанавливает цвет текста. Вместо * нужно выбрать подходящий цвет из таблицы ниже (Поддерживаются все доступные варианты цветов)</div>

						<div class="alert" style="overflow: hidden;">
							<div class="alert__header">Доступные цвета</div>
							<div class="alert__content">
								<h3>Основные цвета</h3>
								<div class="red-bg padding-1 margin-1" style="float: left; border: 2px solid black;">red</div>
								<div class="orange-bg padding-1 margin-1" style="float: left; border: 2px solid black;">orange</div>
								<div class="yellow-bg padding-1 margin-1" style="float: left; border: 2px solid black;">yellow</div>
								<div class="olive-bg padding-1 margin-1" style="float: left; border: 2px solid black;">olive</div>
								<div class="green-bg padding-1 margin-1" style="float: left; border: 2px solid black;">green</div>
								<div class="blue-bg padding-1 margin-1" style="float: left; border: 2px solid black;">blue</div>
								<div class="teal-bg padding-1 margin-1" style="float: left; border: 2px solid black;">teal</div>
								<div class="purple-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">purple</div>
								<div class="violet-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">violet</div>
								<div class="pink-bg padding-1 margin-1" style="float: left; border: 2px solid black;">pink</div>
								<div class="brown-bg padding-1 margin-1" style="float: left; clear: right; border: 2px solid black;">brown</div>
								<h3 style="clear: left;">Дополнительные цвета</h3>
								<div class="white-bg padding-1 margin-1" style="float: left; border: 2px solid black;">white</div>
								<div class="u-gray-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-gray</div>
								<div class="l-gray-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-gray</div>
								<div class="m-gray-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">m-gray</div>
								<div class="d-gray-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-gray</div>
								<div class="black-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">black</div>
								<h3 style="clear: left;">Оттенки цветов</h3>
								<div class="label label--color-yellow" style="clear: both;">Доступно с версии 2.0.1</div><br>
								<div class="u-red-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-red</div>
								<div class="u-orange-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-orange</div>
								<div class="u-yellow-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-yellow</div>
								<div class="u-olive-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-olive</div>
								<div class="u-green-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-green</div>
								<div class="u-blue-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-blue</div>
								<div class="u-teal-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-teal</div>
								<div class="u-purple-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-purple</div>
								<div class="u-violet-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-violet</div>
								<div class="u-pink-bg padding-1 margin-1" style="float: left; border: 2px solid black;">u-pink</div>
								<div class="u-brown-bg padding-1 margin-1" style="float: left; clear: right; border: 2px solid black;">u-brown</div>
								<div class="l-red-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-red</div>
								<div class="l-orange-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-orange</div>
								<div class="l-yellow-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-yellow</div>
								<div class="l-olive-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-olive</div>
								<div class="l-green-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-green</div>
								<div class="l-blue-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-blue</div>
								<div class="l-teal-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-teal</div>
								<div class="l-purple-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-purple</div>
								<div class="l-violet-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-violet</div>
								<div class="l-pink-bg padding-1 margin-1" style="float: left; border: 2px solid black;">l-pink</div>
								<div class="l-brown-bg padding-1 margin-1" style="float: left; clear: right; border: 2px solid black;">l-brown</div>
								<div class="d-red-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-red</div>
								<div class="d-orange-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-orange</div>
								<div class="d-yellow-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-yellow</div>
								<div class="d-olive-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-olive</div>
								<div class="d-green-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-green</div>
								<div class="d-blue-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-blue</div>
								<div class="d-teal-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-teal</div>
								<div class="d-purple-bg white-fg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-purple</div>
								<div class="d-violet-bg white-fg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-violet</div>
								<div class="d-pink-bg white-fg padding-1 margin-1" style="float: left; border: 2px solid black;">d-pink</div>
								<div class="d-brown-bg white-fg padding-1 margin-1" style="float: left; clear: right; border: 2px solid black;">d-brown</div>
							</div>
						</div>
					</div>
				</div>

				<div id="colorsTemplate">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;padding-1 red-bg&quot;&gt;&#x41a;&#x440;&#x430;&#x441;&#x43d;&#x44b;&#x439; &#x444;&#x43e;&#x43d;&lt;/div&gt;
&lt;div class=&quot;padding-1 green-bg white-fg&quot;&gt;&#x411;&#x435;&#x43b;&#x44b;&#x439; &#x442;&#x435;&#x43a;&#x441;&#x442; &#x43d;&#x430; &#x437;&#x435;&#x43b;&#x435;&#x43d;&#x43e;&#x43c; &#x444;&#x43e;&#x43d;&#x435;&lt;/div&gt;</code></pre>						
					</div>
				</div>

				<div id="colorsExample">
					<div class="padding-1 red-bg">Красный фон</div>
					<div class="padding-1 green-bg white-fg">Белый текст на зеленом фоне</div>		
				</div>
			</div>
		</div>

		<a name="animations"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Анимации</h1>
				<span class="label label--color-green">Доступно с версии 2.1</span>
				<div class="alert">
					<div class="alert__content">Данный набор классов позволяет задавать анимацию отдельным элементам</div>
				</div>
				<div>
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>

						<div class="col-3 padding-1"><code>.animation--*</code></div>
						<div class="col-7 padding-1">Указывается название анимации. Доступные анимации: 
							<ul>
								<li><b>boom</b> - объект увеличивается в размере, а потом возвращается в исходное состояние</li>
								<li><b>jump</b> - объект поднимается по оси Y, а после возвращается в исходное состояние</li>
								<li><b>flip</b> - объект вращается вокруг оси Y</li>
								<li><b>flipVertical</b> - объект вращается вокруг оси X</li>
								<li><b>fadeIn</b> - объект появляется</li>
								<li><b>fadeOut</b> - объект растворяется</li>
							</ul>
						</div>

						<div class="col-3 padding-1"><code>.animation--time-*</code></div>
						<div class="col-7 padding-1">Задает время анимации. Доступные варианты: <code>0-3s</code>, <code>0-5s</code>, <code>0-7s</code>, <code>1s</code>, <code>1-5s</code>, <code>2s</code>, <code>2-5s</code>, <code>3s</code></div>

						<div class="col-3 padding-1"><code>.animation--function-*</code></div>
						<div class="col-7 padding-1">Задает функцию сглаживания анимации. Доступные варианты: <code>linear</code>, <code>ease</code>, <code>ease-in</code>, <code>ease-out</code>, <code>ease-in-out</code>, <code>step-start</code>, <code>step-end</code>, </div>
					</div>
				</div>
			</div>
		</div>		

		<a name="shadows"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Тень</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-green">Обновление 2.1</span>
				<div class="alert">
					<div class="alert__content">Данный набор классов позволяет устанавливать глубину тени у объектов</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">У некоторых элементов есть модификаторы --no-shadow, который может убирать тени. Используйте его, чтобы убрать тени у данных объектов</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal" id="shadowsTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="shadowsClasses">Классы</div>
					<div class="tabs__item" data-tab-target="shadowsTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="shadowsExample">Примеры</div>
				</div>				
				<div id="shadowsClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.shadow-*</code></div>
						<div class="col-7 padding-1">Устанавливает глубину тени у объекта. Вместо * нужно подставить значение в промежутке от 1 до 5</div>

						<div class="col-3 padding-1"><code>.card_shadow</code></div>
						<div class="col-7 padding-1">Специальный вариант тени, который больше подходит для "карточек"</div>

						<div class="col-3 padding-1"><code>.text-shadow</code></div>
						<div class="col-7 padding-1">Текст получает небольшую тень (тень является едва заметной и нужна лишь для повышения читабельности текста на ярком фоне (например текст кнопок))</div>
					</div>
				</div>

				<div id="shadowsTemplate">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;l-gray-fg&quot; style=&quot;overflow: hidden;&quot;&gt;
	&lt;div class=&quot;shadow-1 olive-bg black-fg margin-1 padding-1 pin-left&quot;&gt;Shadow 1&lt;/div&gt;
	&lt;div class=&quot;shadow-2 olive-bg black-fg margin-1 padding-1 pin-left&quot;&gt;Shadow 2&lt;/div&gt;
	&lt;div class=&quot;shadow-3 olive-bg black-fg margin-1 padding-1 pin-left&quot;&gt;Shadow 3&lt;/div&gt;
	&lt;div class=&quot;shadow-4 olive-bg black-fg margin-1 padding-1 pin-left&quot;&gt;Shadow 4&lt;/div&gt;
	&lt;div class=&quot;shadow-5 olive-bg black-fg margin-1 padding-1 pin-left&quot;&gt;Shadow 5&lt;/div&gt;
	&lt;div class=&quot;card_shadow olive-bg black-fg margin-1 padding-1 pin-left&quot;&gt;Card Shadow&lt;/div&gt;
&lt;/div&gt;</code></pre>						
					</div>
				</div>

				<div id="shadowsExample">
					<div class="l-gray-fg" style="overflow: hidden;">
						<div class="shadow-1 olive-bg black-fg margin-1 padding-1 pin-left">Shadow 1</div>
						<div class="shadow-2 olive-bg black-fg margin-1 padding-1 pin-left">Shadow 2</div>
						<div class="shadow-3 olive-bg black-fg margin-1 padding-1 pin-left">Shadow 3</div>
						<div class="shadow-4 olive-bg black-fg margin-1 padding-1 pin-left">Shadow 4</div>
						<div class="shadow-5 olive-bg black-fg margin-1 padding-1 pin-left">Shadow 5</div>
						<div class="card_shadow olive-bg black-fg margin-1 padding-1 pin-left">Card Shadow</div>
						<div class="text-shadow olive-bg black-fg margin-1 padding-1 pin-left">Text Shadow</div>
					</div>		
				</div>
			</div>
		</div>


		<a name="visibility"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Настройка видимости</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данный набор классов позволяет устанавливать видимость объектов на определенном типе устройств</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal" id="visibilityTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="visibilityClasses">Классы</div>
					<div class="tabs__item" data-tab-target="visibilityTemplate">Шаблон</div>
					<div class="tabs__item" data-tab-target="visibilityExample">Примеры</div>
				</div>				
				<div id="visibilityClasses">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.hide-*</code></div>
						<div class="col-7 padding-1">Скрывает этот блок на указанном типе устройств. Вместо * нужно указать тип устройства: m (смартфон), t (планшет) или d (десктоп)</div>
						<div class="col-3 padding-1"><code>.only-*</code></div>
						<div class="col-7 padding-1">Показывает этот блок только указанном типе устройств. Вместо * нужно указать тип устройства: m (смартфон), t (планшет) или d (десктоп)</div>
					</div>
				</div>

				<div id="visibilityTemplate">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;l-gray-fg&quot; style=&quot;overflow: hidden;&quot;&gt;
	&lt;div class=&quot;red-bg hide-m black-fg margin-1 padding-1 pin-left&quot;&gt;&#x421;&#x43a;&#x440;&#x44b;&#x442; &#x43d;&#x430; &#x441;&#x43c;&#x430;&#x440;&#x442;&#x444;&#x43e;&#x43d;&#x430;&#x445;&lt;/div&gt;
	&lt;div class=&quot;yellow-bg only-m black-fg margin-1 padding-1 pin-left&quot;&gt;&#x422;&#x43e;&#x43b;&#x44c;&#x43a;&#x43e; &#x43d;&#x430; &#x441;&#x43c;&#x430;&#x440;&#x442;&#x444;&#x43e;&#x43d;&#x430;&#x445;&lt;/div&gt;
	&lt;div class=&quot;pink-bg only-d black-fg margin-1 padding-1 pin-left&quot;&gt;&#x422;&#x43e;&#x43b;&#x44c;&#x43a;&#x43e; &#x43d;&#x430; &#x434;&#x435;&#x441;&#x43a;&#x442;&#x43e;&#x43f;&#x430;&#x445;&lt;/div&gt;
&lt;/div&gt;	</code></pre>						
					</div>
				</div>

				<div id="visibilityExample">
					<div class="l-gray-fg" style="overflow: hidden;">
						<div class="red-bg hide-m black-fg margin-1 padding-1 pin-left">Скрыт на смартфонах</div>
						<div class="yellow-bg only-m black-fg margin-1 padding-1 pin-left">Только на смартфонах</div>
						<div class="pink-bg only-d black-fg margin-1 padding-1 pin-left">Только на десктопах</div>
					</div>		
				</div>
			</div>
		</div>

		<a name="pos"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Позиционирование</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данный набор модификаторов позволяет задать позиционирование блока относительно других блоков</div>
				</div>
				<div>
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>

						<div class="col-3 padding-1"><code>.fixed</code></div>
						<div class="col-7 padding-1">Фиксированное положение (блок не прокручивается при скроллинге)</div>

						<div class="col-3 padding-1"><code>.absolute</code></div>
						<div class="col-7 padding-1">Абсолютное положение (блок располагается поверх других блоков)</div>

						<div class="col-3 padding-1"><code>.fixed</code></div>
						<div class="col-7 padding-1">Положение относительно родительского блока</div>	
					</div>
				</div>
			</div>
		</div>	

		<a name="fix"></a>
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Фиксы</h1>
				<span class="label label--color-green">Доступно с версии 2.0.1</span>
				<div class="alert">
					<div class="alert__content">Данный набор модификаторов позволяет исправлять возможные ошибки верстки, при использовании некоторых других модификаторов</div>
				</div>
				<div>
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>

						<div class="col-3 padding-1"><code>.size-fix</code></div>
						<div class="col-7 padding-1">Внутренние отступы и размеры границ становятся частью размера самого блока (используется <code>box-sizing: border-box</code>)</div>

						<div class="col-3 padding-1"><code>.float-fix, .float-left-fix, .float-right-fix</code></div>
						<div class="col-7 padding-1">Убирает обтекаемость блока со всех сторон, с левой стороны или с правой стороны</div>	
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>