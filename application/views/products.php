<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Shop</title>
	<meta charset="UTF-8">
	<style type="text/css">
	#body {

		font: 12px Arial;
	}

	#products {
		text-align: center; float: left;
	}

	#products {
		list-style-type: none; margin: 0px;
	}

	#products {
		width: 150px; padding: 4px; margin: 8px;
		border: 1px solid #ddd; background-color: #eee;
		-moz-border-radius: 4px; -webkit-border-radius: 4px;
	}

	#products .name {
		font-size: 15px; margin 5px;
	}

	#products .price { 
		margin: 5px;
	}

	#products .description{
		margin: 5px;
	}

	#cart {
		padding: 4px; margin: 8px; float: left;
	}

	#cart table {
		width: 320px; border-collapse: collapse;
		text-align: left; 
	}

	#cart th {
		border-bottom: 1px solid #aaa;
	}

	#cart caption {
		font-size: 15px; height: 30px; text-align: left;
	}

	#cart .total {
		height: 40px;
	}

	#cart .remove {
		color: red;
	}

	</style>
</head>
<body>
	<div id="products">
	<ul>
		<?php foreach ($products as $product); ?>
			<li>
				<?php echo form_open('shop/add'); ?>
				<div class="name"><?php echo $product->name; ?></div>
				<div class="thumb">
				<?php echo img(array(
					'src' => 'images/' . $product->image,
					'class' => 'thumb',
					'alt' => $product->name
				)); ?>
				</div>
				<div class="price"><?php echo $product->price; ?></div>
				<div class="description"><?php echo $product->price; ?></div>


				<?php echo form_hidden('id', $product->id); ?>
				<?php echo form_submit('action', 'Add to cart'); ?>
				<?php echo form_close(); ?>
			</li>
		
	</ul>			
	</div>	

	<?php if ($cart = $this->cart->contents()): ?>
	<div id="cart">
		<table>
		<caption> Shopping Cart</caption>
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>

		<?php foreach ($cart as $item): ?>
			<tr>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['price']; ?></td>
				<td class="remove"><?php echo anchor('shop/remove/'.$item['rowid'], 'X'); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		<tr class="total">
			<td colspan="2"><strong>Total</strong></td>
			<td><?php echo $this->cart->total(); ?></td>
		</tr>
		</table>
	</div>
	<?php endif; ?>
