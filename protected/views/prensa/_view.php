<?php
/* @var $this PrensaController */
/* @var $data Prensa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprensa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idprensa), array('view', 'id'=>$data->idprensa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo '<img src="'.Yii::app()->request->baseUrl.'/images/prensa/originals/'.CHtml::encode($data->imagen).'" width=60px>' ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen_thumb')); ?>:</b>
	<?php echo CHtml::encode($data->imagen_thumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idexposicion')); ?>:</b>
	<?php echo CHtml::encode($data->idexposicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	 

</div>