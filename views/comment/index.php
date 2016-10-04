<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'showHeader' => false,
        'columns' => [
            [
                'attribute' => 'author',
                'contentOptions' => ['style' => 'width: 200px']
            ],
            'text:ntext',
            [
                'attribute' => 'date',
                'contentOptions' => ['style' => 'width: 180px']
            ]
        ],
    ]); ?>
</div>
