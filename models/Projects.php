<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Projects".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $img
 * @property string $date
 * @property integer $flag
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'img', 'date'], 'required'],
            [['description', 'img'], 'string'],
            [['date'], 'safe'],
            [['flag'], 'integer'],
            [['title'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'img' => 'Img файл',
            'date' => 'Дата',
            'flag' => 'Флаг',
        ];
    }
}
