<? 
	$title = 'Сетка';
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
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Сетка</div>
		
		<a name="tabs"></a>
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

		<a name="styles"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Устройства и разрешения экранов</h1>
				<div class="alert">
					<div class="alert__content">Ознакомьтесь с вариантами сетки Altrone для различных видов устройств</div>
				</div>

				<div class="grid">
					<div class="col-5 size-fix padding-1 bold">Название устройства</div>
					<div class="col-2 size-fix padding-1 bold">Обозначение</div>
					<div class="col-5 size-fix padding-1 bold">Ширина экрана</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Монитор</b></div>
					<div class="col-2 padding-1 size-fix"><code>-</code></div>
					<div class="col-5 padding-1 size-fix">1200px и более</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Планшет в ландшафтной ориентации или экран нетбука</b></div>
					<div class="col-2 padding-1 size-fix"><code>lt</code></div>
					<div class="col-5 padding-1 size-fix">993px - 1999px</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Планшет в портретной ориентации</b></div>
					<div class="col-2 padding-1 size-fix"><code>t</code></div>
					<div class="col-5 padding-1 size-fix">768px - 992px</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Смартфон в ландшафтной ориентации</b></div>
					<div class="col-2 padding-1 size-fix"><code>lm</code></div>
					<div class="col-5 padding-1 size-fix">481px - 767px</div>
				</div>
				<div class="grid">
					<div class="col-5 padding-1 size-fix"><b>Смартфон в портретной ориентации</b></div>
					<div class="col-2 padding-1 size-fix"><code>m</code></div>
					<div class="col-5 padding-1 size-fix">не более 480px</div>
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
					<a href="#tabs"><div class="list__item">Стандартная сетка</div>
					<a href="#tabs"><div class="list__item">Устройства и разрешения экранов</div>
					<a href="#styles"><div class="list__item">Адаптивная сетка</div></a>
					<a href="#pagination"><div class="list__item">Masonry-сетка</div></a>
					<a href="#pagination"><div class="list__item">Линейная разметка</div></a>
				</div>				
			</div>
		</div>
	</div>
</div>