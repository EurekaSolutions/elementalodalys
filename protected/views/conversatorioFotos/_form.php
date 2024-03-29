<?php
/* @var $this ConversatorioFotosController */
/* @var $model ConversatorioFotos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conversatorio-fotos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),

)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idexposicion'); ?>
		<?php //echo $form->textField($model,'tipousuario'); >
			echo $form->dropDownList($model, 'idexposicion', 
			CHtml::listData(Exposicion::model()->findAll(),'idexposicion','nombre1'),array('empty' =>'Seleccione'));
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

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'idiomaid'); ?>
		<?php //echo $form->textField($model,'tipousuario'); >
			echo $form->dropDownList($model, 'idiomaid', 
			CHtml::listData(Idiomas::model()->findAll(),'id','nombre'),array('empty' =>'Seleccione'));
		?>
		<?php echo $form->error($model,'idiomaid'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'text_language'); ?>
		<?php echo $form->textArea($model,'text_language',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_language'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->