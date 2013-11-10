<?php
/* @var $this CommentController */
/* @var $model CommentModel */

$this->breadcrumbs=array(
	'Comment Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CommentModel', 'url'=>array('index')),
	array('label'=>'Create CommentModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Comment Models</h1>

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
	'id'=>'comment-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'content',
		'creationDate',
		
                array(
                   'name'   => 'userIdAddComment',
                    'value' => '$data->userIdAdd->firstName ." - (". $data->userIdAdd->type . ")"'
                ),
                array(
                   'name'   => 'userIdReplyComment',
                    'value' => '$data->userIdReply->firstName ." - (". $data->userIdReply->type . ")"'
                ),
                array(
                   'name'   => 'acrticleId',
                    'value' => '$data->acrticle->title'
                ),
		'status',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
