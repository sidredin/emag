<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-1920">
    <header class="main-header">
        <div class="clearfix">
            <div class="main-header-logo left-col">
                <div class="center-all">
                    <a href="<?=\yii\helpers\Url::home();?>">
                        <?= Html::img('@web/images/logo.png', ['alt' => 'logo']) ?>
                    </a>
                </div>
            </div>
            <div class="main-header-content right-col">
                <div class="clearfix">
                    <div class="main-header-search left-col">
                        <form action="<?= \yii\helpers\Url::to(['category/search'])?>" method="get">
                            <input type="text" placeholder="Поиск..." name="q">
                            <button></button>
                        </form>
                    </div>
                    <nav class="main-header-main-menu right-col">
                        <a href="about-us.html">
                            О нас
                        </a>
                        <a href="#" class="active">
                            Покупателю
                        </a>
                        <a href="#">
                            Оптовикам
                        </a>
                        <a href="#">
                            Доставка
                        </a>
                        <a href="sales.html">
                            Акции
                        </a>
                        <a href="#">
                            Контакты
                        </a>
                    </nav>
                </div>
                <div class="clearfix">
                    <div class="right-col main-header-details">
                        <div class="main-header-phone">
                            +7 (495) 517-92-96
                        </div>
                        <div class="main-header-login">
                            <div class="main-header-login-entry">
                                Вход
                            </div>
                            <div class="main-header-login-form dotted-border">
                                <label>
                                    Логин
                                    <input type="text">
                                </label>
                                <label>
                                    Пароль
                                    <input type="password">
                                </label>
                                <button class="main-header-login-go btn btn-1">Войти</button>
                                <div class="clearfix">
                                    <a href="lost-password.html" class="left-col">Забыли пароль?</a>
                                    <a href="registration.html" class="right-col">Регистрация</a>
                                </div>
                                <div class="clearfix">
                                    <button class="main-header-login-vk btn btn-4 left-col">В контакте</button>
                                    <button class="main-header-login-fb btn btn-4 right-col">Facebook</button>
                                </div>
                            </div>
                        </div>
                        <div class="main-header-cart">
                            Покупки
                            <span class="main-header-cart-number">25</span>
                            <div class="main-header-cart-drop-down dotted-border">
                                <div class="main-header-cart-drop-down-item">
                                    <div class="main-header-cart-drop-down-item-picture">
                                        <img alt="" src="/images/cart-item-1.jpg">
                                    </div>
                                    <div class="main-header-cart-drop-down-item-name">
                                        PROFI Hard квадратный
                                    </div>
                                    <div class="main-header-cart-drop-down-item-number">
                                        5
                                    </div>
                                    <div class="main-header-cart-drop-down-item-price">
                                        3100
                                    </div>
                                </div>
                                <div class="main-header-cart-drop-down-item">
                                    <div class="main-header-cart-drop-down-item-picture">
                                        <img alt="" src="/images/cart-item-1.jpg">
                                    </div>
                                    <div class="main-header-cart-drop-down-item-name">
                                        PROFI Hard квадратный
                                    </div>
                                    <div class="main-header-cart-drop-down-item-number">
                                        14
                                    </div>
                                    <div class="main-header-cart-drop-down-item-price">
                                        450
                                    </div>
                                </div>
                                <div class="main-header-cart-drop-down-item">
                                    <div class="main-header-cart-drop-down-item-picture">
                                        <img alt="" src="/images/cart-item-1.jpg">
                                    </div>
                                    <div class="main-header-cart-drop-down-item-name">
                                        PROFI Fort прямоугольный с вырубкой
                                    </div>
                                    <div class="main-header-cart-drop-down-item-number">
                                        5
                                    </div>
                                    <div class="main-header-cart-drop-down-item-price">
                                        3100
                                    </div>
                                </div>
                                <div class="main-header-cart-drop-down-item">
                                    <div class="main-header-cart-drop-down-item-picture">
                                        <img alt="" src="/images/cart-item-1.jpg">
                                    </div>
                                    <div class="main-header-cart-drop-down-item-name">
                                        PROFI Hard квадратный
                                    </div>
                                    <div class="main-header-cart-drop-down-item-number">
                                        5
                                    </div>
                                    <div class="main-header-cart-drop-down-item-price">
                                        3100
                                    </div>
                                </div>
                                <div class="main-header-cart-buttons clearfix">
                                    <a href="cart.html" class="btn btn-1 left-col">Моя корзина</a>
                                    <a class="btn btn-3 right-col">Оформить заказ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="main-header-items-menu left-col">
                        <ul>
                            <li class="main-header-items-menu-floor">
                                Напольные
                            </li>
                            <li class="main-header-items-menu-table">
                                Настольные
                            </li>
                            <li class="main-header-items-menu-custom">
                                На заказ
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-header-items-menu-drop-down main-header-items-menu-drop-down-floor dotted-border">
            <div class="clearfix">
                <div class="main-header-items-menu-drop-down-content left-col clearfix">
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Защитные
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                Прозрачные
                            </li>
                            <li>
                                С дизайном
                            </li>
                            <li>
                                С логотипом
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Ворсовые
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                Цветные
                            </li>
                            <li>
                                С логотипом
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Антивибрационные
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                В спортзал
                            </li>
                            <li>
                                В ванную
                            </li>
                            <li>
                                Для оборудования
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="main-header-items-menu-drop-down-menu right-col">
                    <div class="main-header-items-menu-drop-down-menu-title">Напольные коврики</div>
                    <ul>
                        <li>
                            Новые поступления
                        </li>
                        <li>
                            Популярное
                        </li>
                        <li>
                            Рекомендуем
                        </li>
                        <li>
                            Скидки
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main-header-items-menu-drop-down main-header-items-menu-drop-down-table dotted-border">
            <div class="clearfix">
                <div class="main-header-items-menu-drop-down-content left-col clearfix">
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Защитные
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                Прозрачные
                            </li>
                            <li>
                                С дизайном
                            </li>
                            <li>
                                С логотипом
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Ворсовые
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                Цветные
                            </li>
                            <li>
                                С логотипом
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Антивибрационные
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                В спортзал
                            </li>
                            <li>
                                В ванную
                            </li>
                            <li>
                                Для оборудования
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="main-header-items-menu-drop-down-menu right-col">
                    <div class="main-header-items-menu-drop-down-menu-title">Настольные коврики</div>
                    <ul>
                        <li>
                            Новые поступления
                        </li>
                        <li>
                            Популярное
                        </li>
                        <li>
                            Рекомендуем
                        </li>
                        <li>
                            Скидки
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main-header-items-menu-drop-down main-header-items-menu-drop-down-custom dotted-border">
            <div class="clearfix">
                <div class="main-header-items-menu-drop-down-content left-col clearfix">
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Защитные
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                Прозрачные
                            </li>
                            <li>
                                С дизайном
                            </li>
                            <li>
                                С логотипом
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Ворсовые
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                Цветные
                            </li>
                            <li>
                                С логотипом
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-items-menu-drop-down-content-items-group left-col">
                        <div class="main-header-items-menu-drop-down-content-title">
                            Антивибрационные
                        </div>
                        <ul>
                            <li>
                                Все типы
                            </li>
                            <li>
                                В спортзал
                            </li>
                            <li>
                                В ванную
                            </li>
                            <li>
                                Для оборудования
                            </li>
                        </ul>
                    </div>
                </div>
                <nav class="main-header-items-menu-drop-down-menu right-col">
                    <div class="main-header-items-menu-drop-down-menu-title">Коврики на заказ</div>
                    <ul>
                        <li>
                            Новые поступления
                        </li>
                        <li>
                            Популярное
                        </li>
                        <li>
                            Рекомендуем
                        </li>
                        <li>
                            Скидки
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="with-dotted-border"></div>
    <div class="catalog clearfix">
        <aside class="catalog-menu left-col">
            <div class="catalog-menu-title">
                Напольные<button></button>
            </div>
            <div class="catalog-menu-submenu">
                <form>
                    <input type="checkbox" id="catalog-menu-submenu-all" checked><label for="catalog-menu-submenu-all">Все</label>
                    <input type="checkbox" id="catalog-menu-submenu-floor"><label for="catalog-menu-submenu-floor">Напольные</label>
                    <input type="checkbox" id="catalog-menu-submenu-table"><label for="catalog-menu-submenu-table">Настольные</label>
                </form>
            </div>
            <div class="catalog-menu-content">
                <div class="catalog-menu-types">
                    <div class="catalog-menu-category-title">
                        Категория
                    </div>
                    <form>
                        <input type="checkbox" id="catalog-menu-types-all-carpets" checked><label for="catalog-menu-types-all-carpets">Все коврики</label>
                        <input type="checkbox" id="catalog-menu-types-protect"><label for="catalog-menu-types-protect">Защитные</label>
                        <input type="checkbox" id="catalog-menu-types-with-pile"><label for="catalog-menu-types-with-pile">Ворсовые</label>
                        <input type="checkbox" id="catalog-menu-types-anti-vibrational"><label for="catalog-menu-types-anti-vibrational">Антивибрационные</label>
                    </form>
                </div>
                <div class="catalog-menu-design">
                    <div class="catalog-menu-category-title">
                        Оформление
                    </div>
                    <form>
                        <input type="checkbox" id="catalog-menu-design-transparent"><label for="catalog-menu-design-transparent">Прозрачные</label>
                        <input type="checkbox" id="catalog-menu-design-colored"><label for="catalog-menu-design-colored">Цветные</label>
                        <input type="checkbox" id="catalog-menu-design-with-design"><label for="catalog-menu-design-with-design">С дизайном</label>
                        <input type="checkbox" id="catalog-menu-design-with-logo"><label for="catalog-menu-design-with-logo">С логотипом</label>
                    </form>
                </div>
                <div class="catalog-menu-color">
                    <div class="catalog-menu-category-title">
                        Цвет
                    </div>
                    <form>
                        <input type="checkbox" id="catalog-menu-color-black"><label for="catalog-menu-color-black"></label>
                        <input type="checkbox" id="catalog-menu-color-grey"><label for="catalog-menu-color-grey"></label>
                        <input type="checkbox" id="catalog-menu-color-white"><label for="catalog-menu-color-white"></label>
                        <input type="checkbox" id="catalog-menu-color-blue"><label for="catalog-menu-color-blue"></label>
                        <input type="checkbox" id="catalog-menu-color-violet"><label for="catalog-menu-color-violet"></label>
                        <input type="checkbox" id="catalog-menu-color-pink"><label for="catalog-menu-color-pink"></label>
                        <input type="checkbox" id="catalog-menu-color-light-grey"><label for="catalog-menu-color-light-grey"></label>
                        <input type="checkbox" id="catalog-menu-color-light-blue"><label for="catalog-menu-color-light-blue"></label>
                        <input type="checkbox" id="catalog-menu-color-orange"><label for="catalog-menu-color-orange"></label>
                        <input type="checkbox" id="catalog-menu-color-yellow"><label for="catalog-menu-color-yellow"></label>
                        <input type="checkbox" id="catalog-menu-color-dark-green"><label for="catalog-menu-color-dark-green"></label>
                        <input type="checkbox" id="catalog-menu-color-green"><label for="catalog-menu-color-green"></label>
                    </form>
                </div>
                <div class="catalog-menu-use">
                    <div class="catalog-menu-category-title">
                        Назначение
                    </div>
                    <form>
                        <input type="checkbox" id="catalog-menu-use-for-production"><label for="catalog-menu-use-for-production">Для производства</label>
                        <input type="checkbox" id="catalog-menu-use-for-halway"><label for="catalog-menu-use-for-halway">Для прихожей</label>
                        <input type="checkbox" id="catalog-menu-use-for-ofis"><label for="catalog-menu-use-for-ofis">Для офиса</label>
                        <input type="checkbox" id="catalog-menu-use-for-bathroom"><label for="catalog-menu-use-for-bathroom">Для ванной</label>
                        <input type="checkbox" id="catalog-menu-use-for-childroom"><label for="catalog-menu-use-for-childroom">Для детской</label>
                        <input type="checkbox" id="catalog-menu-use-for-pets"><label for="catalog-menu-use-for-pets">Для животных</label>
                    </form>
                </div>
                <div class="catalog-menu-shape">
                    <div class="catalog-menu-category-title">
                        Форма
                    </div>
                    <form>
                        <input type="checkbox" id="catalog-menu-shape-circle"><label for="catalog-menu-shape-circle">Круг</label>
                        <input type="checkbox" id="catalog-menu-shape-square"><label for="catalog-menu-shape-square">Квадрат</label>
                        <input type="checkbox" id="catalog-menu-shape-rectangle"><label for="catalog-menu-shape-rectangle">Прямоугольник</label>
                    </form>
                </div>
                <div class="catalog-menu-size">
                    <div class="catalog-menu-category-title">
                        Размер
                    </div>
                    <div class="catalog-menu-size-numbers">
                        <label> Длина (см)</label>
                        <input type="text" placeholder="от"> <input type="text" placeholder="до">
                        <label> Ширина (см)</label>
                        <input type="text" placeholder="от"> <input type="text" placeholder="до">
                    </div>
                </div>
                <button class="btn btn-3">На заказ</button>
            </div>
        </aside>

         <?= $content ?>
    </div>

    <footer class="main-footer">
        <div class="main-footer-contacts">
            <div class="main-footer-contacts-container">
                <div class="main-footer-contacts-slogan">
                    <div class="main-footer-contacts-slogan-bold">Будьте рядом</div>
                    <span>следите за нами онлайн и подписывайтесь на новости</span>
                </div>
                <div class="main-footer-contacts-social">
                    <a href="#" class="main-footer-contacts-social-fb"></a>
                    <a href="#" class="main-footer-contacts-social-vk"></a>
                    <a href="#" class="main-footer-contacts-social-inst"></a>
                    <form>
                        <input type="email" placeholder="Email..."><button></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="main-footer-details">
            <div class="container clearfix">
                <div class="main-footer-group main-footer-about left-col">
                    <div class="main-footer-group-title">
                        О компании
                    </div>
                    <a href="about-us.html">О нас</a>
                    <a href="about-production.html">О продукции</a>
                    <a href="news.html">Новости</a>
                    <a href="sales.html">Акции</a>
                    <a href="contacts.html">Контакты</a>
                </div>
                <div class="main-footer-group main-footer-help left-col">
                    <div class="main-footer-group-title">
                        Помощь
                    </div>
                    <a href="faq.html">Частые вопросы</a>
                    <a href="guarantee.hrml">Гарантия</a>
                    <a href="where-to-buy.html">Где купить</a>
                    <a href="delivery.html">Доставка</a>
                    <a href="payment.html">Оплата</a>
                    <a href="return.html">Возврат</a>
                </div>
                <div class="main-footer-group main-footer-cooperation left-col">
                    <div class="main-footer-group-title">
                        Сотрудничество
                    </div>
                    <a href="become-dealer.html">Стать дилером</a>
                    <a href="#">Поставщикам</a>
                    <a href="rent.html">Аренда</a>
                    <a href="#">Доствка и сборка</a>
                    <a href="designers.html">Дизайнеры и архитекторы</a>
                </div>
                <div class="main-footer-group main-footer-useful left-col">
                    <div class="main-footer-group-title">
                        Полезные материалы
                    </div>
                    <a href="technology.html">Технологии</a>
                    <a href="advices.html">Советы</a>
                    <a href="constructor.html">Конструктор</a>
                </div>
                <div class="main-footer-group main-footer-payment right-col">
                    <div class="main-footer-group-title">
                        Способы оплаты
                    </div>
                    <div class="main-footer-payment-cards">
                        <a href="#" class="main-footer-pay-mastercard"></a>
                        <a href="#" class="main-footer-pay-visa"></a>
                        <a href="#" class="main-footer-pay-yandex"></a>
                    </div>
                    <div class="main-footer-payment-other">
                        Вы можете оплатить покупки наличными при получении, либо выбрать <a href="#">другой способ оплаты</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
