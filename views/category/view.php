<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Категория такая-то';
?>
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
  <div class="catalog-contents right-col">
    <?php if(!empty($products)): ?>
      <div class="catalog-contents-sort">
        <span>Сортировать по:</span> <input type="radio" id="catalog-contents-sort-popular" name="sort-goods" checked><label for="catalog-contents-sort-popular">популярности</label>  | <input type="radio" id="catalog-contents-sort-rate" name="sort-goods"><label for="catalog-contents-sort-rate">рейтингу</label>   | <input type="radio" id="catalog-contents-sort-price" name="sort-goods"><label for="catalog-contents-sort-price">цене</label>   | <input type="radio" id="catalog-contents-sort-sale" name="sort-goods"><label for="catalog-contents-sort-sale">скидке</label>   | <input type="radio" id="catalog-contents-sort-new" name="sort-goods"><label for="catalog-contents-sort-new">обновлению</label>
      </div>
      <div class="catalog-contents-items clearfix">
      <?php foreach($products as $product): ?>
        <div class="item item-popular left-col">
          <div class="item-photo">
            <?= Html::img('@web/images/products/'.$product->img, ['alt' => $product->name]) ?>
          </div>
          <div class="item-title">
            <a href="#"><?= $product->name; ?></a>
          </div>
          <div class="item-price">
            <?= $product->price; ?>
          </div>
          <div class="item-types center-hor">
            <a href="#" class="item-type">Напольные</a> / <a href="#" class="item-type">Защитные</a> / <a href="#" class="item-type">С логотипом</a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <?php else: ?>
      <h1 style="padding-left: 10px;">В данной категории товаров нет.</h1>
    <?php endif; ?>
  </div>
</div>