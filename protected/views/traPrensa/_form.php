<?php
/* @var $this TraPrensaController */
/* @var $model TraPrensa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tra-prensa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idiomaid'); ?>
		<?php //echo $form->textField($model,'tipousuario'); >
			echo $form->dropDownList($model, 'idiomaid', 
			CHtml::listData(Idiomas::model()->findAll(),'id','nombre'),array('empty' =>'Seleccione'));
		?>
		<?php echo $form->error($model,'idiomaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>
		<?php echo $form->textArea($model,'contenido',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prensaid'); ?>
		<?php //echo $form->textField($model,'tipousuario'); >
			echo $form->dropDownList($model, 'prensaid', 
			CHtml::listData(Prensa::model()->findAll(),'idprensa','titulo'),array('empty' =>'Seleccione'));
		?>
		<?php echo $form->error($model,'prensaid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->