<?php
/* @var $this UserController */
/* @var $model User */
$this->breadcrumbs = array (
		'Users' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List User',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage User',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Create User</h1>

<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'user-form',
		
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false 
) );
?>



	<div class="row">
		<?php echo $form->labelEx($user,'username'); ?>
		<?php echo $form->textField($user,'username'); ?>
		<?php echo $form->error($user,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'password'); ?>
		<?php echo $form->passwordField($user,'password'); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'f_name'); ?>
		<?php echo $form->textField($userprofile,'f_name'); ?>
		<?php echo $form->error($userprofile,'f_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'l_name'); ?>
		<?php echo $form->textField($userprofile,'l_name'); ?>
		<?php echo $form->error($userprofile,'l_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'email'); ?>
		<?php echo $form->textField($userprofile,'email'); ?>
		<?php echo $form->error($userprofile,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'mobile_number'); ?>
		<?php echo $form->textField($userprofile,'mobile_number'); ?>
		<?php echo $form->error($userprofile,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'office_tel'); ?>
		<?php echo $form->textField($userprofile,'office_tel'); ?>
		<?php echo $form->error($userprofile,'office_tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'address'); ?>
		<?php echo $form->textArea($userprofile,'address'); ?>
		<?php echo $form->error($userprofile,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($userprofile,'identity_id'); ?>
		<?php echo $form->textField($userprofile,'identity_id'); ?>
		<?php echo $form->error($userprofile,'identity_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
<!-- form -->