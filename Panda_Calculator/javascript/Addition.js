// Ez a függvény az összeadás műveletet végzi
function Addition(x,y)
{
//Az Addition függvény két paramétert kap:
//Ezek x és y , ezek segétkeznek majd a művelet elvégzésében.
//Először meg kell bizonyosodnunk róla, hogy mind két paraméter számot kapott-e értékként.
//Erre a következő if elágazást használjuk:
	if(typeof(x) == "number"&&
	   typeof(y) == "number")
		{
			//Ha mind a két paraméter szám akkor elvégezhetjük a műveletet.
			//összeadás
			let result;
			//itt a result változó ez fogja tárolna a művelet végeredményét.
			result = x + y;
			return result;
		}
		else
		{
			//Ha valamelyik(mindkét) paraméter értéke nem "Szám" , akkor hibás a megadott adat.
			//Hibás adat lett megadva
			//Ebben az esetben egy hibaüzenet iratódik ki a felhasználó számára.
			alert("Az input nem 'szám' típusú!!");
		}
}