<?php
/* @var $this BlockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Block Models',
);

$this->menu=array(
	array('label'=>'Create BlockModel', 'url'=>array('create')),
	array('label'=>'Manage BlockModel', 'url'=>array('admin')),
);
?>

<h1>Block Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
