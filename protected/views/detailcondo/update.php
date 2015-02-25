<?php
/* @var $this DetailcondoController */
/* @var $model Detailcondo */

$this->breadcrumbs=array(
	'Detailcondos'=>array('index'),
	$model->detail_id=>array('view','id'=>$model->detail_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailcondo', 'url'=>array('index')),
	array('label'=>'Create Detailcondo', 'url'=>array('create')),
	array('label'=>'View Detailcondo', 'url'=>array('view', 'id'=>$model->detail_id)),
	array('label'=>'Manage Detailcondo', 'url'=>array('admin')),
);
?>

<h1>Update Detailcondo <?php echo $model->detail_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>