<?php
namespace app\controllers;

use app\models\Categories;
use app\models\Products;
use Yii;

class CategoryController extends AppController
{
  public function actionIndex()
  {
    $hits = Products::find()->where(['hit'=>'1'])->limit(6)->all();
    return $this->render('index', compact('hits'));
  }

  public function actionView($id=null)
  {
    $id = Yii::$app->request->get('id');
    if($id) $products = Products::find()->where(['category_id'=>$id])->all();
    else $products = Products::find()->all();
    return $this->render('view', compact('products'));
  }
}