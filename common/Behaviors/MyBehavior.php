<?php
/**
 * @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
*/

namespace common\behaviors;

use yii\base\Behavior;
use yii\base\Controller;
use yii\base\View;
/**
 * Behavior is the base class for all behavior classes.
 *
 * A behavior can be used to enhance the functionality of an existing component without modifying its code.
 * In particular, it can "inject" its own methods and properties into the component
 * and make them directly accessible via the component. It can also respond to the events triggered in the component
 * and thus intercept the normal code execution.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class MyBehavior extends Behavior
{

	public function events()
	{
		return [
				Controller::EVENT_BEFORE_ACTION =>'checksomething', 
				Controller::EVENT_BEFORE_ACTION =>'checksomethingelse', 
				View::EVENT_BEFORE_RENDER =>'beforerender', 
		];
	}
	
	public  function checksomething()
	{
		$add = 0; 
		$add = $add + 100; 
	}

	public  function checksomethingelse()
	{
		$add = 0;
		$add = $add + 100;
		echo $add; 
	}
	
	public  function beforerender()
	{
		echo 'before render'; 
	}
	
	
	/**
	 * Attaches the behavior object to the component.
	 * The default implementation will set the [[owner]] property
	 * and attach event handlers as declared in [[events]].
	 * Make sure you call the parent implementation if you override this method.
	 * @param Component $owner the component that this behavior is to be attached to.
	 
	public function attach($owner)
	{
		$this->owner = $owner;
		foreach ($this->events() as $event => $handler) {
			$owner->on($event, is_string($handler) ? [$this, $handler] : $handler);
		}
	}*/

	/**
	 * Detaches the behavior object from the component.
	 * The default implementation will unset the [[owner]] property
	 * and detach event handlers declared in [[events]].
	 * Make sure you call the parent implementation if you override this method.
	 
	public function detach()
	{
		if ($this->owner) {
			foreach ($this->events() as $event => $handler) {
				$this->owner->off($event, is_string($handler) ? [$this, $handler] : $handler);
			}
			$this->owner = null;
		}
	}*/
}
