<? 
	$title = 'Списки';
	include('parent.php'); 
?>


<div class="grid">
	<div class="col-1"></div>
	<div class="col-8">
		<h1>Список</h1>
		<h2>Основы</h2>
		<p>Список представляет собой набор элементов <code>.list__item</code>, заключенный в блок <code>.list</code>. Элементы списка можно разделять <code>.list__separator</code></p>

		<div class="grid">			
			<div class="col-6">
				<div class="list">
					<div class="list__item">List Item 1</div>
					<div class="list__item">List Item 2</div>
					<div class="list__item">List Item 3</div>
				</div>
			</div>
			<div class="col-6"><code>
				&lt;div class=&quot;list&quot;&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 1&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 2&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 3&lt;/div&gt;<br>
				&lt;/div&gt;
			</code></div>
		</div>

		<h2>Модификации списка</h2>
		<div class="grid margin-vertical-3">
			<div class="col-4">
				<div class="list list--color-brown">
					<div class="list__item">List Item 1</div>
					<div class="list__item">List Item 2</div>
					<div class="list__item">List Item 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Цвет списка</b>
				<code><b>.list--color-*</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Вместо * нужно написать один из следующих вариантов: <code>red, orange, yellow, olive, green, teal, blue, purple, violet, pink, brown</code></p>
				<code>&lt;div class=&quot;list list--color-brown&quot;&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 1&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 2&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 3&lt;/div&gt;<br>
				&lt;/div&gt;</code><br>					
			</div>
		</div>
		<div class="grid margin-vertical-3">
			<div class="col-4 padding-right-1">
				<div class="list list--color-yellow list--invert">
					<div class="list__item">List Item 1</div>
					<div class="list__item">List Item 2</div>
					<div class="list__item">List Item 3</div>
				</div>
			</div>

			<div class="col-8">
				<b>Инверсия цветов</b>
				<code><b>.list--invert</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Инвертирует цвета списка</p>
				<code>
					&lt;div class=&quot;list list--color-yellow list--invert&quot;&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 1&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 2&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;List Item 3&lt;/div&gt;<br>
				&lt;/div&gt;
				</code>
			</div>
		</div>
		
		<div class="grid margin-vertical-3">
			<div class="col-4">
				<div class="list list--icon">
					<div class="list__item"><i class="fa fa-star"></i>List Item 1</div>
					<div class="list__item"><i class="fa fa-star"></i>List Item 2</div>
					<div class="list__item"><i class="fa fa-star"></i>List Item 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Иконки списков 
				<code>.list--icon, .list--image</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Если список содержит иконки или картинки, то нужно добавить ему модификатор <code>.list--icon</code> или <code>.list--image</code>. 
				<p><code>
					&lt;div class=&quot;list list--icon&quot;&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-star&quot;&gt;&lt;/i&gt;List Item 1&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-star&quot;&gt;&lt;/i&gt;List Item 2&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-star&quot;&gt;&lt;/i&gt;List Item 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code></p>
			</div>
		</div>
		<div class="grid margin-vertical-3">
			<div class="col-4">
				<div class="list list--icon list--horizontal">
					<div class="list__item"><i class="fa fa-arrow-left"></i></div>
					<div class="list__item">Home</div>
					<div class="list__item">Exit</div>
				</div>
			</div>
			<div class="col-8">
				<b>Ориентация списка <code>.list--horizontal</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Список становится горизональным. </p>
				<p><code>
					&lt;div class=&quot;list list--icon list--horizontal&quot;&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;&lt;i class=&quot;fa fa-arrow-left&quot;&gt;&lt;/i&gt;&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;Home&lt;/div&gt;<br>
					&lt;div class=&quot;list__item&quot;&gt;Exit&lt;/div&gt;<br>
					&lt;/div&gt;
				</code></p>
			</div>
		</div>
		
		<h3>Анимация списков</h3>
		<p>Altrone содержит несколько встроенных анимаций, которые можно применить к спискам. Анимации появляются при наведении на элемент списка</p>
		<div class="grid">
			<div class="col-5">
				<div class="list list--animation-slide">
					<div class="list__item">Item 1</div>
					<div class="list__item">Item 2</div>
					<div class="list__item">Item 3</div>
				</div>
			</div>
			<div class="col-7">
				<b>Скольжение списка <code>.list--animation-slide</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>При наведении элемент списка сдвигается вправо</p>
				<p><code>
					&lt;div class=&quot;list list--animation-slide&quot;&gt;<br>
						&lt;div class=&quot;list__item&quot;&gt;Item 1&lt;/div&gt;<br>
						&lt;div class=&quot;list__item&quot;&gt;Item 2&lt;/div&gt;<br>
						&lt;div class=&quot;list__item&quot;&gt;Item 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code></p>
			</div>

			<div class="col-5">
				<div class="list list--animation-underline">
					<div class="list__item">Item 1</div>
					<div class="list__item">Item 2</div>
					<div class="list__item">Item 3</div>
				</div>
			</div>
			<div class="col-7">
				<b>Подчеркивание списка <code>.list--animation-underline</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>При наведении у элемента списка появляется подчеркивание</p>
				<p><code>
					&lt;div class=&quot;list list--animation-underline&quot;&gt;<br>
						&lt;div class=&quot;list__item&quot;&gt;Item 1&lt;/div&gt;<br>
						&lt;div class=&quot;list__item&quot;&gt;Item 2&lt;/div&gt;<br>
						&lt;div class=&quot;list__item&quot;&gt;Item 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code></p>
			</div>


			<div class="col-5">
				<ul class="list list--animation-invert list--color-violet">
					<li class="list__item">Item 1</li>
					<li class="list__item">Item 2</li>
					<li class="list__item">Item 3</li>
				</ul>
			</div>
			<div class="col-7">
				<b>Инверсия списка <code>.list--animation-invert</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Инвертирует цвета списка. В отличии от <code>.list--invert</code> фон элемента зависит от модификаторов <code>.list--color-*</code></p>
				<p><code>
					&lt;ul class=&quot;list list--animation-invert list--color-violet&quot;&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 1&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 2&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 3&lt;/li&gt;<br>
					&lt;/ul&gt;
				</code></p>
			</div>

			<div class="col-5">
				<ul class="list list--animation-zoom">
					<li class="list__item">Item 1</li>
					<li class="list__item">Item 2</li>
					<li class="list__item">Item 3</li>
				</ul>
			</div>
			<div class="col-7">
				<b>Увеличение списка <code>.list--animation-zoom</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Элементы списка при наведении увеличиваются</p>
				<p><code>
					&lt;ul class=&quot;list list--animation-zoom&quot;&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 1&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 2&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 3&lt;/li&gt;<br>
					&lt;/ul&gt;
				</code></p>
			</div>

			<div class="col-5">
				<ul class="list list--animation-border list--color-green">
					<li class="list__item">Item 1</li>
					<li class="list__item">Item 2</li>
					<li class="list__item">Item 3</li>
				</ul>
			</div>
			<div class="col-7">
				<b>Акцентирование списка <code>.list--animation-border</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>У элемента списка при наведении появляется линия. Зависит от ориентации и цвета списка (<code>.list--horizontal, .list--color-*</code>)</p>
				<p><code>
					&lt;ul class=&quot;list list--animation-border list--color-green&quot;&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 1&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 2&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 3&lt;/li&gt;<br>
					&lt;/ul&gt;
				</code></p>
			</div>

			<div class="col-5">
				<ul class="list list--animation-mark-circle">
					<li class="list__item">Item 1</li>
					<li class="list__item">Item 2</li>
					<li class="list__item">Item 3</li>
				</ul>
			</div>
			<div class="col-7">
				<b>Маркированный список <code>.list--animation-mark-circle, .list--animation-mark-disc, .list--animation-mark-square</code></b>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>У элемента списка при наведении появляется маркер. Работает только с <code>ul</code> и <code>li</code></p>
				<p><code>
					&lt;ul class=&quot;list list--animation-mark-circle&quot;&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 1&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 2&lt;/li&gt;<br>
						&lt;li class=&quot;list__item&quot;&gt;Item 3&lt;/li&gt;<br>
					&lt;/ul&gt;
				</code></p>
			</div>
		</div>

		<h3>Навигационный список</h3>
		<i>Доступно с версии 2.0</i>
		<p>Навигационный список - это набор элементов <code>.list-navigation__item</code>, заключенных в <code>.list-navigation</code>. Каждый <code>.list-navigation__item</code> должен включать в себя три элемента: <code>.list-navigation__icon</code> - главная иконка, которая отображается слева, <code>.list-navigation__content</code> - контент элемента (содержит в себя два элемента - <code>.list-navigation__content__title</code> и <code>.list-navigation__content__meta</code>), <code>.list-navigation__right-icon</code> - дополнительная иконка, которая располагается справа и отображается при наведении</p>

		<h5>Модификаторы</h5>
		<p>
			К навигационному списку могут применяться два модификатора: <code>.list-navigation--color-*</code> и <code>.list-navigation--invert</code>
		</p>
		
		<div class="grid">
			<div class="col-6">
				<div class="list-navigation list-navigation--invert list-navigation--color-purple">
					<div class="list-navigation__item">
						<div class="list-navigation__icon">
							<i class="fa fa-check"></i>
						</div>
						<div class="list-navigation__content">
							<div class="list-navigation__content__title">Hello, it's me</div>
							<div class="list-navigation__content__meta">I was wondering if after all these years</div>
						</div>
						<div class="list-navigation__right-icon">
							<i class="fa fa-check"></i>
						</div>
					</div>
					<div class="list-navigation__item">
						<div class="list-navigation__icon">
							<i class="fa fa-at"></i>
						</div>
						<div class="list-navigation__content">
							<div class="list-navigation__content__title">There's a fire starting in my heart</div>
							<div class="list-navigation__content__meta">Reaching a fever pitch and it's bringing me out the dark</div>
						</div>
						<div class="list-navigation__right-icon">
							<i class="fa fa-check"></i>
						</div>
					</div>
					<div class="list-navigation__item">
						<div class="list-navigation__icon">
							<i class="fa fa-battery-half"></i>
						</div>
						<div class="list-navigation__content">
							<div class="list-navigation__content__title">I let it fall, my heart</div>
							<div class="list-navigation__content__meta">And as it fell you rose to claim it</div>
						</div>
						<div class="list-navigation__right-icon">
							<i class="fa fa-check"></i>
						</div>
					</div>					
				</div>	
			</div>
			<div class="col-6" style="font-size: 0.7em;">
