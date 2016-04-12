<? 
	$title = 'Формы';
	include('parent.php'); 
?>


<div class="grid">
	<div class="col-1"></div>
	<div class="col-8">
		<h1>Формы</h1>
		<h2>Основы</h2>
		<p>Формы должны заключаться в <code>&lt;form class=&quot;form&quot;&gt;&lt;/form&gt;</code> или в блок <code>.form</code></p>

		<div class="grid">			
			<div class="col-6">
				<div class="form">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-6"><code>
				&lt;div class=&quot;form&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
			</code></div>
		</div>

		<h2>Модификации форм</h2>
		<div class="grid margin-vertical-3">

			<div class="col-4">
				<div class="form form--color-red">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Цвет полей формы</b>
				<code><b>.form--color-*</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Вместо * нужно написать один из следующих вариантов: <code>red, orange, yellow, olive, green, teal, blue, purple, violet, pink, brown</code></p>
				<code>
					&lt;div class=&quot;form form--color-red&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--rounded">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Скругление полей форм</b>
				<code><b>.form--no-smooth, .form--smooth, .form--rounded</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Задает степень скругления полей форм</p>
				<code>
					&lt;div class=&quot;form form--rounded&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--no-padding form--color-green">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Убирание отступов</b>
				<code><b>.form--no-padding</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Убирает внутренние отступы у внутренних полей формы</p>
				<code>
					&lt;div class=&quot;form form--no-padding form--color-green&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--invert form--color-red d-gray-bg">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Инверсия цветов</b>
				<code><b>.form--invert</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Инвертирует цвета элементов формы</p>
				<code>
					&lt;div class=&quot;form form--invert form--color-red d-gray-bg&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--no-border form--color-purple">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Отсутсвие контуров</b>
				<code><b>.form--no-border</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Убирает контуры у элементов формы</p>
				<code>
					&lt;div class=&quot;form form--no-border form--color-purple&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--transparent form--color-purple form--invert d-gray-bg">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Полупрозрачные формы</b>
				<code><b>.form--transparent</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Делает поля формы полупрозрачными. При наведении поля становятся непрозрачными.</p>
				<code>
					&lt;div class=&quot;form form--transparent form--color-purple form--invert d-gray-bg&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--centered form--color-purple form--invert d-gray-bg">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Форма по центру</b>
				<code><b>.form--centered</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Размещает форму по центру</p>
				<code>
					&lt;div class=&quot;form form--centered form--color-purple form--invert d-gray-bg&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="form form--fit form--color-brown form--invert d-gray-bg">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Форма на весь размер</b>
				<code><b>.form--fit</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Поля формы занимают весь размер родительского блока</p>
				<code>
					&lt;div class=&quot;form form--fit form--color-brown form--invert d-gray-bg&quot;&gt;<br>
					&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot;&gt;<br>
					&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
					&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
				&lt;/div&gt;
				</code><br>					
			</div>
		</div>		

		<h2>Текстовые поля</h2>
		<div class="grid margin-vertical-3">
			<p>Altrone стилилизует только те текстовые поля, которые находятся в блоке <code>.form</code>. Стили применяются к следующим полям формы: <code>input[type="text"], input[type="url"], input[type="email"], input[type="number"], input[type="password"], textarea, select</code>.

			<div class="col-4">
				<div class="form">
					<label for="name1">Имя</label>
					<input type="text" placeholder="Введите имя" id="name1" class="invalid">
					<label for="surname1">Фамилия</label>
					<input type="text" placeholder="Введите фамилию" id="surname1">
				</div>
			</div>
			<div class="col-8">
				<b>Неправильные данные</b>
				<code><b>.invalid</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Задает стиль полю, аналогичный состоянию invalid</p>
				<code>
					&lt;div class=&quot;form&quot;&gt;<br>
						&lt;label for=&quot;name1&quot;&gt;&#x418;&#x43c;&#x44f;&lt;/label&gt;
						&lt;input type=&quot;text&quot; <br>placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x438;&#x43c;&#x44f;&quot; id=&quot;name1&quot; class=&quot;invalid&quot;&gt;<br>
						&lt;label for=&quot;surname1&quot;&gt;&#x424;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44f;&lt;/label&gt;<br>
						&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x444;&#x430;&#x43c;&#x438;&#x43b;&#x438;&#x44e;&quot; id=&quot;surname1&quot;&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>
		</div>

		
		<h2>Комбинированные поля</h2>
		<div class="grid margin-vertical-3">
			<p>Для того, чтобы использовать несколько полей на одной строке, то их нужно заключить в блок <code>.form-attached</code>. Для добавления обычного текста, нужно добавлять блоки <code>.form__attach</code></p>.

			<div class="col-12">
				<div class="form">
					<div class="form-attached">
						<div class="form__attach">Введите код:</div>
						<input type="text" placeholder="****">
						<input type="text" placeholder="******">
					</div>
				</div>
				<br>
				<code>
					&lt;div class=&quot;form&quot;&gt;<br>
						&lt;div class=&quot;form-attached&quot;&gt;<br>
							&lt;div class=&quot;form__attach&quot;&gt;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x43a;&#x43e;&#x434;:&lt;/div&gt;<br>
							&lt;input type=&quot;text&quot; placeholder=&quot;****&quot;&gt;<br>
							&lt;input type=&quot;text&quot; placeholder=&quot;******&quot;&gt;<br>
						&lt;/div&gt;<br>
					&lt;/div&gt;
				</code>
			</div>			
		</div>


		<h2>Флажки и переключатели</h2>
		<div class="grid margin-vertical-3">
			<p>Altrone позволяет использовать стилилизованные варианты checkbox и radio. Для этого их нужно обернуть в <code>.checkbox, .radio</code> или <code>.toggle</code></code>.

			<div class="col-4">
				<div class="checkbox">
					<input type="checkbox" id="checkbox1">
					<label for="checkbox1">
						<div class="checkbox__title">Название флажка</div>
						<div class="checkbox__meta">Описание действия</div>
					</label>
				</div>
				<div class="radio">
					<input type="radio" id="radio1">
					<label for="radio1">
						<div class="radio__title">Название радио-кнопки</div>
						<div class="radio__meta">Описание действия</div>
					</label>
				</div>
				<div class="toggle">
					<input type="checkbox" id="toggle1">
					<label for="toggle1">
						<div class="toggle__title">Название переключателя</div>
						<div class="toggle__meta">Описание действия</div>
					</label>
				</div>
			</div>
			<div class="col-8">
				<p><code>&lt;div class=&quot;checkbox&quot;&gt;<br>
					&lt;input type=&quot;checkbox&quot; id=&quot;checkbox1&quot;&gt;<br>
					&lt;label for=&quot;checkbox1&quot;&gt;<br>
						&lt;div class=&quot;checkbox__title&quot;&gt;&#x41d;&#x430;&#x437;&#x432;&#x430;&#x43d;&#x438;&#x435; &#x444;&#x43b;&#x430;&#x436;&#x43a;&#x430;&lt;/div&gt;<br>
						&lt;div class=&quot;checkbox__meta&quot;&gt;&#x41e;&#x43f;&#x438;&#x441;&#x430;&#x43d;&#x438;&#x435; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x44f;&lt;/div&gt;<br>
					&lt;/label&gt;<br>
				&lt;/div&gt;<br><br>
				&lt;div class=&quot;radio&quot;&gt;<br>
					&lt;input type=&quot;radio&quot; id=&quot;radio1&quot;&gt;<br>
					&lt;label for=&quot;radio1&quot;&gt;<br>
						&lt;div class=&quot;radio__title&quot;&gt;&#x41d;&#x430;&#x437;&#x432;&#x430;&#x43d;&#x438;&#x435; &#x440;&#x430;&#x434;&#x438;&#x43e;-&#x43a;&#x43d;&#x43e;&#x43f;&#x43a;&#x438;&lt;/div&gt;<br>
						&lt;div class=&quot;radio__meta&quot;&gt;&#x41e;&#x43f;&#x438;&#x441;&#x430;&#x43d;&#x438;&#x435; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x44f;&lt;/div&gt;<br>
					&lt;/label&gt;<br>
				&lt;/div&gt;<br><br>
				&lt;div class=&quot;toggle&quot;&gt;<br>
					&lt;input type=&quot;checkbox&quot; id=&quot;toggle1&quot;&gt;<br>
					&lt;label for=&quot;toggle1&quot;&gt;<br>
						&lt;div class=&quot;toggle__title&quot;&gt;&#x41d;&#x430;&#x437;&#x432;&#x430;&#x43d;&#x438;&#x435; &#x43f;&#x435;&#x440;&#x435;&#x43a;&#x43b;&#x44e;&#x447;&#x430;&#x442;&#x435;&#x43b;&#x44f;&lt;/div&gt;<br>
						&lt;div class=&quot;toggle__meta&quot;&gt;&#x41e;&#x43f;&#x438;&#x441;&#x430;&#x43d;&#x438;&#x435; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x44f;&lt;/div&gt;<br>
					&lt;/label&gt;<br>
				&lt;/div&gt;</code></p>
			</div>
		</div>

		<h2>Модификации флажков и переключателей</h2>
		<div class="grid margin-vertical-3">
			<div class="col-4">
				<div class="checkbox checkbox--color-blue">
					<input type="checkbox" id="checkbox2">
					<label for="checkbox2">
						<div class="checkbox__title">Название флажка</div>
						<div class="checkbox__meta">Описание действия</div>
					</label>
				</div>
			</div>
			<div class="col-8">
				<b>Цвет переключателей</b>
				<code><b>.checkbox--color-*, .radio--color-*, .toggle--color-*</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Вместо * нужно написать один из следующих вариантов: <code>red, orange, yellow, olive, green, teal, blue, purple, violet, pink, brown</code></p>
				<code>
					&lt;div class=&quot;checkbox checkbox--color-blue&quot;&gt;<br>
						&lt;input type=&quot;checkbox&quot; id=&quot;checkbox2&quot;&gt;<br>
						&lt;label for=&quot;checkbox2&quot;&gt;<br>
							&lt;div class=&quot;checkbox__title&quot;&gt;&#x41d;&#x430;&#x437;&#x432;&#x430;&#x43d;&#x438;&#x435; &#x444;&#x43b;&#x430;&#x436;&#x43a;&#x430;&lt;/div&gt;<br>
							&lt;div class=&quot;checkbox__meta&quot;&gt;&#x41e;&#x43f;&#x438;&#x441;&#x430;&#x43d;&#x438;&#x435; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x44f;&lt;/div&gt;<br>
						&lt;/label&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="checkbox checkbox--color-blue checkbox--invert d-gray-bg">
					<input type="checkbox" id="checkbox3">
					<label for="checkbox3">
						<div class="checkbox__title">Название флажка</div>
						<div class="checkbox__meta">Описание действия</div>
					</label>
				</div>
			</div>
			<div class="col-8">
				<b>Инверсия цветов переключателей</b>
				<code><b>.checkbox--invert, .radio--invert, .toggle--invert</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Инвертирует цвета переключателей</p>
				<code>
					&lt;div class=&quot;checkbox checkbox--color-blue checkbox--invert d-gray-bg&quot;&gt;<br>
						&lt;input type=&quot;checkbox&quot; id=&quot;checkbox3&quot;&gt;<br>
						&lt;label for=&quot;checkbox3&quot;&gt;<br>
							&lt;div class=&quot;checkbox__title&quot;&gt;&#x41d;&#x430;&#x437;&#x432;&#x430;&#x43d;&#x438;&#x435; &#x444;&#x43b;&#x430;&#x436;&#x43a;&#x430;&lt;/div&gt;<br>
							&lt;div class=&quot;checkbox__meta&quot;&gt;&#x41e;&#x43f;&#x438;&#x441;&#x430;&#x43d;&#x438;&#x435; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x44f;&lt;/div&gt;<br>
						&lt;/label&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="toggle toggle--color-blue toggle--transparent">
					<input type="checkbox" id="checkbox4">
					<label for="checkbox4">
						<div class="toggle__title">Название флажка</div>
						<div class="toggle__meta">Описание действия</div>
					</label>
				</div>
			</div>
			<div class="col-8">
				<b>Полупрозрачные переключатели</b>
				<code><b>.toggle--transparent</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Делает переключатель прозрачным</p>
				<code>
					&lt;div class=&quot;toggle toggle--color-blue toggle--transparent&quot;&gt;<br>
						&lt;input type=&quot;checkbox&quot; id=&quot;checkbox4&quot;&gt;<br>
						&lt;label for=&quot;checkbox4&quot;&gt;<br>
							&lt;div class=&quot;toggle__title&quot;&gt;&#x41d;&#x430;&#x437;&#x432;&#x430;&#x43d;&#x438;&#x435; &#x444;&#x43b;&#x430;&#x436;&#x43a;&#x430;&lt;/div&gt;<br>
							&lt;div class=&quot;toggle__meta&quot;&gt;&#x41e;&#x43f;&#x438;&#x441;&#x430;&#x43d;&#x438;&#x435; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x44f;&lt;/div&gt;<br>
						&lt;/label&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>
		</div>

		<h2>Выпадающие списки</h2>
		<div class="grid margin-vertical-3">
			<div class="col-12">
				<p>Существует два типа выпадающих списков - выпадающий список (<code>.dropdown</code>) и выпадающий список с выбором варианта (<code>.select</code>).</p>
				<p>Для того, чтобы привязать источник (например кнопку или ссылку) к выпадающему меню <code>.dropdown</code>, нужно задать источнику аттрибут <code>data-dropdown-target</code>, который будет равен id вызываемого выпадающего списка.</p>
				<p>Для того, чтобы <code>.select</code> сохранял выбранные вами данные, то необходимо к каждому элементу списка добавить аттрибут, в котором будет содержаться значение элемента. Чтобы получить значение выбранного варианта, необходимо получить его с атрибута <code>data-select-value</code> у блока <code>select__menu</code>.</p>
			</div>
			<div class="col-4">
				<button data-dropdown-target="dropdown1">Открыть dropdown</button>
				<div class="dropdown" id="dropdown1">
					<div class="dropdown__item">Dropdown 1</div>
					<div class="dropdown__item">Dropdown 2</div>
					<div class="dropdown__item">Dropdown 3</div>
				</div>
				<div class="select">
					<div class="select__menu">Choose a variant</div>
					<div class="select__options">
						<div class="select__options__item" data-option-id="first">Variant 1</div>
						<div class="select__options__item" data-option-id="second">Variant 2</div>
						<div class="select__options__item" data-option-id="third">Variant 3</div>
					</div>
				</div>
			</div>
		</div>

		<h2>Модификаторы выпадающих списков</h2>
		<div class="grid margin-vertical-3">
			<div class="col-4">
				<div class="select select--color-violet">
					<div class="select__menu">Choose a variant</div>
					<div class="select__options">
						<div class="select__options__item" data-option-id="first">Variant 1</div>
						<div class="select__options__item" data-option-id="second">Variant 2</div>
						<div class="select__options__item" data-option-id="third">Variant 3</div>
					</div>
				</div>
			</div>
			<div class="col-8">
				<b>Цвет выпадающих списков</b>
				<code><b>.dropdown--color-*, .select--color-*</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Вместо * нужно написать один из следующих вариантов: <code>red, orange, yellow, olive, green, teal, blue, purple, violet, pink, brown</code></p>
				<code>
					&lt;div class=&quot;select select--color-violet&quot;&gt;<br>
						&lt;div class=&quot;select__menu&quot;&gt;Choose a variant&lt;/div&gt;<br>
						&lt;div class=&quot;select__options&quot;&gt;<br>
							&lt;div class=&quot;select__options__item&quot; data-option-id=&quot;first&quot;&gt;Variant 1&lt;/div&gt;<br>
							&lt;div class=&quot;select__options__item&quot; data-option-id=&quot;second&quot;&gt;Variant 2&lt;/div&gt;<br>
							&lt;div class=&quot;select__options__item&quot; data-option-id=&quot;third&quot;&gt;Variant 3&lt;/div&gt;<br>
						&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4">
				<div class="select select--invert">
					<div class="select__menu">Choose a variant</div>
					<div class="select__options">
						<div class="select__options__item" data-option-id="first">Variant 1</div>
						<div class="select__options__item" data-option-id="second">Variant 2</div>
						<div class="select__options__item" data-option-id="third">Variant 3</div>
					</div>
				</div>
			</div>
			<div class="col-8">
				<b>Инверсия цветов</b>
				<code><b>.dropdown--invert, .select--invert</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Инвертирует цвета переключателей</p>
				<code>
					&lt;div class=&quot;select select--invert&quot;&gt;<br>
						&lt;div class=&quot;select__menu&quot;&gt;Choose a variant&lt;/div&gt;<br>
						&lt;div class=&quot;select__options&quot;&gt;<br>
							&lt;div class=&quot;select__options__item&quot; data-option-id=&quot;first&quot;&gt;Variant 1&lt;/div&gt;<br>
							&lt;div class=&quot;select__options__item&quot; data-option-id=&quot;second&quot;&gt;Variant 2&lt;/div&gt;<br>
							&lt;div class=&quot;select__options__item&quot; data-option-id=&quot;third&quot;&gt;Variant 3&lt;/div&gt;<br>
						&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>
		</div>

	</div>
	<div class="col-3">
		<ul class="list list--animation-underline">
			<li>Основы</li>
			<li>Модификации форм</li>
			<li>Текстовые поля</li>
			<li>Комбинированные поля</li>
			<li>Флажки и переключатели</li>
			<li>Модификации флажков и переключателей</li>
			<li>Выпадающие списки</li>
			<li>Модификации выпадающих списков</li>
			<li>История обновлений модуля</li>
		</ul>
	</div>
</div>