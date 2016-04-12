<? 
	$title = 'Главная';
	include('parent.php'); 
?>


<div class="grid">
	<div class="col-10 col-lt-8 col-t-8 col-lm-6 col-m-4 offset-1 offset-lt-1 offset-t-0 offset-lm-0 offset-m-0">
		<div class="card">
			<div class="card__content card__content--no-padding">

				<div class="jumbotron jumbotron--invert jumbotron--color-teal">
					<div class="jumbotron__header">Altrone CSS</div>
					<div class="jumbotron__subheader">Фреймворк для быстрого прототипирования сайтов</div>
				</div>

				<div class="tabs tabs--transparent tabs--color-teal tabs--centered">
					<div class="tabs__item tabs__item--active">ЗАГРУЗКА И УСТАНОВКА</div>
					<div class="tabs__item">ВОЗМОЖНОСТИ</div>
					<div class="tabs__item">ДЕМОНСТРАЦИЯ</div>
					<div class="tabs__item">ИСТОРИЯ ВЕРСИЙ</div>
				</div>

				<div class="margin-1">
					<h2>Загрузка</h2>
					<p>
						Чтобы подключить Altrone к вашему проекту, его нужно загрузить. Вы можете загрузить Altrone, нажав на кнопку "Загрузить последнюю стабильную версию" или загрузить его на Github.
					</p>
					<button class="button--color-teal button--transparent">Загрузить последнюю стабильную версию<div class="label label--rounded">2.0</div></button>
					<button class="button--transparent-full button--color-blue">Открыть в Github</button>

					<h2>Подключение к проекту</h2>
					<p>
						Для подключения Altrone к проекту, нужно добавить в ваш проект папку с Altrone. Она должна включать в себя папку <code>fonts</code>, а также два файла - <code>altrone.css</code> и <code>altrone.js</code>. Также по желанию можно добавить иконки сторонних разработчиков, например <code>Font Awesome</code>.
					</p>
					<p>
						Далее в <code>&lt;head&gt;</code> вашего html-документа нужно добавить две строки:
					</p>
					<p><code>
						&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;путь/до/altrone.css&quot;&gt;<br>
						&lt;script src=&quot;путь/до/altrone.js&quot;&gt;&lt;/script&gt;
					</code></p>

					<p>
						Для того, чтобы активировать адаптивную сетку, также необходимо в <code>&lt;head&gt;</code> вашего html-документа добавить следующие строки:
					</p>

					<p><code>
						&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no&quot;&gt;<br>
						&lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge,chrome=1&quot;&gt;
					</code></p>
				</div>
				
				<div class="margin-horizontal-1">
					<h2>Что умеет Altrone?</h2>
					<div class="list-navigation list-navigation--color-teal">
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Сетка</div>
								<div class="list-navigation__content__meta">Резиновая, адаптивная, flexbox, masonry сетки</div>
							</div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Кнопки</div>
								<div class="list-navigation__content__meta">Цветные кнопки, кнопки разного размера, прозрачные кнопки, группа кнопок, кнопки-переключатели</div>
							</div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Формы</div>
								<div class="list-navigation__content__meta">Разноцветные формы, стилилизованные переключатели</div>
							</div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Списки</div>
								<div class="list-navigation__content__meta">Разноцветные списки, анимированные списки</div>
							</div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Вкладки</div>
								<div class="list-navigation__content__meta">Скругленные, прозрачные, разноцветные вкладки</div>
							</div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Карточки</div>
								<div class="list-navigation__content__meta">Карточки различных цветов, карточки с изображениями</div>
							</div>
						</div>
						<div class="list-navigation__item">
							<div class="list-navigation__content">
								<div class="list-navigation__content__title">Бары</div>
								<div class="list-navigation__content__meta">Боковое меню, навигационное меню, прогресс-бары</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>			
	</div>
</div>