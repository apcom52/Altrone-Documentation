<? 
	$title = 'Вкладки';
	include('parent.php'); 
?>


<div class="grid">
	<div class="col-1"></div>
	<div class="col-8">
		<h1>Вкладки</h1>
		<h2>Основы</h2>
		<p>Вкладки - набор элементов <code>.tabs__item</code>, заключенные в единый блок - <code>.tabs</code></p>

		<div class="grid">			
			<div class="col-6">
				<div class="tabs">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-6"><code>
				&lt;div class=&quot;tabs&quot;&gt;<br>
					&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
					&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
					&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
				&lt;/div&gt;
			</code></div>
		</div>

		<h2>Модификации вкладок</h2>
		<div class="grid margin-vertical-3">
			<div class="col-4">
				<div class="tabs tabs--color-red">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Цвет вкладок</b>
				<code><b>.tabs--color-*</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Вместо * нужно написать один из следующих вариантов: <code>red, orange, yellow, olive, green, teal, blue, purple, violet, pink, brown</code></p>
				<code>
					&lt;div class=&quot;tabs tabs--color-red&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs tabs--invert">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Инверсия цветов</b>
				<code><b>.tabs--invert</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Инвертирует цвета</p>
				<code>
					&lt;div class=&quot;tabs tabs--invert&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item tabs__item--active">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Активная вкладка</b>
				<code><b>.tabs__item--active</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Подсвечивает выбранную вкладку</p>
				<code>
					&lt;div class=&quot;tabs&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item tabs__item--active&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item tabs__item--disabled">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Неактивная вкладка</b>
				<code><b>.tabs__item--disabled</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Подсвечивает неактивную вкладку</p>
				<code>
					&lt;div class=&quot;tabs&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item tabs__item--disabled&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs tabs--vertical">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Вертикальная ориентация вкладок</b>
				<code><b>.tabs--vertical</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Подсвечивает неактивную вкладку</p>
				<code>
					&lt;div class=&quot;tabs tabs--vertical&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs tabs--smooth tabs--color-green">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
				<br>
				<div class="tabs tabs--rounded tabs--color-blue">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Сглаживание вкладок</b>
				<code><b>.tabs--smooth, .tabs--rounded</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Задает степень сглаженности вкладок</p>
				<code>
					&lt;div class=&quot;tabs tabs--smooth tabs--color-green&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;<br>
					<br>
					&lt;div class=&quot;tabs tabs--rounded tabs--color-blue&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs tabs--ios-style tabs--color-purple">
					<div class="tabs__item">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>iOS-вкладки</b>
				<code><b>.tabs--ios-style</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Стилилизует вкладки, как в iOS</p>
				<code>
					&lt;div class=&quot;tabs tabs--ios-style&quot;&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="tabs tabs--transparent tabs--color-orange">
					<div class="tabs__item tabs__item--active">Tab 1</div>
					<div class="tabs__item">Tab 2</div>
					<div class="tabs__item">Tab 3</div>
				</div>
			</div>
			<div class="col-8">
				<b>Прозрачные вкладки</b>
				<code><b>.tabs--transparent</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Делает вкладки прозрачными</p>
				<code>
					&lt;div class=&quot;tabs tabs--transparent tabs--color-orange&quot;&gt;<br>
						&lt;div class=&quot;tabs__item tabs__item--active&quot;&gt;Tab 1&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 2&lt;/div&gt;<br>
						&lt;div class=&quot;tabs__item&quot;&gt;Tab 3&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>
		</div>
	</div>
	<div class="col-3">
		<ul class="list list--animation-underline">
			<li>Основы</li>
			<li>Модификации вкладок</li>
			<li>История обновлений модуля</li>
		</ul>
	</div>
</div>