// Ez a függvény az szorzás műveletet végzi
export function Multiplication(x,y)
{
	if(typeof(x) == "number"&&
	   typeof(y) == "number")
		{
			//szorzás
			let result;
			result = x * y;
			return result;
		}
		else
		(
			//Hibás adat lett megadva
			alert("Az input nem 'szám' típusú!!");
		)
}