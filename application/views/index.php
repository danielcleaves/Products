<html>
	<head>
		<title>Products</title>
		<meta name = "description" content = "Semi_Restful"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<meta name = "viewport" content = "width-device-width, initial-scale = 1.0"/>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/stylesheet.css"/>
	</head>
	<body>
		<div id = "container">
			<h1>Products</h1>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($show as $product) { ?>
						<tr>
							<td><?= $product['name'] ?></td>
							<td><?= $product['description'] ?></td>
							<td><?= $product['price'] ?></td>
							<td><a href = "/show/<?=$product['id'] ?>" > Show </a> | <a href = "/edit/<?=$product['id'] ?> "> Edit </a> | <button><a href = "/delete/<?=$product['id'] ?>" > Remove</button></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<a href = "/new" > Add a New Product </a>
		</div>
	</body>
</html>