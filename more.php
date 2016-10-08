<? 
	$title = 'Прочее';
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

		var slider = new Carousel($('#carouselDemo'));
		var accordion = new Accordion($('#accordionExample'));
	});
</script>

<div class="grid">
	<div class="col-3 col-lm-6 left-col" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#images"><div class="list__item">Изображения</div>
					<a href="#carousel"><div class="list__item">Слайдер изображения</div></a>
					<a href="#accordion"><div class="list__item">Аккордеон</div></a>
				</div>				
			</div>
		</div>
	</div>

	<div class="col-9 col-lm-6 offset-3 offset-lm-0">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Другие компоненты</div>
		
		<a name="images"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Изображения</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Данные модификаторы помогают вам изменять оформление изображений</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы изображений можно использовать совместно друг с другом. Модификаторы <b>.img--circle</b>, <b>.img--rounded</b> и <b>.img--smooth</b> использовать совместно нельзя</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
				</div>			

				<div id="tabs1Example">
					<div class="grid">
						<div class="col-12"><img src="http://files.flipsnack.net/collections/items/0c851322fcad4de3d2eec2fi54184781/covers/page_1/small" class="img--responsive"></div>
						<div class="col-4 padding-05 size-fix"><img src="http://www.oldskoolman.de/bilder/plog-content/thumbs/hintergrundbilder/1920x1200/large/3078-wallpaper-hirsch.jpg" alt="" class="img--responsive img--circle size-fix"></div>
						<div class="col-4 padding-05 size-fix"><img src="http://agbirds.com/galleriffic-2.0/imgs/ani%20lar/l4.jpg.jpg" alt="" class="img--responsive img--roundedsize-fix"></div>
						<div class="col-4 padding-05 size-fix"><img src="http://petspark.ru/image/data/42169_Sika_deer_Japanese_deer.jpg" alt="" class="img--responsive img--border card_shadow size-fix"></div>
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.img--responsive</code></div>
						<div class="col-7 size-fix padding-1">Изображение увеличивается по ширине до размеров родительского блока. Высота картинки вычисляется пропорционально</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.img--smooth, .img--rounded</code></div>
						<div class="col-7 size-fix padding-1">Углы изображения закругляются</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.img--circle</code></div>
						<div class="col-7 size-fix padding-1">Изображение становится круглым</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.img--border</code></div>
						<div class="col-7 size-fix padding-1">Добавляет границу изображению</div>
					</div>	
				</div>				
			</div>
		</div>

		<a name="carousel"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Слайдер изображений</h1>
				<span class="label label--color-green">Доступно с версии 2.1</span>
				<span class="label label--color-blue">JavaScript</span>
				<span class="label label--color-red">Flex</span>

				<div class="alert alert--color-blue">
					<div class="alert__content">Вам не нужно верстать кнопки управлания слайдером. Altrone добавит их автоматически при инициализации объекта</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs2Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs2JS">JavaScript</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<div class="carousel" id="carouselDemo">
						<div class="carousel__item">
							<div class="carousel__item__text">Барселона (Испания)</div>
							<img src="http://www.milesmorgantravel.co.uk/assets/images/content/blogs/barcelona-city-break.jpg" alt="">
						</div>
						<div class="carousel__item">
							<div class="carousel__item__text">Копенгаген (Дания)</div>
							<img src="http://static.standard.co.uk/s3fs-public/thumbnails/image/2013/12/11/09/79copenhagen1113.jpg" alt="">
						</div>
						<div class="carousel__item">
							<div class="carousel__item__text">Цюрих (Швейцария)</div>
							<img src="https://cdn.zuerich.com/sites/default/files/styles/viewport_xxl/public/keyvisual/web_zurich_seebecken_megateaser1600x900.jpg?itok=MzH91gj-" alt="">
						</div>
						<div class="carousel__item">
							<div class="carousel__item__text">Осло (Норвегия)</div>
							<img src="http://www.visitoslo.com/Images/Bilder%20Oslo/Byliv%20and%20Omr%C3%A5der/byen-og-fjorden_FWFoto.jpg?t=ScaleToFill%7C1450x720&ts=vSfnxHgXA7cLsnf8iM8TVpElbOc%3D" alt="">
						</div>					
					</div>
				</div>

				<div id="tabs2Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.carousel__item</code></div>
						<div class="col-7 size-fix padding-1">Объект слайдера</div>
					</div>		
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.carousel__item__text</code></div>
						<div class="col-7 size-fix padding-1">Подпись изображения</div>
					</div>							
				</div>

				<div id="tabs2Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.carousel--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема для слайдера</div>
					</div>							
				</div>

				<div id="tabs2JS">
