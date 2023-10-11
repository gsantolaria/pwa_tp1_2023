<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%materia}}`.
 */
class m231011_212509_create_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%materia}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'cant_alumnos' => $this->integer()->notNull()->defaultValue(5),
            'id_carrera' => $this->integer()->notNull(),
            'id_profesor' => $this->integer()->notNull(),
        ]);
        // Claves foráneas
        $this->addForeignKey('fk-materia-carrera', 'materia', 'id_carrera', 'carrera', 'id', 'CASCADE');
        $this->addForeignKey('fk-materia-profesor', 'materia', 'id_profesor', 'profesor', 'id', 'CASCADE');

    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-materia-carrera', 'materia');
        $this->dropForeignKey('fk-materia-profesor', 'materia');
        $this->dropTable('{{%materia}}');
    }
}
