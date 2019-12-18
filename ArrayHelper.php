<?php
namespace app\components;

use yii\base\Widget;

use yii\helpers\ArrayHelper as BaseArrayHelper;
/**
 * ArrayHelper provides additional array functionality that you can use in your application.
 */
class ArrayHelper extends BaseArrayHelper
{

    public static function average($array)
    {
       
        if(count($array)) {
            return array_sum($array)/count($array);
        }
        return 0;
    }

}
