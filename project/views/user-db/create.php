<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserDb $model */

$this->title = 'Create User Db';
$this->params['breadcrumbs'][] = ['label' => 'User Dbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-db-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
