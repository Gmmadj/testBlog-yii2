<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Column */

$this->title = 'Update Column: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Columns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="column-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'selectedBlock' => $selectedBlock,
        'blocks' => $blocks,
    ]) ?>

</div>
