<? 
	$title = 'Кнопки';
	include('parent.php'); 
?>

<script type="text/javascript">
	$(function() {
		var tab1 = new Tabs($('#buttonsTabs'));
		var tab2 = new Tabs($('#colorsTabs'));
		var tabs3 = new Tabs($('#smoothTabs'));
		var tabs4 = new Tabs($('#sizeTabs'));
		var tabs5 = new Tabs($('#iconTabs'));
		var tabs6 = new Tabs($('#transparentTabs'));
		var tabs7 = new Tabs($('#groupTabs'));
		var tabs8 = new Tabs($('#switchTabs'));

		var toggleButton = new ToggleButton($('#toggleButton'));
		$('#toggleButton').click(function() {
			toggleButton.toggle();
		});
	});
</script>

<div class="grid">
	<div class="col-3 col-lm-6 left-col" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#buttons"><div class="list__item">Стандартные кнопки</div>
					<a href="#colors"><div class="list__item">Цвета кнопок</div></a>
					<a href="#smooth"><div class="list__item">Закругление кнопок</div></a>
					<a href="#size"><div class="list__item">Размеры кнопок</div></a>
					<a href="#icon"><div class="list__item">Кнопки с иконкой</div></a>
					<a href="#transparent"><div class="list__item">Прозрачность кнопок</div></a>
					<a href="#group"><div class="list__item">Группа кнопок</div></a>
					<a href="#switch"><div class="list__item">Переключатели</div></a>
				</div>				
			</div>
		</div>
	</div>

	<div class="col-9 col-lm-6 offset-3 offset-lm-0">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Кнопки</div>
		
		<a name="buttons"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Стандартные кнопки</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">По умолчанию Altrone применяет стили кнопок ко всем элементам &lt;button&gt; и &lt;input type=&quot;button&quot;&gt; (а также &lt;input type=&quot;submit&quot;&gt; и &lt;input type=&quot;reset&quot;&gt;). </div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Если нужно применить стиль кнопки к объекту, который в разметке не является кнопкой, то примените к нему класс .button</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Чтобы кнопка стала заблокированной, примените к ней аттрибут disabled</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="buttonsTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="buttonsExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="buttonsTemplate">Шаблон</div>
				</div>			

				<div id="buttonsExamples">
					<button>Стандартная кнопка</button> <button disabled>Неактивная кнопка</button> <span class="button">Блок, который выглядит как кнопка</span>
				</div>

				<div id="buttonsTemplate">
					<div class="grid">
<pre><code class="html">&lt;button&gt;&#x421;&#x442;&#x430;&#x43d;&#x434;&#x430;&#x440;&#x442;&#x43d;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;button disabled&gt;&#x41d;&#x435;&#x430;&#x43a;&#x442;&#x438;&#x432;&#x43d;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;span class=&quot;button&quot;&gt;&#x411;&#x43b;&#x43e;&#x43a;, &#x43a;&#x43e;&#x442;&#x43e;&#x440;&#x44b;&#x439; &#x432;&#x44b;&#x433;&#x43b;&#x44f;&#x434;&#x438;&#x442; &#x43a;&#x430;&#x43a; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/span&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="colors"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Цвета кнопок</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данная группа модификаторов позволяет установить цвет фона для кнопки</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные модификаторы можно использовать совместно со всеми остальными модификаторами кнопок</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="colorsTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="colorsExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="colorsMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="colorsTemplate">Шаблон</div>
				</div>			

				<div id="colorsExamples">
					<button class="button--color-red">Красная кнопка</button><button class="button--color-blue">Синяя кнопка</button>
				</div>

				<div id="colorsMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button--color-*</code></div>
						<div class="col-7 padding-1">Цвет фона кнопки. Вместо * нужно указать значение цвета. Для кнопок доступны все цвета из основной палитры и цвет "Black" из дополнительной. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="colorsTemplate">
					<div class="grid">
