<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "block".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $page_id
 *
 * @property Page $page
 * @property Column[] $columns
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'page_id' => 'Page ID',
        ];
    }

    /**
     * Gets query for [[Page]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }

    /**
     * Gets query for [[Columns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColumns()
    {
        return $this->hasMany(Column::className(), ['block_id' => 'id']);
    }
}
