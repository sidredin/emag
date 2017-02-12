<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10.02.2017
 * Time: 1:45
 */

namespace app\models;

use yii\db\ActiveRecord;


class Products extends ActiveRecord
{
  public static function tableName()
  {
    return 'products';
  }

  public function getCategory()
  {
    $this->hasOne(Categories::className(), ['id' => 'category_id']);
  }
}