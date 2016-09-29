<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "squadra".
 *
 * @property integer $id
 * @property string $descrizione
 */
class Squadra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'squadra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'descrizione'], 'required'],
            [['id'], 'integer'],
            [['descrizione'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descrizione' => 'Descrizione',
        ];
    }
}
