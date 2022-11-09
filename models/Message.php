<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $url
 * @property string|null $title
 * @property string|null $content
 * @property string|null $date
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['url'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 128],
            [['content'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }
}
