<? 
	$title = 'Сетка';
	include('parent.php'); 
?>

<script type="text/javascript">
	$(function() {
		var tab1 = new Tabs($('#tabs1'));
		var tab2 = new Tabs($('#tabs2'));
		var tab3 = new Tabs($('#tabs3'));
		var tab4 = new Tabs($('#tabs4'));
		var tab5 = new Tabs($('#tabs5'));
		var tab6 = new Tabs($('#tabs6'));
		var tab7 = new Tabs($('#tabs7'));
	});
</script>

<div class="grid">
	<div class="col-3 col-lm-6 left-col" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#grid"><div class="list__item">Стандартная сетка</div>
					<a href="#devices"><div class="list__item">Устройства и разрешения экранов</div>
					<a href="#adaptivegrid"><div class="list__item">Адаптивная сетка</div></a>
					<a href="#masonry"><div class="list__item">Masonry-сетка</div></a>
					<a href="#layouts"><div class="list__item">Линейная разметка</div></a>
					<a href="#parallax"><div class="list__item">Parallax-эффект</div></a>
					<a href="#loading"><div class="list__item">Загрузка</div></a>
				</div>				
			</div>
		</div>
	</div>

	<div class="col-9 col-lm-6 offset-3 offset-lm-0">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Сетка</div>
		
		<a name="grid"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Стандартная сетка</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">С помощью сетки можно построить разметку веб-страниц</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">У каждой колонки есть своя "масса". Она может принимать значение от 1 до 12. В каждой строке сумма масс колонок не должна превышать 12.</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="grid">
						<div class="col-1 white-fg red-bg padding-1 size-fix">.col-1</div>
						<div class="col-7 white-fg orange-bg padding-1 size-fix">.col-7</div>
						<div class="col-4 white-fg yellow-bg padding-1 size-fix">.col-4</div>
						<div class="col-3 white-fg olive-bg padding-1 size-fix">.col-3</div>
						<div class="col-2 white-fg green-bg padding-1 size-fix">.col-2</div>
						<div class="col-5 white-fg teal-bg padding-1 size-fix">.col-5</div>
						<div class="col-2 white-fg blue-bg padding-1 size-fix">.col-2</div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;grid&quot;&gt;
	&lt;div class=&quot;col-1 white-fg red-bg padding-1 size-fix&quot;&gt;.col-1&lt;/div&gt;
	&lt;div class=&quot;col-7 white-fg orange-bg padding-1 size-fix&quot;&gt;.col-7&lt;/div&gt;
	&lt;div class=&quot;col-4 white-fg yellow-bg padding-1 size-fix&quot;&gt;.col-4&lt;/div&gt;
	&lt;div class=&quot;col-3 white-fg olive-bg padding-1 size-fix&quot;&gt;.col-3&lt;/div&gt;
	&lt;div class=&quot;col-2 white-fg green-bg padding-1 size-fix&quot;&gt;.col-2&lt;/div&gt;
	&lt;div class=&quot;col-5 white-fg teal-bg padding-1 size-fix&quot;&gt;.col-5&lt;/div&gt;
	&lt;div class=&quot;col-2 white-fg blue-bg padding-1 size-fix&quot;&gt;.col-2&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="devices"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Устройства и разрешения экранов</h1>
				<div class="alert">
					<div class="alert__content">Ознакомьтесь с вариантами сетки Altrone для различных видов устройств</div>
				</div>

				<div class="alert alert--color-red">
					<div class="alert__content">Если вы указали вид сетки для конкретного вида устройств, то она будет применяться и для более "младших" устройств. Например, если вы укажете оформление для планшета (t), то такое оформление будет использовано и для смартфона в ландшафтной ориентации (lm) и смартфона в портретной ориентации (m). Если вам не нравится такое поведение сетки, то необходимо переназначить "массу" колонок для каждого вида устройства.</div>
				</div>

				<div class="grid">
					<div class="col-5 size-fix padding-1 bold">Название устройства</div>
					<div class="col-2 size-fix padding-1 bold">Обозначение</div>
					<div class="col-3 size-fix padding-1 bold">Ширина экрана</div>
					<div class="col-2 size-fix padding-1 bold">Число колонок</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Монитор</b></div>
					<div class="col-2 padding-1 size-fix"><code>-</code></div>
					<div class="col-3 padding-1 size-fix">1200px и более</div>
					<div class="col-2 padding-1 size-fix">12</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Планшет в ландшафтной ориентации или экран нетбука</b></div>
					<div class="col-2 padding-1 size-fix"><code>lt</code></div>
					<div class="col-3 padding-1 size-fix">993px - 1999px</div>
					<div class="col-2 padding-1 size-fix">10</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Планшет в портретной ориентации</b></div>
					<div class="col-2 padding-1 size-fix"><code>t</code></div>
					<div class="col-3 padding-1 size-fix">768px - 992px</div>
					<div class="col-2 padding-1 size-fix">8</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Смартфон в ландшафтной ориентации</b></div>
					<div class="col-2 padding-1 size-fix"><code>lm</code></div>
					<div class="col-3 padding-1 size-fix">481px - 767px</div>
					<div class="col-2 padding-1 size-fix">6</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Смартфон в портретной ориентации</b></div>
					<div class="col-2 padding-1 size-fix"><code>m</code></div>
					<div class="col-3 padding-1 size-fix">не более 480px</div>
					<div class="col-2 padding-1 size-fix">4</div>
				</div>
			</div>
		</div>

		<a name="adaptivegrid"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Адаптивная сетка</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Часто сетка, которая работает хорошо для десктопов, не удобна для пользователей смартфонов. Адаптивная сетка позволяет создавать такие шаблоны, которые будут изменяться в зависимости от размера экрана пользователя</div>
				</div>				
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="grid">
						<div class="col-12 col-t-4 green-bg white-fg padding-1 size-fix">Этот столбец будет занимать всю ширину на десктопах</div>
						<div class="col-6 col-t-8 col-lm-3 teal-bg white-fg padding-1 size-fix">Этот столбец будет занимать всю ширину на планшетах</div>
						<div class="col-6 col-lm-6 pink-bg white-fg padding-1 size-fix">Этот столбец будет занимать всю ширину на смартфонах</div>
					</div>
				</div>

				<div id="tabs3Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.col-*</code></div>
						<div class="col-7 size-fix padding-1">Колонка с определенным "весом". Вес должен быть указан вместо * и должен быть принимать значения от 1 до 12</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.col-#-*</code></div>
						<div class="col-7 size-fix padding-1">Адаптивная колонка с определенным "весом". Вид устройства, для которого колонка будет менять свой вес указывается вместо #. Вес должен быть указан вместо * и должен быть принимать значения от 1 до 12</div>
					</div>					
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.offset-*</code></div>
						<div class="col-7 size-fix padding-1">Отступ слева в указанное количество колонок (от 1 до 11)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.offset-#-*</code></div>
						<div class="col-7 size-fix padding-1">Отступ слева в указанное количество колонок для адаптивных вариантов сеток. Вместо # нужно указать вид устройства, для которого данный отступ будет отображаться. <b>Примечание:</b> значение отступа должен принимать значения от 1 до (<code><количество колонок для данного устройства></code> - 1)</div>
					</div>
				</div>

				<div id="tabs3Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;grid&quot;&gt;
	&lt;div class=&quot;col-12 col-t-4&quot;&gt;&#x42d;&#x442;&#x43e;&#x442; &#x441;&#x442;&#x43e;&#x43b;&#x431;&#x435;&#x446; &#x431;&#x443;&#x434;&#x435;&#x442; &#x437;&#x430;&#x43d;&#x438;&#x43c;&#x430;&#x442;&#x44c; &#x432;&#x441;&#x44e; &#x448;&#x438;&#x440;&#x438;&#x43d;&#x443; &#x43d;&#x430; &#x434;&#x435;&#x441;&#x43a;&#x442;&#x43e;&#x43f;&#x430;&#x445;&lt;/div&gt;
	&lt;div class=&quot;col-6 col-t-8 col-lm-3&quot;&gt;&#x42d;&#x442;&#x43e;&#x442; &#x441;&#x442;&#x43e;&#x43b;&#x431;&#x435;&#x446; &#x431;&#x443;&#x434;&#x435;&#x442; &#x437;&#x430;&#x43d;&#x438;&#x43c;&#x430;&#x442;&#x44c; &#x432;&#x441;&#x44e; &#x448;&#x438;&#x440;&#x438;&#x43d;&#x443; &#x43d;&#x430; &#x43f;&#x43b;&#x430;&#x43d;&#x448;&#x435;&#x442;&#x430;&#x445;&lt;/div&gt;
	&lt;div class=&quot;col-6 col-lm-6&quot;&gt;&#x42d;&#x442;&#x43e;&#x442; &#x441;&#x442;&#x43e;&#x43b;&#x431;&#x435;&#x446; &#x431;&#x443;&#x434;&#x435;&#x442; &#x437;&#x430;&#x43d;&#x438;&#x43c;&#x430;&#x442;&#x44c; &#x432;&#x441;&#x44e; &#x448;&#x438;&#x440;&#x438;&#x43d;&#x443; &#x43d;&#x430; &#x441;&#x43c;&#x430;&#x440;&#x442;&#x444;&#x43e;&#x43d;&#x430;&#x445;&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="masonry"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Masonry-сетка</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-green">Обновлено в 2.1.2</span>
				<div class="alert">
					<div class="alert__content">Masonry - вид сетки, которая работает по принципу "кирпичной кладки", т.е. максимально эффективно заполняя отведенное пространство блоками</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Altrone сам распределяет блоки по позициям. Вам нужно лишь указать количество столбцов, на которые будут располагаться блоки. </div>
				</div>	
				<div class="alert alert--color-yellow">
					<div class="alert__content">Начиная с версии 2.1.2, данный компонент называется <b>.masonry</b>. Для версий старше 2.1.2 он называется <b>.masonry-grid</b>, его элементы и модификаторы также начинаются с <b>.masonry-grid-*</b></div>
				</div>				
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs4">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs4Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs4Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs4Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs4Template">Шаблон</div>
				</div>			

				<div id="tabs4Example">
					<div class="masonry masonry--columns-3">
						<div class="masonry__item padding-1 size-fix red-bg white-fg">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aliquam reiciendis facilis deleniti, ratione perspiciatis unde exercitationem maiores magnam blanditiis. Fugiat dolorem doloribus molestias nulla consequatur officiis inventore harum perspiciatis.
						</div>						
						<div class="masonry__item padding-1 size-fix orange-bg white-fg">
							Hello, it's me <br>
							I was wondering if after all these years you'd like to meet <br>
							To go over everything <br>
							They say that time's supposed to heal ya <br>
							But I ain't done much healing <br>
							<br>
							Hello, can you hear me<br>
							I'm in California dreaming about who we used to be<br>
							When we were younger and free<br>
							I've forgotten how it felt before the world fell at our feet
						</div>
						<div class="masonry__item padding-1 size-fix brown-bg white-fg">
							It's amazing!
						</div>
						<div class="masonry__item">
							<img src="http://temlyakov.ru/wp-content/uploads/2015/10/adele-hello-perevod1.jpg" class="img--responsive" alt="">
						</div>
						<div class="masonry__item padding-1 size-fix yellow-bg text-shadow white-fg">
							Indie music, от англ. independent music — «независимая музыка») включает в себя музыкальные жанры, субкультуры, для которых характерны независимость от коммерческой поп-музыки и мейнстрима, особая своя DIY идеология (Do It Yourself — делай это сам).
						</div>
						<div class="masonry__item padding-1 size-fix violet-bg white-fg">
							<div class="form form--fit"><input type="text" placeholder="Введите поисковый запрос..."></div>
						</div>
						<div class="masonry__item padding-1 size-fix teal-bg white-fg">
							<h2>Несчастная</h2>
							<p>Говорят, зло не имеет лица. Действительно, на его лице не отражалось никаких чувств. Ни проблеска сочувствия не было на нем, а ведь боль просто невыносима. Разве он не видит ужас в моих глазах и панику на моем лице? Он спокойно, можно сказать, профессионально выполнял свою грязную работу, а в конце учтиво сказал: «Прополощите рот, пожалуйста».</p>
						</div>
						<div class="masonry__item padding-1 size-fix blue-bg white-fg">
							<div class="grid">
								<div class="col-6 u-blue-bg blue-fg padding-1 size-fix">Левая</div>
								<div class="col-6 l-blue-bg blue-fg padding-1 size-fix">Правая</div>
							</div>
						</div>
					</div>
				</div>

				<div id="tabs4Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.masonry__item</code></div>
						<div class="col-7 size-fix padding-1">Блок, который будет позиционироваться на сетке</div>
					</div>			
				</div>

				<div id="tabs4Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.masonry--columns-*</code></div>
						<div class="col-7 size-fix padding-1">Максимальное количество колонок (Вместо * нужно указать число в пределах от 1 до 6)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.masonry--#-columns-*</code></div>
						<div class="col-7 size-fix padding-1">Максимальное количество колонок для конкретного типа устройств (Вместо * нужно указать число в пределах от 1 до 6, вместо # - тип устройства)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.masonry--margin-*</code></div>
						<div class="col-7 size-fix padding-1">Задается размер отступов между блоками. Вместо * нужно указать <code>small</code> или <code>medium</code></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.masonry--no-margin</code></div>
						<div class="col-7 size-fix padding-1">Убирает отступы между блоками</div>
					</div>
				</div>

				<div id="tabs4Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;masonry masonry--columns-3&quot;&gt;
	&lt;div class=&quot;masonry__item padding-1 size-fix red-bg white-fg&quot;&gt;
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aliquam reiciendis facilis deleniti, ratione perspiciatis unde exercitationem maiores magnam blanditiis. Fugiat dolorem doloribus molestias nulla consequatur officiis inventore harum perspiciatis.
	&lt;/div&gt;						
	&lt;div class=&quot;masonry__item padding-1 size-fix orange-bg white-fg&quot;&gt;
		Hello, it&#039;s me &lt;br&gt;
		I was wondering if after all these years you&#039;d like to meet &lt;br&gt;
		To go over everything &lt;br&gt;
		They say that time&#039;s supposed to heal ya &lt;br&gt;
		But I ain&#039;t done much healing &lt;br&gt;
		&lt;br&gt;
		Hello, can you hear me&lt;br&gt;
		I&#039;m in California dreaming about who we used to be&lt;br&gt;
		When we were younger and free&lt;br&gt;
		I&#039;ve forgotten how it felt before the world fell at our feet
	&lt;/div&gt;
	&lt;div class=&quot;masonry__item padding-1 size-fix brown-bg white-fg&quot;&gt;
		It&#039;s amazing!
	&lt;/div&gt;
	&lt;div class=&quot;masonry__item&quot;&gt;
		&lt;img src=&quot;http://temlyakov.ru/wp-content/uploads/2015/10/adele-hello-perevod1.jpg&quot; class=&quot;img--responsive&quot; alt=&quot;&quot;&gt;
	&lt;/div&gt;
	&lt;div class=&quot;masonry__item padding-1 size-fix yellow-bg text-shadow white-fg&quot;&gt;
		Indie music, &#x43e;&#x442; &#x430;&#x43d;&#x433;&#x43b;. independent music &mdash; &laquo;&#x43d;&#x435;&#x437;&#x430;&#x432;&#x438;&#x441;&#x438;&#x43c;&#x430;&#x44f; &#x43c;&#x443;&#x437;&#x44b;&#x43a;&#x430;&raquo;) &#x432;&#x43a;&#x43b;&#x44e;&#x447;&#x430;&#x435;&#x442; &#x432; &#x441;&#x435;&#x431;&#x44f; &#x43c;&#x443;&#x437;&#x44b;&#x43a;&#x430;&#x43b;&#x44c;&#x43d;&#x44b;&#x435; &#x436;&#x430;&#x43d;&#x440;&#x44b;, &#x441;&#x443;&#x431;&#x43a;&#x443;&#x43b;&#x44c;&#x442;&#x443;&#x440;&#x44b;, &#x434;&#x43b;&#x44f; &#x43a;&#x43e;&#x442;&#x43e;&#x440;&#x44b;&#x445; &#x445;&#x430;&#x440;&#x430;&#x43a;&#x442;&#x435;&#x440;&#x43d;&#x44b; &#x43d;&#x435;&#x437;&#x430;&#x432;&#x438;&#x441;&#x438;&#x43c;&#x43e;&#x441;&#x442;&#x44c; &#x43e;&#x442; &#x43a;&#x43e;&#x43c;&#x43c;&#x435;&#x440;&#x447;&#x435;&#x441;&#x43a;&#x43e;&#x439; &#x43f;&#x43e;&#x43f;-&#x43c;&#x443;&#x437;&#x44b;&#x43a;&#x438; &#x438; &#x43c;&#x435;&#x439;&#x43d;&#x441;&#x442;&#x440;&#x438;&#x43c;&#x430;, &#x43e;&#x441;&#x43e;&#x431;&#x430;&#x44f; &#x441;&#x432;&#x43e;&#x44f; DIY &#x438;&#x434;&#x435;&#x43e;&#x43b;&#x43e;&#x433;&#x438;&#x44f; (Do It Yourself &mdash; &#x434;&#x435;&#x43b;&#x430;&#x439; &#x44d;&#x442;&#x43e; &#x441;&#x430;&#x43c;).
	&lt;/div&gt;
	&lt;div class=&quot;masonry__item padding-1 size-fix violet-bg white-fg&quot;&gt;
		&lt;div class=&quot;form form--fit&quot;&gt;&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x43f;&#x43e;&#x438;&#x441;&#x43a;&#x43e;&#x432;&#x44b;&#x439; &#x437;&#x430;&#x43f;&#x440;&#x43e;&#x441;...&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;masonry__item padding-1 size-fix teal-bg white-fg&quot;&gt;
		&lt;h2&gt;&#x41d;&#x435;&#x441;&#x447;&#x430;&#x441;&#x442;&#x43d;&#x430;&#x44f;&lt;/h2&gt;
		&lt;p&gt;&#x413;&#x43e;&#x432;&#x43e;&#x440;&#x44f;&#x442;, &#x437;&#x43b;&#x43e; &#x43d;&#x435; &#x438;&#x43c;&#x435;&#x435;&#x442; &#x43b;&#x438;&#x446;&#x430;. &#x414;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x442;&#x435;&#x43b;&#x44c;&#x43d;&#x43e;, &#x43d;&#x430; &#x435;&#x433;&#x43e; &#x43b;&#x438;&#x446;&#x435; &#x43d;&#x435; &#x43e;&#x442;&#x440;&#x430;&#x436;&#x430;&#x43b;&#x43e;&#x441;&#x44c; &#x43d;&#x438;&#x43a;&#x430;&#x43a;&#x438;&#x445; &#x447;&#x443;&#x432;&#x441;&#x442;&#x432;. &#x41d;&#x438; &#x43f;&#x440;&#x43e;&#x431;&#x43b;&#x435;&#x441;&#x43a;&#x430; &#x441;&#x43e;&#x447;&#x443;&#x432;&#x441;&#x442;&#x432;&#x438;&#x44f; &#x43d;&#x435; &#x431;&#x44b;&#x43b;&#x43e; &#x43d;&#x430; &#x43d;&#x435;&#x43c;, &#x430; &#x432;&#x435;&#x434;&#x44c; &#x431;&#x43e;&#x43b;&#x44c; &#x43f;&#x440;&#x43e;&#x441;&#x442;&#x43e; &#x43d;&#x435;&#x432;&#x44b;&#x43d;&#x43e;&#x441;&#x438;&#x43c;&#x430;. &#x420;&#x430;&#x437;&#x432;&#x435; &#x43e;&#x43d; &#x43d;&#x435; &#x432;&#x438;&#x434;&#x438;&#x442; &#x443;&#x436;&#x430;&#x441; &#x432; &#x43c;&#x43e;&#x438;&#x445; &#x433;&#x43b;&#x430;&#x437;&#x430;&#x445; &#x438; &#x43f;&#x430;&#x43d;&#x438;&#x43a;&#x443; &#x43d;&#x430; &#x43c;&#x43e;&#x435;&#x43c; &#x43b;&#x438;&#x446;&#x435;? &#x41e;&#x43d; &#x441;&#x43f;&#x43e;&#x43a;&#x43e;&#x439;&#x43d;&#x43e;, &#x43c;&#x43e;&#x436;&#x43d;&#x43e; &#x441;&#x43a;&#x430;&#x437;&#x430;&#x442;&#x44c;, &#x43f;&#x440;&#x43e;&#x444;&#x435;&#x441;&#x441;&#x438;&#x43e;&#x43d;&#x430;&#x43b;&#x44c;&#x43d;&#x43e; &#x432;&#x44b;&#x43f;&#x43e;&#x43b;&#x43d;&#x44f;&#x43b; &#x441;&#x432;&#x43e;&#x44e; &#x433;&#x440;&#x44f;&#x437;&#x43d;&#x443;&#x44e; &#x440;&#x430;&#x431;&#x43e;&#x442;&#x443;, &#x430; &#x432; &#x43a;&#x43e;&#x43d;&#x446;&#x435; &#x443;&#x447;&#x442;&#x438;&#x432;&#x43e; &#x441;&#x43a;&#x430;&#x437;&#x430;&#x43b;: &laquo;&#x41f;&#x440;&#x43e;&#x43f;&#x43e;&#x43b;&#x43e;&#x449;&#x438;&#x442;&#x435; &#x440;&#x43e;&#x442;, &#x43f;&#x43e;&#x436;&#x430;&#x43b;&#x443;&#x439;&#x441;&#x442;&#x430;&raquo;.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;masonry__item padding-1 size-fix blue-bg white-fg&quot;&gt;
		&lt;div class=&quot;grid&quot;&gt;
			&lt;div class=&quot;col-6 u-blue-bg blue-fg padding-1 size-fix&quot;&gt;&#x41b;&#x435;&#x432;&#x430;&#x44f;&lt;/div&gt;
			&lt;div class=&quot;col-6 l-blue-bg blue-fg padding-1 size-fix&quot;&gt;&#x41f;&#x440;&#x430;&#x432;&#x430;&#x44f;&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="layouts"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Линейная разметка</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-red">Flex</span>
				<div class="alert">
					<div class="alert__content">Линейная разметка имеет два вида - горизонтальная и вертикальная. Комбинируя эти два вида, вы можете построить сетку любой сложности</div>
				</div>		
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs5">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs5Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs5Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs5Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs5Template">Шаблон</div>
				</div>			

				<div id="tabs5Example">
					<div class="vertical-layout">
						<div class="row u-green-bg white-fg padding-1 size-fix">
							<div class="horizontal-layout">
								<div class="column l-green-bg padding-1 size-fix">Столбец 1</div>
								<div class="column green-bg padding-1 size-fix">Столбец 2</div>
								<div class="column d-green-bg padding-1 size-fix">
									<div class="vertical-layout">
										<div class="row green-bg padding-05 size-fix">Строка 1</div>
										<div class="row l-green-bg padding-05 size-fix">Строка 2</div>
										<div class="row u-green-bg padding-05 size-fix">Строка 3</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row padding-1 u-blue-bg size-fix">Строка 2</div>
						<div class="row padding-1 u-purple-bg size-fix">Строка 3</div>
					</div>
				</div>

				<div id="tabs5Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.column</code></div>
						<div class="col-7 size-fix padding-1">Колонка (используется для <code>.vertical-layout</code></div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.row</code></div>
						<div class="col-7 size-fix padding-1">Строка (используется для <code>.row-layout</code></div>
					</div>			
				</div>

				<div id="tabs5Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.horizontal-layout--centered</code></div>
						<div class="col-7 size-fix padding-1">Центрирует колонки по базовой линии</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.vertical-layout--reverse</code></div>
						<div class="col-7 size-fix padding-1">Строки отображаются в обратном порядке</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.vertical-layout--stripped, .horizontal-layout--stripped</code></div>
						<div class="col-7 size-fix padding-1">Фон четных строк/колонок темнее, чем у нечетных</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.vertical-layout--invert, .horizontal-layout--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
				</div>

				<div id="tabs5Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;vertical-layout&quot;&gt;
	&lt;div class=&quot;row u-green-bg white-fg padding-1 size-fix&quot;&gt;
		&lt;div class=&quot;horizontal-layout&quot;&gt;
			&lt;div class=&quot;column l-green-bg padding-1 size-fix&quot;&gt;&#x421;&#x442;&#x43e;&#x43b;&#x431;&#x435;&#x446; 1&lt;/div&gt;
			&lt;div class=&quot;column green-bg padding-1 size-fix&quot;&gt;&#x421;&#x442;&#x43e;&#x43b;&#x431;&#x435;&#x446; 2&lt;/div&gt;
			&lt;div class=&quot;column d-green-bg padding-1 size-fix&quot;&gt;
				&lt;div class=&quot;vertical-layout&quot;&gt;
					&lt;div class=&quot;row green-bg padding-05 size-fix&quot;&gt;&#x421;&#x442;&#x440;&#x43e;&#x43a;&#x430; 1&lt;/div&gt;
					&lt;div class=&quot;row l-green-bg padding-05 size-fix&quot;&gt;&#x421;&#x442;&#x440;&#x43e;&#x43a;&#x430; 2&lt;/div&gt;
					&lt;div class=&quot;row u-green-bg padding-05 size-fix&quot;&gt;&#x421;&#x442;&#x440;&#x43e;&#x43a;&#x430; 3&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;row padding-1 u-blue-bg size-fix&quot;&gt;&#x421;&#x442;&#x440;&#x43e;&#x43a;&#x430; 2&lt;/div&gt;
	&lt;div class=&quot;row padding-1 u-purple-bg size-fix&quot;&gt;&#x421;&#x442;&#x440;&#x43e;&#x43a;&#x430; 3&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="parallax"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Parallax-эффект</h1>
				<span class="label label--color-green">Доступно с версии 2.1</span>
				<div class="alert">
					<div class="alert__content">Эффект параллакса достигается благодаря установлению различной скорости скроллинга переднего и фонового слоя</div>
				</div>		
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs6">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs6Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs6Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs6Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs6Template">Шаблон</div>
				</div>			

				<div id="tabs6Example">
					<a href="parallax-example.html"><button class="button--color-blue">Демонстрация Parallax</button></a>
				</div>

				<div id="tabs6Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.parallax__layer</code></div>
						<div class="col-7 size-fix padding-1">Слой</div>
					</div>	
				</div>

				<div id="tabs6Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.parallax__layer-front</code></div>
						<div class="col-7 size-fix padding-1">Передний слой</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.parallax__layer-backstage</code></div>
						<div class="col-7 size-fix padding-1">Задний слой</div>
					</div>					
				</div>

				<div id="tabs6Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;parallax&quot;&gt;
	&lt;div class=&quot;parallax__layer parallax__layer--front&quot;&gt;&#x41f;&#x435;&#x440;&#x435;&#x434;&#x43d;&#x438;&#x439; &#x444;&#x43e;&#x43d;&lt;/div&gt;
	&lt;div class=&quot;parallax__layer parallax__layer--backstage&quot;&gt;&#x417;&#x430;&#x434;&#x43d;&#x438;&#x439; &#x444;&#x43e;&#x43d;&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="loading"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Загрузка</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Компонент загрузки служит для отображения информации о том, что происходит загрузка данных</div>
				</div>		
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs7">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs7Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs7Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs7Template">Шаблон</div>
				</div>			

				<div id="tabs7Example">
					<div class="loading-layout"></div>
				</div>
				
				<div id="tabs7Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.loading-layout--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.loading-layout--transparent</code></div>
						<div class="col-7 size-fix padding-1">Прозрачный фон</div>
					</div>					
				</div>

				<div id="tabs7Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;loading-layout&quot;&gt;&lt;/div&gt;</code></pre></div>
				</div>
			</div>
		</div>
	</div>	
</div>