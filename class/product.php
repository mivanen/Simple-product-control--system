<?php
class Product
{
	protected $id;
	protected $code;
	protected $title;
	protected $description;
	protected $price;

	
	public function __construct($id=null, $code=null, $title=null, $description=null, $price=null)
	{
		$this->id=clean($id);
		$this->code=clean($code);
		$this->title=clean($title);
		$this->description=clean($description);
		$this->price=clean($price);

	}

	public function GetId()	{ return $this->id; }
	public function GetCode()	{ return $this->code; }
	public function GetTitle() { return $this->title; }
	public function GetDescription()	{ return $this->description; }
	public function GetPrice()	{ return $this->price; }


	public function AddProduct()
	{
		$path='database/db_connect.php'; if(file_exists($path)) include_once $path;
		$q="INSERT INTO `products` (`id`, `code`, `title`, `price`, `description`) 
		VALUES (NULL, '".$this->code."', '".$this->title."', '".$this->price."', '".$this->description."');";
		$res=mysqli_query($db,$q);
		$path='database/db_close.php'; if(file_exists($path)) include_once $path;
		if($res) return true;		
	}




	
	public function DelProduct($products_for_delete=null)
	{
		var_dump($products_for_delete);
		if($products_for_delete!=null)
		{
			$i=0;
			$q="DELETE FROM products WHERE id IN (";
			foreach ($products_for_delete as $key => $product_id) 
			{
				if($i>0) $q.=", ";
				$q.=$product_id;			
				$i++;
			}
			$q.=");";
			$path='database/db_connect.php'; if(file_exists($path)) include_once $path;
			$res=mysqli_query($db,$q);
			$path='database/db_close.php'; if(file_exists($path)) include_once $path;
			if($res) return true;		
		}
	}





	public function __destruct()
	{
		unset($this->id);
		unset($this->code);
		unset($this->title);
		unset($this->description);
		unset($this->price);
	}


}

?>