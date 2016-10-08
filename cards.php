<? 
	$title = 'Карточки';
	include('parent.php'); 
?>

<script type="text/javascript">
	$(function() {
		var tab1 = new Tabs($('#tabs1'));
		var tab2 = new Tabs($('#tabs2'));
		var tab3 = new Tabs($('#tabs3'));
	});
</script>

<div class="grid">
	<div class="col-3 col-lm-6 left-col" style="position: fixed;">
		<div class="card card--no-smooth">
			<div class="card__content">
				<h3>Разделы</h3>
				<div class="list list--color-teal">
					<a href="#card"><div class="list__item">Стандартные Карточки</div>
					<a href="#images"><div class="list__item">Карточки с изображениями</div></a>
				</div>				
			</div>
		</div>
	</div>

	<div class="col-9 col-lm-6 offset-3 offset-lm-0">
		<div class="helvetica-thin margin-left-1" style="font-size: 48px;">Карточки</div>
		
		<a name="card"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Стандартные карточки</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Карточки - популярный способ подачи контента пользователю</div>
				</div>
				<div class="alert alert--color-green">
					<div class="alert__content">Модификаторы вкладок можно использовать совместно друг с другом</div>
				</div>
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs1">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs1Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs1Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs1Mods">Модификаторы</div>
					<div class="tabs__item" data-tab-target="tabs1Template">Шаблон</div>
				</div>			

				<div id="tabs1Example">
					<div class="card">
						<div class="card__header">
							<div class="card__header__title">Tesla Model S</div>
						</div>
						<div class="card__content">
							<p>Tesla Model S — пятидверный электромобиль производства американской компании Tesla Motors. Прототип был впервые показан на Франкфуртском автосалоне в 2009 году; поставки автомобиля в США начались в июне 2012 года.</p>
						</div>
						<div class="card__footer">
							<button class="button--color-green">Купить</button>
						</div>						
					</div>
				</div>

				<div id="tabs1Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__header</code></div>
						<div class="col-7 size-fix padding-1">Блок заголовка карточки</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__header__title</code></div>
						<div class="col-7 size-fix padding-1">Заголовок карточки</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__header__icon</code></div>
						<div class="col-7 size-fix padding-1">Иконка в заголовке карточки</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__content</code></div>
						<div class="col-7 size-fix padding-1">Содержимое карточки</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__footer</code></div>
						<div class="col-7 size-fix padding-1">Подвал карточки</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__footer__meta</code></div>
						<div class="col-7 size-fix padding-1">Мета-информация в подвале карточки</div>
					</div>
				</div>

				<div id="tabs1Mods">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название модификатора</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card--color-*</code></div>
						<div class="col-7 size-fix padding-1">Изменяет цвет фона и текста карточки. Вместо * нужно указать значение цвета. Для элементов вкладок доступны все цвета только из основной палитры и цвет black из дополнительной. <a class="teal-fg" href="global.php#colors">Палитра цветов Altrone</a></div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card--no-shadow</code></div>
						<div class="col-7 size-fix padding-1">Убирает тень</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card--no-smooth</code></div>
						<div class="col-7 size-fix padding-1">Убирает сглаживание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card--rounded</code></div>
						<div class="col-7 size-fix padding-1">Увеличивает сглаживание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__content--no-padding</code></div>
						<div class="col-7 size-fix padding-1">Убирает внутренние отступы у контента карточки (аналог глобального модификатора .padding-0)</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__content--list</code></div>
						<div class="col-7 size-fix padding-1">Исправляет неправильную стилилизацию списков, которые находятся в карточке</div>
					</div>
				</div>

				<div id="tabs1Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;card&quot;&gt;
	&lt;div class=&quot;card__header&quot;&gt;
		&lt;div class=&quot;card__header__title&quot;&gt;Tesla Model S&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;card__content&quot;&gt;
		&lt;p&gt;Tesla Model S &mdash; &#x43f;&#x44f;&#x442;&#x438;&#x434;&#x432;&#x435;&#x440;&#x43d;&#x44b;&#x439; &#x44d;&#x43b;&#x435;&#x43a;&#x442;&#x440;&#x43e;&#x43c;&#x43e;&#x431;&#x438;&#x43b;&#x44c; &#x43f;&#x440;&#x43e;&#x438;&#x437;&#x432;&#x43e;&#x434;&#x441;&#x442;&#x432;&#x430; &#x430;&#x43c;&#x435;&#x440;&#x438;&#x43a;&#x430;&#x43d;&#x441;&#x43a;&#x43e;&#x439; &#x43a;&#x43e;&#x43c;&#x43f;&#x430;&#x43d;&#x438;&#x438; Tesla Motors. 
		&#x41f;&#x440;&#x43e;&#x442;&#x43e;&#x442;&#x438;&#x43f; &#x431;&#x44b;&#x43b; &#x432;&#x43f;&#x435;&#x440;&#x432;&#x44b;&#x435; &#x43f;&#x43e;&#x43a;&#x430;&#x437;&#x430;&#x43d; &#x43d;&#x430; &#x424;&#x440;&#x430;&#x43d;&#x43a;&#x444;&#x443;&#x440;&#x442;&#x441;&#x43a;&#x43e;&#x43c; &#x430;&#x432;&#x442;&#x43e;&#x441;&#x430;&#x43b;&#x43e;&#x43d;&#x435; &#x432; 2009 &#x433;
		&#x43e;&#x434;&#x443;; &#x43f;&#x43e;&#x441;&#x442;&#x430;&#x432;&#x43a;&#x438; &#x430;&#x432;&#x442;&#x43e;&#x43c;&#x43e;&#x431;&#x438;&#x43b;&#x44f; &#x432; &#x421;&#x428;&#x410; &#x43d;&#x430;&#x447;&#x430;&#x43b;&#x438;&#x441;&#x44c; &#x432; &#x438;&#x44e;&#x43d;&#x435; 2012 &#x433;&#x43e;&#x434;&#x430;.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;card__footer&quot;&gt;
		&lt;button class=&quot;button--color-green&quot;&gt;&#x41a;&#x443;&#x43f;&#x438;&#x442;&#x44c;&lt;/button&gt;
	&lt;/div&gt;						
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>

		<a name="images"></a>
		<div class="card card--no-smooth">
			<div class="card__content">				
				<h1 class="helvetica-thin">Карточки с изображениями</h1>
				<span class="label">Доступно с версии 2.0</span>
				<div class="alert">
					<div class="alert__content">Чтобы создавать эффектные карточки, вы можете добавлять на них изображения</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Карточка с изображениями поддерживает все элементы обычной карточки, кроме .card__header и его дочерних элементов.</div>
				</div>

				<div class="alert alert--color-blue">
					<div class="alert__content">Карточка с изображениями поддерживает все модификаторы обычной карточки.</div>
				</div>
				
				<div class="tabs tabs--transparent tabs--color-teal" id="tabs2">
					<div class="tabs__item tabs__item--active" data-tab-target="tabs2Example">Примеры</div>
					<div class="tabs__item" data-tab-target="tabs2Elements">Элементы</div>
					<div class="tabs__item" data-tab-target="tabs2Template">Шаблон</div>
				</div>			

				<div id="tabs2Example">
					<div class="card">
						<div class="card__image">
							<img src="http://carrrsmag.com/data_images/models/tesla-model-s/tesla-model-s-05.jpg" alt="Tesla Model S">
							<div class="card__image__header">
								<div class="card__image__header__title">Tesla Model S</div>
							</div>
						</div>
						<div class="card__content">
							<p>Tesla Model S — пятидверный электромобиль производства американской компании Tesla Motors. Прототип был впервые показан на Франкфуртском автосалоне в 2009 году; поставки автомобиля в США начались в июне 2012 года.</p>
						</div>
						<div class="card__footer">
							<button class="button--color-green">Купить</button>
						</div>						
					</div>
				</div>

				<div id="tabs2Elements">
					<div class="grid">
						<div class="col-5 size-fix padding-1 bold">Название элемента</div>
						<div class="col-7 size-fix padding-1 bold">Описание</div>
					</div>
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__image</code></div>
						<div class="col-7 size-fix padding-1">Блок изображения</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__image__header</code></div>
						<div class="col-7 size-fix padding-1">Блок заголовка изображения</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__image__header__title</code></div>
						<div class="col-7 size-fix padding-1">Заголовок карточки</div>
					</div>	
					<div class="grid">
						<div class="col-5 size-fix padding-1"><code>.card__image__header__icon</code></div>
						<div class="col-7 size-fix padding-1">Иконка карточки</div>
					</div>				
				</div>

				<div id="tabs2Template">
					<div class="grid">
