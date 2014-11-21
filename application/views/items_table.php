<table cellpadding="7" cellspacing="0" border="1" width="600">
<tr>
<th>Count</th>
<th>Name</th>
<th>Action</th>
</tr>

<?php
$count = 0; 
$query = $this->db->query('SELECT ALL * FROM products');
foreach($query->result() as $row) {
$count++;
?>	

<tr>
<th><?php echo $count; ?></th>
<th><?php echo $row->item_name; ?></th>
<th><?php echo $count; ?></th>
</tr>
<?php
}
?>	
</table>


<table cellpadding="7" cellspacing="0" border="1" width="600">
<tr>
<th>Customer</th>
<th>Total</th>
<th>Action</th>
</tr>
<br><br>

<?php
$count = 0; 
$query = $this->db->query('SELECT ALL * FROM products');
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

<table cellpadding="7" cellspacing="0" border="1" width="600">
<tr>
<th>Customer</th>
<th>E-mail</th>
<th>Action</th>
</tr>
<br><br>

<?php
$count = 0; 
$query = $this->db->query('SELECT ALL * FROM products');
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