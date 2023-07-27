<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Подключение к сети Интернет</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="stylesheet" href="css/style.min.css?_v=20230707133436">
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content="Подключение к интернету, роутер, интернет, интернет + TV" >
	<meta name="description" content="Подключение к сети Интернет. Безграничные возможности технологий интернета и высокая скорость соединения. Единый доступ для всех устройств в квартире или в частном доме">
</head>

<?php include 'public/list.php'; ?>
<body>
    <div class="wrapper">
    <?php include 'header.php'; ?>
        <main class="page">
            <article class="service">
                <div class="service__container">
                    <div class="service__body">
                       <?php include 'aside.php'; ?>
                        <div class="service__main">
                            <h1 class="service__title title2">
                                Подключение
                                <span class="nowrap">к сети Интернет</span>
                            </h1>
                            <section class="service__block block-service mb">
                                <div class="block-service__icon">
                                    <img src="img/icons/wi-fi.svg" alt="wi-fi">
                                </div>
                                <div class="block-service__text">
                                    Безграничные возможности технологий интернета и высокая скорость соединения.
                                    <span class="block-service__text-block"></span>
                                    Единый доступ
                                    для всех устройств в квартире или в частном доме
                                </div>
                                <ul class="block-service__list">
                                    <li class="block-service__item">
                                        Высокая скорость
                                    </li>
                                    <li class="block-service__item">
                                        Качество
                                    </li>
                                    <li class="block-service__item">
                                        Доступность
                                    </li>
                                </ul>
                            </section>
                            <section class="rates rates_service">
                                <h2 class="rates__title title2 mbtitle">Тарифы</h2>
                                <div class="rates__body" data-tabs data-know>
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
                                                <li class="rates__button swiper-slide">
                                                    <a href="" class="btn">
                                                        <span class="btn__body">
                                                            Интернет + TV
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="rates__button swiper-slide">
                                                    <a href="" class="btn">
                                                        <span class="btn__body">
                                                            Роутер
                                                        </span>
                                                    </a>
                                                </li>
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
                                                            <h3 class="rates__name">Роутер</h3>
                                                        </div>
                                                        <div class="rates__content">
                                                            <div class="rates__content-main">
                                                                <a href="#order" class="rates__blocks _popup-link" data-link="order.html">
                                                                    <div class="fulllink__sidelink"></div>
                                                                    <div class="rates__block">
                                                                        <h4 class="rates__block-title">Разовый платеж
                                                                        </h4>
                                                                        <ul class="rates__content-list">
                                                                            <li class="rates__content-list-item">
                                                                                <i class="rates__content-list-icon">
                                                                                    <img src="img/icons/wallet.svg"
                                                                                        alt="wallet">
                                                                                </i>
                                                                                <span class="rates__content-list-text">
                                                                                    350 ₽
                                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="rates__block">
                                                                        <h4 class="rates__block-title">Ежемесячный
                                                                            платёж</h4>
                                                                        <ul class="rates__content-list">
                                                                            <li class="rates__content-list-item">
                                                                                <i class="rates__content-list-icon">
                                                                                    <img src="img/icons/wallet.svg"
                                                                                        alt="wallet">
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
                                                                <a href="#order"
                                                                    class="btn btn_lightblue hvcop fulllink__another _popup-link"
                                                                    data-link="order.html">
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
                            </section>
                            <ul class="service__prompts">
                                <li>
                                    *Подключение телевидения производится при наличии Smart-TV или приставки
                                </li>
                                <li>
                                    *Уточняйте условия и возможность предоставления услуг по телефону
                                    <a href="tel:+88212250021" target="_blank" class="nowrap">8 8212 25-00-21</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        
	<?php include 'footer.php'; ?>
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