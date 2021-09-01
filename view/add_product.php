<h1>Add product</h1>

 	<div class="form-group">
	    <label for="product_title">Title</label>
	    <input type="text" class="form-control" name="product_title" id="product_title" aria-describedby="product_title_help" placeholder="Enter new product title" value="<?=random_lipsum($amount = mt_rand(1, 4), $what = 'words', $start = 0)?>">
	    <small id="product_title_help" class="form-text text-muted">* Product title are required</small>
  	</div>
	<br>

   	<div class="form-group">
	    <label for="product_code">Code</label>
	    <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Enter new product title"  value="<?=generateCode(6)?>"> 
  	</div>
	<br>
   	
   	<div class="form-group">
	    <label for="product_price">Price</label>
	    <input type="number" step=".01" class="form-control" id="product_price" name="product_price" placeholder="Enter new product title"   value="<?=mt_rand(1, 1000)?>">
  	</div>
  	<br>
  	<label for="product_description">Description</label>
  	<textarea class="form-control" name="product_description" id="product_description" cols="30" rows="5">
<?=random_lipsum()?></textarea>
	<br>
  	<button type="submit" class="btn btn-success" value="Add product" name="add_product">Submit</button>
  	<br><br>

