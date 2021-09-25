// Ez a függvény a kivonást végzi
function Subtraction(x,y)
{
    if(typeof(x) == "number"&&
	   typeof(y) == "number")
       {
           //Kivonás
           let result;
			result = x - y;
			return result;
       }
       else
       {
           //Hibás adat lett megadva
           alert("Az input nem 'szám'!");
       }
}