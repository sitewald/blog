<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author', [ 'labelOptions' => [
    	'class' => 'label-create'
    ]])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text', [ 'labelOptions' => [
    	'class' => 'label-create'
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::a('Back', '/', [
	    	'class' => 'btn btn-primary btn-back'
	    ]) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
