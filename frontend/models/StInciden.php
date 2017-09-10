<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "st_inciden".
 *
 * @property integer $id
 * @property string $hora_inc
 * @property string $fecha_inc
 * @property string $lugar_inc
 * @property string $nombre_inc
 * @property string $apellido_inc
 * @property string $departamento_inc
 * @property string $observaciones_inc
 * @property boolean $status_inc
 */
class StInciden extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'st_inciden';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lugar_inc', 'apellido_inc', 'observaciones_inc'], 'string'],
            [['status_inc'], 'boolean'],
            [['hora_inc', 'fecha_inc'], 'string', 'max' => 20],
            [['nombre_inc'], 'string', 'max' => 100],
            [['departamento_inc'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hora_inc' => 'Hora Inc',
            'fecha_inc' => 'Fecha Inc',
            'lugar_inc' => 'Lugar Inc',
            'nombre_inc' => 'Nombre Inc',
            'apellido_inc' => 'Apellido Inc',
            'departamento_inc' => 'Departamento Inc',
            'observaciones_inc' => 'Observaciones Inc',
            'status_inc' => 'Status Inc',
        ];
    }
}
