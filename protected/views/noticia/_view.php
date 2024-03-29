<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idnoticia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idnoticia), array('view', 'id'=>$data->idnoticia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo '<img src="'.Yii::app()->request->baseUrl.'/images/noticia/originals/'.CHtml::encode($data->imagen).'" width=60px>' ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />


</div>