<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\backend\web;

use Yii;
use yii\base\InvalidRouteException;

use common\events; 
use common\events\MyEvents;
use common\events\myComponent;

/**
 * Application is the base class for backend application classes.
 *
 * @property string $homeUrl The homepage URL.
 * @property Session $session The session component. This property is read-only.
 * @property User $user The user component. This property is read-only.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Application extends \yii\web\Application
{
	private static $add = 0; 
	public function __construct($config = [])
	{
		
		parent::__construct($config); 

		/*$this->on(self::EVENT_BEFORE_REQUEST, ['\yii\backend\web\Application', 'increase']); 
		
		MyEvents::on('\yii\backend\web\Application', \yii\backend\web\Application::EVENT_BEFORE_REQUEST, ['\yii\backend\web\Application', 'decrease']); 
		
		$mycom = new myComponent(); 
		$mycom->on('test',  ['\yii\backend\web\Application', 'test']); 
		
		$mycom->trigger('test'); 
		*/
				
	}

	public static function test()
	{
		static::$add ++;
	}
		
	public static function beginbody()
	{
		static::$add ++;
	}	
	
	public static function increase()
	{
		static::$add ++; 
	}
	
	public static function decrease()
	{
		static::$add --;
	}	
	
	public  function __destruct()
	{
		echo('quit....'); 
	}
	
	public function init()
	{
		parent::init();
	}
}
