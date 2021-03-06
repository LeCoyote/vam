<?php
    session_start();
    if ($_SESSION["access_financial_parameters"] ==1)
    {
?>
<div class="events form">
<?php echo $this->Form->create('FinancialParameter'); ?>
	<fieldset>
		<legend><?php echo __('Add Financial Parameter'); ?></legend>
	<?php
		$yes_no = array('1' => 'Yes', '0' => 'No');
		echo $this->Form->input('parameter_active',array('options' => $yes_no, 'default' => '0'));
		echo $this->Form->input('financial_parameter');
		echo $this->Form->input('amount');
		echo $this->Form->input('is_cost',array('options' => $yes_no, 'default' => '0'));
		echo $this->Form->input('is_profit',array('options' => $yes_no, 'default' => '0'));
		echo $this->Form->input('is_charter_only',array('options' => $yes_no, 'default' => '0'));
                echo $this->Form->input('is_recurring',array('options' => array('0'=>'No','1'=>'Daily',
                    '2'=>'Weekly','3'=>'Monthly','4'=>'Yearly'), 'default' => '0'));
                echo $this->Form->input('valid_until',array(
                    'label'=> 'Valid until (empty date = UFN)',
                    'dateFormat' => 'YMD',
                    'empty'=>true,
                    'minYear' => date('Y'),
                    'maxYear' => date('Y')+10));
		echo $this->Form->input('linked_to_time',array('options' => $yes_no, 'default' => '0'));
		echo $this->Form->input('linked_to_pax',array('options' => $yes_no, 'default' => '0'));		
		echo $this->Form->input('linked_to_distance',array('options' => $yes_no, 'default' => '0'));
		echo $this->Form->input('linked_to_fuel',array('options' => $yes_no, 'default' => '0'));
		echo $this->Form->input('linked_to_flight',array('options' => $yes_no, 'default' => '0'));
                echo $this->Form->input('Fleettype',['label' => 'Linked to Aircraft type(s)']);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class="list-inline">

		<li><?php echo $this->Html->link(__('List Financial Parameters'), array('action' => 'index'),array('class' => 'btn btn-md btn-primary')); ?></li>
	</ul>
</div>
<?php
    }
    else
    {
        echo '<div class="alert alert-danger"> You do not have access to Financial Parameter manager module</div>';
    }
?>
