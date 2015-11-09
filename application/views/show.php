<html>
	<head>
		<title>Show Products</title>
		<meta charset = "UTF-8"/>
		<meta name = "description" content = "Semi_Restful"/>
		<meta name = "author" content = "Daniel Cleaves"/>
		<meta name = "viewport" content = "width-device-width, initial scale= 1.0"/>
		<link rel = "stylesheet" type = "text/css" href = "/assets/css/show.css"/>
	</head>
	<body>
		<div id = "container">
			<h1>Product <?=$id ?></h1>
			<p>Name: <?=$name ?></p>
			<p>Description: <?=$description ?> </p>
			<p>Price: <?=$price ?></p>
			<a href = "/edit/" > Edit </a> | <a href = "/" > Back </a>
		</div>
	</body>
</html>