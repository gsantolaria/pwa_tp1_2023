<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%horario_materia}}`.
 */
class m231011_233618_create_horario_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%horario_materia}}', [
            'id' => $this->primaryKey(),
            'id_materia' => $this->integer()->notNull(),
            'id_reserva' => $this->integer()->notNull(),
            'fh_desde' => $this->dateTime(),
            'fh_hasta' => $this->dateTime(),
        ]);
        //claves foráneas
        $this->addForeignKey('fk-horario_materia-materia', 'horario_materia', 'id_materia', 'materia', 'id', 'CASCADE');
        $this->addForeignKey('fk-horario_materia-reserva_aula', 'horario_materia', 'id_reserva', 'reserva_aula', 'id', 'CASCADE');
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-horario_materia-materia', 'horario_materia');
        $this->dropForeignKey('fk-horario_materia-reserva_aula', 'horario_materia');
        $this->dropTable('{{%horario_materia}}');
    }
}
