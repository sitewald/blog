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

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'showHeader' => false,
        'summary' => false,
        'options' => [
            'class' => 'comment-container'
        ],
        'rowOptions' => [
            'class' => 'comment-row'
        ],
        'columns' => [
            [
                'attribute' => 'author',
                'contentOptions' => ['class' => 'td-author']
            ],
            'text:ntext',
            [
                'attribute' => 'date',
                'contentOptions' => ['class' => 'td-date']
            ]
        ],
    ]); ?>

    <p>
        <?= Html::a('Create Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