<pre><code class="js">var carousel = new Carousel($('#carouselDemo'));</code></pre>
					<h4>Методы и свойства Carousel</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Carousel(element, options)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает element, который является jQuery DOM объектом, а также options, где указываются параметры слайдера</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>open(index)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Открывает картинку с индексом index. Индексы начинаются с нуля.</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>next()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Переключается на следующую картинку</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>prev()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Переключается на предыдущую картинку</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>slides</code></div>
						<div class="col-3 size-fix padding-1">Array</div>
						<div class="col-6 size-fix padding-1">Массив изображений (состоит из jQuery DOM объектов)</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>currentIndex</code></div>
						<div class="col-3 size-fix padding-1">Integer</div>
						<div class="col-6 size-fix padding-1">Текущий индекс</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>size</code></div>
						<div class="col-3 size-fix padding-1">Integer</div>
						<div class="col-6 size-fix padding-1">Количество изображений</div>
					</div>

					<h4>Параметры Carousel</h4>
					<p>Этот компонент содержит несколько параметров, которые регулируют работу компонента. Они передаются в аргумент options</p>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>onChanged</code></div>
						<div class="col-3 size-fix padding-1">Function</div>
						<div class="col-6 size-fix padding-1">Функция, которая будет выполняться каждый раз, когда изменяется текущая картинка в слайдере</div>
					</div>
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;carousel&quot; id=&quot;carouselDemo&quot;&gt;
	&lt;div class=&quot;carousel__item&quot;&gt;
		&lt;div class=&quot;carousel__item__text&quot;&gt;&#x411;&#x430;&#x440;&#x441;&#x435;&#x43b;&#x43e;&#x43d;&#x430; (&#x418;&#x441;&#x43f;&#x430;&#x43d;&#x438;&#x44f;)&lt;/div&gt;
		&lt;img src=&quot;http://www.milesmorgantravel.co.uk/assets/images/content/blogs/barcelona-city-break.jpg&quot; alt=&quot;&quot;&gt;
	&lt;/div&gt;
	&lt;div class=&quot;carousel__item&quot;&gt;
		&lt;div class=&quot;carousel__item__text&quot;&gt;&#x41a;&#x43e;&#x43f;&#x435;&#x43d;&#x433;&#x430;&#x433;&#x435;&#x43d; (&#x414;&#x430;&#x43d;&#x438;&#x44f;)&lt;/div&gt;
		&lt;img src=&quot;http://static.standard.co.uk/s3fs-public/thumbnails/image/2013/12/11/09/79copenhagen1113.jpg&quot; alt=&quot;&quot;&gt;
	&lt;/div&gt;
	&lt;div class=&quot;carousel__item&quot;&gt;
		&lt;div class=&quot;carousel__item__text&quot;&gt;&#x426;&#x44e;&#x440;&#x438;&#x445; (&#x428;&#x432;&#x435;&#x439;&#x446;&#x430;&#x440;&#x438;&#x44f;)&lt;/div&gt;
		&lt;img src=&quot;https://cdn.zuerich.com/sites/default/files/styles/viewport_xxl/public/keyvisual/web_zurich_seebecken_megateaser1600x900.jpg?itok=MzH91gj-&quot; alt=&quot;&quot;&gt;
	&lt;/div&gt;
	&lt;div class=&quot;carousel__item&quot;&gt;
		&lt;div class=&quot;carousel__item__text&quot;&gt;&#x41e;&#x441;&#x43b;&#x43e; (&#x41d;&#x43e;&#x440;&#x432;&#x435;&#x433;&#x438;&#x44f;)&lt;/div&gt;
		&lt;img src=&quot;http://www.visitoslo.com/Images/Bilder%20Oslo/Byliv%20and%20Omr%C3%A5der/byen-og-fjorden_FWFoto.jpg?t=ScaleToFill%7C1450x720&amp;ts=vSfnxHgXA7cLsnf8iM8TVpElbOc%3D&quot; alt=&quot;&quot;&gt;
	&lt;/div&gt;					
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>


		<a name="accordion"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Аккордеон</h1>
				<span class="label">Доступно с версии 2.1</span>
				<span class="label label--color-blue">JavaScript</span>
				<div class="alert">
					<div class="alert__content">Сворачивайте и разворачивайте блоки с помощью компонента Accordion</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs3">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs3Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs3Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs3Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs3JS">JavaScript</div>
					<div class="tabs__item" data-tab-target="tabs3Template">Шаблон</div>
				</div>			

				<div id="tabs3Example">
					<div class="accordion" id="accordionExample">
						<div class="accordion__item">
							<div class="accordion__item__title">Война и мир</div>
							<div class="accordion__item__content">
								<p>Наверное, это одно из тех немногих произведений, которое должен прочесть каждый человек, считающий себя образованным. Так как в этой книге передается время и характер, вся наша история и жизнь наших предков.</p>
								<p>Толстой показывает нам все события субъективно и пристрастно. Наполеона он представляет нам как жалкого ничтожного человека.</p>
								<p>Роман - это гимн жизни, который учит нас любить её и ценить, воспевает доброту и искренность.</p>
							</div>
						</div>
						<div class="accordion__item">
							<div class="accordion__item__title">Преступление и наказание</div>
							<div class="accordion__item__content">
								<p>Ни одного читателя не оставляет равнодушным социальная драма, облеченная в увлекательную форму криминального романа, и философская составляющая романа.</p>
							</div>
						</div>
						<div class="accordion__item">
							<div class="accordion__item__title">Мастер и Маргарита</div>
							<div class="accordion__item__content">
								<p>Мастер с гениальным озарением описал последние дни жизни Иисуса в своем романе о Понтии Пилате. За этот роман он поплатился свободой и был отправлен в больницу. Маргарита - его тайная возлюбленная, ради спасения любимого и встречи с ним готова на сделку с дьяволом. В это время некто Воланд, прибывший в Москву со своими слугами, наводит страх на всех москвичей. Но в мире, где укоренилось зло, и засела нечистая сила, проделки сатаны, окрашенные искрометным юмором, оборачиваются возмездием за людские грехи и пороки.</p>
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
						<div class="col-5 size-fix padding-1"><code>.accordion__item</code></div>
						<div class="col-7 size-fix padding-1">Элемент аккордеона</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.accordion__item__title</code></div>
						<div class="col-7 size-fix padding-1">Заголовок элемента</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.accordion__item__content</code></div>
						<div class="col-7 size-fix padding-1">Содержимое элемента</div>
					</div>
				</div>

				<div id="tabs3Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.accordion--invert</code></div>
						<div class="col-7 size-fix padding-1">Темная тема</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.accordion__item--active</code></div>
						<div class="col-7 size-fix padding-1">Активное состояние элемента (элемент открыт)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.accordion__item--left-icon</code></div>
						<div class="col-7 size-fix padding-1">Иконки состояния элемента (открыт/закрыт) расположены с левой стороны</div>
					</div>
				</div>

				<div id="tabs3JS">