<pre><code class="html">&lt;button class=&quot;button--color-red&quot;&gt;&#x41a;&#x440;&#x430;&#x441;&#x43d;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;button class=&quot;button--color-blue&quot;&gt;&#x421;&#x438;&#x43d;&#x44f;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="smooth"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Закругление кнопок</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данная группа модификаторов позволяет установить степень закругления границ кнопок. Стандартное закругление - 0.2em</div>					
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные модификаторы можно использовать совместно со всеми остальными модификаторами кнопок. Для .button--circle не рекомендуется использовать модификатор .button--fit</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="smoothTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="smoothExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="smoothMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="smoothTemplate">Шаблон</div>
				</div>			

				<div id="smoothExamples">
					<button class="button--color-violet">Обычная кнопка</button>
					<button class="button--color-violet button--no-smooth">Кнопка без закругления</button>
					<button class="button--color-violet button--smooth">Кнопка Smooth</button>
					<button class="button--color-violet button--rounded">Кнопка Rounded</button>
					<button class="button--color-violet button--circle button--only-icons"><i class="fa fa-plus"></i></button>
				</div>

				<div id="smoothMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button--no-smooth</code></div>
						<div class="col-7 padding-1">Убирает закругление у кнопки</div>
						<div class="col-3 padding-1"><code>.button--smooth</code></div>
						<div class="col-7 padding-1">Устанавливает закругление равным 0.5em</div>
						<div class="col-3 padding-1"><code>.button--rounded</code></div>
						<div class="col-7 padding-1">Устанавливает закругление равным 1.25em</div>
						<div class="col-3 padding-1"><code>.button--circle</code></div>
						<div class="col-7 padding-1">Делает кнопку полностью круглой</div>
					</div>
				</div>

				<div id="smoothTemplate">
					<div class="grid">
<pre><code class="html">&lt;button class=&quot;button--color-violet&quot;&gt;&#x41e;&#x431;&#x44b;&#x447;&#x43d;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;button class=&quot;button--color-violet button--no-smooth&quot;&gt;&#x41a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430; &#x431;&#x435;&#x437; &#x437;&#x430;&#x43a;&#x440;&#x443;&#x433;&#x43b;&#x435;&#x43d;&#x438;&#x44f;&lt;/button&gt;
&lt;button class=&quot;button--color-violet button--smooth&quot;&gt;&#x41a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430; Smooth&lt;/button&gt;
&lt;button class=&quot;button--color-violet button--rounded&quot;&gt;&#x41a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430; Rounded&lt;/button&gt;
&lt;button class=&quot;button--color-violet button--circle button--only-icons&quot;&gt;&lt;i class=&quot;fa fa-plus&quot;&gt;&lt;/i&gt;&lt;/button&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="size"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Размер кнопок</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данная группа модификаторов позволяет установить относительный размер кнопки</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные модификаторы можно использовать совместно со всеми остальными модификаторами кнопок</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="sizeTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="sizeExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="sizeMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="sizeTemplate">Шаблон</div>
				</div>			

				<div id="sizeExamples">
					<button class="button--color-green button--size-small">Маленькая кнопка</button>
					<button class="button--color-green">Стандартная кнопка</button>
					<button class="button--color-green button--size-large">Большая кнопка</button>
					<button class="button--color-green button--size-xl">XL кнопка</button><br>
					<button class="button--color-green button--fit">Кнопка на всю ширину</button>
				</div>

				<div id="sizeMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button--size-small</code></div>
						<div class="col-7 padding-1">Устанавливает маленький размер (80% от обычной)</div>
						<div class="col-3 padding-1"><code>.button--size-large</code></div>
						<div class="col-7 padding-1">Устанавливает большой размер (130% от обычной)</div>
						<div class="col-3 padding-1"><code>.button--size-xl</code></div>
						<div class="col-7 padding-1">Устанавливает огромный размер (200% от обычной)</div>
						<div class="col-3 padding-1"><code>.button--fit</code></div>
						<div class="col-7 padding-1">Кнопка занимает всю ширину родительского блока</div>
					</div>
				</div>

				<div id="sizeTemplate">
					<div class="grid">
