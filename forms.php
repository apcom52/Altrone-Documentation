<? 
	$title = 'Формы';
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

		var select = new Select($('#selectExample'), ["Москва", "Нижний Новгород", "Санкт-Петербург", "Казань"]);
	});
</script>

<div class="grid">
	<div class="col-9">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Формы</div>
		
		<a name="forms"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Формы</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Формы нужны для ввода данных пользователями</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">Altrone применяет стили к полям input (text, password, url, email, number), textarea, select а также к элементам с классом .input</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы форм можно использовать совместно друг с другом. Исключением является модификаторы .form--no-smooth и .form--rounded</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="form">
						<label for="field1">Логин:</label>
						<input type="text" placeholder="Введите ваш логин" id="field1">
						<label for="field2">Пароль:</label>
						<input type="password" placeholder="Введите ваш пароль" id="field2">
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет элементов формы. Вместо * нужно указать значение цвета. Для элементов формы доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--no-borders</code></div>
						<div class="col-7 size-fix padding-1">Убирает границы полей</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--transparent</code></div>
						<div class="col-7 size-fix padding-1">Делает поля формы полупрозрачными</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--centered</code></div>
						<div class="col-7 size-fix padding-1">Располагает форму по центру</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--no-smooth</code></div>
						<div class="col-7 size-fix padding-1">Убирает сглаживание полей форм</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--rounded</code></div>
						<div class="col-7 size-fix padding-1">Увеличивает сглаживание полей форм</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--fit</code></div>
						<div class="col-7 size-fix padding-1">Поля формы на всю ширину родительского блока</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form--no-padding</code></div>
						<div class="col-7 size-fix padding-1">Убирает внутренние отступы по горизонтали (аналог глобального модификатора .padding-horizontal-0)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.invalid</code></div>
						<div class="col-7 size-fix padding-1">Устанавливает стили для полей с неправильными введенными данными</div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;form&quot;&gt;
	&lt;label for=&quot;field1&quot;&gt;&#x41b;&#x43e;&#x433;&#x438;&#x43d;:&lt;/label&gt;
	&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x432;&#x430;&#x448; &#x43b;&#x43e;&#x433;&#x438;&#x43d;&quot; id=&quot;field1&quot;&gt;
	&lt;label for=&quot;field2&quot;&gt;&#x41f;&#x430;&#x440;&#x43e;&#x43b;&#x44c;:&lt;/label&gt;
	&lt;input type=&quot;password&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x432;&#x430;&#x448; &#x43f;&#x430;&#x440;&#x43e;&#x43b;&#x44c;&quot; id=&quot;field2&quot;&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="fields"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Комбинированные поля</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-red">Flex</span>

				<div class="alert alert--color-blue">
					<div class="alert__content">Комбинированные поля должны находиться в элементе .form-attached</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Комбинированные поля поддерживают все модификаторы формы</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<div class="form">
						<div class="form-attached">
							<div class="form__attach">Введите цену:</div>
							<input type="text" placeholder="Рубли">
							<input type="text" placeholder="Копейки">
							<div class="form__attach">руб.</div>
						</div>
						<div class="form-attached">
							<div class="form__attach">Мой возраст</div>
							<input type="text" placeholder="Введите возраст">
							<div class="form__attach">лет.</div>
						</div>
					</div>
				</div>

				<div id="tabs2Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form-attached</code></div>
						<div class="col-7 size-fix padding-1">Блок комбинированных полей</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.form__attach</code></div>
						<div class="col-7 size-fix padding-1">Текстовый блок</div>
					</div>	
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;form&quot;&gt;
	&lt;div class=&quot;form-attached&quot;&gt;
		&lt;div class=&quot;form__attach&quot;&gt;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x446;&#x435;&#x43d;&#x443;:&lt;/div&gt;
		&lt;input type=&quot;text&quot; placeholder=&quot;&#x420;&#x443;&#x431;&#x43b;&#x438;&quot;&gt;
		&lt;input type=&quot;text&quot; placeholder=&quot;&#x41a;&#x43e;&#x43f;&#x435;&#x439;&#x43a;&#x438;&quot;&gt;
		&lt;div class=&quot;form__attach&quot;&gt;&#x440;&#x443;&#x431;.&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;form-attached&quot;&gt;
		&lt;div class=&quot;form__attach&quot;&gt;&#x41c;&#x43e;&#x439; &#x432;&#x43e;&#x437;&#x440;&#x430;&#x441;&#x442;&lt;/div&gt;
		&lt;input type=&quot;text&quot; placeholder=&quot;&#x412;&#x432;&#x435;&#x434;&#x438;&#x442;&#x435; &#x432;&#x43e;&#x437;&#x440;&#x430;&#x441;&#x442;&quot;&gt;
		&lt;div class=&quot;form__attach&quot;&gt;&#x43b;&#x435;&#x442;.&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="checkbox"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Флажки</h1>
				<span class="label">Доступно с версии 2.0</span>

				<div class="alert">
					<div class="alert__content">Флажки позволяют пользователю выбрать один, несколько или вообще ни одного варианта из предложенных</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы флажков могут использоваться друг с другом</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="checkbox checkbox--color-blue">
						<input type="checkbox" id="checkbox1">
						<label for="checkbox1">
							<div class="checkbox__title">Единая Россия</div>
							<div class="checkbox__meta">Лидер партии - Дмитрий Медведев</div>
						</label>
					</div>
					<div class="checkbox checkbox--color-yellow">
						<input type="checkbox" id="checkbox2">
						<label for="checkbox2">
							<div class="checkbox__title">ЛДПР</div>
							<div class="checkbox__meta">Лидер партии - Владимир Жириновский</div>
						</label>
					</div>
					<div class="checkbox checkbox--color-red">
						<input type="checkbox" id="checkbox3">
						<label for="checkbox3">
							<div class="checkbox__title">КПРФ</div>
							<div class="checkbox__meta">Лидер партии - Геннадий Зюганов</div>
						</label>
					</div>
				</div>

				<div id="tabs3Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>input[type="checkbox"]</code></div>
						<div class="col-7 size-fix padding-1">Флажок</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>label</code></div>
						<div class="col-7 size-fix padding-1">Блок описания флажка</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.checkbox__title</code></div>
						<div class="col-7 size-fix padding-1">Название действия. Должен находиться внутри label</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.checkbox__meta</code></div>
						<div class="col-7 size-fix padding-1">Описание действия. Должен находиться внутри label</div>
					</div>	
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.checkbox--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.checkbox--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет флажка. Вместо * нужно указать значение цвета. Для флажков доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>				
				</div>

				<div id="tabs3Template">
					<pre><code class="html">&lt;div class=&quot;checkbox checkbox--color-blue&quot;&gt;
	&lt;input type=&quot;checkbox&quot; id=&quot;checkbox1&quot;&gt;
	&lt;label for=&quot;checkbox1&quot;&gt;
		&lt;div class=&quot;checkbox__title&quot;&gt;&#x415;&#x434;&#x438;&#x43d;&#x430;&#x44f; &#x420;&#x43e;&#x441;&#x441;&#x438;&#x44f;&lt;/div&gt;
		&lt;div class=&quot;checkbox__meta&quot;&gt;&#x41b;&#x438;&#x434;&#x435;&#x440; &#x43f;&#x430;&#x440;&#x442;&#x438;&#x438; - &#x414;&#x43c;&#x438;&#x442;&#x440;&#x438;&#x439; &#x41c;&#x435;&#x434;&#x432;&#x435;&#x434;&#x435;&#x432;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox checkbox--color-yellow&quot;&gt;
	&lt;input type=&quot;checkbox&quot; id=&quot;checkbox2&quot;&gt;
	&lt;label for=&quot;checkbox2&quot;&gt;
		&lt;div class=&quot;checkbox__title&quot;&gt;&#x41b;&#x414;&#x41f;&#x420;&lt;/div&gt;
		&lt;div class=&quot;checkbox__meta&quot;&gt;&#x41b;&#x438;&#x434;&#x435;&#x440; &#x43f;&#x430;&#x440;&#x442;&#x438;&#x438; - &#x412;&#x43b;&#x430;&#x434;&#x438;&#x43c;&#x438;&#x440; &#x416;&#x438;&#x440;&#x438;&#x43d;&#x43e;&#x432;&#x441;&#x43a;&#x438;&#x439;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox checkbox--color-red&quot;&gt;
	&lt;input type=&quot;checkbox&quot; id=&quot;checkbox3&quot;&gt;
	&lt;label for=&quot;checkbox3&quot;&gt;
		&lt;div class=&quot;checkbox__title&quot;&gt;&#x41a;&#x41f;&#x420;&#x424;&lt;/div&gt;
		&lt;div class=&quot;checkbox__meta&quot;&gt;&#x41b;&#x438;&#x434;&#x435;&#x440; &#x43f;&#x430;&#x440;&#x442;&#x438;&#x438; - &#x413;&#x435;&#x43d;&#x43d;&#x430;&#x434;&#x438;&#x439; &#x417;&#x44e;&#x433;&#x430;&#x43d;&#x43e;&#x432;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;</code></pre>		
				</div>
			</div>
		</div>

		<a name="radio"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Радио-кнопки</h1>
				<span class="label">Доступно с версии 2.0</span>

				<div class="alert">
					<div class="alert__content">Радио-кнопки позволяют пользователю выбрать только один вариант из предложенных</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы радио-кнопок могут использоваться друг с другом</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs4">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs4Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs4Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs4Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs4Template">Шаблон</div>
				</div>			

				<div id="tabs4Example">
					<div class="radio radio--color-blue">
						<input type="radio" id="radio1" name="vote">
						<label for="radio1">
							<div class="radio__title">Единая Россия</div>
							<div class="radio__meta">Лидер партии - Дмитрий Медведев</div>
						</label>
					</div>
					<div class="radio radio--color-yellow">
						<input type="radio" id="radio2" name="vote">
						<label for="radio2">
							<div class="radio__title">ЛДПР</div>
							<div class="radio__meta">Лидер партии - Владимир Жириновский</div>
						</label>
					</div>
					<div class="radio radio--color-red">
						<input type="radio" id="radio3" name="vote">
						<label for="radio3">
							<div class="radio__title">КПРФ</div>
							<div class="radio__meta">Лидер партии - Геннадий Зюганов</div>
						</label>
					</div>
				</div>

				<div id="tabs4Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>input[type="radio"]</code></div>
						<div class="col-7 size-fix padding-1">Радио-кнопка</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>label</code></div>
						<div class="col-7 size-fix padding-1">Блок описания радио-кнопки</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.radio__title</code></div>
						<div class="col-7 size-fix padding-1">Название действия. Должен находиться внутри label</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.radio__meta</code></div>
						<div class="col-7 size-fix padding-1">Описание действия. Должен находиться внутри label</div>
					</div>	
				</div>

				<div id="tabs4Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.radio--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.radio--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет радио-кнопки. Вместо * нужно указать значение цвета. Для радио-кнопок доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>				
				</div>

				<div id="tabs4Template">
					<pre><code class="html">&lt;div class=&quot;radio radio--color-blue&quot;&gt;
	&lt;input type=&quot;radio&quot; id=&quot;radio1&quot; name=&quot;vote&quot;&gt;
	&lt;label for=&quot;radio1&quot;&gt;
		&lt;div class=&quot;radio__title&quot;&gt;&#x415;&#x434;&#x438;&#x43d;&#x430;&#x44f; &#x420;&#x43e;&#x441;&#x441;&#x438;&#x44f;&lt;/div&gt;
		&lt;div class=&quot;radio__meta&quot;&gt;&#x41b;&#x438;&#x434;&#x435;&#x440; &#x43f;&#x430;&#x440;&#x442;&#x438;&#x438; - &#x414;&#x43c;&#x438;&#x442;&#x440;&#x438;&#x439; &#x41c;&#x435;&#x434;&#x432;&#x435;&#x434;&#x435;&#x432;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio radio--color-yellow&quot;&gt;
	&lt;input type=&quot;radio&quot; id=&quot;radio2&quot; name=&quot;vote&quot;&gt;
	&lt;label for=&quot;radio2&quot;&gt;
		&lt;div class=&quot;radio__title&quot;&gt;&#x41b;&#x414;&#x41f;&#x420;&lt;/div&gt;
		&lt;div class=&quot;radio__meta&quot;&gt;&#x41b;&#x438;&#x434;&#x435;&#x440; &#x43f;&#x430;&#x440;&#x442;&#x438;&#x438; - &#x412;&#x43b;&#x430;&#x434;&#x438;&#x43c;&#x438;&#x440; &#x416;&#x438;&#x440;&#x438;&#x43d;&#x43e;&#x432;&#x441;&#x43a;&#x438;&#x439;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio radio--color-red&quot;&gt;
	&lt;input type=&quot;radio&quot; id=&quot;radio3&quot; name=&quot;vote&quot;&gt;
	&lt;label for=&quot;radio3&quot;&gt;
		&lt;div class=&quot;radio__title&quot;&gt;&#x41a;&#x41f;&#x420;&#x424;&lt;/div&gt;
		&lt;div class=&quot;radio__meta&quot;&gt;&#x41b;&#x438;&#x434;&#x435;&#x440; &#x43f;&#x430;&#x440;&#x442;&#x438;&#x438; - &#x413;&#x435;&#x43d;&#x43d;&#x430;&#x434;&#x438;&#x439; &#x417;&#x44e;&#x433;&#x430;&#x43d;&#x43e;&#x432;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;</code></pre>		
				</div>
			</div>
		</div>

		<a name="toggle"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Переключатели</h1>
				<span class="label">Доступно с версии 2.0</span>

				<div class="alert">
					<div class="alert__content">Переключатели - это стилилизованные флажки</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы переключателей могут использоваться друг с другом</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs5">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs5Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs5Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs5Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs5Template">Шаблон</div>
				</div>			

				<div id="tabs5Example">
					<div class="toggle toggle--color-blue">
						<input type="checkbox" id="toggle1">
						<label for="toggle1">
							<div class="toggle__title">Показывать уведомления</div>
							<div class="toggle__meta">Вам будут присылать уведомления о новых событиях</div>
						</label>
					</div>
				</div>

				<div id="tabs5Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>input[type="checkbox"]</code></div>
						<div class="col-7 size-fix padding-1">Переключатель</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>label</code></div>
						<div class="col-7 size-fix padding-1">Блок описания переключателя</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.toggle__title</code></div>
						<div class="col-7 size-fix padding-1">Название действия. Должен находиться внутри label</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.toggle__meta</code></div>
						<div class="col-7 size-fix padding-1">Описание действия. Должен находиться внутри label</div>
					</div>	
				</div>

				<div id="tabs5Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.toggle--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.toggle--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет радио-кнопки. Вместо * нужно указать значение цвета. Для радио-кнопок доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.toggle--transparent</code></div>
						<div class="col-7 size-fix padding-1">Убирает фон у переключателей</div>
					</div>			
				</div>

				<div id="tabs5Template">
					<pre><code class="html">&lt;div class=&quot;toggle toggle--color-blue&quot;&gt;
	&lt;input type=&quot;checkbox&quot; id=&quot;toggle1&quot;&gt;
	&lt;label for=&quot;toggle1&quot;&gt;
		&lt;div class=&quot;toggle__title&quot;&gt;&#x41f;&#x43e;&#x43a;&#x430;&#x437;&#x44b;&#x432;&#x430;&#x442;&#x44c; &#x443;&#x432;&#x435;&#x434;&#x43e;&#x43c;&#x43b;&#x435;&#x43d;&#x438;&#x44f;&lt;/div&gt;
		&lt;div class=&quot;toggle__meta&quot;&gt;&#x412;&#x430;&#x43c; &#x431;&#x443;&#x434;&#x443;&#x442; &#x43f;&#x440;&#x438;&#x441;&#x44b;&#x43b;&#x430;&#x442;&#x44c; &#x443;&#x432;&#x435;&#x434;&#x43e;&#x43c;&#x43b;&#x435;&#x43d;&#x438;&#x44f; &#x43e; &#x43d;&#x43e;&#x432;&#x44b;&#x445; &#x441;&#x43e;&#x431;&#x44b;&#x442;&#x438;&#x44f;&#x445;&lt;/div&gt;
	&lt;/label&gt;
