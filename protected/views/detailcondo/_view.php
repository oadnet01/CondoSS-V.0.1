<?php
/* @var $this DetailcondoController */
/* @var $data Detailcondo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->detail_id), array('view', 'id'=>$data->detail_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />


</div>