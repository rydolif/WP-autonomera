
<div class="modal" id="message">
	<button class="modal__close message_close" type="button">
		<span></span>
		<span></span>
	</button>

	<form class="form" method="post">

		<h3>Свяжитесь с нами</h3>
		<p>
			мы свяжемся с вами в ближайшее время
		</p>
		<input type="hidden" name="subject" value="Узнать подробнее!">

		<div class="modal__input">
			<input type="text" name="name" placeholder="Ваше имя" required>
		</div>
		<div class="modal__input">
			<input type="tel" name="phone" placeholder="Ваш номер телефона" required>
		</div>
		<div class="modal__textarea">
			<textarea name="" id="" placeholder="Ваше сообщение"></textarea>
		</div>
		<div class="modal__btn">
			<button type="submit" class="btn" name="submit">Отправить</button>
		</div>
	</form>
</div>

<div class="modal" id="order">
	<button class="modal__close order_close" type="button">
		<span></span>
		<span></span>
	</button>

	<form class="form" method="post">

		<h3>отправить запрос <br>на поиск номерного знака</h3>
		<p>
			и мы свяжемся с вами в ближайшее время
		</p>
		<input type="hidden" name="subject" value="Узнать подробнее!">

		<div class="modal__input">
			<input type="text" name="name" placeholder="Ваше имя" required>
		</div>
		<div class="modal__input">
			<input type="tel" name="phone" placeholder="Ваш номер телефона" required>
		</div>
		<div class="modal__select">
			<select name="" id="">
				<option value="Выберите регион" disabled selected>Выберите регион</option>
				<option value="Москва">Москва</option>
				<option value="Московская область">Московская область</option>
				<option value="Санкт-Петербург">Санкт-Петербург</option>
			</select>
		</div>
		<div class="modal__input-two">
			<div>
				<label for="seria">Интересующая вас серия <br><span>(необязательно)</span></label>
				<input type="text" name="seria" placeholder="ААА" id="seria" required>
			</div>
			<div>
				<label for="seria">Интересующие вас цифры <br><span>(необязательно)</span></label>
				<input type="text" name="seria" placeholder="ААА" id="seria" required>
			</div>
		</div>
		<div class="modal__btn">
			<button type="submit" class="btn" name="submit">отправить заявку</button>
		</div>
	</form>
</div>