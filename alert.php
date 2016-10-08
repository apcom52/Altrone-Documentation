<? 
	$title = 'Сообщения';
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

		var modal = new Modal($('#modalExample'));
		$('#openModalExample').click(function() {
			modal.show();
		});

		var dialog = new Dialog({
			title: "Покупка билета",
			message: "Вы действительно хотите купить билет на данный концерт?",
			onOK: function() { alert('Билет куплен'); },
			onCancel: function() { alert('Покупка отменена'); },
		});
		$('#openDialogExample').click(function() {
			dialog.show();
		});

		$('#showNotification').click(function() {
			showToast('Привет, мир!');
		});
	});
</script>

<div class="grid">
	<div class="col-3 col-lm-6 left-col" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#alert"><div class="list__item">Сообщения</div>
					<a href="#label"><div class="list__item">Лейблы и бейджики</div></a>
					<a href="#jumbotron"><div class="list__item">Заголовок страницы</div></a>
					<a href="#modal"><div class="list__item">Модальные окна</div></a>
					<a href="#dialog"><div class="list__item">Диалоговые окна</div></a>
					<a href="#toast"><div class="list__item">Уведомления</div></a>
					<a href="#tooltip"><div class="list__item">Всплывающие подсказки</div></a>
				</div>				
			</div>
		</div>
	</div>

	<div class="col-9 col-lm-6 offset-3 offset-lm-0">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Сообщения</div>
		
		<a name="alert"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Сообщения</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Используйте сообщения для пояснения действий на странице</div>
				</div>
				<div class="alert alert--color-blue">
					<div class="alert__content">В некоторых случаях заголовок сообщения можно не использовать</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы сообщений можно использовать друг с другом совместно</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="alert alert--color-red">
						<div class="alert__header">Заголовок сообщения</div>
						<div class="alert__content">Текст сообщения</div>
					</div>
				</div>

				<div id="tabs1Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.alert__header</code></div>
						<div class="col-7 size-fix padding-1">Заголовок сообщения</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.alert__content</code></div>
						<div class="col-7 size-fix padding-1">Содержимое сообщения</div>
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.alert--smooth</code></div>
						<div class="col-7 size-fix padding-1">Делает границы сообщения скругленными</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.alert--color-*</code></div>
						<div class="col-7 size-fix padding-1">Определяет цвет фона и текста для сообщения. Для сообщений доступны все цвета из основной палитры, а также цвет black из дополнительной. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;alert alert--color-red&quot;&gt;
	&lt;div class=&quot;alert__header&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a; &#x441;&#x43e;&#x43e;&#x431;&#x449;&#x435;&#x43d;&#x438;&#x44f;&lt;/div&gt;
	&lt;div class=&quot;alert__content&quot;&gt;&#x422;&#x435;&#x43a;&#x441;&#x442; &#x441;&#x43e;&#x43e;&#x431;&#x449;&#x435;&#x43d;&#x438;&#x44f;&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="label"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Лейблы и бейджики</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Могут использоваться для тегов или счетчиков</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы лейблов можно использовать друг с другом совместно</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<div class="label label--color-red">#Тренды2016</div>
					<div class="label label--color-teal label--rounded">+1</div>
				</div>

				<div id="tabs2Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.label--no-smooth</code></div>
						<div class="col-7 size-fix padding-1">Убирает скругление лейблов</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.label--rounded</code></div>
						<div class="col-7 size-fix padding-1">Увеличивает скругление лейблов</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.label--color-*</code></div>
						<div class="col-7 size-fix padding-1">Определяет цвет фона лейблов. Для лейблов доступны все цвета из основной палитры, а также цвет black из дополнительной. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;label label--color-red&quot;&gt;#&#x422;&#x440;&#x435;&#x43d;&#x434;&#x44b;2016&lt;/div&gt;
