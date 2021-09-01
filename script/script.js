
function toggleCheckbox(id)
{
	document.getElementById(id).checked=!document.getElementById(id).checked;
}

function SelectAllProduct(product_total_id)
{
	//alert(id);
	let product_total = document.getElementById(product_total_id).value;
	
	let select_all = document.getElementById('select_all').checked;

	let product_card_id="";
	for(let i='1'; i<=product_total; i++)
	{
		product_card_id="product_"+i;
		if(select_all) document.getElementById(product_card_id).checked=true;
		else document.getElementById(product_card_id).checked=false;
				
	}



	
}