<pre><code class="js">var accordion = new Accordion($('#accordionExample'));</code></pre>
					<h4>Методы и свойства Accordion</h4>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип возвращаемого значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>Accordion(element, options)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Конструктор. Принимает element, который является jQuery DOM объектом, а также options, где указываются параметры аккордеона</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>open(element)</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Открывает указанный элемент аккордеона. Element должен быть jQuery DOM объектом</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>closeOthers()</code></div>
						<div class="col-3 size-fix padding-1">-</div>
						<div class="col-6 size-fix padding-1">Сворачивает все элементы</div>
					</div>
					
					<h4>Параметры Accordion</h4>
					<p>Этот компонент содержит несколько параметров, которые регулируют работу компонента. Они передаются в аргумент options</p>
					<div class="grid">
						<div class="col-3 size-fix padding-1 bold">Название</div>
						<div class="col-3 size-fix padding-1 bold">Тип значения</div>
						<div class="col-6 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-3 size-fix padding-1"><code>multi</code></div>
						<div class="col-3 size-fix padding-1">Boolean</div>
						<div class="col-6 size-fix padding-1">Указывает на то, что можно разворачивать одновременно несколько элементов аккордеона</div>
					</div>
				</div>

				<div id="tabs3Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
	&lt;div class=&quot;accordion__item&quot;&gt;
		&lt;div class=&quot;accordion__item__title&quot;&gt;&#x412;&#x43e;&#x439;&#x43d;&#x430; &#x438; &#x43c;&#x438;&#x440;&lt;/div&gt;
		&lt;div class=&quot;accordion__item__content&quot;&gt;
			&lt;p&gt;&#x41d;&#x430;&#x432;&#x435;&#x440;&#x43d;&#x43e;&#x435;, &#x44d;&#x442;&#x43e; &#x43e;&#x434;&#x43d;&#x43e; &#x438;&#x437; &#x442;&#x435;&#x445; &#x43d;&#x435;&#x43c;&#x43d;&#x43e;&#x433;&#x438;&#x445; &#x43f;&#x440;&#x43e;&#x438;&#x437;&#x432;&#x435;&#x434;&#x435;&#x43d;&#x438;&#x439;, &#x43a;&#x43e;&#x442;&#x43e;&#x440;&#x43e;&#x435; &#x434;&#x43e;&#x43b;&#x436;&#x435;&#x43d; &#x43f;&#x440;&#x43e;&#x447;&#x435;&#x441;&#x442;&#x44c; &#x43a;&#x430;&#x436;&#x434;&#x44b;&#x439; &#x447;&#x435;&#x43b;&#x43e;&#x432;&#x435;&#x43a;, &#x441;&#x447;&#x438;&#x442;&#x430;&#x44e;&#x449;&#x438;&#x439; &#x441;&#x435;&#x431;&#x44f; &#x43e;&#x431;&#x440;&#x430;&#x437;&#x43e;&#x432;&#x430;&#x43d;&#x43d;&#x44b;&#x43c;. &#x422;&#x430;&#x43a; &#x43a;&#x430;&#x43a; &#x432; &#x44d;&#x442;&#x43e;&#x439; &#x43a;&#x43d;&#x438;&#x433;&#x435; &#x43f;&#x435;&#x440;&#x435;&#x434;&#x430;&#x435;&#x442;&#x441;&#x44f; &#x432;&#x440;&#x435;&#x43c;&#x44f; &#x438; &#x445;&#x430;&#x440;&#x430;&#x43a;&#x442;&#x435;&#x440;, &#x432;&#x441;&#x44f; &#x43d;&#x430;&#x448;&#x430; &#x438;&#x441;&#x442;&#x43e;&#x440;&#x438;&#x44f; &#x438; &#x436;&#x438;&#x437;&#x43d;&#x44c; &#x43d;&#x430;&#x448;&#x438;&#x445; &#x43f;&#x440;&#x435;&#x434;&#x43a;&#x43e;&#x432;.&lt;/p&gt;
			&lt;p&gt;&#x422;&#x43e;&#x43b;&#x441;&#x442;&#x43e;&#x439; &#x43f;&#x43e;&#x43a;&#x430;&#x437;&#x44b;&#x432;&#x430;&#x435;&#x442; &#x43d;&#x430;&#x43c; &#x432;&#x441;&#x435; &#x441;&#x43e;&#x431;&#x44b;&#x442;&#x438;&#x44f; &#x441;&#x443;&#x431;&#x44a;&#x435;&#x43a;&#x442;&#x438;&#x432;&#x43d;&#x43e; &#x438; &#x43f;&#x440;&#x438;&#x441;&#x442;&#x440;&#x430;&#x441;&#x442;&#x43d;&#x43e;. &#x41d;&#x430;&#x43f;&#x43e;&#x43b;&#x435;&#x43e;&#x43d;&#x430; &#x43e;&#x43d; &#x43f;&#x440;&#x435;&#x434;&#x441;&#x442;&#x430;&#x432;&#x43b;&#x44f;&#x435;&#x442; &#x43d;&#x430;&#x43c; &#x43a;&#x430;&#x43a; &#x436;&#x430;&#x43b;&#x43a;&#x43e;&#x433;&#x43e; &#x43d;&#x438;&#x447;&#x442;&#x43e;&#x436;&#x43d;&#x43e;&#x433;&#x43e; &#x447;&#x435;&#x43b;&#x43e;&#x432;&#x435;&#x43a;&#x430;.&lt;/p&gt;
			&lt;p&gt;&#x420;&#x43e;&#x43c;&#x430;&#x43d; - &#x44d;&#x442;&#x43e; &#x433;&#x438;&#x43c;&#x43d; &#x436;&#x438;&#x437;&#x43d;&#x438;, &#x43a;&#x43e;&#x442;&#x43e;&#x440;&#x44b;&#x439; &#x443;&#x447;&#x438;&#x442; &#x43d;&#x430;&#x441; &#x43b;&#x44e;&#x431;&#x438;&#x442;&#x44c; &#x435;&#x451; &#x438; &#x446;&#x435;&#x43d;&#x438;&#x442;&#x44c;, &#x432;&#x43e;&#x441;&#x43f;&#x435;&#x432;&#x430;&#x435;&#x442; &#x434;&#x43e;&#x431;&#x440;&#x43e;&#x442;&#x443; &#x438; &#x438;&#x441;&#x43a;&#x440;&#x435;&#x43d;&#x43d;&#x43e;&#x441;&#x442;&#x44c;.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;accordion__item&quot;&gt;
		&lt;div class=&quot;accordion__item__title&quot;&gt;&#x41f;&#x440;&#x435;&#x441;&#x442;&#x443;&#x43f;&#x43b;&#x435;&#x43d;&#x438;&#x435; &#x438; &#x43d;&#x430;&#x43a;&#x430;&#x437;&#x430;&#x43d;&#x438;&#x435;&lt;/div&gt;
		&lt;div class=&quot;accordion__item__content&quot;&gt;
			&lt;p&gt;&#x41d;&#x438; &#x43e;&#x434;&#x43d;&#x43e;&#x433;&#x43e; &#x447;&#x438;&#x442;&#x430;&#x442;&#x435;&#x43b;&#x44f; &#x43d;&#x435; &#x43e;&#x441;&#x442;&#x430;&#x432;&#x43b;&#x44f;&#x435;&#x442; &#x440;&#x430;&#x432;&#x43d;&#x43e;&#x434;&#x443;&#x448;&#x43d;&#x44b;&#x43c; &#x441;&#x43e;&#x446;&#x438;&#x430;&#x43b;&#x44c;&#x43d;&#x430;&#x44f; &#x434;&#x440;&#x430;&#x43c;&#x430;, &#x43e;&#x431;&#x43b;&#x435;&#x447;&#x435;&#x43d;&#x43d;&#x430;&#x44f; &#x432; &#x443;&#x432;&#x43b;&#x435;&#x43a;&#x430;&#x442;&#x435;&#x43b;&#x44c;&#x43d;&#x443;&#x44e; &#x444;&#x43e;&#x440;&#x43c;&#x443; &#x43a;&#x440;&#x438;&#x43c;&#x438;&#x43d;&#x430;&#x43b;&#x44c;&#x43d;&#x43e;&#x433;&#x43e; &#x440;&#x43e;&#x43c;&#x430;&#x43d;&#x430;, &#x438; &#x444;&#x438;&#x43b;&#x43e;&#x441;&#x43e;&#x444;&#x441;&#x43a;&#x430;&#x44f; &#x441;&#x43e;&#x441;&#x442;&#x430;&#x432;&#x43b;&#x44f;&#x44e;&#x449;&#x430;&#x44f; &#x440;&#x43e;&#x43c;&#x430;&#x43d;&#x430;.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;accordion__item&quot;&gt;
		&lt;div class=&quot;accordion__item__title&quot;&gt;&#x41c;&#x430;&#x441;&#x442;&#x435;&#x440; &#x438; &#x41c;&#x430;&#x440;&#x433;&#x430;&#x440;&#x438;&#x442;&#x430;&lt;/div&gt;
		&lt;div class=&quot;accordion__item__content&quot;&gt;
			&lt;p&gt;&#x41c;&#x430;&#x441;&#x442;&#x435;&#x440; &#x441; &#x433;&#x435;&#x43d;&#x438;&#x430;&#x43b;&#x44c;&#x43d;&#x44b;&#x43c; &#x43e;&#x437;&#x430;&#x440;&#x435;&#x43d;&#x438;&#x435;&#x43c; &#x43e;&#x43f;&#x438;&#x441;&#x430;&#x43b; &#x43f;&#x43e;&#x441;&#x43b;&#x435;&#x434;&#x43d;&#x438;&#x435; &#x434;&#x43d;&#x438; &#x436;&#x438;&#x437;&#x43d;&#x438; &#x418;&#x438;&#x441;&#x443;&#x441;&#x430; &#x432; &#x441;&#x432;&#x43e;&#x435;&#x43c; &#x440;&#x43e;&#x43c;&#x430;&#x43d;&#x435; &#x43e; &#x41f;&#x43e;&#x43d;&#x442;&#x438;&#x438; &#x41f;&#x438;&#x43b;&#x430;&#x442;&#x435;. &#x417;&#x430; &#x44d;&#x442;&#x43e;&#x442; &#x440;&#x43e;&#x43c;&#x430;&#x43d; &#x43e;&#x43d; &#x43f;&#x43e;&#x43f;&#x43b;&#x430;&#x442;&#x438;&#x43b;&#x441;&#x44f; &#x441;&#x432;&#x43e;&#x431;&#x43e;&#x434;&#x43e;&#x439; &#x438; &#x431;&#x44b;&#x43b; &#x43e;&#x442;&#x43f;&#x440;&#x430;&#x432;&#x43b;&#x435;&#x43d; &#x432; &#x431;&#x43e;&#x43b;&#x44c;&#x43d;&#x438;&#x446;&#x443;. &#x41c;&#x430;&#x440;&#x433;&#x430;&#x440;&#x438;&#x442;&#x430; - &#x435;&#x433;&#x43e; &#x442;&#x430;&#x439;&#x43d;&#x430;&#x44f; &#x432;&#x43e;&#x437;&#x43b;&#x44e;&#x431;&#x43b;&#x435;&#x43d;&#x43d;&#x430;&#x44f;, &#x440;&#x430;&#x434;&#x438; &#x441;&#x43f;&#x430;&#x441;&#x435;&#x43d;&#x438;&#x44f; &#x43b;&#x44e;&#x431;&#x438;&#x43c;&#x43e;&#x433;&#x43e; &#x438; &#x432;&#x441;&#x442;&#x440;&#x435;&#x447;&#x438; &#x441; &#x43d;&#x438;&#x43c; &#x433;&#x43e;&#x442;&#x43e;&#x432;&#x430; &#x43d;&#x430; &#x441;&#x434;&#x435;&#x43b;&#x43a;&#x443; &#x441; &#x434;&#x44c;&#x44f;&#x432;&#x43e;&#x43b;&#x43e;&#x43c;. &#x412; &#x44d;&#x442;&#x43e; &#x432;&#x440;&#x435;&#x43c;&#x44f; &#x43d;&#x435;&#x43a;&#x442;&#x43e; &#x412;&#x43e;&#x43b;&#x430;&#x43d;&#x434;, &#x43f;&#x440;&#x438;&#x431;&#x44b;&#x432;&#x448;&#x438;&#x439; &#x432; &#x41c;&#x43e;&#x441;&#x43a;&#x432;&#x443; &#x441;&#x43e; &#x441;&#x432;&#x43e;&#x438;&#x43c;&#x438; &#x441;&#x43b;&#x443;&#x433;&#x430;&#x43c;&#x438;, &#x43d;&#x430;&#x432;&#x43e;&#x434;&#x438;&#x442; &#x441;&#x442;&#x440;&#x430;&#x445; &#x43d;&#x430; &#x432;&#x441;&#x435;&#x445; &#x43c;&#x43e;&#x441;&#x43a;&#x432;&#x438;&#x447;&#x435;&#x439;. &#x41d;&#x43e; &#x432; &#x43c;&#x438;&#x440;&#x435;, &#x433;&#x434;&#x435; &#x443;&#x43a;&#x43e;&#x440;&#x435;&#x43d;&#x438;&#x43b;&#x43e;&#x441;&#x44c; &#x437;&#x43b;&#x43e;, &#x438; &#x437;&#x430;&#x441;&#x435;&#x43b;&#x430; &#x43d;&#x435;&#x447;&#x438;&#x441;&#x442;&#x430;&#x44f; &#x441;&#x438;&#x43b;&#x430;, &#x43f;&#x440;&#x43e;&#x434;&#x435;&#x43b;&#x43a;&#x438; &#x441;&#x430;&#x442;&#x430;&#x43d;&#x44b;, &#x43e;&#x43a;&#x440;&#x430;&#x448;&#x435;&#x43d;&#x43d;&#x44b;&#x435; &#x438;&#x441;&#x43a;&#x440;&#x43e;&#x43c;&#x435;&#x442;&#x43d;&#x44b;&#x43c; &#x44e;&#x43c;&#x43e;&#x440;&#x43e;&#x43c;, &#x43e;&#x431;&#x43e;&#x440;&#x430;&#x447;&#x438;&#x432;&#x430;&#x44e;&#x442;&#x441;&#x44f; &#x432;&#x43e;&#x437;&#x43c;&#x435;&#x437;&#x434;&#x438;&#x435;&#x43c; &#x437;&#x430; &#x43b;&#x44e;&#x434;&#x441;&#x43a;&#x438;&#x435; &#x433;&#x440;&#x435;&#x445;&#x438; &#x438; &#x43f;&#x43e;&#x440;&#x43e;&#x43a;&#x438;.&lt;/p&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div> 