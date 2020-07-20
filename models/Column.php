<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "column".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $header
 * @property string|null $content
 * @property int|null $block_id
 *
 * @property Block $block
 */
class Column extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'column';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['block_id'], 'integer'],
            [['img', 'header'], 'string', 'max' => 255],
            [['block_id'], 'exist', 'skipOnError' => true, 'targetClass' => Block::className(), 'targetAttribute' => ['block_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'header' => 'Header',
            'content' => 'Content',
            'block_id' => 'Block ID',
        ];
    }

    /**
     * Gets query for [[Block]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlock()
    {
        return $this->hasOne(Block::className(), ['id' => 'block_id']);
    }
}