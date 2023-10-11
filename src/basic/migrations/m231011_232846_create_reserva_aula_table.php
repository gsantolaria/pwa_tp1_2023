<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reserva_aula}}`.
 */
class m231011_232846_create_reserva_aula_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reserva_aula}}', [
            'id' => $this->primaryKey(),
            'id_aula' => $this->integer()->notNull(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
            'observacion' => $this->text(256),
        ]);
        // clave foránea
        $this->addForeignKey('fk-reserva_aula-aula', 'reserva_aula', 'id_aula', 'aula', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-reserva_aula-aula', 'reserva_aula');
        $this->dropTable('{{%reserva_aula}}');
    }
}
