<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

?>
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
          <a href="<?= Url::to(['product/view', 'id' => $product->id]); ?>"><?= $product->name; ?></a>
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