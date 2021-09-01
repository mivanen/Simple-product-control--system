<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/site.webmanifest">

	<link rel="stylesheet" href="style/style.css">
	<script src="script/script.js"></script>
	<title>Simple product control system</title>
</head>
<body>

<div class="container">
	<form action="" method="post">
	<header>

		<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
	      <a href="product_list" class="d-flex align-items-center text-dark text-decoration-none">
	        <span class="fs-2">Simple product control system</span>
	      </a>


			<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
			<a  href="add_product" class="btn btn-success" id="#add-product-btn">Add product</a>
	      	<button type="submit" class="btn btn-warning" id="#delete-product-btn" name="del_product">Mass Delete</button>
	      </nav>
	 	 </div>
	    
			
	</header>
	
	<section>
		<?=show_msg($_SESSION['system_msg'])?>


		

	