&lt;div class=&quot;label label--color-teal label--rounded&quot;&gt;+1&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="jumbotron"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Заголовки страниц</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Благодаря заметному оформлению, данный блок можно использовать для оформления заголовков страниц</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы заголовков можно использовать друг с другом совместно</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="jumbotron">
						<div class="jumbotron__header">Купи это!</div>
						<div class="jumbotron__subheader">Купи это немедленно!</div>
					</div>
				</div>

				<div id="tabs3Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.jumbotron__header</code></div>
						<div class="col-7 size-fix padding-1">Заголовок страницы</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.jumbotron__subheader</code></div>
						<div class="col-7 size-fix padding-1">Подзаголовок сообщения</div>
					</div>
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.jumbotron--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.jumbotron--color-*</code></div>
						<div class="col-7 size-fix padding-1">Определяет цвет текста для заголовков. Для заголовков доступны все цвета из основной палитры. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
				</div>

				<div id="tabs3Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;jumbotron&quot;&gt;
	&lt;div class=&quot;jumbotron__header&quot;&gt;&#x41a;&#x443;&#x43f;&#x438; &#x44d;&#x442;&#x43e;!&lt;/div&gt;
	&lt;div class=&quot;jumbotron__content&quot;&gt;&#x41a;&#x443;&#x43f;&#x438; &#x44d;&#x442;&#x43e; &#x43d;&#x435;&#x43c;&#x435;&#x434;&#x43b;&#x435;&#x43d;&#x43d;&#x43e;!&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="modal"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Модальные окна</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-green">Обновлено с версии 2.1</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Модальные окна - диалоговые окна, в которых пользователь может вводить определенные данные. Также их можно использовать для отображения дополнительной информации.</div>
				</div>

				<div class="alert alert--color-red">
					<div class="alert__content">Модальные окна в версии 2.1 имеют обновленное оформление. Модальные окна, созданные в версии 2.0 могут работать неправильно</div>
				</div>

				<div class="alert alert--color-red">
					<div class="alert__content">В версии 2.1 были удалены элементы .modal__header__title, .modal__header__icon. Элемент .modal__header__close добавляется автоматически, если это необходимо</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Модальные окна нужно располагать дочерним объектом тега &lt;body&gt;</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Модальные окна закрываются нажатием на подложку или на любой элемент .modal__discard</div>
				</div>

				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы модальных окон можно использовать друг с другом совместно</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal" id="tabs4">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs4Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs4Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs4Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs4JS">Javascript</div>
					<div class="tabs__item" data-tab-target="tabs4Template">Шаблон</div>
				</div>			

				<div id="tabs4Example">
					<button class="button--color-blue" id="openModalExample">Открыть модальное окно</button>
				</div>

				<div id="tabs4Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal__header</code></div>
						<div class="col-7 size-fix padding-1">Заголовок модального окна</div>
					</div>					
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal__content</code></div>
						<div class="col-7 size-fix padding-1">Содержимое модального окна</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal__footer</code></div>
						<div class="col-7 size-fix padding-1">Нижняя панель модального окна</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal__discard</code></div>
						<div class="col-7 size-fix padding-1">Элемент, при нажатии на который закрывает модальное окно. Может быть любым элементом в любом месте модального окна</div>
					</div>
				</div>

				<div id="tabs4Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal--invert</code></div>
						<div class="col-7 size-fix padding-1">Применяет темную тему</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal--size-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет ширину модального окна. Вместо * нужно подставить значение large, xl или full (на всю ширину страницы). На мобильных устройствах все модальные окна имеют по умолчанию значения .modal--size-full</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal__content--no-borders</code></div>
						<div class="col-7 size-fix padding-1">Содержимое модального окна прилипает вплотную к границам (исчезают отступы от границ окна)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.modal__content--no-borders</code></div>
						<div class="col-7 size-fix padding-1">Содержимое модального окна прилипает вплотную к границам (исчезают отступы от границ окна)</div>
					</div>
				</div>

				<div id="tabs4JS">

