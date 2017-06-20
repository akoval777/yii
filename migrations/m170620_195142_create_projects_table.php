<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m170620_195142_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
			'title' => $this->string(120)->notNull(),
            'description' => $this->text()->notNull(),
            'img' => $this->text()->notNull(),
            'date' => $this->date()->notNull(),
            'flag' => $this->integer(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
