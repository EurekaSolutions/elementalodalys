<?php
/* @var $this VerniFiniController */
/* @var $model VerniFini */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'verni-fini-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,

	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idexposicion'); ?>
		<?php //echo $form->textField($model,'tipousuario'); >
			echo $form->dropDownList($model, 'idexposicion', 
			CHtml::listData(exposicion::model()->findAll(),'idexposicion','nombre1'),array('empty' =>'Seleccione'));
		?>
		<?php echo $form->error($model,'idexposicion'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php //echo $form->fileField($model,'imagen', array('multiple' => 'true')); ?>
		<!--<input type="file" name="imagen[]" multiple>-->
		<?php echo CHtml::fileField('imagen[]','', array('multiple' => 'true')); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'imagen_thumb'); ?>
		<?php echo $form->textField($model,'imagen_thumb',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagen_thumb'); ?>
	</div>-->

	


	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->