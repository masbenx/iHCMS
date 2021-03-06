<div class="form span-12 first">

<?php if( $model->scenario==='update' ): ?>

	<h3><?php echo Rights::getAuthItemTypeName($model->type); ?></h3>

<?php endif; ?>
	
<?php //$form=$this->beginWidget('CActiveForm'); ?>
<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'horizontalForm',
		'type'=>'horizontal',
	)); ?>

	<div>
		<?php echo $form->textFieldRow($model, 'name', array('hint'=> Rights::t('core', 'Do not change the name unless you know what you are doing.'))); ?>
		<?php /*
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength'=>255, 'class'=>'text-field')); ?>
		<?php echo $form->error($model, 'name'); ?>
		<p class="hint"><?php echo Rights::t('core', 'Do not change the name unless you know what you are doing.'); ?></p>
		*/ ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model, 'description', array('hint'=> Rights::t('core', 'A descriptive name for this item.'))); ?>
		<?php /*
		<?php echo $form->labelEx($model, 'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength'=>255, 'class'=>'text-field')); ?>
		<?php echo $form->error($model, 'description'); ?>
		<p class="hint"><?php echo Rights::t('core', 'A descriptive name for this item.'); ?></p>
		*/ ?>
	</div>

	<?php if( Rights::module()->enableBizRule===true ): ?>

	<div>
		<?php echo $form->textFieldRow($model, 'bizRule', array('hint'=> Rights::t('core', 'Code that will be executed when performing access checking.'))); ?>
		<?php /*
			<?php echo $form->labelEx($model, 'bizRule'); ?>
			<?php echo $form->textField($model, 'bizRule', array('maxlength'=>255, 'class'=>'text-field')); ?>
			<?php echo $form->error($model, 'bizRule'); ?>
			<p class="hint"><?php echo Rights::t('core', 'Code that will be executed when performing access checking.'); ?></p>
		*/ ?>
	</div>

	<?php endif; ?>

	<?php if( Rights::module()->enableBizRule===true && Rights::module()->enableBizRuleData ): ?>

	<div>
		<?php echo $form->textFieldRow($model, 'data', array('hint'=> Rights::t('core', 'Code that will be executed when performing access checking.'))); ?>
		<?php /*
			<?php echo $form->labelEx($model, 'data'); ?>
			<?php echo $form->textField($model, 'data', array('maxlength'=>255, 'class'=>'text-field')); ?>
			<?php echo $form->error($model, 'data'); ?>
			<p class="hint"><?php echo Rights::t('core', 'Additional data available when executing the business rule.'); ?></p>
		*/ ?>
	</div>

	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>Rights::t('core', 'Save'))); ?>
		<?php //echo CHtml::submitButton(Rights::t('core', 'Save')); ?> | <?php echo CHtml::link(Rights::t('core', 'Cancel'), Yii::app()->user->rightsReturnUrl); ?>
	</div>

<?php $this->endWidget(); ?>

</div>