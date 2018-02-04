<?php
/**
 * Created by PhpStorm.
 * User: zdani
 * Date: 04.02.2018
 * Time: 16:02
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}