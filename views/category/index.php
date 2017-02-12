<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Заголовок';
$this->registerJsFile('@web/js/owl.carousel.min.js', ['depends' => [\app\assets\AppAsset::className()]]);
$this->registerJsFile('@web/js/owl_slider_init.js', ['depends' => [\app\assets\AppAsset::className()]]);
$this->registerCssFile('@web/css/owl.carousel.min.css');
$this->registerCssFile('@web/css/owl.theme.default.min.css');
?>
<div class="main-banner">
  <div class="main-banner-slider owl-carousel">
    <?php for($i=1; $i<=5; $i++): ?>
      <div class="main-banner-slider-item">
        <?= Html::img("@web/images/slides/main-banner-slider-item-$i.jpg") ?>
      </div>
    <?php endfor; ?>
  </div>
  <div class="main-banner-sales center-all" style="display: none;">
    <div class="main-banner-sales-logo">
      <div class="main-banner-sales-logo-image">
        <img alt="" src="images/sale-logo.png">
      </div>
      & предложения
    </div>
    <div class="main-banner-sales-about">
      <div class="main-banner-offer-number">27</div>
      <div class="main-banner-offer-more">на весь ассортимент</div>
    </div>
    <div class="main-banner-sales-details">
      Акция продлится до 27&nbsp;ноября включительно
    </div>
  </div>
</div>
<div class="container">
  <section class="categories-links clearfix">
    <div class="category-link category-link-table-transparent left-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Настольные
        </div>
        <div class="category-link-sub">
          Прозрачные
        </div>
      </div>
    </div>
    <div class="category-link category-link-constructor right-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Конструктор
        </div>
        <div class="category-link-sub">
          Задать размер
        </div>
      </div>
    </div>
    <div class="category-link category-link-table-logo left-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Настольные
        </div>
        <div class="category-link-sub">
          С логотипом
        </div>
      </div>
    </div>
    <div class="category-link category-link-floor-transparent right-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Напольные
        </div>
        <div class="category-link-sub">
          Прозрачные
        </div>
      </div>
    </div>
    <div class="category-link category-link-floor-anti left-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Напольные
        </div>
        <div class="category-link-sub">
          Антивибрационные
        </div>
      </div>
    </div>
    <div class="category-link category-link-table-design left-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Настольные
        </div>
        <div class="category-link-sub">
          С дизайном
        </div>
      </div>
    </div>
    <div class="category-link category-link-sales right-col">
      <div class="category-link-offer center-all">
        Напольные
        <div class="category-link-offer-number"><span>23</span></div>
        на весь раздел "Ворсовые с лого"
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <?php if(!empty($hits)): ?>
    <section class="popular">
      <div class="section-title center-text">
        <h2>Популярное</h2>
      </div>
      <div class="slider-items">
        <div class="owl-carousel owl-theme item-slider popular-slider">
          <?php foreach($hits as $hit): ?>
            <div class="item item-popular">
              <div class="item-photo">
                <?= Html::img('@web/images/products/'.$hit->img, ['alt' => $hit->name]) ?>
              </div>
              <div class="item-title">
                <a href="#"><?= $hit->name; ?></a>
              </div>
              <div class="item-price">
                <?= $hit->price; ?>
              </div>
              <div class="item-types center-hor">
                <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="categories-links clearfix">
    <div class="category-link category-link-floor-color left-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Напольные
        </div>
        <div class="category-link-sub">
          Цветные
        </div>
      </div>
    </div>
    <div class="category-link category-link-floor-design left-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Напольные
        </div>
        <div class="category-link-sub">
          С дизайном
        </div>
      </div>
    </div>
    <div class="category-link category-link-floor-logo right-col">
      <div class="category-link-title center-all">
        <div class="category-link-main">
          Напольные
        </div>
        <div class="category-link-sub">
          С логотипом
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <section class="good-to-know">
    <div class="section-title center-text">
      <h2>Полезно знать</h2>
    </div>
    <div class="slider-items articles-items">
      <div class="owl-carousel owl-theme item-slider articles-slider">
        <div class="item item-article">
          <div class="item-photo item-article-photo">
            <img alt="" src="images/article-photo-1.jpg">
          </div>
          <div class="item-date">
            10.12.2016
          </div>
          <div class="item-title item-article-title">
            <a href="#">Силиконовые накладки</a>
          </div>
          <div class="item-text">
            Его мягкость способствует комфортному, удобному письму, к тому же стоят такие коврики не дорого
          </div>
          <a href="#" class="more">Узнать больше</a>
        </div>
        <div class="item item-article">
          <div class="item-photo item-article-photo">
            <img alt="" src="images/article-photo-2.jpg">
          </div>
          <div class="item-date">
            10.12.2016
          </div>
          <div class="item-title item-article-title">
            <a href="#">Силиконовые накладки</a>
          </div>
          <div class="item-text">
            Его мягкость способствует комфортному, удобному письму, к тому же стоят такие коврики не дорого
          </div>
          <a href="#" class="more">Узнать больше</a>
        </div>
        <div class="item item-article">
          <div class="item-photo item-article-photo">
            <img alt="" src="images/article-photo-3.jpg">
          </div>
          <div class="item-date">
            10.12.2016
          </div>
          <div class="item-title item-article-title">
            <a href="#">Силиконовые накладки</a>
          </div>
          <div class="item-text">
            Его мягкость способствует комфортному, удобному письму, к тому же стоят такие коврики не дорого
          </div>
          <a href="#" class="more">Узнать больше</a>
        </div>
        <div class="item item-article">
          <div class="item-photo item-article-photo">
            <img alt="" src="images/article-photo-1.jpg">
          </div>
          <div class="item-date">
            10.12.2016
          </div>
          <div class="item-title item-article-title">
            <a href="#">Силиконовые накладки</a>
          </div>
          <div class="item-text">
            Его мягкость способствует комфортному, удобному письму, к тому же стоят такие коврики не дорого
          </div>
          <a href="#" class="more">Узнать больше</a>
        </div>
        <div class="item item-article">
          <div class="item-photo item-article-photo">
            <img alt="" src="images/article-photo-2.jpg">
          </div>
          <div class="item-date">
            10.12.2016
          </div>
          <div class="item-title item-article-title">
            <a href="#">Силиконовые накладки</a>
          </div>
          <div class="item-text">
            Его мягкость способствует комфортному, удобному письму, к тому же стоят такие коврики не дорого
          </div>
          <a href="#" class="more">Узнать больше</a>
        </div>
        <div class="item item-article">
          <div class="item-photo item-article-photo">
            <img alt="" src="images/article-photo-3.jpg">
          </div>
          <div class="item-date">
            10.12.2016
          </div>
          <div class="item-title item-article-title">
            <a href="#">Силиконовые накладки</a>
          </div>
          <div class="item-text">
            Его мягкость способствует комфортному, удобному письму, к тому же стоят такие коврики не дорого
          </div>
          <a href="#" class="more">Узнать больше</a>
        </div>
      </div>
    </div>
  </section>
</div>


