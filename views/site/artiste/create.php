<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Artiste */

$this->title = 'Create Artiste';
$this->params['breadcrumbs'][] = ['label' => 'Artistes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artiste-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
