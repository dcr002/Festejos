<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('Group'); ?>
    <fieldset>
        <legend><?php echo __('Add Group'); ?></legend>
        <?php echo $this->Form->input('name'); ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>