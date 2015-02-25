<?php
/* @var $this DetailcondoController */
/* @var $model Detailcondo */

$this->breadcrumbs=array(
	'Detailcondos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailcondo', 'url'=>array('index')),
	array('label'=>'Manage Detailcondo', 'url'=>array('admin')),
);
?>

<h1>Create Detailcondo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>