&lt;/div&gt;</code></pre>		
				</div>
			</div>
		</div>


		<a name="dropdown"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Выпадающее меню</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>

				<div class="alert">
					<div class="alert__content">Используйте выпадающее меню, чтобы показать дополнительные функции</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Скрипт выпадающего меню автоматически применяется ко всем элементам с аттрибутом data-dropdown-target.</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы выпадающего меню могут использоваться друг с другом</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs6">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs6Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs6Attr">Атрибуты</div>
					<div class="tabs__item" data-tab-target="tabs6Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs6Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs6Template">Шаблон</div>
				</div>			

				<div id="tabs6Example">
					<button class="button--color-blue" data-dropdown-target="dropdownExample">Открыть меню</button>
					<div class="dropdown" id="dropdownExample">
						<div class="dropdown__item">Вырезать</div>
						<div class="dropdown__item">Копировать</div>
						<div class="dropdown__item">Вставить</div>
					</div>
				</div>

				<div id="tabs6Attr">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название аттрибута</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>data-dropdown-target</code></div>
						<div class="col-7 size-fix padding-1">id выпадающего списка</div>
					</div>	
				</div>

				<div id="tabs6Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.dropdown__item</code></div>
						<div class="col-7 size-fix padding-1">Пункт выпадающего меню</div>
					</div>	
				</div>

				<div id="tabs6Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.dropdown--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.dropdown__item--icon</code></div>
						<div class="col-7 size-fix padding-1">Пункт меню имеет иконку</div>
					</div>		
				</div>

				<div id="tabs6Template">
					<pre><code class="html">&lt;button class=&quot;button--color-blue&quot; data-dropdown-target=&quot;dropdownExample&quot;&gt;&#x41e;&#x442;&#x43a;&#x440;&#x44b;&#x442;&#x44c; &#x43c;&#x435;&#x43d;&#x44e;&lt;/button&gt;
