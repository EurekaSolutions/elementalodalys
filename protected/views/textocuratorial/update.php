<?php
/* @var $this TextocuratorialController */
/* @var $model Textocuratorial */

$this->breadcrumbs=array(
	'Textocuratorials'=>array('index'),
	$model->idtextocuratorial=>array('view','id'=>$model->idtextocuratorial),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Texto curatorial', 'url'=>array('index')),
	array('label'=>'Crear Texto curatorial', 'url'=>array('create')),
	array('label'=>'Ver Texto curatorial', 'url'=>array('view', 'id'=>$model->idtextocuratorial)),
	array('label'=>'Administrar Texto curatorial', 'url'=>array('admin')),
);
?>

<h1>Actualizar Texto curatorial <?php echo $model->idtextocuratorial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>