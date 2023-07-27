<!DOCTYPE html>
<html lang="ru">
<head>
	<title>I-way — Телекоммуникации для дома и бизнеса</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20230707133436">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="Телекоммуникации, интернет для частных лиц, интернет для бизнеса, интернет, цифровое TV" >
	<meta name="description" content="Надежная реализация вашей цифровой стратегии. Организуем быстрый, качественный и доступный Интернет">
</head>

<?php include 'public/list.php'; ?>
<body>
	<div class="wrapper">
		<?php include 'header.php'; ?>
		<main class="page">
			<section class="hello mb">
				<div class="hello__container">
					<div class="hello__body">
						<div class="hello__content">
							<div class="hello__vector">
								<img src="img/hello/rounds.svg" alt="rounds">
							</div>
							<div class="hello__content-content">
								<!-- <div class="sidelink"></div> -->
								<h2 class="hello__title title2">
									Телекоммуникации
									<span class="block">для дома и бизнеса</span>
								</h2>
								<div class="hello__text">
									Надежная реализация
									<span class="hello__text-block">вашей цифровой стратегии</span>
								</div>
							</div>
							<div class="hello__button">
								<a href="#order" class="btn btn_blue hvcop _popup-link" data-link="order.html">
									<span class="btn__body" data-copy>
										Подключиться
									</span>
								</a>
							</div>
						</div>
						<div class="hello__image">
							<div class="hello__image-body">
								<img src="img/hello/main.png" alt="Main">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="what mb">
				<div class="what__container">
					<h2 class="what__title title">Новости</h2>
					<div class="what__columns columns-what mbblock">
						<?php while ($data6 = mysqli_fetch_array ($services_notification)) { ?>
							<div class="columns-what__column fulllink">
								<div class="columns-what__item">
									<a href="notification.php?id_n=<?php echo $data6['id'];?>" class="columns-what__content">
										<div class="fulllink__sidelink"></div>
										<h3 class="columns-what__title">
											<?php echo $data6['name'];?>
										</h3>
									</a>
									<div class="columns-what__link">
										<a href="notification.php?id_n=<?php echo $data6['id'];?>" class="link hvcop fulllink__another">
											<span class="link__body" data-copy>Подробнее</span>
										</a>
									</div>
								</div>
							</div>													
						<?php } ?>
					</div>	
					
					<div class="what__button">
						<a href="https://vk.com/my_1way" class="btn btn_bluebd hvcop" target="_blank">
							<span class="btn__body" data-copy>
								<span>
									Все вопросы и ответы —
									<span class="nowrap">в группе VK</span>
								</span>
							</span>
						</a>
					</div>
				</div>
			</section>
			<section class="what mb">
				<div class="what__container">
					<h2 class="what__title title">Что мы делаем?</h2>
					<div class="what__blue bluewhat mbblock fulllink">
						<div class="bluewhat__content">
							<a href="#order" class=" bluewhat__content-content _popup-link" data-link="order.html">
								<div class="fulllink__sidelink"></div>
								<h3 class="bluewhat__title">
									I-way — эксперт в области телекоммуникаций
								</h3>
								<div class="bluewhat__text">
									Организуем быстрый, качественный <span class="nowrap">и доступный</span>
									Интернет
								</div>
							</a>
							<div class="bluewhat__button">
								<a href="#order" class=" btn btn_white hvcop fulllink__another _popup-link" data-link="order.html">
									<span class="btn__body" data-copy>
										Оставить заявку
									</span>
								</a>
							</div>
						</div>
						<div class="bluewhat__image">
							<div class="bluewhat__image-body pc">
								<img src="img/about/what.svg" alt="what">
							</div>
							<div class="bluewhat__image-body mob">
								<img src="img/about/what-mob.svg" alt="what">
							</div>
						</div>
					</div>
					<div class="what__columns columns-what mbblock">
						<div class="columns-what__column fulllink">
							<div class="columns-what__item">
								<a href="business-construction.html" class="columns-what__content">
									<div class="fulllink__sidelink"></div>
									<h3 class="columns-what__title">
										Проектирование и строительство
									</h3>
									<div class="columns-what__text">
										Производим полный цикл работ по проектированию
										и строительству внешних и внутренних слаботочных сетей. Специалисты компании
										выполнят комплекс работ
										по подключению строящихся и действующих объектов
										к сетям связи
									</div>
								</a>
								<div class="columns-what__link">
									<a href="business-construction.html" class="link hvcop fulllink__another">
										<span class="link__body" data-copy>Подробнее</span>
									</a>
								</div>
							</div>
						</div>
						<div class="columns-what__column fulllink">
							<div class="columns-what__item">
								<a href="http://iwayshop.ru/" target="_blank" class="columns-what__content">
									<div class="fulllink__sidelink"></div>
									<h3 class="columns-what__title">
										Магазин i-way
									</h3>
									<div class="columns-what__text">
										Занимаемся продажей телекоммуникационного оборудования. Будем рады видеть вас в
										i-wayShop
									</div>
								</a>
								<div class="columns-what__link">
									<a href="http://iwayshop.ru/" target="_blank" class="link hvcop fulllink__another">
										<span class="link__body" data-copy>Перейти к покупкам</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="what__button">
						<a href="https://vk.com/my_1way" class="btn btn_bluebd hvcop" target="_blank">
							<span class="btn__body" data-copy>
								<span>
									Все вопросы и ответы —
									<span class="nowrap">в группе VK</span>
								</span>
							</span>
						</a>
					</div>
				</div>
			</section>
			<section class="pros mb">
				<div class="pros__container">
					<h2 class="pros__title title">Плюсы I-way</h2>
					<div class="pros__columns columns-pros">
						<div class="columns-pros__column fulllink">
							<div class="columns-pros__item">
								<div class="columns-pros__icon">
									<img src="img/pros/01.svg" alt="">
								</div>
								<a href="individ-internet.html" class="columns-pros__content">
									<div class="fulllink__sidelink"></div>
									<h3 class="columns-pros__title">
										Доступность
									</h3>
									<div class="columns-pros__text">
										Держим тарифы на максимально низком уровне
									</div>
								</a>
								<div class="columns-pros__link">
									<a href="individ-internet.html" class="link hvcop fulllink__another">
										<span class="link__body" data-copy>Перейти к тарифам</span>
									</a>
								</div>
							</div>
						</div>
						<div class="columns-pros__column fulllink">
							<div class="columns-pros__item">
								<div class="columns-pros__icon">
									<img src="img/pros/02.svg" alt="">
								</div>
								<a href="http://mb.ksinet.ru/" target="_blank" class="columns-pros__content">
									<div class="fulllink__sidelink"></div>
									<h3 class="columns-pros__title">
										Прозрачность
									</h3>
									<div class="columns-pros__text">
										Все списания и зачисления
										отображаются <span class="nowrap">в личном</span>
										кабинете
									</div>
								</a>
								<div class="columns-pros__link">
									<a href="http://mb.ksinet.ru/" target="_blank" class="link hvcop fulllink__another">
										<span class="link__body" data-copy>Войти</span>
									</a>
								</div>
							</div>
						</div>
						<div class="columns-pros__column fulllink">
							<div class="columns-pros__item">
								<div class="columns-pros__icon">
									<img src="img/pros/03.svg" alt="">
								</div>
								<a href="#tech" class="columns-pros__content _popup-link" data-link="tech.html">
									<div class="fulllink__sidelink"></div>
									<h3 class="columns-pros__title">
										Поддержка
									</h3>
									<div class="columns-pros__text">
										Помощь по телефону, через форму
										на сайте, <span class="nowrap">в группе</span> VK
									</div>
								</a>
								<div class="columns-pros__link">
									<a href="#tech" class="link hvcop fulllink__another _popup-link" data-link="tech.html">
										<span class="link__body" data-copy>Задать вопрос</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="connecttv mb">
				<div class="connecttv__container">
					<div class="connecttv__body fulllink">
						<div class="connecttv__content">
							<a href="#order" class="connecttv__content-content block _popup-link" data-link="order.html">
								<div class="fulllink__sidelink"></div>
								<h2 class="connecttv__title title2">
									Подключи TV <span class="nowrap">к действующему</span>
									<span class="block">тарифу за 150 ₽/месяц</span>
								</h2>
							</a>
							<div class="connecttv__text text">
								Условия акции уточняйте <span class="nowrap">у оператора</span>
								<a href="tel:+88212250021" class="fulllink__another nowrap" target="_blank">по
									телефону</a>
							</div>
							<div class="connecttv__button">
								<a href="#order" class="btn btn_white hvcop fulllink__another _popup-link" data-link="order.html">
									<span class="btn__body" data-copy>
										Подключиться
									</span>
								</a>
							</div>
						</div>
						<div class="connecttv__image">
							<div class="connecttv__image-inner">
								<div class="connecttv__image-body">
									<!-- <img src="img/iphone14pro.jpg" alt="iphone"> -->
									<img src="img/iphone14pro.png" alt="iphone">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="speed mb">
				<div class="speed__container">
					<div class="speed__body fulllink">
						<a href="https://www.speedtest.net/" class="speed__main" target="_blank">
							<div class="fulllink__sidelink"></div>
							<div class="speed__icon">
								<img src="img/icons/lightning.svg" alt="lightning">
							</div>
							<h3 class="speed__title">Проверить скорость соединения</h3>
						</a>
						<div class="speed__button">
							<a href="https://www.speedtest.net/" class="btn btn_bluebd hvcop fulllink__another"
								target="_blank">
								<span class="btn__body" data-copy>
									SpeedTest
								</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="rates rates_main mb">
				<div class="rates__container" data-tabs data-know>
					<h2 class="rates__title title mbtitle">Тарифы</h2>
					<div class="rates__body">
						<div class="mbblock">
							<div class="rates__buttons swiper" data-slider-mob>
								<ul class="swiper-wrapper" data-tabs-titles>
									<li class="rates__button swiper-slide _select-tag _tab-active">
										<a href="" class="btn">
											<span class="btn__body">
												Интернет
											</span>
										</a>
									</li>
									<?php while ($data = mysqli_fetch_array ($category_result)) { ?>
										<li class="rates__button swiper-slide ">
											<a href="" class="btn">
												<span class="btn__body">
												<?php echo $data['category_name'];?>
												</span>
											</a>
										</li>
									
									<?php } ?>
									
								</ul>
							</div>
						</div>
						<div class="rates__tabs-blocks" data-tabs-body>
							<div class="rates__slider swiper">
								<div class="swiper-wrapper">
								<?php while ($data1 = mysqli_fetch_array ($services_result1)) { ?>
									<div class="rates__slide swiper-slide fulllink">
										<div class="rates__item">
											<div class="rates__header">
												<h3 class="rates__name"><?php echo $data1['name'];?></h3>
											</div>
											<div class="rates__content">
												<div class="rates__content-main">
													<a href="#order" class="rates__blocks _popup-link" data-link="order.html">
														<div class="fulllink__sidelink"></div>
														<div class="rates__block">
															<h4 class="rates__block-title">Скорость</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/sun.svg" alt="sun">
																	</i>
																	<span class="rates__content-list-text">
																		День — <?php echo $data1['day_speed'];?> Мбит/с
																	</span>
																</li>
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/moon.svg" alt="moon">
																	</i>
																	<span class="rates__content-list-text">
																		Ночь — <?php echo $data1['night_speed'];?> Мбит/с
																	</span>
																</li>
															</ul>
														</div>
														<div class="rates__block">
															<h4 class="rates__block-title">Подключение</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/wallet.svg" alt="wallet">
																	</i>
																	<span class="rates__content-list-text">
																		<?php if ($data1['cost_to_add'] != 0){ 
																			if($data1['cost_to_add'] != -1){echo $data1['cost_to_add'] ;}
																				else {echo "Индивидуально";}
																				} 
																				else {echo "Бесплатно";}?>
																	</span>
																</li>
															</ul>
														</div>
														
														<h4 class="rates__block-title">Тип</h4>
														<span class="rates__content-list-text">
															<?php echo $data1['type'];?>
														</span>
														<?php
															if ($data1['pgt']==1){echo	'
																<br><br><br>
																<div class="rates__content-places _before-buy">
																	<ul class="rates__content-places-list">
																		<li>пгт. Максаковка</li>
																		<li>м. Чов</li>
																	</ul>
																</div>';
															}
														?>
														<div class="rates__content-note _before-buy">
														<?php
															if ($data1['turbo']==1){echo	'
																<br>
																<p>
																* Турбокнопка - 100 Мбит/с
																<span class="nowrap">на 1 час — 15 ₽</span>
																</p>';
															} 
														
														?>
														</div>
													</a>
												</div>
												<div class="rates__slide-button">
													<a href="#order"class="btn btn_lightblue hvcop fulllink__another _popup-link" data-link="order.html">
														<span class="btn__body" data-copy>
														<?php echo $data1['price'];?> ₽/месяц
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>	
									
									<?php } ?>
																
								</div>
							</div>
							<div class="rates__slider swiper">
								<div class="swiper-wrapper">
								<?php while ($data2 = mysqli_fetch_array ($services_result2)) { ?>
									<div class="rates__slide swiper-slide fulllink">
										<div class="rates__item">
											<div class="rates__header">
												<h3 class="rates__name"><?php echo $data2['name'];?></h3>
											</div>
											<div class="rates__content">
												<div class="rates__content-main">
													<a href="#order" class="rates__blocks _popup-link" data-link="order.html">
														<div class="fulllink__sidelink"></div>
														<div class="rates__block">
															<h4 class="rates__block-title">Скорость</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/sun.svg" alt="sun">
																	</i>
																	<span class="rates__content-list-text">
																		День — <?php echo $data2['day_speed'];?> Мбит/с
																	</span>
																</li>
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/moon.svg" alt="moon">
																	</i>
																	<span class="rates__content-list-text">
																		Ночь — <?php echo $data2['night_speed'];?> Мбит/с
																	</span>
																</li>
															</ul>
														</div>
														<div class="rates__block">
															<h4 class="rates__block-title">Подключение</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/wallet.svg" alt="wallet">
																	</i>
																	<span class="rates__content-list-text">
																		<?php if ($data2['cost_to_add'] != 0){ 
																			if($data2['cost_to_add'] != -1){echo $data2['cost_to_add'] ;}
																				else {echo "Индивидуально";}
																				} 
																				else {echo "Бесплатно";}?>
																	</span>
																</li>
															</ul>
														</div>
														
														<h4 class="rates__block-title">Тип</h4>
														<span class="rates__content-list-text">
															<?php echo $data2['type'];?>
														</span>
														<?php
															if ($data2['pgt']==1){echo	'
																<br><br><br>
																<div class="rates__content-places _before-buy">
																	<ul class="rates__content-places-list">
																		<li>пгт. Максаковка</li>
																		<li>м. Чов</li>
																	</ul>
																</div>';
															}
														?>
														
														<div class="rates__content-note _before-buy">
														<?php
															if ($data2['turbo']==1){echo	'
																<br>
																<p>
																* Турбокнопка - 100 Мбит/с
																<span class="nowrap">на 1 час — 15 ₽</span>
																</p>';
															} 
														
														?>
														<br>
														<div class="rates__slide-company">
															<div class="rates__slide-company-image">
																<img src="img/companies/smotreshka.svg" alt="smotreshka">
															</div>
														</div>
														</div>
													</a>
												</div>
												<div class="rates__slide-button">
													<a href="#order"class="btn btn_lightblue hvcop fulllink__another _popup-link" data-link="order.html">
														<span class="btn__body" data-copy>
														<?php echo $data1['price'];?> ₽/месяц
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>	
									
									<?php } ?>
																
								</div>
							</div>							
							<div class="rates__slider swiper">
								<div class="swiper-wrapper">
									<div class="rates__slide swiper-slide fulllink">
										<div class="rates__item">
											<div class="rates__header">
												<h3 class="rates__name">Триколор кино и TV</h3>
											</div>
											<div class="rates__content">
												<div class="rates__content-main">
													<a href="#order" class="rates__blocks _popup-link" data-link="order.html">
														<div class="fulllink__sidelink"></div>
														<div class="rates__block">
															<h4 class="rates__block-title">Ежемесячный платеж</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/wallet.svg" alt="wallet">
																	</i>
																	<span class="rates__content-list-text">
																		149 ₽/месяц
																	</span>
																</li>
															</ul>
														</div>
														<div class="rates__block">
															<h4 class="rates__block-title">Годовой платеж</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/wallet.svg" alt="wallet">
																	</i>
																	<span class="rates__content-list-text">
																		999 ₽/месяц
																	</span>
																</li>
															</ul>
														</div>
													</a>
													<div class="rates__slide-company">
														<div class="rates__slide-company-image">
															<img src="img/companies/trikolor.svg" alt="trikolor">
														</div>
													</div>
												</div>
												<div class="rates__slide-action">
													<div class="rates__slide-button">
														<a href="#order"class="btn btn_lightblue hvcop fulllink__another _popup-link" data-link="order.html">
															<span class="btn__body" data-copy>
																Подключиться
															</span>
														</a>
													</div>
													<div class="rates__slide-important _item fulllink__another">
														<span class="rates__slide-important-icon _item__link">
															<img src="img/icons/important.svg" alt="important">
														</span>
														<span class="rates__slide-important-text">
															Возможно подключение
															<span class="rates__slide-important-text-block">
																к любому действующему
															</span>
															<span class="rates__slide-important-text-block">
																тарифу
															</span>
														</span>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="rates__slider swiper">
								<div class="swiper-wrapper">
									<div class="rates__slide swiper-slide fulllink">
										<div class="rates__item">
											<div class="rates__header">
												<h3 class="rates__name">Роутер</h3>
											</div>
											<div class="rates__content">
												<div class="rates__content-main">
													<a href="#order" class="rates__blocks _popup-link" data-link="order.html">
														<div class="fulllink__sidelink"></div>
														<div class="rates__block">
															<h4 class="rates__block-title">Разовый платеж</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/wallet.svg" alt="wallet">
																	</i>
																	<span class="rates__content-list-text">
																		350 ₽
																	</span>
																</li>
															</ul>
														</div>
														<div class="rates__block">
															<h4 class="rates__block-title">Ежемесячный платёж</h4>
															<ul class="rates__content-list">
																<li class="rates__content-list-item">
																	<i class="rates__content-list-icon">
																		<img src="img/icons/wallet.svg" alt="wallet">
																	</i>
																	<span class="rates__content-list-text">
																		50 ₽/месяц
																	</span>
																</li>
															</ul>
														</div>
													</a>
												</div>
												<div class="rates__slide-button">
													<a href="#order"class="btn btn_lightblue hvcop fulllink__another _popup-link" data-link="order.html">
														<span class="btn__body" data-copy>
															Арендовать
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="special mb">
				<div class="special__container">
					<div class="special__body fulllink">
						<div class="special__content">
							<a href="#order" class="special__content-content block _popup-link" data-link="order.html">
								<div class="fulllink__sidelink"></div>
								<h2 class="special__title title-column2">Уникальное предложение</h2>
								<div class="special__text text">
									Интернет от 100 Мбит/с и выше, при этом ежемесячная стоимость услуги приятно удивит.
									В зависимости от потребностей клиента можем предложить скорость доступа в сеть
									Если вам нужно снизить затраты на Интернет, обращайтесь – подберем выгодное решение.
								</div>
							</a>
							<div class="special__button">
								<a href="#order" class="btn btn_white hvcop fulllink__another _popup-link"
									data-link="order.html">
									<span class="btn__body" data-copy>
										Оставить заявку
									</span>
								</a>
							</div>
						</div>
						<div class="special__icon">
							<span class="special__icon-icon">
								<img src="img/icons/fire.svg" alt="fire">
							</span>
						</div>
					</div>
			</section>
			<section class="contact mb">
				<div class="contact__container">
					<h2 class="contact__title title mbtitle">
						Контактная информация
					</h2>
					<div class="contact__body">
						<div class="contact__frame">
							<div class="contact__frame-body">
								<iframe id="map_792584075" frameborder="0" width="100%" height="300px"
									sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe>
								<script type="text/javascript">(function (e, t) { var r = document.getElementById(e); r.contentWindow.document.open(), r.contentWindow.document.write(atob(t)), r.contentWindow.document.close() })("map_792584075", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUpe3ZhciB0PUpTT04ucGFyc2UoZSkscj10Lm9yZGVyZWRHZW9tZXRyaWVzLG49dC5tYXBQb3NpdGlvbixhPXQuaXNXaGVlbFpvb21FbmFibGVkO2Z1bmN0aW9uIG8oZSl7cmV0dXJuIGRlY29kZVVSSUNvbXBvbmVudChhdG9iKGUpLnNwbGl0KCIiKS5tYXAoZnVuY3Rpb24oZSl7cmV0dXJuIiUiKygiMDAiK2UuY2hhckNvZGVBdCgwKS50b1N0cmluZygxNikpLnNsaWNlKC0yKX0pLmpvaW4oIiIpKX1ERy50aGVuKGZ1bmN0aW9uKCl7dmFyIGU9REcubWFwKCJtYXAiLHtjZW50ZXI6W24ubGF0LG4ubG9uXSx6b29tOm4uem9vbSxzY3JvbGxXaGVlbFpvb206YSx6b29tQ29udHJvbDohYX0pO0RHLmdlb0pTT04ocix7c3R5bGU6ZnVuY3Rpb24oZSl7dmFyIHQscixuLGEsbztyZXR1cm57ZmlsbENvbG9yOm51bGw9PT0odD1lKXx8dm9pZCAwPT09dD92b2lkIDA6dC5wcm9wZXJ0aWVzLmZpbGxDb2xvcixmaWxsT3BhY2l0eTpudWxsPT09KHI9ZSl8fHZvaWQgMD09PXI/dm9pZCAwOnIucHJvcGVydGllcy5maWxsT3BhY2l0eSxjb2xvcjpudWxsPT09KG49ZSl8fHZvaWQgMD09PW4/dm9pZCAwOm4ucHJvcGVydGllcy5zdHJva2VDb2xvcix3ZWlnaHQ6bnVsbD09PShhPWUpfHx2b2lkIDA9PT1hP3ZvaWQgMDphLnByb3BlcnRpZXMuc3Ryb2tlV2lkdGgsb3BhY2l0eTpudWxsPT09KG89ZSl8fHZvaWQgMD09PW8/dm9pZCAwOm8ucHJvcGVydGllcy5zdHJva2VPcGFjaXR5fX0scG9pbnRUb0xheWVyOmZ1bmN0aW9uKGUsdCl7cmV0dXJuInJhZGl1cyJpbiBlLnByb3BlcnRpZXM/REcuY2lyY2xlKHQsZS5wcm9wZXJ0aWVzLnJhZGl1cyk6REcubWFya2VyKHQse2ljb246ZnVuY3Rpb24oZSl7cmV0dXJuIERHLmRpdkljb24oe2h0bWw6IjxkaXYgY2xhc3M9J2J1bGxldC1tYXJrZXInIHN0eWxlPSdib3JkZXItY29sb3I6ICIrZSsiOyc+PC9kaXY+IixjbGFzc05hbWU6Im92ZXJyaWRlLWRlZmF1bHQiLGljb25TaXplOlsyMCwyMF0saWNvbkFuY2hvcjpbMTAsMTBdfSl9KGUucHJvcGVydGllcy5jb2xvcil9KX0sb25FYWNoRmVhdHVyZTpmdW5jdGlvbihlLHQpe2UucHJvcGVydGllcy5kZXNjcmlwdGlvbiYmdC5iaW5kUG9wdXAobyhlLnByb3BlcnRpZXMuZGVzY3JpcHRpb24pLHtjbG9zZUJ1dHRvbjohMCxjbG9zZU9uRXNjYXBlS2V5OiEwfSksZS5wcm9wZXJ0aWVzLnRpdGxlJiZ0LmJpbmRUb29sdGlwKG8oZS5wcm9wZXJ0aWVzLnRpdGxlKSx7cGVybWFuZW50OiEwLG9wYWNpdHk6MSxjbGFzc05hbWU6InBlcm1hbmVudC10b29sdGlwIn0pfX0pLmFkZFRvKGUpfSl9KSgneyJvcmRlcmVkR2VvbWV0cmllcyI6W3sidHlwZSI6IkZlYXR1cmUiLCJwcm9wZXJ0aWVzIjp7ImNvbG9yIjoiIzAyODFmMiIsInRpdGxlIjoiIiwiZGVzY3JpcHRpb24iOiIiLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzUwLjgzMjg3Niw2MS42NjMyNzddfSwiaWQiOjQ2OX1dLCJtYXBQb3NpdGlvbiI6eyJsYXQiOjYxLjY2MzM4MjQ0ODg5NTk4LCJsb24iOjUwLjgzMjUxNzA1MjUyMzYzNSwiem9vbSI6MTV9LCJpc1doZWVsWm9vbUVuYWJsZWQiOnRydWV9Jyk8L3NjcmlwdD48c2NyaXB0IGFzeW5jPSIiIHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbS9ndGFnL2pzP2lkPVVBLTE1ODg2NjE2OC0xIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+KGZ1bmN0aW9uKGUpe2Z1bmN0aW9uIHQoKXtkYXRhTGF5ZXIucHVzaChhcmd1bWVudHMpfXdpbmRvdy5kYXRhTGF5ZXI9d2luZG93LmRhdGFMYXllcnx8W10sdCgianMiLG5ldyBEYXRlKSx0KCJjb25maWciLGUpLHdpbmRvdy5ndGFnPXR9KSgnVUEtMTU4ODY2MTY4LTEnKTwvc2NyaXB0PjwvYm9keT4=")
								</script>
							</div>
						</div>
						<div class="contact__content">
							<div class="contact__tabs">
								<div class="contact__items items-contanct">
									<div class="items-contanct__item">
										<h3 class="items-contanct__title">Адрес</h3>
										<div class="items-contanct__content">
											<div class="items-contanct__text">
												Республика Коми, г. Сыктывкар,
												<span class="block">
													ул. Первомайская, стр. 86/1, 3 этаж, оф. 17
												</span>
											</div>
											<div class="items-contanct__time">
												Будни: с 8:30 до 17:30
												<span class="block">Сб-Вс: выходной</span>
											</div>
										</div>
									</div>
									<div class="items-contanct__item">
										<h3 class="items-contanct__title">Техническая поддержка</h3>
										<div class="items-contanct__content">
											<div class="items-contanct__link">
												<a href="tel:+78212250021">+7 (8212) 25-00-21</a>
											</div>
										</div>
									</div>
									<div class="items-contanct__item items-contanct__item_mail">
										<h3 class="items-contanct__title">Электронная почта</h3>
										<div class="items-contanct__content">
											<div class="items-contanct__link">
												<a href="mailto:ivi@iwaygroup.ru">ivi@iwaygroup.ru</a>
											</div>
										</div>
									</div>
									<div class="items-contanct__item">
										<h3 class="items-contanct__title">Группа VK</h3>
										<div class="items-contanct__content">
											<div class="items-contanct__link">
												<a href="https://vk.com/my_1way" target="_blank">
													vk.com/my_1way
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="presence mb">
				<div class="presence__container">
					<div class="presence__body">
						<h2 class="presence__title title mbtitle">
							Карта присутствия
						</h2>
						<div class="presence__button">
							<a href="#map" class="btn btn_lightblue hvcop _popup-link">
								<span class="btn__body" data-copy>
									Посмотрите наши представительства
								</span>
							</a>
						</div>
					</div>
				</div>
			</section>
		</main>
		<section class="connect-address mb">
    <div class="connect-address__container">
        <form class="connect-address__form" data-ajax action="files/sendmail-check.php" data-popup-message="success">
            <div class="connect-address__header">
                <h2 class="connect-address__title">Проверка адреса на подключение к I-way</h2>
            </div><!-- /.connect-address__header -->
            <div class="connect-address__box form">
                <div class="form__rows">
                    <div class="form__options options">
                        <label class="options__item">
                            <input class="options__input" checked type="radio" value="В квартиру" name="adressOption">
                            <span class="options__text"><span>В квартиру</span></span>
                        </label>
                        <label class="options__item">
                            <input class="options__input" type="radio" value="В офис" name="adressOption">
                            <span class="options__text"><span>В офис</span></span>
                        </label>
                        <label class="options__item">
                            <input class="options__input" type="radio" value="В частный дом" name="adressOption">
                            <span class="options__text"><span>В частный дом</span></span>
                        </label>
                    </div>
                    <div class="form__input">
                        <span class="form__input-label">ФИО*</span>
                        <input autocomplete="off" type="text" name="fio" data-required data-error="Заполните поле" placeholder=""
                            class="input">
                        <div class="form__close _icon-close"></div>
                    </div>
                    <div class="form__input">
                        <span class="form__input-label">Город*</span>
                        <input autocomplete="off" type="text" name="city" data-required data-error="Заполните поле" placeholder=""
                            class="input">
                        <div class="form__close _icon-close"></div>
                    </div>
                    <div class="form__row">
                        <div class="form__input">
                            <span class="form__input-label">Улица*</span>
                            <input autocomplete="off" type="text" data-required data-error="Заполните поле" name="street" placeholder=""
                                class="input">
                            <div class="form__close _icon-close"></div>
                        </div>

                        <div class="form__input">
                            <span class="form__input-label">Дом*</span>
                            <input autocomplete="off" type="text" name="building" placeholder="" class="input" data-required data-error="Заполните поле">
                            <div class="form__close _icon-close"></div>
                        </div>
                    </div>
                    <div class="form__input">
                        <span class="form__input-label">Контактный телефон*</span>
                        <input autocomplete="off" type="text" name="phone" data-required="tel" data-tel
                            data-error="Неправильно указан номер телефона" class="input">
                        <div class="form__close _icon-close"></div>
                    </div>
                </div>
                <div class="form__action">
                    <div class="form__checkbox">
                        <label class="checkbox">
                            <input data-error="Ошибка" data-required class="checkbox__input" type="checkbox" value="1"
                                name="form[]">
                            <span class="checkbox__text">
                                <span>
                                    Заполняя форму, я принимаю
                                    <a href="files/privacy-policy.pdf" class="_link" target="_blank">
                                        условия политики конфиденциальности
                                    </a>
                                </span>
                            </span>
                        </label>
                    </div>
                    <button class="form__button btn btn_white hvcop" type="submit" tabindex="-1">
                        <span class="btn__body" data-copy>
                            Проверить
                        </span>
                    </button>
                </div>
            </div><!-- /.connect-address__box -->

        </form><!-- /.connect-address__box -->
    </div><!-- /.connect-address__container -->
</section><!-- /.connect-address -->

	<?php include 'footer.php'; ?>
	</div>
	<div class="popup popup_map map-popup">
	<div class="popup__wrapper">
		<div class="popup__wrapper-body">
			<div class="map-popup__body popup__body">
				<div class="map-popup__content">
					<h2 class="map-popup__title title2">
						Представительства
						<span class="block">компании I-way</span>
					</h2>
					<div class="map-popup__content-map mob"></div>
					<ul class="map-popup__locations mob">
						<li>Санкт-Петербург</li>
						<li>Москва</li>
						<li>Пермь</li>
						<li>Екатеринбург</li>
						<li>Ростов-На-Дону</li>
						<li>Якутск</li>
					</ul>
					<div class="map-popup__items">
						<div class="items-contanct">
							<div class="items-contanct__item">
								<h3 class="items-contanct__title">Техническая поддержка</h3>
								<div class="items-contanct__content">
									<div class="items-contanct__link">
										<a href="tel:+78212250021">+7 (8212) 25-00-21</a>
									</div>
								</div>
							</div>
							<div class="items-contanct__item items-contanct__item_mail">
								<h3 class="items-contanct__title">Электронная почта</h3>
								<div class="items-contanct__content">
									<div class="items-contanct__link">
										<a href="mailto:ivi@iwaygroup.ru">ivi@iwaygroup.ru</a>
									</div>
								</div>
							</div>
							<div class="items-contanct__item">
								<h3 class="items-contanct__title">Группа VK</h3>
								<div class="items-contanct__content">
									<div class="items-contanct__link">
										<a href="https:vk.com/my_1way" target="_blank">
											vk.com/my_1way
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="map-popup__map" data-da=".map-popup__content-map,767.98,0">
					<div class="map-popup__map-image pc">
						<img src="img/map/map.svg" alt="map">
					</div>
					<div class="map-popup__map-image mob">
						<img src="img/map/map-mob.svg" alt="map">
					</div>
				</div>
				<button type="button" class="popup__close _icon-close"></button>
			</div>
		</div>
	</div>
</div>
	<div class="popup popup_tech form-popup">
    <div class="popup__wrapper">
        <div class="popup__wrapper-body">
            <div class="form-popup__body popup__body">
                <div class="form-popup__form">
                    
                    <form data-ajax action="files/sendmail.php" class="form" data-popup-message="success">
    <h2 class="form__title">
        Запрос <span class="nowrap">в техническую</span> поддержку
    </h2>
    <div class="form__rows">
        <div class="form__input">
            <span class="form__input-label">Фамилия, Имя*</span>
            <input autocomplete="off" type="text" name="fullname" data-required="fullname"
                data-error="Фамилия и Имя указаны некорректно" placeholder="Иванов Иван"
                class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__input">
            <span class="form__input-label">Контактный телефон*</span>
            <input autocomplete="off" type="text" name="phone" data-required="tel" data-tel
                data-error="Неправильно указан номер телефона" class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__input">
            <span class="form__input-label">E-mail*</span>
            <input autocomplete="off" type="text" name="email" data-required="email"
                data-error="Неправильно указан E-mail" placeholder="example@mail.com" class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__select">
            <select name="connection" class="sel" data-label="Выберете способ связи">
                <option value="" selected></option>
                <option value="email">E-mail</option>
                <option value="sms">SMS</option>
                <option value="call">Позвонить</option>
            </select>
        </div>
        <div class="form__input">
            <textarea autocomplete="off" name="text" placeholder="Задайте интересующий вопрос..."
                class="input"></textarea>
        </div>
    </div>
    <div class="form__file">
        <label class="form__file-body">
            <input type="file" name="file">
            <span class="form__file-button">
                <span class="form__file-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none">
                        <path fill="#457CD2" fill-rule="evenodd"
                            d="M15.723 2.305a2.75 2.75 0 0 0-3.89 0l-9.015 9.016a4.5 4.5 0 1 0 6.364 6.364l9.016-9.016a.75.75 0 0 1 1.06 1.061l-9.015 9.016a6 6 0 0 1-8.486-8.486l9.016-9.015a4.25 4.25 0 1 1 6.01 6.01l-8.662 8.662a2.5 2.5 0 1 1-3.535-3.535l7.601-7.602a.75.75 0 1 1 1.06 1.061l-7.6 7.601a1 1 0 1 0 1.414 1.415l8.662-8.662a2.75 2.75 0 0 0 0-3.89Z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="form__file-text">
                    Прикрепить файл
                </span>
            </span>
        </label>
        <span class="form__file-name"></span>
    </div>
    <div class="form__action">
        <div class="form__checkbox">
            <label class="checkbox">
                <input data-error="Ошибка" data-required class="checkbox__input" type="checkbox"
                    value="1" name="form[]">
                <span class="checkbox__text">
                    <span>
                        Заполняя форму, я принимаю
                        <a href="files/privacy-policy.pdf" class="_link" target="_blank">
                            условия политики конфиденциальности
                        </a>
                    </span>
                </span>
            </label>
        </div>
        <button class="form__button btn btn_white hvcop" type="submit" tabindex="-1">
            <span class="btn__body" data-copy>
                Отправить
            </span>
        </button>
    </div>
</form>
                </div>
            </div>
            <button type="button" class="popup__close _icon-close"></button>
        </div>
    </div>
</div>
	<div class="popup popup_order form-popup">
    <div class="popup__wrapper">
        <div class="popup__wrapper-body">
            <div class="form-popup__body popup__body">
                <div class="form-popup__form">
                    
                    <form data-ajax action="files/sendmail-order.php" name="order" class="form form-order" data-popup-message="success">
    <h2 class="form__title">
        Заявка на подключение
    </h2>
    <div class="form__rows">
        <div class="form__input">
            <span class="form__input-label">Фамилия, Имя*</span>
            <input autocomplete="off" type="text" name="fullname" data-required="fullname"
                data-error="Фамилия и Имя указаны некорректно" placeholder="Иванов Иван" class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__options options">
            <label class="options__item">
                <input class="options__input" checked type="radio" value="Частное лицо" name="orderOption">
                <span class="options__text"><span>Частным лицам</span></span>
            </label>
            <label class="options__item">
                <input class="options__input" type="radio" value="Юридическое лицо" name="orderOption">
                <span class="options__text"><span>Юридическим лицам</span></span>
            </label>
        </div>
        <div class="form__selects">
            <div class="form__select">
                <select name="individuals" class="sel" data-label="Выбор услуги">
                    <option value="" selected></option>
                    <option value="Подключение к сети интернет">Подключение к сети интернет</option>
                    <option value="Подключение цифрового ТВ">Подключение цифрового ТВ</option>
                    <option value="Видеонаблюдение">Видеонаблюдение</option>
                    <option value="Телефония">Телефония</option>
                    <option value="Выделенный IP">Выделенный IP</option>
                    <option value="Аренда роутера">Аренда роутера</option>
                </select>
            </div>
            <div class="form__select">
                <select name="entity" class="sel" data-label="Выбор услуги">
                    <option value="" selected></option>
                    <option value="Аренда волокон и каналов связи">Аренда волокон и каналов связи</option>
                    <option value="Инженерные системы">Инженерные системы</option>
                    <option value="Телефония">Телефония</option>
                    <option value="Проектирование и строительство">Проектирование и строительство</option>
                </select>
            </div>
        </div>
        <div class="form__input">
            <span class="form__input-label">Город</span>
            <input autocomplete="off" type="text" name="city"
                placeholder="" class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__input">
            <span class="form__input-label">Улица</span>
            <input autocomplete="off" type="text" name="street"
                placeholder="" class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__row">
            <div class="form__input">
                <span class="form__input-label">Дом</span>
                <input autocomplete="off" type="text" name="building"
                    placeholder="" class="input">
                <div class="form__close _icon-close"></div>
            </div>
            <div class="form__input">
                <span class="form__input-label">Корпус</span>
                <input autocomplete="off" type="text" name="corp"
                    placeholder="" class="input">
                <div class="form__close _icon-close"></div>
            </div>
        </div>
        <div class="form__row form__row_3">
            <div class="form__input">
                <span class="form__input-label">Квартира</span>
                <input autocomplete="off" type="text" name="apartment"
                    placeholder="" class="input">
                <div class="form__close _icon-close"></div>
            </div>
            <div class="form__input">
                <span class="form__input-label">Подъезд</span>
                <input autocomplete="off" type="text" name="entrance"
                    placeholder="" class="input">
                <div class="form__close _icon-close"></div>
            </div>
            <div class="form__input">
                <span class="form__input-label">Этаж</span>
                <input autocomplete="off" type="text" name="floor"
                    placeholder="" class="input">
                <div class="form__close _icon-close"></div>
            </div>
        </div>
        <div class="form__input">
            <span class="form__input-label">Контактный телефон*</span>
            <input autocomplete="off" type="text" name="phone" data-required="tel" data-tel
                data-error="Неправильно указан номер телефона" class="input">
            <div class="form__close _icon-close"></div>
        </div>
        <div class="form__input">
            <span class="form__input-label">E-mail*</span>
            <input autocomplete="off" type="text" name="email" data-required="email"
                data-error="Неправильно указан E-mail" placeholder="example@mail.com" class="input">
            <div class="form__close _icon-close"></div>
        </div>
    </div>
    <div class="form__action">
        <div class="form__checkbox">
            <label class="checkbox">
                <input data-error="Ошибка" data-required class="checkbox__input" type="checkbox" value="1"
                    name="form[]">
                <span class="checkbox__text">
                    <span>
                        Заполняя форму, я принимаю
                        <a href="files/privacy-policy.pdf" class="_link" target="_blank">
                            условия политики конфиденциальности
                        </a>
                    </span>
                </span>
            </label>
        </div>
        <button class="form__button btn btn_white hvcop" type="submit" tabindex="-1">
            <span class="btn__body" data-copy>
                Отправить
            </span>
        </button>
    </div>
</form>
                </div>
            </div>
            <button type="button" class="popup__close _icon-close"></button>
        </div>
    </div>
</div>
	<div class="popup popup_success success-popup">
    <div class="popup__wrapper">
        <div class="popup__wrapper-body">
            <div class="success-popup__body popup__body">
                <div class="success-popup__gif">
                    <img src="img/check.gif" alt="">
                </div>
                <h3 class="success-popup__title">
                    Запрос успешно отправлен
                </h3>
                <div class="success-popup__text">
                    Поддержка свяжется с вами <span class="nowrap">в ближайшее</span> время
                </div>
                <div class="success-popup__button">
                    <button type="button" class="btn btn_lightblue hvcop _popup-close">
                        <span class="btn__body" data-copy>
                            закрыть
                        </span>
                    </button>
                </div>
            </div>
            <button type="button" class="popup__close _icon-close" data-da=".success-popup__body,767.98,0"></button>
        </div>
    </div>
</div>
	<script src="js/app.min.js?_v=20230707133436"></script>
</body>

</html>