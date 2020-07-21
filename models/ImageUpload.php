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

	public function UploadImage(UploadedFile $img, $curImg)
	{
		$this->img = $img;

		if ($this->validate()) {
			$this->deleteImg($curImg);
			return $this->saveImg();
		}
		
	}

	public function deleteImg($curImg)
	{
		if (file_exists($curImg)) {
			unlink($curImg);  
		}
	}

	public function saveImg()
	{
		$img = $this->generateImg();

		$this->img->saveAs($img);
		return $img;
	}

	public function generateImg()
	{
		return 'images/' . md5(uniqid($this->img->baseName)) .'.'. $this->img->extension;
	}
}