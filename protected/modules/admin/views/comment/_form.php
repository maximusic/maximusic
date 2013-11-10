<?php
/* @var $this CommentController */
/* @var $model CommentModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creationDate'); ?>
		<?php echo $form->textField($model,'creationDate'); ?>
		<?php echo $form->error($model,'creationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userIdAddComment'); ?>
                <?php echo $form->dropDownList($model,'userIdAddComment',CHtml::listData(UserModel::model()->findAll(), 'id', 'firstName')); ?>
		<?php echo $form->error($model,'userIdAddComment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userIdReplyComment'); ?>
                <?php echo $form->dropDownList($model,'userIdReplyComment',CHtml::listData(UserModel::model()->findAll(), 'id', 'firstName')); ?>
		<?php echo $form->error($model,'userIdReplyComment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acrticleId'); ?>
                <?php echo $form->dropDownList($model,'acrticleId',CHtml::listData(ArticleModel::model()->findAll(), 'id', 'title')); ?>
		<?php echo $form->error($model,'acrticleId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('out'=>'Out','cheked'=>'Cheked')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->