<pre><code class="js">var modal = new Modal($('#myModalId'));
modal.show();
</code></pre>
					<h4>Методы и свойства Modal</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Modal(element, options)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает element, который является jQuery DOM объектом. options - объект дополнительных параметров</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>show()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Открывает модальное окно</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>hide()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Закрывает модальное окно</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>toggle()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Меняет значение видимости модального окна на противоположное</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>visible</code></div>
						<div class="col-3 size-fix padding-1">bool</div>
						<div class="col-6 size-fix padding-1">Содержит статус видимости модального окна. True, если окно открыто, false, если оно закрыто</div>
					</div>

					<h4>Параметры Modal</h4>
					<p>Этот компонент содержит несколько параметров, которые регулируют работу компонента. Они передаются в аргумент options</p>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>only_discarding</code></div>
						<div class="col-3 size-fix padding-1">Boolean</div>
						<div class="col-6 size-fix padding-1">Модальное окно будет закрываться только при нажатии на кнопку "Закрыть" (красный крестик в верхнем правом углу) или на любой элемент с классом <code>.modal__discard</code></div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>onShow</code></div>
						<div class="col-3 size-fix padding-1">Function</div>
						<div class="col-6 size-fix padding-1">Функция, которая будет выполняться при открытии модального окна</code></div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>onDiscard</code></div>
						<div class="col-3 size-fix padding-1">Function</div>
						<div class="col-6 size-fix padding-1">Функция, которая будет выполняться при закрытии модального окна</code></div>
					</div>
				</div>

				<div id="tabs4Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;modal&quot; id=&quot;modalExample&quot;&gt;
	&lt;div class=&quot;modal__header&quot;&gt;
		&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a; &#x43c;&#x43e;&#x434;&#x430;&#x43b;&#x44c;&#x43d;&#x43e;&#x433;&#x43e; &#x43e;&#x43a;&#x43d;&#x430;
	&lt;/div&gt;
	&lt;div class=&quot;modal__content&quot;&gt;&#x417;&#x434;&#x435;&#x441;&#x44c; &#x441;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x442;&#x441;&#x44f; &#x442;&#x435;&#x43a;&#x441;&#x442; &#x43c;&#x43e;&#x434;&#x430;&#x43b;&#x44c;&#x43d;&#x43e;&#x433;&#x43e; &#x43e;&#x43a;&#x43d;&#x430;&lt;/div&gt;
	&lt;div class=&quot;modal__footer&quot;&gt;
		&lt;div class=&quot;button button--color-blue modal__discard&quot;&gt;OK&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="dialog"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Диалоговые окна</h1>
				<span class="label--color-green">Доступно с версии 2.1</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Диалоговые окна - вид модальных окон, который отображает текст и дает пользователю права выбора одного из двух вариантов.</div>
				</div>

				<div class="alert alert--color-red">
					<div class="alert__content">Диалоговые окна доступны только начиная с версии 2.1. Если необходимо реализовать их на более старой версии, то необходимо воспользоваться обычными модальными окнами</div>
				</div>				

				<div class="tabs tabs--transparent tabs--color-teal" id="tabs7">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs7Example">Примеры</div>					
					<div class="tabs__item" data-tab-target="tabs7JS">Javascript</div>
				</div>			

				<div id="tabs7Example">
					<button class="button--color-blue" id="openDialogExample">Открыть диалоговое окно</button>
				</div>

				<div id="tabs7JS">

