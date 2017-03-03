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
    $this->setMeta(Yii::$app->params['siteName'], Yii::$app->params['keywords'], Yii::$app->params['description']);
    return $this->render('index', compact('hits'));
  }

  public function actionView()
  {
    $id = Yii::$app->request->get('id');
    if($id){
      $products = Products::find()->where(['category_id'=>$id])->all();
      $category=Categories::findOne($id);
      if(empty($category)){
        throw new \yii\web\HttpException(404 ,'Такой категории не существует');
      }
      $title = $category->name.' | '.Yii::$app->params['siteName'];
      $this->setMeta($title, $category->keywords, $category->description);
    }
    else{
      $products = Products::find()->all();
      $title = 'Все типы ковров | '.Yii::$app->params['siteName'];
      $this->setMeta($title, Yii::$app->params['keywords'], Yii::$app->params['description']);
    }

    $this->layout = 'catalog';
    return $this->render('view', compact('products'));
  }

  public function actionSearch()
  {
    $q = trim(Yii::$app->request->get('q'));
    if(!$q)
      return $this->render('search');
    $products = Products::find()->where(['like', 'name', $q])->all();
    $title = 'Поиск по запросу: '.$q.' | '.Yii::$app->params['siteName'];
    $this->setMeta($title);
    $this->layout = 'catalog';
    return $this->render('search', compact('products', 'q'));
  }
}