function checkIngredients(node, check) 
{
	var i;
	var ingredient = node.getElementsByTagName("ul").item(0).childNodes;

	for (i = 0; i < ingredient.length; i++) 
	{
		if(ingredient[i].nodeName == "LI")
		{
			ingredient[i].getElementsByTagName("input").item(0).checked = check;
		}
	}
}


function findMeal(formNo) 
{
	var i, j;
	var x = document.body.childNodes;
	for (i = 0; i < x.length; i++) 
	{
		if(x[i].nodeName == "FORM")
		{
			var count = 0;
			var list = x[i].getElementsByTagName("ol").item(0).childNodes;
			for(j = 0; j < list.length; j++)
			{
				if(list[j].nodeName == "LI")
				{
					if(count == formNo)
					{
						var meal = list[j].getElementsByTagName("h2").item(0).getElementsByTagName("i").item(0).getElementsByTagName("input").item(0);
						if(meal.checked == true)
						{
							checkIngredients(list[j], true);
						}
						else
						{
							checkIngredients(list[j], false);
						}
					}
					count++;
				}
			}
		}
	}
}


function dodaj_element(kontener)
{
	var znacznik = document.createElement('input');
	znacznik.setAttribute('type', 'text');
	znacznik.setAttribute('name', '99');
	znacznik.className = 'ingredients';
	var kontener = document.getElementById(kontener);
	kontener.appendChild(znacznik);
}