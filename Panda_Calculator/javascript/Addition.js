// Ez a függvény az összeadás műveletet végzi
export function Addition(x,y)
{
	if(typeof(x) == "number"&&
	   typeof(y) == "number")
		{
			//összeadás
			let result;
			result = x + y;
			return result;
		}
		else
		(
			//Hibás adat lett megadva
			alert("Az input nem 'szám' típusú!!");
		)
}