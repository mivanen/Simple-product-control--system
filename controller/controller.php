<?php
	class Controller
	{
		public function __construct()
		{
			$path='class/product.php'; if(file_exists($path)) include_once $path;
			$path='model/product.php'; if(file_exists($path)) include_once $path;
		}

   		public static function GetHeader()
    	{
    		$path='view/header.php'; if(file_exists($path)) include_once $path;
    	}
   		
   		public static function ProductList()
	    {	    	
	    	// $path='model/product_list.php'; if(file_exists($path)) include_once $path;
			$path='view/product_list.php'; if(file_exists($path)) include_once $path;
	    }
	    

	    public static function AddProduct()
	    {	    	
	    	$path='view/add_product.php'; if(file_exists($path)) include_once $path;
			
	    }


	    public static function  GetFooter()
	    { 
	    	$path='view/footer.php'; if(file_exists($path)) include_once $path;
	    }		

		public function __destruct()
		{
			$_SESSION['system_msg']="false";

		}
	    



	}
?>