// Ez a függvény az szorzás műveletet végzi
function Multiplication(x,y)
{
	if(typeof(x) == "number"&&
	   typeof(y) == "number")
		{
			//Ha bármelyik érték 0 lenne :
			//Az eredmény mindenféle képpen 0;
			//így kihagyhatjuk a számolás részét, időt spórolva.
			if(x == 0 || y == 0)
			{
				return 0;
			}
			//szorzás
			let result;
			result = x * y;
			return result;
		}
		else
		{
			//Hibás adat lett megadva
			alert("Az input nem 'szám' típusú!!");
		}
}