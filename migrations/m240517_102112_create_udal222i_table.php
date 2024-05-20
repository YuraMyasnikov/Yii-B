<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%udal222i}}`.
 */
class m240517_102112_create_udal222i_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%udal222i}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%udal222i}}');
    }
}
