// Ez a függvény az osztást végzi
function Division(x,y)
{
    if(typeof(x) == "number"&&
	   typeof(y) == "number")
       {
		   //0-val való osztás helytelen
		   //Itt leellenőrizzük, hogy a felhasználó által megadott osztó az 0-e
		   //Ha az osztó 0, akkor belépünk egy hibakezelásbe.
		   if(y == 0)
		   {
			   //ilyenkor egy hibaüzenetet iratunk ki a felhasználó számára;
			   alert("0 értékkel egy szám sem osztható!!!")
			   //Majd az "ERROR" értéket térítjük vissza.
			   return "Error!!"
		   }
			//Ha az osztó nem 0 akkor nyugodtan elvégezhetjük a műveletet.
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