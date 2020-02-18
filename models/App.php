<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app".
 *
 * @property int $id
 * @property string $name 应用名称
 * @property string $api_key 缩写
 * @property string $secret 密钥
 * @property int $create_time
 */
class App extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'api_key', 'secret', 'create_time'], 'required'],
            [['create_time'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['api_key', 'secret'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '应用名称'),
            'api_key' => Yii::t('app', '缩写'),
            'secret' => Yii::t('app', '密钥'),
            'create_time' => Yii::t('app', 'Create Time'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AppQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AppQuery(get_called_class());
    }
}
