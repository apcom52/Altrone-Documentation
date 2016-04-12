<? 
	$title = 'Сетка';
	include('parent.php'); 

	$more_body = "style='background-color: #f1f2f4;'";
?>

<div class="grid">
	<div class="col-9">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Стандартная сетка</h1>
				<div class="tabs tabs--transparent tabs--color-teal">
					<div class="tabs__item tabs__item--active">Шаблон</div>
					<div class="tabs__item">Модификаторы</div>
					<div class="tabs__item">Пример</div>
				</div>				
			</div>
		</div>

		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Адаптивная сетка</h1>
			</div>
		</div>

		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Отступы</h1>
			</div>
		</div>

		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Представление данных</h1>
			</div>
		</div>

		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Masonry-сетка</h1>
			</div>
		</div>

		<div class="card card--no-smooth">
			<div class="card__content">
				<h1 class="helvetica-thin">Загрузочный экран</h1>
			</div>
		</div>
	</div>
	<div class="col-3">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<div class="list__item">Стандартная сетка</div>
					<div class="list__item">Адаптивная сетка</div>
					<div class="list__item">Отступы</div>
					<div class="list__item">Представление данных</div>
					<div class="list__item">Masonry-сетка</div>
					<div class="list__item">Загрузочный экран</div>
				</div>				
			</div>
		</div>
	</div>
</div>


<div class="grid">	
	<div class="col-8 offset-1">
		<h1>Сетка</h1>
		<button class="button--color-teal">Демонстрация возможностей сетки</button>
		<h2>Размеры экрана и типы устройств</h2>
		<p>Altrone делит все разрешения экрана на 5 категорий:</p>
		
		<table width="100%" border=1>	
			<tr>
				<th>Категория устройства</th>
				<th>Обозначение</th>
				<th>Ширина экрана</th>
			</tr>		
			<tr>
				<td>Смартфон в портретной ориентации</td>
				<td>m</td>
				<td>не более 480px</td>
			</tr>
			<tr>
				<td>Смартфон в ландшафтной ориентации</td>
				<td>lm</td>
				<td>не более 767px></td>
			</tr>
			<tr>
				<td>Планшет в портретной ориентации</td>
				<td>t</td>
				<td>не более 992px</td>
			</tr>
			<tr>
				<td>Планшет в ландшафтной ориентации</td>
				<td>lt</td>
				<td>не более 1199px</td>
			</tr>
			<tr>
				<td>Компьютер / ноутбук</td>
				<td>-</td>
				<td>от 2000px</td>
			</tr>
		</table>

		<p>Если не доступна сетка для нужного разрешения экрана, то автоматически будет применяться сетка, адаптированная для большего экрана</p>


		<h2>Стандартная сетка</h2>
		<p>Стандартная сетка строится на прямоугольниках, выстроенных в ряд различной длины. По умолчанию один ряд должен иметь сумму не более 12. Т.е. в него можно расположить один блок шириной 12 или три блока шириной по 3 или 12 блоков шириной по 1. Столбцы могут иметь различный размер.</p>
		
		<code>
			&lt;div class=&quot;grid&quot;&gt;<br>
				&lt;div class=&quot;col-4&quot;&gt;&lt;/div&gt;<br>
				&lt;div class=&quot;col-3&quot;&gt;&lt;/div&gt;<br>
				&lt;div class=&quot;col-5&quot;&gt;&lt;/div&gt;<br>
			&lt;/div&gt;
		</code>

		<p>Если вы хотите адаптировать сайт для экрана планшета или смартфона, то нужно использовать классы col-X-*, где вместо X нужно подставить обозначение для вашего устройства (см. выше в таблице).</p>

		<div class="alert alert--color-blue">
			<div class="alert__content">
				<b>Обратите внимание!</b>
				<p>
					<ul>
						<li>Для планшетов в ландшафтной ориентации (.col-lt-*) сумма не должна превышать 10</li>
						<li>Для планшетов в портретной ориентации (.col-t-*) сумма не должна превышать 8</li>
						<li>Для смартфона в ландшафтной ориентации (.col-lm-*) сумма не должна превышать 6</li>
						<li>Для смартфона в портретной ориентации (.col-m-*) сумма не должна превышать 4</li>
					</ul>
				</p>
			</div>
		</div>

		<code>
			&lt;div class=&quot;grid&quot;&gt;<br>
				&lt;div class=&quot;col-4 col-lt-4 col-t-5 col-lm-3 col-m-4&quot;&gt;&lt;/div&gt;<br>
				&lt;div class=&quot;col-3 col-lt-3 col-t-2 col-lm-1 col-m-2&quot;&gt;&lt;/div&gt;<br>
				&lt;div class=&quot;col-5 col-lt-3 col-t-1 col-lm-2 col-m-2&quot;&gt;&lt;/div&gt;<br>
			&lt;/div&gt;
		</code>

		<h4>Отступы колонок</h4>
		<p>
			Чтобы добавить отступы для колонок, нужно к ним добавить класс <code>.offset-*</code>, где * - любое значение из промежутка 0 - 11. 
		</p>
		<p>
			Если необходима адаптивность, то нужно использовать классы <code>.offset-lt-*</code> (0 - 9), <code>.offset-t-*</code> (0 - 7), <code>.offset-lm-*</code> (0 - 5), <code>.offset-m-*</code> (0 - 3).
		</p>

		<hr>

		<h2>Layout-сетка</h2>
		<div class="label label--color-yellow">Flex</div>
		<p>Если вам необходимо выстроить элементы в ряд или в столбец, то здесь вам может пригодиться другой вид сетки - <code>.vertical-layout</code> или <code>.horizontal-layout</code></p>

		<table width="100%">
			<tr>
				<td width="50%">
					<code>
					&lt;div class=&quot;vertical-layout&quot;&gt;<br>
						&lt;div class=&quot;row&quot;&gt;Row 1&lt;/div&gt;<br>
						&lt;div class=&quot;row&quot;&gt;Row 2&lt;/div&gt;<br>
						&lt;div class=&quot;row&quot;&gt;Row 3&lt;/div&gt;<br>
					&lt;/div&gt;
					</code>
				</td>
				<td>
					<code>
					&lt;div class=&quot;horizontal-layout&quot;&gt;<br>
						&lt;div class=&quot;column&quot;&gt;Column 1&lt;/div&gt;<br>
						&lt;div class=&quot;column&quot;&gt;Column 2&lt;/div&gt;<br>
						&lt;div class=&quot;column&quot;&gt;Column 3&lt;/div&gt;<br>
					&lt;/div&gt;
					</code>
				</td>
			</tr>
		</table>

		<table width="100%">
			<tr>
				<td width="50%">
					<div class="vertical-layout vertical-layout--stripped">
						<div class="row">Row 1</div>
						<div class="row">Row 2</div>
						<div class="row">Row 3</div>
					</div>
				</td>
				<td>
					<div class="horizontal-layout horizontal-layout--stripped">
						<div class="column">Column 1</div>
						<div class="column">Column 2</div>
						<div class="column">Column 3</div>
					</div>
				</td>
			</tr>
		</table>


	</div>
</div>