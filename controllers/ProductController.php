<?php

namespace app\controllers;

use app\models\Categories;
use app\models\Products;
use Yii;

class ProductController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $product = Products::findOne($id);
        if(empty($product)){
            throw new \yii\web\HttpException(404 ,'Такого товара не существует');
        }
        $title = $product->name.' | '.Yii::$app->params['siteName'];
        $this->setMeta($title, $product->keywords, $product->description);
        return $this->render('view', compact('product'));
    }

}
