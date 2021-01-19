<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210115_231355_content
 */
class m210115_231355_content extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('student', [
            'ogrenciid' => Schema::TYPE_PK,
// $this->primaryKey()
            'bolumadi' => Schema::TYPE_STRING,
// $this->string(255) // String with 255 characters
            'kitapadi' => Schema::TYPE_STRING,
            'sinif' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
            'updated_at' => Schema::TYPE_DATETIME
        ]);

       $this->createTable('table', [
            'bookid' => Schema::TYPE_PK,
// $this->primaryKey()
            'yazaradi' => Schema::TYPE_STRING,
           'userid' => Schema::TYPE_INTEGER,
// $this->string(255) // String with 255 characters
            'created_at' => Schema::TYPE_DATETIME,
            // $this->integer()
            'updated_at' => Schema::TYPE_DATETIME
        ]);

            $this->addForeignKey('FK_table_student',
                'table', 'userid', 'student','ogrenciid');




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_table_student','table');
        $this->dropTable('table');
        $this->dropTable('student');




    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_231355_content cannot be reverted.\n";

        return false;
    }
    */
}
