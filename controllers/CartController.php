<?php

namespace app\controllers;

//use app\models\Categories;
use app\models\Cart;
use app\models\Products;
use Yii;


class CartController extends AppController
{
  public function actionAdd()
  {
    $id = Yii::$app->request->get('id');
    $product = Products::findOne($id);
    if(empty($product)) return false;
    $cart = new Cart();
    $cart->addToCart($product);
  }

}