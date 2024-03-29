<?php
/* @var $this PrensaController */
/* @var $model Prensa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prensa-form',
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
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
	    'attribute' => 'fecha',
		'name'=>'fecha',
		'model' => $model,
	    //'flat'=>true,//remove to hide the datepicker
	    'options'=>array(
	        'dateFormat' => 'yy-mm-dd',
	        'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
	        'changeMonth'=>true,
	        'changeYear'=>true,
	        'yearRange'=>'2000:2099',
	        'minDate' => '2000-01-01',      // minimum date
	        'maxDate' => '2099-12-31',      // maximum date
		 	'constrainInput' => 'true',
			'lenguage' => 'es',
			
	    ),
	    'htmlOptions'=>array(
	        'style'=>''
	    ),
	));
		
		?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->fileField($model,'imagen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'idexposicion'); ?>
		<?php //echo $form->textField($model,'tipousuario'); >
			echo $form->dropDownList($model, 'idexposicion', 
			CHtml::listData(Exposicion::model()->findAll(),'idexposicion','nombre1'),array('empty' =>'Seleccione'));
		?>
		<?php echo $form->error($model,'idexposicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contenido'); ?>

<?php	
$this->widget('ext.ExtEditMe', array(
        'model'=>$model,
        'attribute'=>'contenido',
        'width'=>'460',
        'height'=>'250',
        'toolbar'=>array(
            array(
                'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat', 
            ),

            array(
                'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 
            ),
        )
));
?>

		<?php echo $form->error($model,'contenido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->