<?php

use yii\db\Schema;
use yii\db\Migration;

class m141231_111233_blog_rss extends Migration
{
    public function up()
    {
    	$this->createTable(
    			'{{%blog_rss}}',
    			[
    					'userid' => Schema::TYPE_PK,
    					'subscribetime' => Schema::TYPE_INTEGER . ' NOT NULL',
    					'hasscubscribed' => Schema::TYPE_BOOLEAN . ' NOT NULL'
    			],
    			$tableOptions = ''
    	);
    	
    	// Indexes
    	$this->createIndex('id', '{{%blog_rss}}', 'userid');
    	
    	// Foreign Keys
    	$this->addForeignKey('FK_userId', '{{%blog_rss}}', 'userid', '{{%user}}', 'id', 'CASCADE', 'CASCADE');

    	
    	$this->insert('{{%blog_rss%}}', ['userid'=>2, 'subscribetime'=>1418005741,'hasscubscribed'=>1] ); 
    	$this->insert('{{%blog_rss%}}', ['userid'=>3, 'subscribetime'=>1418005741,'hasscubscribed'=>1] ); 
    	
    	/** $sql = $queryBuilder->insert('user', [
    			*  'name' => 'Sam',
    			*  'age' => 30,
    			* ], $params);
    	* ~~~ */
    	
    }


    public function down()
    {
        $this->dropTable('{{%blog_rss}}'); 

        return true;
    }
}
