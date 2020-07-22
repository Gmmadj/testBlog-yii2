<?php

namespace app\models;

use Yii;
use app\models\ImageUpload;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $img
 *
 * @property Block[] $blocks
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'img'], 'string', 'max' => 255],
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
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[Blocks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlocks()
    {
        return $this->hasMany(Block::className(), ['page_id' => 'id']);
    }

    public function beforeDelete()
    {
        $this->deleteImg();
        return parent::beforeDelete();
    }

    public function deleteImg()
    {    
       $imageUpload = new ImageUpload();
       $imageUpload->deleteImg($this->img);
    }

    public function getImage()
    {
        return $this->img ? $this->img : '';
    }

    public function getExistingBlock()
    {
        $blocks = array();
        $i = 0;
        foreach ($this->blocks as $block) {
            $blocks += [$i++ => $block];
        }
        return $blocks;
    }
}
