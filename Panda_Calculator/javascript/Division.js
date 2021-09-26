// Ez a függvény az osztást végzi
function Division(x,y)
{
    if(typeof(x) == "number"&&
	   typeof(y) == "number")
       {
		   //0-val való osztás helytelen
		   if(y == 0)
		   {
			   alert("0 értékkel egy szám sem osztható!!!")
			   return "Error!!"
		   }
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