<pre><code class="html">&lt;button class=&quot;button--color-green button--size-small&quot;&gt;&#x41c;&#x430;&#x43b;&#x435;&#x43d;&#x44c;&#x43a;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;button class=&quot;button--color-green&quot;&gt;&#x421;&#x442;&#x430;&#x43d;&#x434;&#x430;&#x440;&#x442;&#x43d;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;button class=&quot;button--color-green button--size-large&quot;&gt;&#x411;&#x43e;&#x43b;&#x44c;&#x448;&#x430;&#x44f; &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;
&lt;button class=&quot;button--color-green button--size-xl&quot;&gt;XL &#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430;&lt;/button&gt;&lt;br&gt;
&lt;button class=&quot;button--color-green button--fit&quot;&gt;&#x41a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430; &#x43d;&#x430; &#x432;&#x441;&#x44e; &#x448;&#x438;&#x440;&#x438;&#x43d;&#x443;&lt;/button&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="icon"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Кнопки с иконкой</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данная группа модификаторов позволяет добавить на кнопку иконку</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Если текст на кнопке нужно сделать курсивным, то воспользуйтесь глобальным модификатором .italic, вместо тега &lt;i&gt;</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные модификаторы можно использовать совместно со всеми остальными модификаторами кнопок</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="iconTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="iconExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="iconMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="iconTemplate">Шаблон</div>
				</div>			

				<div id="iconExamples">
					<button class="button--color-olive button--icon"><i class="fa fa-location-arrow"></i>Где я?</button>
					<button class="button--color-purple button--only-icon"><i class="fa fa-share-alt"></i></button>
				</div>

				<div id="iconMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button--icon</code></div>
						<div class="col-7 padding-1">Кнопка имеет иконку и сопроводительный текст</div>
						<div class="col-3 padding-1"><code>.button--only-icon</code></div>
						<div class="col-7 padding-1">Кнопка имеет только иконку</div>
					</div>
				</div>

				<div id="iconTemplate">
					<div class="grid">
<pre><code class="html">&lt;button class=&quot;button--color-olive button--icon&quot;&gt;&lt;i class=&quot;fa fa-location-arrow&quot;&gt;&lt;/i&gt;&#x413;&#x434;&#x435; &#x44f;?&lt;/button&gt;
&lt;button class=&quot;button--color-purple button--only-icon&quot;&gt;&lt;i class=&quot;fa fa-share-alt&quot;&gt;&lt;/i&gt;&lt;/button&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		
		<a name="transparent"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Прозрачность кнопок</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данная группа модификаторов позволяет установить степень прозрачности кнопки</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данные модификаторы можно использовать совместно со всеми остальными модификаторами кнопок</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="transparentTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="transparentExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="transparentMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="transparentTemplate">Шаблон</div>
				</div>			

				<div id="transparentExamples">
					<button class="button--only-borders button--color-teal">Только границы</button>
					<button class="button--transparent button--color-teal">Прозрачная, при наведении появляется фон</button>
					<button class="button--transparent-full button--color-teal">Полностью прозрачная</button>
				</div>

				<div id="transparentMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button--only-borders</code></div>
						<div class="col-7 padding-1">Кнопка имеет прозрачный фон, но цветные границы</div>
						<div class="col-3 padding-1"><code>.button--transparent</code></div>
						<div class="col-7 padding-1">Кнопка прозрачна в обычном состоянии, при наведении появляется фон</div>
						<div class="col-3 padding-1"><code>.button--transparent-full</code></div>
						<div class="col-7 padding-1">Кнопка полностью прозрачна</div>
					</div>
				</div>

				<div id="transparentTemplate">
					<div class="grid">