<pre><code class="html">&lt;div class=&quot;card&quot;&gt;
	&lt;div class=&quot;card__image&quot;&gt;
		&lt;img src=&quot;http://carrrsmag.com/data_images/models/tesla-model-s/tesla-model-s-05.jpg&quot; alt=&quot;Tesla Model S&quot;&gt;
		&lt;div class=&quot;card__image__header&quot;&gt;
			&lt;div class=&quot;card__image__header__title&quot;&gt;Tesla Model S&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;card__content&quot;&gt;
		&lt;p&gt;Tesla Model S &mdash; &#x43f;&#x44f;&#x442;&#x438;&#x434;&#x432;&#x435;&#x440;&#x43d;&#x44b;&#x439; &#x44d;&#x43b;&#x435;&#x43a;&#x442;&#x440;&#x43e;&#x43c;&#x43e;&#x431;&#x438;&#x43b;&#x44c; &#x43f;&#x440;&#x43e;&#x438;&#x437;&#x432;&#x43e;&#x434;&#x441;&#x442;&#x432;&#x430; &#x430;&#x43c;&#x435;&#x440;&#x438;&#x43a;&#x430;&#x43d;&#x441;&#x43a;&#x43e;&#x439; &#x43a;&#x43e;&#x43c;&#x43f;&#x430;&#x43d;&#x438;&#x438; Tesla Motors. 
		&#x41f;&#x440;&#x43e;&#x442;&#x43e;&#x442;&#x438;&#x43f; &#x431;&#x44b;&#x43b; &#x432;&#x43f;&#x435;&#x440;&#x432;&#x44b;&#x435; &#x43f;&#x43e;&#x43a;&#x430;&#x437;&#x430;&#x43d; &#x43d;&#x430; &#x424;&#x440;&#x430;&#x43d;&#x43a;&#x444;&#x443;&#x440;&#x442;&#x441;&#x43a;&#x43e;&#x43c; &#x430;&#x432;&#x442;&#x43e;&#x441;&#x430;&#x43b;&#x43e;&#x43d;&#x435; &#x432; 2009 &#x433;&#x43e;&#x434;&#x443;; 
		&#x43f;&#x43e;&#x441;&#x442;&#x430;&#x432;&#x43a;&#x438; &#x430;&#x432;&#x442;&#x43e;&#x43c;&#x43e;&#x431;&#x438;&#x43b;&#x44f; &#x432; &#x421;&#x428;&#x410; &#x43d;&#x430;&#x447;&#x430;&#x43b;&#x438;&#x441;&#x44c; &#x432; &#x438;&#x44e;&#x43d;&#x435; 2012 &#x433;&#x43e;&#x434;&#x430;.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;card__footer&quot;&gt;
		&lt;button class=&quot;button--color-green&quot;&gt;&#x41a;&#x443;&#x43f;&#x438;&#x442;&#x44c;&lt;/button&gt;
	&lt;/div&gt;						
&lt;/div&gt;</code></pre>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>