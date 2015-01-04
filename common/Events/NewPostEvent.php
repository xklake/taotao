<?php
/**
 * Created by PhpStorm.
 * User: qiangli
 * Date: 29/12/14
 * Time: 23:35
 */

namespace common\Events;


use yii\base\Event;

class NewPostEvent extends Event
{
    public $createTime;
    public $value;
}