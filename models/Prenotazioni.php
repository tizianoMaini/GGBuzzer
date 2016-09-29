<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "prenotazioni".
 *
 * @property integer $pren_id
 * @property integer $id_squadra
 * @property string $tempo
 */
class Prenotazioni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prenotazioni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_squadra'], 'required'],
            [['id_squadra'], 'integer'],
            [['tempo'], 'safe'],
        ];
    }

        
public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['tempo', 'tempo'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pren_id' => 'Pren ID',
            'id_squadra' => 'Id Squadra',
            'tempo' => 'Premi qui per prenotarti',
        ];
    }
}
