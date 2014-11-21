<h2>Create an item</h2>
<?php echo anchor('store_items/back', 'Back'); ?>
<?php 
if (isset($flash)) {
	echo $flash;
}

echo validation_errors("<p style='color: red;'>", "</p>");
echo form_open($form_location);
?>
<table cellpadding="7" cellspacing="0" border="0" width="600">
	<tr>
		<td valign="top">Name</td>
		<td><?php echo form_input('item_name', $item_name); ?></td>
	</tr>
	<tr>
		<td valign="top">Price</td>	
		<td><?php echo form_input('item_price', $item_price); ?></td>
	</tr>
	<tr>
		<td valign="top">Description</td>
		<td><?php echo form_textarea('item_description', $item_description); ?></td>
	</tr>
	<tr>
		<td valign="top">&nbsp</td>
		<td><?php echo form_submit('submit', 'Submit'); ?></td>
	</tr>
</table>	

<?php 
echo form_close(); ?>	