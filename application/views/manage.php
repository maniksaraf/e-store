<h2>Manage your items</h2>
<?php echo anchor('store_items/back', 'Back'); ?>
<br><br>
<?php echo anchor('store_items/create', 'Create new item'); ?>


<br><br>
<?php
echo $this->load->view('items_table');
?>
