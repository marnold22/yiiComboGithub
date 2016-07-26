<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OcShare */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Oc Shares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oc-share-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'share_type',
            'share_with',
            'uid_owner',
            'uid_initiator',
            'parent',
            'item_type',
            'item_source',
            'item_target',
            'file_source',
            'file_target',
            'permissions',
            'stime:datetime',
            'accepted',
            'expiration',
            'token',
            'mail_send',
        ],
    ]) ?>

</div>
