<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\ImageUpload;

class AppController extends Controller
{
	protected function setImage($model, $curImg)
    {
        $img = UploadedFile::getInstance($model, 'img');
        $ImageUpload = new ImageUpload(); 

        if (!empty($img)) {
            $model->img = $ImageUpload->UploadImage($img, $curImg);
        }
        else {
            $ImageUpload->deleteImg($curImg);
        }
    }

    protected function formProcessing($model)
    {
        $curImg = $model->img;

        if ($model->load(Yii::$app->request->post())) {
            $this->setImage($model, $curImg);
            if ($model->save()) {
                return true;
            }
        }
        return false;    
    }
}