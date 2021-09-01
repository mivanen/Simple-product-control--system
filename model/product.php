<?php


function GetProductList()
{
	$path='database/db_connect.php'; if(file_exists($path)) include_once $path;

	$q="SELECT * FROM `products` ORDER BY `products`.`id` DESC";
	$res=mysqli_query($db,$q);
	$responce = array();
	
	while($row=mysqli_fetch_array($res))
	{
		$product = new Product($row['id'],$row['code'],$row['title'],$row['description'],$row['price']);
		$responce[]=$product;	
	}
	
	$path='database/db_close.php'; if(file_exists($path)) include_once $path;
	return $responce; 
}




if(isset($_POST['add_product']))
{
	if(clean($_POST['product_title'])!="")
	{
		$title=clean($_POST['product_title']);
		$code=clean($_POST['product_code']);
		$price=clean($_POST['product_price']);
		$description=clean($_POST['product_description']);

		$product = New Product(null, $code, $title, $description, $price);		
		if($product->AddProduct()) 
		{
			set_msg("New product added!", 'success');
			//header("Location: product_list");
		}				
	}
	else set_msg("Product title are required!", 'danger');
}


if(isset($_POST['del_product']))
{
	
	if(!isset($_POST['products_total']) or $_POST['products_total']=="0") 
	{
		set_msg("For deleting please select at least one of the products in <a  class=\"alert-link\" href=\"product_list\">Product list</a>", 'warning');
		//header("Location: product_list");
		$products_total=0;
	}
	else
	{
		$products_total=clean($_POST['products_total']);
	}
	

	$products_for_delete=Array();
	//$products_total
	if($products_total>0)
	{
		for ($y=0; $y<=$products_total; $y++) 
		{ 
			if(isset($_POST['product_'.$y]))
			{
				$product_id=clean($_POST['product_'.$y]);
				$products_for_delete[]=$product_id;
			}		
		}
		if(count($products_for_delete)>0)
		{
			$product= new Product();
			if($product->DelProduct($products_for_delete))
			{
				set_msg("Product was deleted.", 'success');
			 	header("Location: product_list");
			}				
		}			
	}
	
}




?>
