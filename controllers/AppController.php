<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12.02.2017
 * Time: 4:44
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
  protected function setMeta($title=null, $keywords=null, $description=null){
    $this->view->title=$title;
    $this->view->registerMetaTag(['name'=>'keywords','content'=>"$keywords"]);
    $this->view->registerMetaTag(['name'=>'description','content'=>"$description"]);
  }
}