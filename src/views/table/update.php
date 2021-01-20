<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Table */

$this->title = 'Update Table: ' . $model->bookid;
$this->params['breadcrumbs'][] = ['label' => 'Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookid, 'url' => ['view', 'id' => $model->bookid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
