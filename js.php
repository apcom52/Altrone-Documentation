<? 
	$title = 'JS-компоненты';
	include('parent.php'); 
?>

<script type="text/javascript">
$(function() {
	var tabsModal = new Tabs($('#modalTabs'));	
	var demoModal = new Modal($('#exampleModal'));
	$('#openModal').click(function() {
		demoModal.show();
	});
});
</script>

<div class="grid">
	<div class="col-8 offset-1 margin-bottom-1">
		<h1>JavaScript-компоненты</h1>

		<h2>Модальные окна</h2>
		<p>Модальные окна - это вид диалоговых окон, которые перекрывают собой весь контент на странице.</p>
		<div class="tabs tabs--transparent tabs--color-teal" id="modalTabs">
			<div class="tabs__item" data-tab-target="modalsHTML">HTML</div>
			<div class="tabs__item" data-tab-target="modalsJS">JavaScript</div>
		</div>
		<p id="modalsHTML">
			<button class="button--color-green button--icon" id="openModal"><i class="fa fa-play"></i>Запустить</button><br>
		<code>
			&lt;div class=&quot;modal&quot;&gt;<br>
				&lt;div class=&quot;modal__header&quot;&gt;<br>
					&lt;div class=&quot;modal__header__title&quot;&gt;&#x423;&#x434;&#x430;&#x43b;&#x438;&#x442;&#x44c; &#x441;&#x442;&#x440;&#x430;&#x43d;&#x438;&#x446;&#x443;?&lt;/div&gt;<br>
				&lt;/div&gt;<br>
				&lt;div class=&quot;modal__content&quot;&gt;&#x412;&#x44b; &#x434;&#x435;&#x439;&#x441;&#x442;&#x432;&#x438;&#x442;&#x435;&#x43b;&#x44c;&#x43d;&#x43e; &#x445;&#x43e;&#x442;&#x438;&#x442;&#x435; &#x443;&#x434;&#x430;&#x43b;&#x438;&#x442;&#x44c; &#x441;&#x442;&#x440;&#x430;&#x43d;&#x438;&#x446;&#x443;?&lt;/div&gt;<br>
				&lt;div class=&quot;modal__footer&quot;&gt;<br>
					&lt;button class=&quot;button--color-olive&quot;&gt;&#x414;&#x430;&lt;/button&gt;&lt;button class=&quot;modal__discard&quot;&gt;&#x41d;&#x435;&#x442;&lt;/button&gt;<br>
				&lt;/div&gt;
			&lt;/div&gt;
		</code></p>

		<p id="modalsJS"><code>
			<table border=1 width="100%">
				<tr>
					<th>Метод</th>
					<th>Параметры</th>
					<th>Описание</th>
				</tr>
				<tr>
					<td><code>new Modal(element)</code></td>
					<td><li>element - объект DOM модального окна</li></td>
					<td>Конструктор класса</td>
				</tr>
				<tr>
					<td><code>show()</code></td>
					<td>нет</td>
					<td>Показывает модальное окно</td>
				</tr>
				<tr>
					<td><code>hide()</code></td>
					<td>нет</td>
					<td>Скрывает модальное окно</td>
				</tr>
			</table>			
		</code></p>
	</div>
	<div class="col-3">
		<ul class="list list--animation-underline">
			<li>Основы</li>
			<li>Модификации вкладок</li>
			<li>История обновлений модуля</li>
		</ul>
	</div>

	<div class="modal" id="exampleModal">
		<div class="modal__header">
			<div class="modal__header__title">Удалить страницу?</div>
		</div>
		<div class="modal__content">Вы действительно хотите удалить страницу?</div>
		<div class="modal__footer">
			<button class="button--color-olive">Да</button><button class="modal__discard">Нет</button>
		</div>
	</div>
</div>