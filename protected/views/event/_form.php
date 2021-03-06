<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'event-form',
    'enableAjaxValidation' => false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="customise-panel" id="timer-panel">
    <?php echo $form->labelEx($model, 'start_date'); ?>
    <div id="datetimepicker-start_date" class="input-append date" data-date-format="dd-mm-yyyy hh:ii">
        <?php echo $form->textField($model, 'start_date', array('readonly' => true)); ?>
        <span class="add-on"><i class="icon-th"></i></span>
    </div>
</div>

<div class="customise-panel" id="timer-panel">
    <?php echo $form->labelEx($model, 'end_date'); ?>
    <div id="datetimepicker-end_date" class="input-append date" data-date-format="dd-mm-yyyy hh:ii">
        <?php echo $form->textField($model, 'end_date', array('readonly' => true)); ?>
        <span class="add-on"><i class="icon-th"></i></span>
    </div>
</div>

<?php echo $form->dropDownListRow($model, 'instance_id', CHtml::listData(Instance::model()->findAll(), 'id', 'name'), array('class' => 'span5')); ?>

<fieldset>
    <legend>Classes</legend>
    <?php foreach ($archetypes as $key => $arch) : ?>
        <?php if ($key != Archetype::ARCHETYPE_BACKUP) : ?>
            <?php echo CHtml::label($arch, "Arch[{$arch}][count]"); ?>
            <?php echo CHtml::hiddenField("Arch[{$arch}][key]", $key); ?>
            <?php echo CHtml::textField("Arch[{$arch}][count]", $model->archetypes[$key], array('class' => 'span2')); ?>
        <?php endif; ?>
    <?php endforeach; ?>
</fieldset>

<hr>

<?php echo $form->textAreaRow($model, 'notes', array('rows' => 6, 'cols' => 50, 'class' => 'span8')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    )); ?>
</div>

<?php $this->endWidget(); ?>
<script>
    $(function () {
        $('#datetimepicker-start_date, #datetimepicker-end_date').datetimepicker({
            autoClose: true,
            minuteStep: 15
        });
    });
</script>