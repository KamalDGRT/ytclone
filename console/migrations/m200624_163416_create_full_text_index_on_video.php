<?php

use yii\db\Migration;

/**
 * Class m200624_163416_create_full_text_index_on_video
 */
class m200624_163416_create_full_text_index_on_video extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%video}} ADD FULLTEXT(title, description, tags)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200624_163416_create_full_text_index_on_video cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200624_163416_create_full_text_index_on_video cannot be reverted.\n";

        return false;
    }
    */
}