&lt;div class=&quot;dropdown&quot; id=&quot;dropdownExample&quot;&gt;
	&lt;div class=&quot;dropdown__item&quot;&gt;&#x412;&#x44b;&#x440;&#x435;&#x437;&#x430;&#x442;&#x44c;&lt;/div&gt;
	&lt;div class=&quot;dropdown__item&quot;&gt;&#x41a;&#x43e;&#x43f;&#x438;&#x440;&#x43e;&#x432;&#x430;&#x442;&#x44c;&lt;/div&gt;
	&lt;div class=&quot;dropdown__item&quot;&gt;&#x412;&#x441;&#x442;&#x430;&#x432;&#x438;&#x442;&#x44c;&lt;/div&gt;
&lt;/div&gt;</code></pre>		
				</div>
			</div>
		</div>


		<a name="select"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Выпадающий список</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>

				<div class="alert">
					<div class="alert__content">Выпадающий список позволяет выбрать один из нескольких представленных вариантов</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы выпадающего списка могут использоваться друг с другом</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs7">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs7Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs7Attr">Атрибуты</div>
					<div class="tabs__item" data-tab-target="tabs7Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs7Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs7JS">JavaScript</div>
					<div class="tabs__item" data-tab-target="tabs7Template">Шаблон</div>
				</div>			

				<div id="tabs7Example">
					<div class="select select--color-green" data-position="top" id="selectExample"></div>
				</div>

				<div id="tabs7Attr">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название аттрибута</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>data-position</code></div>
						<div class="col-7 size-fix padding-1">Если значение равно "top", то выпадающий список будет располагаться сверху. По умолчанию значение равно bottom</div>
					</div>	
				</div>

				<div id="tabs7Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.select__menu</code></div>
						<div class="col-7 size-fix padding-1">Элемент, при нажатии на который открывается меню. Создается автоматически скриптом</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.select__options</code></div>
						<div class="col-7 size-fix padding-1">Блок меню. Создается автоматически скриптом</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.select__options__item</code></div>
						<div class="col-7 size-fix padding-1">Пункт меню. Создается автоматически скриптом</div>
					</div>	
				</div>

				<div id="tabs7Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.select--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.select--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет выпадающего меню. Вместо * нужно указать значение цвета. Для выпадающих меню доступны цвета только из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.select__options__item--active</code></div>
						<div class="col-7 size-fix padding-1">Выбранный пункт меню. Устанавливается автоматически скриптом</div>
					</div>	
				</div>

				<div id="tabs7JS">

