function checkIngredients(formNo, check) 
{
	var x = document.forms[formNo];
	if(check == true)
	{
		for (i = 0; i < x.length; i++)
		{
		    x.elements[i].checked = true;
		}
	}
	else
	{
		for (i = 0; i < x.length; i++)
		{
		    x.elements[i].checked = false;
		}
	}
}


function findMeal(formNo) 
{
	var i, j;
	var y = document.body.childNodes;
	
	for (i = 0; i < y.length; i++) 
	{
		if(y[i].nodeName == "OL")
		{
			var z = y[i].childNodes;
			for (j = 0; j < z.length; j++)
			{
				if(z[j].nodeName == "LI")
				{
					var v = z[j].getElementsByTagName("h2").item(0).getElementsByTagName("i").item(0).getElementsByTagName("input").item(0);
					if(v.checked == true)
					{
						checkIngredients((j-1)/2, true);
					}
					else
					{
						checkIngredients((j-1)/2, false);
					}
				}
			}
		}
	}
}