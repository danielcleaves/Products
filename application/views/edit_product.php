<html>
	<head>
		<title>Edit Product</title>
		<meta name = "description" content = "Semi_Restful"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<meta name = "viewport" content = "width-device-width, initial-scale = 1.0"/>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/edit_product.css"/>
	</head>
	<body>
		<body>
		<div id = "container">
			<form action = "/update/<?=$id?>" method = "post">
				<h1>Name</h1> <input type = 'text' name = "name" value = "<?=$name ?>"/>
				<h1>Description</h1> <input type = "text" name = "description" value = "<?=$description ?>"/>
				<h1>Price </h1> <input type = "text" name = "price" value = "<?=$price ?>" />
				<input id = "btn" type = "submit" value = "Update"/>
			</form>
			<a href = "/show/" > Show </a> |  <a href = "/" > Back </a>
		</div>
	</body>
</html>