<pre><code class="html">&lt;button class=&quot;button--only-borders button--color-teal&quot;&gt;&#x422;&#x43e;&#x43b;&#x44c;&#x43a;&#x43e; &#x433;&#x440;&#x430;&#x43d;&#x438;&#x446;&#x44b;&lt;/button&gt;
&lt;button class=&quot;button--transparent button--color-teal&quot;&gt;&#x41f;&#x440;&#x43e;&#x437;&#x440;&#x430;&#x447;&#x43d;&#x430;&#x44f;, &#x43f;&#x440;&#x438; &#x43d;&#x430;&#x432;&#x435;&#x434;&#x435;&#x43d;&#x438;&#x438; &#x43f;&#x43e;&#x44f;&#x432;&#x43b;&#x44f;&#x435;&#x442;&#x441;&#x44f; &#x444;&#x43e;&#x43d;&lt;/button&gt;
&lt;button class=&quot;button--transparent-full button--color-teal&quot;&gt;&#x41f;&#x43e;&#x43b;&#x43d;&#x43e;&#x441;&#x442;&#x44c;&#x44e; &#x43f;&#x440;&#x43e;&#x437;&#x440;&#x430;&#x447;&#x43d;&#x430;&#x44f;&lt;/button&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
	
		<a name="group"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Группа кнопок</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-red">Flex</span>
				<div class="alert">
					<div class="alert__content">Блок .button-group позволяет соединять кнопки, схожие по функциональности</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Для того, чтобы расположить несколько .button-group в ряд можно воспользоваться возможностями сетки .grid или .horizontal-layout</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="groupTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="groupExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="groupMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="groupTemplate">Шаблон</div>
				</div>			

				<div id="groupExamples">
					<div class="grid u-gray-bg padding-vertical-1">
						<div class="col-2 col-t-3">
							<div class="button-group">
								<button class="button--only-icon"><i class="fa fa-arrow-left"></i></button>
								<button class="button--only-icon"><i class="fa fa-arrow-right"></i></button>
							</div>
						</div>
						<div class="col-10 col-t-5">
							<div class="button-group">
								<button class="button--only-icon"><i class="fa fa-refresh"></i></button>
								<button class="button--only-icon"><i class="fa fa-star-o"></i></button>
								<button class="button--only-icon"><i class="fa fa-bars"></i></button>
							</div>
						</div>
					</div>	
				</div>

				<div id="groupMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button-group--smooth</code></div>
						<div class="col-7 padding-1">Задает скругление граничных кнопок равное 0.5em</div>
						<div class="col-3 padding-1"><code>.button-group--rounded</code></div>
						<div class="col-7 padding-1">Задает скругление граничных кнопок равное 1.25em</div>
						<div class="col-3 padding-1"><code>.button-group--no-smooth</code></div>
						<div class="col-7 padding-1">Убирает скругление граничных кнопок</div>
						<div class="col-3 padding-1"><code>.button-group--vertical</code></div>
						<div class="col-7 padding-1">Распологает кнопки вертикально</div>
					</div>
				</div>

				<div id="groupTemplate">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;grid u-gray-bg padding-vertical-1&quot;&gt;
	&lt;div class=&quot;col-2 col-t-3&quot;&gt;
		&lt;div class=&quot;button-group&quot;&gt;
			&lt;button class=&quot;button--only-icon&quot;&gt;&lt;i class=&quot;fa fa-arrow-left&quot;&gt;&lt;/i&gt;&lt;/button&gt;
			&lt;button class=&quot;button--only-icon&quot;&gt;&lt;i class=&quot;fa fa-arrow-right&quot;&gt;&lt;/i&gt;&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-10 col-t-5&quot;&gt;
		&lt;div class=&quot;button-group&quot;&gt;
			&lt;button class=&quot;button--only-icon&quot;&gt;&lt;i class=&quot;fa fa-refresh&quot;&gt;&lt;/i&gt;&lt;/button&gt;
			&lt;button class=&quot;button--only-icon&quot;&gt;&lt;i class=&quot;fa fa-star-o&quot;&gt;&lt;/i&gt;&lt;/button&gt;
			&lt;button class=&quot;button--only-icon&quot;&gt;&lt;i class=&quot;fa fa-bars&quot;&gt;&lt;/i&gt;&lt;/button&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		
		<a name="switch"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Переключатели</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Данный скрипт реализует функцию кнопки-переключателя, которая может находиться в двух состояниях - "включено" или "выключено"</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Данный скрипт можно использовать с любыми модификаторами кнопок</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="switchTabs">
					<div class="tabs__item tabs__item--active" data-tab-target="switchExamples">Примеры</div>
					<div class="tabs__item" data-tab-target="switchMods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="switchJS">JavaScript</div>
					<div class="tabs__item" data-tab-target="switchTemplate">Шаблон</div>
				</div>			

				<div id="switchExamples">
					<button id="toggleButton">Переключатель</button>
				</div>

				<div id="switchMods">
					<div class="grid">
						<div class="col-3 padding-1 bold">Наименование класса</div>
						<div class="col-7 padding-1 bold">Описание класса</div>
						<div class="col-3 padding-1"><code>.button--checked</code></div>
						<div class="col-7 padding-1">Задает стиль "активированной" кнопки</div>
					</div>
				</div>

				<div id="switchJS">

<pre><code class="js">var toggleButton = new ToggleButton($('#toggleButton'));
$('#toggleButton').click(function() {
	toggleButton.toggle();
});	
</code></pre>
					<h4>Методы и свойства ToggleButton</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>ToggleButton(element)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает element, который является jQuery DOM объектом</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>activate()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Активирует кнопку</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>deactivate()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Деактивирует кнопку</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>toggle()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Меняет значение активации кнопки на противоположное</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>activated</code></div>
						<div class="col-3 size-fix padding-1">bool</div>
						<div class="col-6 size-fix padding-1">Содержит статус активации кнопки. True, если кнопка активирована, false, если она деактивирована</div>
					</div>
				</div>

				<div id="switchTemplate">
					<div class="grid">
<pre><code class="html">&lt;button id=&quot;toggleButton&quot;&gt;&#x41f;&#x435;&#x440;&#x435;&#x43a;&#x43b;&#x44e;&#x447;&#x430;&#x442;&#x435;&#x43b;&#x44c;&lt;/button&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>