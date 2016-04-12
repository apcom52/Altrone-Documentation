<? 
	$title = 'Карточки';
	include('parent.php'); 
?>


<div class="grid">
	<div class="col-1"></div>
	<div class="col-8">
		<h1>Карточки</h1>
		<h2>Основы</h2>
		
		<p>Карточки помогают визуально отделять информацию друг от друга. Родительский контейнер карточек - <code>.card</code>. О может состоять из четырех частей: <code>.card__header</code> - заголовок карточки, <code>.card__content</code> - содержимое карточки, <code>.card__image</code> - картинка, </code><code>.card__footer</code> - "подвал" карточки. </p>
		
		<p>Заголовок карточки также может содержать два элемента - <code>.card__header__title</code> (непосредственно сам заголовок) и <code>.card__header__icon</code> (иконка карточки)</p>

		<p><code>.card__image</code> должен содержать в себе элемент <code>&lt;img&gt;</code>, а также может включать себя элемент - <code>.card__image__header</code>, состоящих из двух: <code>.card__image__header__title</code> и <code>.card__image__header__icon</code></p>

		<p><code>.card__footer</code> может содержать элемент <code>.card__footer__meta</code></p>

		<div class="grid">			
			<div class="col-6">
				<div class="card">
					<div class="card__header">
						<div class="card__header__title">Заголовок</div>
					</div>
					<div class="card__content">Содержимое</div>
					<div class="card__footer">Подвал</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card__image">
						<img src="http://zombdrive.com/images1600_/2010-chevrolet-camaro-8.jpg" alt="">
						<div class="card__image__header">
							<div class="card__image__header__title">Заголовок</div>
							<div class="card__image__header__icon"><i class="fa fa-list"></i></div>
						</div>
					</div>
					<div class="card__content">Содержимое</div>
					<div class="card__footer">Подвал</div>
				</div>
			</div>
			<div class="col-6"><code>
				&lt;div class=&quot;card&quot;&gt;<br>
					&lt;div class=&quot;card__header&quot;&gt;<br>
						&lt;div class=&quot;card__header__title&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a;&lt;/div&gt;<br>
					&lt;/div&gt;<br>
					&lt;div class=&quot;card__content&quot;&gt;&#x421;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x43c;&#x43e;&#x435;&lt;/div&gt;<br>
					&lt;div class=&quot;card__footer&quot;&gt;&#x41f;&#x43e;&#x434;&#x432;&#x430;&#x43b;&lt;/div&gt;<br>
				&lt;/div&gt;
			</code></div>
			<div class="col-6"><code>
				&lt;div class=&quot;card&quot;&gt;<br>
					&lt;div class=&quot;card__image&quot;&gt;<br>
						&lt;img src=&quot;http://zombdrive.com/images1600_/2010-chevrolet-camaro-8.jpg&quot; alt=&quot;&quot;&gt;<br>
						&lt;div class=&quot;card__image__header&quot;&gt;<br>
							&lt;div class=&quot;card__image__header__title&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a;&lt;/div&gt;<br>
							&lt;div class=&quot;card__image__header__icon&quot;&gt;&lt;i class=&quot;fa fa-list&quot;&gt;&lt;/i&gt;&lt;/div&gt;<br>
						&lt;/div&gt;<br>
					&lt;/div&gt;<br>
					&lt;div class=&quot;card__content&quot;&gt;&#x421;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x43c;&#x43e;&#x435;&lt;/div&gt;<br>
					&lt;div class=&quot;card__footer&quot;&gt;&#x41f;&#x43e;&#x434;&#x432;&#x430;&#x43b;&lt;/div&gt;<br>
				&lt;/div&gt;
			</code></div>
		</div>

		<h2>Модификации карточек</h2>
		<div class="grid">
			<div class="col-4 margin-vertical-3">
				<div class="card card--color-blue">
					<div class="card__header">
						<div class="card__header__title">Заголовок</div>
					</div>
					<div class="card__content">Содержимое</div>
					<div class="card__footer">Подвал</div>
				</div>
			</div>
			<div class="col-8 margin-vertical-3">
				<b>Цвет карточек</b>
				<code><b>.card--color-*</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Вместо * нужно написать один из следующих вариантов: <code>red, orange, yellow, olive, green, teal, blue, purple, violet, pink, brown, black</code></p>
				<code>
					&lt;div class=&quot;card card--color-blue&quot;&gt;<br>
						&lt;div class=&quot;card__header&quot;&gt;<br>
							&lt;div class=&quot;card__header__title&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a;&lt;/div&gt;<br>
						&lt;/div&gt;<br>
						&lt;div class=&quot;card__content&quot;&gt;&#x421;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x43c;&#x43e;&#x435;&lt;/div&gt;<br>
						&lt;div class=&quot;card__footer&quot;&gt;&#x41f;&#x43e;&#x434;&#x432;&#x430;&#x43b;&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4 margin-vertical-3">
				<div class="card">
					<div class="card__header">
						<div class="card__header__title">Заголовок</div>
					</div>
					<div class="card__content card__content--no-padding">Содержимое</div>
					<div class="card__footer">Подвал</div>
				</div>
			</div>
			<div class="col-8 margin-vertical-3">
				<b>Содержимое без отступов</b>
				<code><b>.card__content--no-padding</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Убирает отступы у содержимого карточки</p>
				<code>
					&lt;div class=&quot;card&quot;&gt;<br>
						&lt;div class=&quot;card__header&quot;&gt;<br>
							&lt;div class=&quot;card__header__title&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a;&lt;/div&gt;<br>
						&lt;/div&gt;<br>
						&lt;div class=&quot;card__content card__content--no-padding&quot;&gt;&#x421;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x43c;&#x43e;&#x435;&lt;/div&gt;<br>
						&lt;div class=&quot;card__footer&quot;&gt;&#x41f;&#x43e;&#x434;&#x432;&#x430;&#x43b;&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4 margin-vertical-3">
				<div class="card">
					<div class="card__content card__content--no-padding card__content--list">
						<div class="list list--animation-invert list--color-green">
							<div class="list__item">Item 1</div>
							<div class="list__item">Item 2</div>
							<div class="list__item">Item 3</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-8 margin-vertical-3">
				<b>Закругление списков</b>
				<code><b>.card__content--list</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Если карточка используется только для отображения списка <code>.list</code>, то нужно использовать этот модификатор</p>
				<code>
					&lt;div class=&quot;card&quot;&gt;<br>
						&lt;div class=&quot;card__content card__content--no-padding card__content--list&quot;&gt;<br>
							&lt;div class=&quot;list list--animation-invert list--color-green&quot;&gt;<br>
								&lt;div class=&quot;list__item&quot;&gt;Item 1&lt;/div&gt;<br>
								&lt;div class=&quot;list__item&quot;&gt;Item 2&lt;/div&gt;<br>
								&lt;div class=&quot;list__item&quot;&gt;Item 3&lt;/div&gt;<br>
							&lt;/div&gt;<br>
						&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>


			<hr>

			<div class="col-4 margin-vertical-3">
				<div class="card card--rounded card--color-black">
					<div class="card__header">
						<div class="card__header__title">Заголовок</div>
					</div>
					<div class="card__content">Содержимое</div>
					<div class="card__footer">Подвал</div>
				</div>
			</div>
			<div class="col-8 margin-vertical-3">
				<b>Закругление карточек</b>
				<code><b>.card--no-smooth, .card--smooth, .card--rounded</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Задает степень закругления углов карточки. <code>.card--smooth</code> - стандартное закругление углов.</p>
				<code>
					&lt;div class=&quot;card card--rounded card--color-black&quot;&gt;<br>
						&lt;div class=&quot;card__header&quot;&gt;<br>
							&lt;div class=&quot;card__header__title&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a;&lt;/div&gt;<br>
						&lt;/div&gt;<br>
						&lt;div class=&quot;card__content&quot;&gt;&#x421;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x43c;&#x43e;&#x435;&lt;/div&gt;<br>
						&lt;div class=&quot;card__footer&quot;&gt;&#x41f;&#x43e;&#x434;&#x432;&#x430;&#x43b;&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>

			<hr>

			<div class="col-4 margin-vertical-3">
				<div class="card card--color-violet card--no-shadow">
					<div class="card__header">
						<div class="card__header__title">Заголовок</div>
					</div>
					<div class="card__content">Содержимое</div>
					<div class="card__footer">Подвал</div>
				</div>
			</div>
			<div class="col-8 margin-vertical-3">
				<b>Без тени</b>
				<code><b>.card--no-shadow</b></code>
				<br><i>Доступно с версии <b>2.0</b></i>
				<p>Убирает тень у карточки</p>
				<code>
					&lt;div class=&quot;card card--color-violet card--no-shadow&quot;&gt;<br>
						&lt;div class=&quot;card__header&quot;&gt;<br>
							&lt;div class=&quot;card__header__title&quot;&gt;&#x417;&#x430;&#x433;&#x43e;&#x43b;&#x43e;&#x432;&#x43e;&#x43a;&lt;/div&gt;<br>
						&lt;/div&gt;<br>
						&lt;div class=&quot;card__content&quot;&gt;&#x421;&#x43e;&#x434;&#x435;&#x440;&#x436;&#x438;&#x43c;&#x43e;&#x435;&lt;/div&gt;<br>
						&lt;div class=&quot;card__footer&quot;&gt;&#x41f;&#x43e;&#x434;&#x432;&#x430;&#x43b;&lt;/div&gt;<br>
					&lt;/div&gt;
				</code><br>					
			</div>
		</div>
	</div>
	<div class="col-3">
		<ul class="list list--animation-underline">
			<li>Основы</li>
			<li>Модификации карточек</li>
			<li>История обновлений модуля</li>
		</ul>
	</div>
</div>