<?php
/* @var $this ObraController */
/* @var $model Obra */

$this->breadcrumbs=array(
	'Obras'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Obra', 'url'=>array('index')),
	array('label'=>'Crear Obra', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#obra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Obras</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'obra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idobra',
		'idartista',
		'imagen',
        array(
            'type' => 'raw',
            'name'=> 'imagen',
            'value' => 'CHtml::image("'.Yii::app()->request->baseUrl.'/images/obra/originals/$data->imagen", "imagen" ,array("width"=>100))',
            'filter'=> false,
        ),
		//'imagen_thumb',
		'descripcion',
		'idexposicion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
