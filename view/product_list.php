
<div class="row" >
	<div id="select_all_block"><input type="checkbox" id="select_all" onclick="SelectAllProduct('products_total')"> - <label for="select_all">Select all</label></div>

	<?php 	
	$product_list=GetProductList();	
	$products_total=0;
	if(count($product_list)>0)
	{
		foreach ($product_list as $key => $product) 
		{	
		$products_total++;		
		?>
			<div class="col-md-4">
				<div class="product_block" onclick="toggleCheckbox('product_<?=$products_total?>')">
					<div class="product_select_block"><input type="checkbox" id="product_<?=$products_total?>" value="<?=$product->GetId()?>" name="product_<?=$products_total?>" class="delete-checkbox">
					<label for="product_<?=$products_total?>" style="color:rgba(0,0,0,0)">Select this product</label>
					</div>
				
					<h3><?=$product->GetTitle()?></h3>
					<img src="https://picsum.photos/300/150?<?=$product->GetId()?>" alt="Random picture from Picsum" title="Random picture from Lorem Picsum"><br>
					<mark>Code: </mark><strong><?=$product->GetCode()?></strong><br>
					<mark>Price: </mark><?=$product->GetPrice()?> &euro;<br>
					<p><?=$product->GetDescription()?></p>
				
				</div>
			</div>
				
		<?php

		}
	}	
	else
	{
		show_msg("There are no products!", 'primary');
	}
	?>	
<input type="hidden" name="products_total" id="products_total" value="<?=$products_total?>">
</div>	