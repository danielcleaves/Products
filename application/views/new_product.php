<html>
	<head>
		<title>Add a new product</title>
		<meta name = "description" content = "Semi_Restful"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<meta name = "viewport" content = "width-device-width, initial-scale = 1.0"/>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/new_product.css"/>
	</head>
	<body>
		<div id = "container">
			<h1>Add a New Product</h1>
			<form action = "/create/" method = "post">
				<h1>Name</h1> <input type = 'text' name = "name"/>
				<h1>Description</h1> <input type = "text" name = "description"/>
				<h1>Price</h1> <input type = "text" name = "price" />
				<input id = "btn" type = "submit" value = "Create"/>
			</form>
			<a href = "/" > Go Back </a> 
		</div>
	</body>
</html>