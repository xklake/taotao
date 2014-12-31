<?php
namespace common\controller;

use Yii;
use yii\base\InlineAction;
use yii\helpers\Url;

/**
 */

class Controller extends \yii\web\Controller
{

	public function init()
	{
		echo(' self defined init');
		parent::init();
	}

}
