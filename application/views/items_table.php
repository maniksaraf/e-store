<!--Table to display all products to the admin-->
<table cellpadding="7" cellspacing="0" border="1" width="600">
<tr>
<th></th>
<th>Name</th>
<th>Image URL</th>
<th>Edit</th>
</tr>

<?php
$count = 0; 
$query = $this->db->query('SELECT ALL * FROM products');
foreach($query->result() as $row) {
$count++;
?>	

<tr>
<th><?php echo $count; ?></th>
<th><?php echo $row->name; ?></th>
<th><?php echo $row->photo_url; ?></th>
<th><?php echo anchor('store_items/edit', 'edit'); ?>
</tr>
<?php
}
?>	
</table>

<!--Table to display all orders to the admin-->
<table cellpadding="7" cellspacing="0" border="1" width="600">
<tr>
<th></th>
<th>Customer</th>
<th>Total</th>
</tr>
<br><br>

<?php
$count = 0; 
$query = $this->db->query('SELECT ALL * FROM orders');
foreach($query->result() as $row) {
$count++;
?>	
<br><br>

<p><tr>
<th><?php echo $count; ?></th>
<th><?php echo $row->item_name; ?></th>
<th><?php echo $count; ?></th>
</tr>
<?php
}
?>	
</table>

<!--Table to display all customers to the admin-->
<table cellpadding="7" cellspacing="0" border="1" width="600">
<tr>
<th></th>
<th>Customer</th>
<th>E-mail</th>
</tr>
<br><br>

<?php
$count = 0; 
$query = $this->db->query('SELECT ALL * FROM customers');
foreach($query->result() as $row) {
$count++;
?>	
<br><br>

<p><tr>
<th><?php echo $count; ?></th>
<th><?php echo $row->name; ?></th>
<th><?php echo $count; ?></th>
</tr>
<?php
}
?>	
</table>