<pre><code class="js">var dialog = new Dialog({
	title: "Покупка билета",
	message: "Вы действительно хотите купить билет на данный концерт?"
	onOK: function() { alert('Билет куплен'); },
	onCancel: function() { alert('Покупка отменена'); },
});
dialog.show();
</code></pre>
					<h4>Методы и свойства Dialog</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Dialog( options)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает options - объект параметров</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>show()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Вызывает диалоговое окно</div>
					</div>

					<h4>Параметры Dialog</h4>
					<p>Этот компонент содержит несколько параметров, которые регулируют работу компонента. Они передаются в аргумент options</p>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>title</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Заголовок диалогового окна</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>message</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Текст диалогового окна</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>onOK</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Функция, которая будет выполняться при нажатии на ОК. <i>Примечание: если вы не передали значение в этот параметр, то диалоговое окно будет содержать только одну кнопку - ОК, которая будет работать как кнопка "Отмена"</i></div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>onCancel</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Функция, которая будет выполняться при нажатии на ОТМЕНА.</div>
					</div>
				</div>				
			</div>
		</div>


		<a name="toast"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Уведомления</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Используйте уведомления для того, чтобы оповестить пользователя о происходящем на странице, например, если возникла ошибка при загрузке данных.</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Уведомления являются полностью JavaScript-модулем. Вставлять уведомления в HTML-верстку не нужно</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal" id="tabs5">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs5Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs5JS">Javascript</div>
				</div>			

				<div id="tabs5Example">
					<button class="button--color-blue" id="showNotification">Показать уведомление</button>
				</div>

				<div id="tabs5JS">
<pre><code class="js">showNotification('Hello World!');</code></pre>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>showNotification(message, duration = 2)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Показывает сообщение message и исчезает через duration-секунд. Параметр duration выражается в секундах, должен быть целым числов в промежутке от 1 до 30, является необязателен, по умолчанию равен 2.</div>
					</div>
				</div>
			</div>
		</div>

		<a name="tooltip"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Всплывающие подсказки</h1>
				<span class="label">Доступно с версии 2.0</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Используйте всплывающие подсказки для пояснения элементов страниц</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Всплывающие подсказки являются JavaScript-модулем. Вставлять верстку самих всплывающих подсказок не нужно.</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Всплывающие подсказки создаются без использования JavaScript, а только с помощью data-атрибутами тегов</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal" id="tabs6">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs6Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs6Attrs">Атрибуты</div>
					<div class="tabs__item" data-tab-target="tabs6Template">Шаблон</div>
				</div>			

				<div id="tabs6Example">
					<button class="button--color-blue" data-tooltip="А вот и подсказка!" data-tooltip-invert="true">Кнопка с подсказкой</button>
				</div>

				<div id="tabs6Attrs">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Атрибут</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>data-tooltip</code></div>
						<div class="col-7 size-fix padding-1">Текст всплывающей подсказки</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>data-tooltip-position</code></div>
						<div class="col-7 size-fix padding-1">Положение всплывающей подсказки относительно объекта. Может принимать значения top, bottom, left или right. По умолчанию имеет значение top.</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>data-tooltip-invert</code></div>
						<div class="col-7 size-fix padding-1">Если указано true, то всплывающая подсказка будет оформлена в темной теме</div>
					</div>
				</div>

				<div id="tabs6Template">
					<pre><code class="html">&lt;button class=&quot;button--color-blue&quot; data-tooltip=&quot;&#x410; &#x432;&#x43e;&#x442; &#x438; &#x43f;&#x43e;&#x434;&#x441;&#x43a;&#x430;&#x437;&#x43a;&#x430;!&quot; data-tooltip-invert=&quot;true&quot;&gt;&#x41a;&#x43d;&#x43e;&#x43f;&#x43a;&#x430; &#x441; &#x43f;&#x43e;&#x434;&#x441;&#x43a;&#x430;&#x437;&#x43a;&#x43e;&#x439;&lt;/button&gt;</code></pre>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="modal" id="modalExample">
	<div class="modal__header">
		<div class="modal__header__title">Заголовок модального окна</div>
	</div>
	<div class="modal__content">Здесь содержится текст модального окна</div>
	<div class="modal__footer">
		<div class="button button--color-blue modal__discard">OK</div>
	</div>
</div>