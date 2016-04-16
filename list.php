<? 
	$title = 'Списки';
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
	});
</script>

<div class="grid">
	<div class="col-9">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Списки</div>
		
		<a name="list"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Стандартный список</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Списки можно использовать для навигации по разделам сайта. </div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Списки можно строить из блоков div, или из блоков ul, li</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы списков можно использовать совместно друг с другом</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="grid">
						<div class="col-4">
							<div class="list list--color-orange">
								<div class="list__item">Amber</div>
								<div class="list__item">Black</div>
								<div class="list__item">Cyan</div>
								<div class="list__separator"></div>
								<div class="list__item">Denim</div>
							</div>
						</div>
					</div>					
				</div>

				<div id="tabs1Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list__item</code></div>
						<div class="col-7 size-fix padding-1">Элемент списка</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list__separator</code></div>
						<div class="col-7 size-fix padding-1">Разделитель списка</div>
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет элементов списка. Вместо * нужно указать значение цвета. Для элементов списка доступны все цвета из основной палитры и цвет black из дополнительной. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--horizontal</code></div>
						<div class="col-7 size-fix padding-1">Горизонтальная ориентация вкладок</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list__item--active</code></div>
						<div class="col-7 size-fix padding-1">Горизонтальная ориентация вкладок</div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;list list--color-orange&quot;&gt;
	&lt;div class=&quot;list__item&quot;&gt;Amber&lt;/div&gt;
	&lt;div class=&quot;list__item&quot;&gt;Black&lt;/div&gt;
	&lt;div class=&quot;list__item&quot;&gt;Cyan&lt;/div&gt;
	&lt;div class=&quot;list__separator&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;list__item&quot;&gt;Denim&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="animation"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Анимации списков</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Вы можете применить анимацию к элементам списка при наведении</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Анимации Slide и Border могут изменять свое поведение от модификатора .list--horizontal</div>
				</div>

				<div class="alert alert--color-red">
					<div class="alert__content">Модификаторы из этого раздела нельзя использовать совместно</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<div class="grid">
						<div class="col-4">
							<h4>Slide Animation</h4>
							<div class="list list--color-teal list--animation-slide">
								<div class="list__item">Amber</div>
								<div class="list__item">Black</div>
								<div class="list__item">Cyan</div>
								<div class="list__item">Denim</div>
							</div>
						</div>
						<div class="col-4">
							<h4>Underline Animation</h4>
							<div class="list list--color-red list--animation-underline">
								<div class="list__item">Amber</div>
								<div class="list__item">Black</div>
								<div class="list__item">Cyan</div>
								<div class="list__item">Denim</div>
							</div>
						</div>
						<div class="col-4">
							<h4>Invert Animation</h4>
							<div class="list list--color-yellow list--animation-invert">
								<div class="list__item">Amber</div>
								<div class="list__item">Black</div>
								<div class="list__item">Cyan</div>
								<div class="list__item">Denim</div>
							</div>
						</div>
						<div class="col-4">
							<h4>Zoom Animation</h4>
							<div class="list list--color-pink list--animation-zoom">
								<div class="list__item">Amber</div>
								<div class="list__item">Black</div>
								<div class="list__item">Cyan</div>
								<div class="list__item">Denim</div>
							</div>
						</div>
						<div class="col-4">
							<h4>Border Animation</h4>
							<div class="list list--color-black list--animation-border">
								<div class="list__item">Amber</div>
								<div class="list__item">Black</div>
								<div class="list__item">Cyan</div>
								<div class="list__item">Denim</div>
							</div>
						</div>
					</div>
				</div>

				<div id="tabs2Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--animation-slide</code></div>
						<div class="col-7 size-fix padding-1">Анимация скольжения</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--animation-underline</code></div>
						<div class="col-7 size-fix padding-1">Анимация подчеркивания</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--animation-invert</code></div>
						<div class="col-7 size-fix padding-1">Анимация появления заднего фона</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--animation-zoom</code></div>
						<div class="col-7 size-fix padding-1">Анимация увеличения</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--animation-border</code></div>
						<div class="col-7 size-fix padding-1">Анимация появления границы</div>
					</div>	
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;grid&quot;&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;h4&gt;Slide Animation&lt;/h4&gt;
		&lt;div class=&quot;list list--color-teal list--animation-slide&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;Amber&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Black&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Cyan&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Denim&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;h4&gt;Underline Animation&lt;/h4&gt;
		&lt;div class=&quot;list list--color-red list--animation-underline&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;Amber&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Black&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Cyan&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Denim&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;h4&gt;Invert Animation&lt;/h4&gt;
		&lt;div class=&quot;list list--color-yellow list--animation-invert&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;Amber&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Black&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Cyan&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Denim&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;h4&gt;Zoom Animation&lt;/h4&gt;
		&lt;div class=&quot;list list--color-pink list--animation-zoom&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;Amber&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Black&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Cyan&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Denim&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;h4&gt;Border Animation&lt;/h4&gt;
		&lt;div class=&quot;list list--color-black list--animation-border&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;Amber&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Black&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Cyan&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;Denim&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="icons"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Список с иконками</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Можно добавить иконки к спискам, чтобы пользователям было проще ориентироваться</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Списки можно строить из блоков div, или из блоков ul, li</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="grid">
						<div class="col-4">
							<div class="list list--color-blue list--icon">
								<div class="list__item"><i class="fa fa-chrome"></i>Google Chrome</div>
								<div class="list__item"><i class="fa fa-firefox"></i>Mozilla Firefox</div>
								<div class="list__item"><i class="fa fa-edge"></i>Microsoft Edge</div>
								<div class="list__item"><i class="fa fa-safari"></i>Apple Safari</div>
							</div>
						</div>
						<div class="col-4">
							<div class="list list--color-blue list--image">
								<div class="list__item"><img src="http://www.downloadoschrome.ru/wp-content/uploads/2008-09-25/spisok-predustanovlennykh-v-google-chrome-plaginov.jpg" alt="">Google Chrome</div>
								<div class="list__item"><img src="https://lh6.googleusercontent.com/-GUiHjhbj3x0/VEu7SZFhFHI/AAAAAAAAUao/5OgRJjex5_U/s336-c/mozilla-firefox.png" alt="">Mozilla Firefox</div>
								<div class="list__item"><img src="http://staging.streamroot.io/images/d826e8b.jpg" alt="">Microsoft Edge</div>
								<div class="list__item"><img src="http://www.prostomac.com/wp-content/uploads/2015/05/Safari-bug-0.jpg" alt="">Apple Safari</div>
							</div>
						</div>
					</div>					
				</div>

				<div id="tabs3Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>i, .icon</code></div>
						<div class="col-7 size-fix padding-1">Шрифтовая иконка</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>img, .image</code></div>
						<div class="col-7 size-fix padding-1">Картинка</div>
					</div>
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--icon</code></div>
						<div class="col-7 size-fix padding-1">Элементы списка с иконками</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list--image</code></div>
						<div class="col-7 size-fix padding-1">Элементы списка с картинками</div>
					</div>
				</div>

				<div id="tabs3Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;grid&quot;&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;div class=&quot;list list--color-blue list--icon&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-chrome&quot;&gt;&lt;/i&gt;Google Chrome&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-firefox&quot;&gt;&lt;/i&gt;Mozilla Firefox&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-edge&quot;&gt;&lt;/i&gt;Microsoft Edge&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-safari&quot;&gt;&lt;/i&gt;Apple Safari&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-4&quot;&gt;
		&lt;div class=&quot;list list--color-blue list--image&quot;&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;img src=&quot;http://www.downloadoschrome.ru/wp-content/uploads/2008-09-25/spisok-predustanovlennykh-v-google-chrome-plaginov.jpg&quot; alt=&quot;&quot;&gt;Google Chrome&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;img src=&quot;https://lh6.googleusercontent.com/-GUiHjhbj3x0/VEu7SZFhFHI/AAAAAAAAUao/5OgRJjex5_U/s336-c/mozilla-firefox.png&quot; alt=&quot;&quot;&gt;Mozilla Firefox&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;img src=&quot;http://staging.streamroot.io/images/d826e8b.jpg&quot; alt=&quot;&quot;&gt;Microsoft Edge&lt;/div&gt;
			&lt;div class=&quot;list__item&quot;&gt;&lt;img src=&quot;http://www.prostomac.com/wp-content/uploads/2015/05/Safari-bug-0.jpg&quot; alt=&quot;&quot;&gt;Apple Safari&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="navigation"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Навигационный список</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы навигационных списков можно использовать друг с другом совместно</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs4">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs4Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs4Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs4Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs4Template">Шаблон</div>
				</div>			

				<div id="tabs4Example">
					<div class="list-navigation">
						<div class="list-navigation__item">
							<div class="list-navigation__item__icon"><i class="fa fa-asterisk"></i></div>
							<div class="list-navigation__item__content">
								<div class="list-navigation__item__content__title">Hello</div>
								<div class="list-navigation__item__content__meta">Adele, 25</div>
							</div>
							<div class="list-navigation__item__right-icon"><i class="fa fa-angle-right"></i></div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__item__icon"><i class="fa fa-asterisk"></i></div>
							<div class="list-navigation__item__content">
								<div class="list-navigation__item__content__title">Rolling In The Deep</div>
								<div class="list-navigation__item__content__meta">Adele, 21</div>
							</div>
							<div class="list-navigation__item__right-icon"><i class="fa fa-angle-right"></i></div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__item__icon"><i class="fa fa-asterisk"></i></div>
							<div class="list-navigation__item__content">
								<div class="list-navigation__item__content__title">Hometown Glory</div>
								<div class="list-navigation__item__content__meta">Adele, 19</div>
							</div>
							<div class="list-navigation__item__right-icon"><i class="fa fa-angle-right"></i></div>
						</div>
					</div>
				</div>

				<div id="tabs4Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item</code></div>
						<div class="col-7 size-fix padding-1">Элемент навигационного списка</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item__icon</code></div>
						<div class="col-7 size-fix padding-1">Главная иконка</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item__content</code></div>
						<div class="col-7 size-fix padding-1">Содержимое элемента</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item__content__title</code></div>
						<div class="col-7 size-fix padding-1">Заголовок</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item__content__meta</code></div>
						<div class="col-7 size-fix padding-1">Дополнительная информация</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item__right-icon</code></div>
						<div class="col-7 size-fix padding-1">Дополнительная иконка, которая располагается справа</div>
					</div>
				</div>

				<div id="tabs4Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation__item--active</code></div>
						<div class="col-7 size-fix padding-1">Активное состояние</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.list-navigation--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет элементов списка. Вместо * нужно указать значение цвета. Для элементов списка доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs4Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;list-navigation&quot;&gt;
	&lt;div class=&quot;list-navigation__item&quot;&gt;
		&lt;div class=&quot;list-navigation__item__icon&quot;&gt;&lt;i class=&quot;fa fa-asterisk&quot;&gt;&lt;/i&gt;&lt;/div&gt;
		&lt;div class=&quot;list-navigation__item__content&quot;&gt;
			&lt;div class=&quot;list-navigation__item__content__title&quot;&gt;Hello&lt;/div&gt;
			&lt;div class=&quot;list-navigation__item__content__meta&quot;&gt;Adele, 25&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__item__right-icon&quot;&gt;&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;list-navigation__item&quot;&gt;
		&lt;div class=&quot;list-navigation__item__icon&quot;&gt;&lt;i class=&quot;fa fa-asterisk&quot;&gt;&lt;/i&gt;&lt;/div&gt;
		&lt;div class=&quot;list-navigation__item__content&quot;&gt;
			&lt;div class=&quot;list-navigation__item__content__title&quot;&gt;Rolling In The Deep&lt;/div&gt;
			&lt;div class=&quot;list-navigation__item__content__meta&quot;&gt;Adele, 21&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__item__right-icon&quot;&gt;&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;list-navigation__item&quot;&gt;
		&lt;div class=&quot;list-navigation__item__icon&quot;&gt;&lt;i class=&quot;fa fa-asterisk&quot;&gt;&lt;/i&gt;&lt;/div&gt;
		&lt;div class=&quot;list-navigation__item__content&quot;&gt;
			&lt;div class=&quot;list-navigation__item__content__title&quot;&gt;Hometown Glory&lt;/div&gt;
			&lt;div class=&quot;list-navigation__item__content__meta&quot;&gt;Adele, 19&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__item__right-icon&quot;&gt;&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		
		<a name="feed"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Лента</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-red">Flex</span>
				<div class="alert">
					<div class="alert__content">Данный блок можно использовать для представления записей пользователей</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы ленты можно использовать друг с другом</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs5">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs5Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs5Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs5Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs5Template">Шаблон</div>
				</div>			

				<div id="tabs5Example">
					<div class="feed">
						<div class="feed__item">
							<div class="feed__item__image">
								<img src="https://a4-images.myspacecdn.com/images04/11/d8655ff67d444404bd893f6a659093c1/300x300.jpg" class="img--circle">
								<div class="feed__item__image__online"></div>
							</div>
							<div class="feed__item__content">
								<div class="feed__item__content__title">Adele</div>
								<p>Hello, it's me!</p>
							</div>
						</div>
						<div class="feed__item">
							<div class="feed__item__image">
								<img src="http://zebrabox.ru/images/product_images/popup_images/3275_1.jpg" class="img--circle">
							</div>
							<div class="feed__item__content">
								<div class="feed__item__content__title">Buzz Lightyear</div>
								<p>Бесконечность - не предел!</p>
							</div>
						</div>
					</div>
				</div>

				<div id="tabs5Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed__item</code></div>
						<div class="col-7 size-fix padding-1">Элемент ленты</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed__item__image</code></div>
						<div class="col-7 size-fix padding-1">Блок иконки. Должен содержать элемент img</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed__item__image__online</code></div>
						<div class="col-7 size-fix padding-1">Индикатор "онлайн"</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed__item__content</code></div>
						<div class="col-7 size-fix padding-1">Содержимое записи</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed__item__content__title</code></div>
						<div class="col-7 size-fix padding-1">Имя пользователя</div>
					</div>
				</div>

				<div id="tabs5Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.feed--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет записей. Вместо * нужно указать значение цвета. Для записей доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs5Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;feed&quot;&gt;
	&lt;div class=&quot;feed__item&quot;&gt;
		&lt;div class=&quot;feed__item__image&quot;&gt;
			&lt;img src=&quot;https://a4-images.myspacecdn.com/images04/11/d8655ff67d444404bd893f6a659093c1/300x300.jpg&quot; class=&quot;img--circle&quot;&gt;
			&lt;div class=&quot;feed__item__image__online&quot;&gt;&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;feed__item__content&quot;&gt;
			&lt;div class=&quot;feed__item__content__title&quot;&gt;Adele&lt;/div&gt;
			&lt;p&gt;Hello, it&#039;s me!&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;feed__item&quot;&gt;
		&lt;div class=&quot;feed__item__image&quot;&gt;
			&lt;img src=&quot;http://zebrabox.ru/images/product_images/popup_images/3275_1.jpg&quot; class=&quot;img--circle&quot;&gt;
		&lt;/div&gt;
		&lt;div class=&quot;feed__item__content&quot;&gt;
			&lt;div class=&quot;feed__item__content__title&quot;&gt;Buzz Lightyear&lt;/div&gt;
			&lt;p&gt;&#x411;&#x435;&#x441;&#x43a;&#x43e;&#x43d;&#x435;&#x447;&#x43d;&#x43e;&#x441;&#x442;&#x44c; - &#x43d;&#x435; &#x43f;&#x440;&#x435;&#x434;&#x435;&#x43b;!&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="userlist"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Список пользователей</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-red">Flex</span>
				<div class="alert">
					<div class="alert__content">Данный блок можно использовать для представления списка пользователей</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы списка пользователей можно использовать друг с другом</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs6">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs6Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs6Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs6Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs6Template">Шаблон</div>
				</div>			

				<div id="tabs6Example">
					<div class="user-list">
						<div class="user-list__item">
							<div class="user-list__item__avatar"><img src="https://a4-images.myspacecdn.com/images04/11/d8655ff67d444404bd893f6a659093c1/300x300.jpg" alt="">
							<div class="user-list__item__avatar__online"></div></div>
							<div class="user-list__item__username">Adele</div>
						</div>
						<div class="user-list__item">
							<div class="user-list__item__avatar"><img src="http://zebrabox.ru/images/product_images/popup_images/3275_1.jpg"></div>
							<div class="user-list__item__username">Buzz Lightyear</div>
						</div>
					</div>
				</div>

				<div id="tabs6Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.user-list__item</code></div>
						<div class="col-7 size-fix padding-1">Элемент списка</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.user-list__item__avatar</code></div>
						<div class="col-7 size-fix padding-1">Блок аватара. Должен содержать элемент img</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.user-list__item__avatar__online</code></div>
						<div class="col-7 size-fix padding-1">Индикатор "онлайн"</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.user-list__item__username</code></div>
						<div class="col-7 size-fix padding-1">Имя пользователя</div>
					</div>
				</div>

				<div id="tabs6Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.user-list--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.user-list--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет элементов списка. Вместо * нужно указать значение цвета. Для записей доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs6Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;user-list&quot;&gt;
	&lt;div class=&quot;user-list__item&quot;&gt;
		&lt;div class=&quot;user-list__item__avatar&quot;&gt;&lt;img src=&quot;https://a4-images.myspacecdn.com/images04/11/d8655ff67d444404bd893f6a659093c1/300x300.jpg&quot; alt=&quot;&quot;&gt;
		&lt;div class=&quot;user-list__item__avatar__online&quot;&gt;&lt;/div&gt;&lt;/div&gt;
		&lt;div class=&quot;user-list__item__username&quot;&gt;Adele&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;user-list__item&quot;&gt;
		&lt;div class=&quot;user-list__item__avatar&quot;&gt;&lt;img src=&quot;http://zebrabox.ru/images/product_images/popup_images/3275_1.jpg&quot;&gt;&lt;/div&gt;
		&lt;div class=&quot;user-list__item__username&quot;&gt;Buzz Lightyear&lt;/div&gt;
	&lt;/div&gt;
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
					<a href="#list"><div class="list__item">Стандартный список</div>
					<a href="#animation"><div class="list__item">Анимации списков</div></a>
					<a href="#icons"><div class="list__item">Список с иконками</div></a>
					<a href="#navigation"><div class="list__item">Навигационный список</div></a>
					<a href="#feed"><div class="list__item">Лента</div></a>
					<a href="#userlist"><div class="list__item">Список пользователей</div></a>
				</div>				
			</div>
		</div>
	</div>
</div>