<?php 

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
	public $img;

	public function rules()
	{
		return [
			[['img'], 'file', 'extensions' => 'jpg,png'],
		];
	}

	public function UploadImage()
	{
		if ($this->validate()) {
			$this->img->saveAs('images/'. $this->img .'.'. $this->img->extension);
			return true;
		}
		return false;
	}
}