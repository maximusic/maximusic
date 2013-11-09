<?php
/* @var $this BlockController */
/* @var $model BlockModel */

$this->breadcrumbs=array(
	'Block Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List BlockModel', 'url'=>array('index')),
	array('label'=>'Create BlockModel', 'url'=>array('create')),
	array('label'=>'Update BlockModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BlockModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlockModel', 'url'=>array('admin')),
);
?>

<h1>View BlockModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'image',
		'buttonLink',
		'buttonName',
		'pageName',
	),
)); ?>
