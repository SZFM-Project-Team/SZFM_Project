// Ez a függvény az szorzás műveletet végzi
function Multiplication(x,y)
{
//A Multiplication fÜggvény két paramétert kap:
//Ezek x és y , ezek segétkeznek majd a művelet elvégzésében.
//Először meg kell bizonyosodnunk róla, hogy mind két paraméter számot kapott-e értékként.
//Erre a következő if elágazást használjuk:
	if(typeof(x) == "number"&&
	   typeof(y) == "number")
		{
			//Ha mind a két paraméter szám akkor érdemes megvizsgálnunk, hogy bármelyik érték 0 e.
			//Ha bármelyik érték 0 lenne :
			//Az eredmény mindenféle képpen 0;
			//így kihagyhatjuk a számolás részét, időt spórolva.
			if(x == 0 ||
    		   y == 0)
			{
				return 0;
			}
			//Ha egyik érték sem 0, akkor nyugodtan elvégezhetjük a művelet.
			//szorzás
			let result;
			//itt a result változó ez fogja tárolna a művelet végeredményét.
			result = x * y;
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