<?php

use yii\db\Migration;

/**
 * Class m231002_200454_crear_table_usuarios
 */
class m231002_200454_crear_table_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
                'id' => $this->primaryKey(),
                'username' => $this->string()->notNull(),
                'nombre' => $this->text(),
                'apellido' => $this->text(),
                'edad' => $this->integer(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231002_200454_crear_table_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
