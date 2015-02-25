<?php
/* @var $this DetailcondoController */
/* @var $model Detailcondo */

$this->breadcrumbs=array(
	'Detailcondos'=>array('index'),
	$model->detail_id,
);

$this->menu=array(
	array('label'=>'List Detailcondo', 'url'=>array('index')),
	array('label'=>'Create Detailcondo', 'url'=>array('create')),
	array('label'=>'Update Detailcondo', 'url'=>array('update', 'id'=>$model->detail_id)),
	array('label'=>'Delete Detailcondo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->detail_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detailcondo', 'url'=>array('admin')),
);
?>

<h1>View Detailcondo #<?php echo $model->detail_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'detail_id',
		'text',
	),
)); ?>
