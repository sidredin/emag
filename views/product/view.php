<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->registerJsFile('@web/js/owl.carousel.min.js', ['depends' => [\app\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/owl_slider_init.js', ['depends' => [\app\assets\AppAsset::className()]]);
$this->registerCssFile('@web/css/owl.carousel.min.css');
$this->registerCssFile('@web/css/owl.theme.default.min.css');
?>

<div class="with-dotted-border"></div>
<?php if(isset($_SERVER['HTTP_REFERER']) && mb_stripos ($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST'])):?>
    <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="back">Назад</a>
<?php endif; ?>

<div class="container item-cart">
    <div class="item-cart-main clearfix">
        <div class="item-cart-photo left-col">
            <div class="item-cart-photo-big">
                <?= Html::img('@web/images/products/'.$product->img, ['alt' => $product->name]) ?>
            </div>
            <ul class="item-cart-photo-thumbs">
                <li class="item-cart-photo-thumbs-1"><img alt="" src="/images/item-cart-thumb.jpg"></li>
                <li class="item-cart-photo-thumbs-1"><img alt="" src="/images/item-cart-thumb.jpg"></li>
                <li class="item-cart-photo-thumbs-1"><img alt="" src="/images/item-cart-thumb.jpg"></li>
                <li class="item-cart-photo-thumbs-1"><img alt="" src="/images/item-cart-thumb.jpg"></li>
            </ul>
        </div>
        <aside class="item-cart-menu left-col">
            <div class="item-cart-name">
                <?= $product->name ?>
            </div>
            <div class="item-cart-code">
                Артикул: <?= $product->vendor_code ?>
            </div>
            <div class="item-cart-price">
                <?= $product->price ?>
            </div>
            <div class="divider"></div>
            <div class="item-cart-section">
                <div class="item-cart-title">
                    Характеристики
                </div>
                <div class="item-cart-characteristics">
                    <div class="item-cart-characteristic">
						<span>
							Материал ......................
						</span>
						<span class="item-cart-characteristics-material">
							<?= $product->material ?>
						</span>
                    </div>
                    <div class="item-cart-characteristic">
						<span>
							Цвет .........................
						</span>
						<span class="item-cart-characteristics-color">
							<?= $product->color ?>
						</span>
                    </div>
                    <div class="item-cart-characteristic">
						<span>
							Форма ..........................
						</span>
						<span class="item-cart-characteristics-shape">
							<?= $product->form ?>
						</span>
                    </div>
                </div>
            </div>
            <div class="item-cart-section item-cart-size">
                <div class="item-cart-title">
                    Размер
                </div>
                <div class="item-cart-sizes">
                    <button class="btn item-cart-size-btn item-cart-size-inavailable">60x90</button>
                    <button class="btn item-cart-size-btn item-cart-size-chosen">80x120</button>
                    <button class="btn item-cart-size-btn item-cart-size-available">120x120</button>
                    <button class="btn item-cart-size-btn item-cart-size-available">80x120</button>
                    <button class="btn item-cart-size-btn item-cart-size-inavailable">150x150</button>
                    <button class="btn item-cart-size-btn item-cart-size-available">120x120</button>
                    <button class="btn item-cart-size-btn item-cart-size-inavailable">150x150</button>
                </div>
                <a href="#">Заказать по своим размерам</a>
            </div>
            <div class="item-cart-section item-cart-color">
                <div class="item-cart-title">
                    Цвет
                </div>
                <form>
                    <input type="checkbox" id="item-cart-color-black"><label for="item-cart-color-black"></label>
                    <input type="checkbox" id="item-cart-color-grey"><label for="item-cart-color-grey"></label>
                    <input type="checkbox" id="item-cart-color-white"><label for="item-cart-color-white"></label>
                    <input type="checkbox" id="item-cart-color-blue"><label for="item-cart-color-blue"></label>
                    <input type="checkbox" id="item-cart-color-violet"><label for="item-cart-color-violet"></label>
                    <input type="checkbox" id="item-cart-color-pink"><label for="item-cart-color-pink"></label>
                    <input type="checkbox" id="item-cart-color-light-grey"><label for="item-cart-color-light-grey"></label>
                    <input type="checkbox" id="item-cart-color-light-blue"><label for="item-cart-color-light-blue"></label>
                    <input type="checkbox" id="item-cart-color-orange"><label for="item-cart-color-orange"></label>
                    <input type="checkbox" id="item-cart-color-yellow"><label for="item-cart-color-yellow"></label>
                    <input type="checkbox" id="item-cart-color-dark-green"><label for="item-cart-color-dark-green"></label>
                    <input type="checkbox" id="item-cart-color-green"><label for="item-cart-color-green"></label>
                </form>
            </div>
            <div class="divider"></div>
            <div class="item-cart-section item-cart-delivery">
                <div class="item-cart-delivery-type"><div class="item-cart-delivery-tooltip item-cart-delivery-self">Самовывоз:</div><span>сегодня</span></div><div class="item-cart-delivery-tooltip-content"></div>
                <div class="item-cart-delivery-type"><div class="item-cart-delivery-tooltip item-cart-delivery-with">Доставка:</div><span>завтра</span></div>
                <div class="item-cart-delivery-tooltip-content">
                    <div>
                        1. Доставка заказов от 3000 руб. - БЕСПЛАТНО<br/>
                        2. Стоимость доставки заказов до 3000 руб.:
                        <ul>
                            <li>
                                Москва - 100-250 руб.
                            </li>
                            <li>
                                Московская область - 150-350 руб.
                            </li>
                        </ul>
                    </div>
                    <div>
                        При полном отказе от заказа Вы оплачиваете стоимость доставки
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="item-cart-section item-cart-social">
                <span>Поделиться:</span>
                <a href="#" class="item-cart-fb"></a>
                <a href="#" class="item-cart-vk"></a>
                <a href="#" class="item-cart-inst"></a>
            </div>
            <div class="item-cart-buttons">
                <a href="#" class="btn btn-3" data-id="<?= $product->id; ?>">Купить</a>
                <button class="btn btn-2">Купить в 1 клик</button>
            </div>
        </aside>
    </div>

    <div class="item-cart-details">
        <div class="item-cart-details-titles">
            <div class="item-cart-details-title item-cart-description-title">
                Описание
            </div>
            <div class="item-cart-details-title item-cart-reviews-title">
                Отзывы
            </div>
            <div class="item-cart-details-title item-cart-more-goods-title">
                Сопутствующие товары
            </div>
        </div>
        <div class="item-cart-details-container">
            <div class="item-cart-details-window item-cart-description clearfix">
                <div class="item-cart-description-main-details right-col">
                    <?= $product->content_short ?>
                </div>
                <div class="item-cart-description-main left-col">
                    <?= $product->content ?>
                </div>
            </div>
            <div class="item-cart-details-window item-cart-reviews">
                <div class="item-cart-reviews-wrapper">
                    <div class="item-cart-review clearfix">
                        <div class="item-cart-review-author left-col">
                            <div class="item-cart-review-author-name">
                                Аноним
                            </div>
                            <div class="item-cart-review-date">
                                28.12.2016
                            </div>
                            <div class="item-cart-review-rating">

                            </div>
                        </div>
                        <div class="item-cart-review-content">
                            <div class="item-cart-review-advantages">
                                <h6>Достоинства</h6>
                                <p>
                                    Это моя первая зеркалка. Я очень доволен выбором. Взял сразу с 18-135. Еще сумку LowePro Rezo 170, вспышку SpeedLite 430-ю. А защитный фильтр(100р), бленду (150р) и запасной аккумулятор(150р), кисточку и другую мелочь заказал у китайцев - так дешевле в 2-3 раза а то и больше, а качество то же самое
                                </p>
                            </div>
                            <div class="item-cart-review-disadvantages">
                                <h6>Недостатки</h6>
                                <p>
                                    На батарею сначала сделал ~700 кадров без видео, а потом и вовсе 900, что не соответствует заявленным в инструкции 400-500
                                </p>
                            </div>
                            <div class="item-cart-review-text">
                                <h6>Отзыв</h6>
                                <p>
                                    Всем у кого мыльница и кто хочет переходить на зеркалку советую брать этот или аналогичный набор - вы будете сильно поражены улучшением ваших фотографий
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-cart-review clearfix">
                        <div class="item-cart-review-author left-col">
                            <div class="item-cart-review-author-name">
                                Аноним
                            </div>
                            <div class="item-cart-review-date">
                                28.12.2016
                            </div>
                            <div class="item-cart-review-rating">

                            </div>
                        </div>
                        <div class="item-cart-review-content">
                            <div class="item-cart-review-advantages">
                                <h6>Достоинства</h6>
                                <p>
                                    Это моя первая зеркалка. Я очень доволен выбором. Взял сразу с 18-135. Еще сумку LowePro Rezo 170, вспышку SpeedLite 430-ю. А защитный фильтр(100р), бленду (150р) и запасной аккумулятор(150р), кисточку и другую мелочь заказал у китайцев - так дешевле в 2-3 раза а то и больше, а качество то же самое
                                </p>
                            </div>
                            <div class="item-cart-review-disadvantages">
                                <h6>Недостатки</h6>
                                <p>
                                    На батарею сначала сделал ~700 кадров без видео, а потом и вовсе 900, что не соответствует заявленным в инструкции 400-500
                                </p>
                            </div>
                            <div class="item-cart-review-text">
                                <h6>Отзыв</h6>
                                <p>
                                    Всем у кого мыльница и кто хочет переходить на зеркалку советую брать этот или аналогичный набор - вы будете сильно поражены улучшением ваших фотографий
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item-cart-review clearfix">
                        <div class="item-cart-review-author left-col">
                            <div class="item-cart-review-author-name">
                                Аноним
                            </div>
                            <div class="item-cart-review-date">
                                28.12.2016
                            </div>
                            <div class="item-cart-review-rating">

                            </div>
                        </div>
                        <div class="item-cart-review-content">
                            <div class="item-cart-review-advantages">
                                <h6>Достоинства</h6>
                                <p>
                                    Это моя первая зеркалка. Я очень доволен выбором. Взял сразу с 18-135. Еще сумку LowePro Rezo 170, вспышку SpeedLite 430-ю. А защитный фильтр(100р), бленду (150р) и запасной аккумулятор(150р), кисточку и другую мелочь заказал у китайцев - так дешевле в 2-3 раза а то и больше, а качество то же самое
                                </p>
                            </div>
                            <div class="item-cart-review-disadvantages">
                                <h6>Недостатки</h6>
                                <p>
                                    На батарею сначала сделал ~700 кадров без видео, а потом и вовсе 900, что не соответствует заявленным в инструкции 400-500
                                </p>
                            </div>
                            <div class="item-cart-review-text">
                                <h6>Отзыв</h6>
                                <p>
                                    Всем у кого мыльница и кто хочет переходить на зеркалку советую брать этот или аналогичный набор - вы будете сильно поражены улучшением ваших фотографий
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-4 more-reviews">Другие отзывы</button>
                <div class="send-review clearfix">
                    <form class="left-col">
                        <div class="send-review-section send-review-rating">
                            <div class="send-review-title">
                                Оценка
                            </div>
                            <div class="send-review-rating-content">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="send-review-section send-review-buttons">
                            <div class="send-review-title">
                                От кого отзыв?
                            </div>
                            <div class="send-comment-buttons">
                                <button class="btn btn-4 active">Анонимно</button>
                                <button class="btn btn-4">От моего имени</button>
                            </div>
                        </div>
                        <div class="send-review-section send-review-advantages">
                            <div class="send-review-title">
                                Достоинства
                            </div>
                            <div class="send-review-advantages-content">
                                <textarea rows="6"></textarea>
                            </div>
                        </div>
                        <div class="send-review-section send-review-disadvantages">
                            <div class="send-review-title">
                                Недостатки
                            </div>
                            <div class="send-review-advantages-content">
                                <textarea rows="6"></textarea>
                            </div>
                        </div>
                        <div class="send-review-section send-review-text">
                            <div class="send-review-title">
                                Комментарий
                            </div>
                            <div class="send-review-text-content">
                                <textarea rows="6"></textarea>
                            </div>
                        </div>

                        <button class="btn btn-3 send-review-go">
                            Отправить отзыв
                        </button>
                    </form>
                    <div class="send-review-ps right-col">
                        <p>
                            Подробно расскажите о своём опыте использования товара. Обратите внимание на качество, удобство модели, её соответствие заявленным характеристикам
                        </p>
                        <p>
                            Мы не публикуем отзывы, которые написаны большими буквами, содержат оскорбления и ненормативную лексику
                        </p>
                    </div>
                </div>
            </div>
            <div class="item-cart-details-window item-cart-more-goods">
                <div class="slider-items">
                    <div class="owl-carousel owl-theme item-slider-more-goods">
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                        <div class="item item-similar">
                            <div class="item-photo">
                                <img alt="" src="/images/item-1.jpg">
                            </div>
                            <div class="item-title">
                                <a href="#">PROFI Hard квадратный</a>
                            </div>
                            <div class="item-price">
                                750
                            </div>
                            <div class="item-types center-hor">
                                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="similar">
        <div class="section-title center-text">
            <h2>Похожие</h2>
        </div>
        <div class="slider-items">
            <div class="owl-carousel owl-theme item-slider">
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
                <div class="item item-similar">
                    <div class="item-photo">
                        <img alt="" src="/images/item-1.jpg">
                    </div>
                    <div class="item-title">
                        <a href="#">PROFI Hard квадратный</a>
                    </div>
                    <div class="item-price">
                        750
                    </div>
                    <div class="item-types center-hor">
                        <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>