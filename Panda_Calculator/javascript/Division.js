// Ez a függvény az osztást végzi
function Division(x,y)
{
    if(typeof(x) == "number"&&
	   typeof(y) == "number")
       {
           //Osztás
           let result;
			result = x / y;
			return result;
       }
       else
       {
           //Hibás adat lett megadva
           alert("Az input nem 'szám'!");
       }
}