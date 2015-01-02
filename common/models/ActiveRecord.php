<?php
/**
 * this class is to avoid confilic with frameword code directly, it would be easier 
 * to upgrade to higher future Yii framework, also we can define more functions or overide base 
 * framework code
*/

namespace common\models;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;


/**
 * ActiveRecord is the base class for classes representing relational data in terms of objects.
 * @author John Li <joneleesz@hotmail.com>
 */
class ActiveRecord extends \yii\db\ActiveRecord
{
	
	public function __construct()
	{
		
		parent::__construct();
	}

	public function init()
	{
		parent::init();
	}
	
}
