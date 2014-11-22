<h2>Edit item</h2>
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
		<td><?php echo form_input('name', $name); ?></td>
	</tr>
	<tr>
		<td valign="top">Price</td>	
		<td><?php echo form_input('price', $price); ?></td>
	</tr>
	<tr>
		<td valign="top">Image URL</td>
		<td><?php echo form_input('photo_url', $photo_url); ?></td>
	</tr>
	<tr>
		<td valign="top">Description</td>
		<td><?php echo form_textarea('description', $description); ?></td>
	</tr>
	
	<tr>
		<td valign="top">&nbsp</td>
		<td><?php echo form_submit('submit', 'Submit'); ?></td>
	</tr>
</table>	

<?php 
echo form_close(); ?>	