<code><pre>
&lt;div class=&quot;list-navigation list-navigation--invert list-navigation--color-purple&quot;&gt;
	&lt;div class=&quot;list-navigation__item&quot;&gt;
		&lt;div class=&quot;list-navigation__icon&quot;&gt;
			&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__content&quot;&gt;
			&lt;div class=&quot;list-navigation__content__title&quot;&gt;Hello, it&#039;s me&lt;/div&gt;
			&lt;div class=&quot;list-navigation__content__meta&quot;&gt;I was wondering if after all these years&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__right-icon&quot;&gt;
			&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;list-navigation__item&quot;&gt;
		&lt;div class=&quot;list-navigation__icon&quot;&gt;
			&lt;i class=&quot;fa fa-at&quot;&gt;&lt;/i&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__content&quot;&gt;
			&lt;div class=&quot;list-navigation__content__title&quot;&gt;There&#039;s a fire starting in my heart&lt;/div&gt;
			&lt;div class=&quot;list-navigation__content__meta&quot;&gt;Reaching a fever pitch and it&#039;s bringing me out the dark&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__right-icon&quot;&gt;
			&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;list-navigation__item&quot;&gt;
		&lt;div class=&quot;list-navigation__icon&quot;&gt;
			&lt;i class=&quot;fa fa-battery-half&quot;&gt;&lt;/i&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__content&quot;&gt;
			&lt;div class=&quot;list-navigation__content__title&quot;&gt;I let it fall, my heart&lt;/div&gt;
			&lt;div class=&quot;list-navigation__content__meta&quot;&gt;And as it fell you rose to claim it&lt;/div&gt;
		&lt;/div&gt;
		&lt;div class=&quot;list-navigation__right-icon&quot;&gt;
			&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;
		&lt;/div&gt;
	&lt;/div&gt;					
&lt;/div&gt;	
</pre></code>
			</div>
		</div>

	</div>
	<div class="col-3">
		<ul class="list list--animation-underline">
			<li>Основы</li>
			<li>Модификации списка</li>
			<li>Анимация списка</li>
			<li>Навигационный список</li>
			<li>История обновлений модуля</li>
		</ul>
	</div>
</div>