<pre><code class="js">var select = new Select($('#selectExample'), ["Москва", "Нижний Новгород", "Санкт-Петербург", "Казань"]);
</code></pre>
					<h4>Методы и свойства Sidebar</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Select(element, options, selectedIndex)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает:
						<ul>
						 	<li><code>element</code>, который является jQuery DOM объектом</li>
						 	<li><code>options</code>, массив строк, который является вариантами выбора</li>
						 	<li><code>selectedIndex</code>, индекс выбранного элемента (начиная с нуля). Необязательный параметр, по умолчанию равен 0</li>
						 </ul>
						 </div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>open()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Показывает выпадающее меню. Скрипт вызывает данное событие самостоятельно</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>hide()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Убирает выпадающее меню. Скрипт вызывает данное событие самостоятельно</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>set(index)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Устанавливает новое значение выбранного пункта меню на index</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>options</code></div>
						<div class="col-3 size-fix padding-1">array</div>
						<div class="col-6 size-fix padding-1">Массив пунктов меню</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>visible</code></div>
						<div class="col-3 size-fix padding-1">bool</div>
						<div class="col-6 size-fix padding-1">Возвращает true, если выпадающее меню открыто. В противном случае возвращает false</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>selectedIndex</code></div>
						<div class="col-3 size-fix padding-1">int</div>
						<div class="col-6 size-fix padding-1">Возвращает id выбранного пункта меню</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>position</code></div>
						<div class="col-3 size-fix padding-1">string</div>
						<div class="col-6 size-fix padding-1">Возвращает "bottom" или "top", в зависимости от положения выпадающего меню</div>
					</div>
				</div>

				<div id="tabs7Template">
					<pre><code class="html">&lt;div class=&quot;select select--color-green&quot; data-position=&quot;top&quot; id=&quot;selectExample&quot;&gt;&lt;/div&gt;</code></pre>		
				</div>
			</div>
		</div>

	</div>

	<div class="col-3" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#forms"><div class="list__item">Формы</div>
					<a href="#fields"><div class="list__item">Комбинированные поля</div></a>
					<a href="#checkbox"><div class="list__item">Флажки</div></a>
					<a href="#radio"><div class="list__item">Радио-кнопки</div></a>
					<a href="#toggle"><div class="list__item">Переключатели</div></a>
					<a href="#dropdown"><div class="list__item">Выпадающее меню</div></a>
					<a href="#select"><div class="list__item">Выпадающий список</div></a>
				</div>				
			</div>
		</div>
	</div>
</div>