# Rendszerterv
> A rendszer célja
---

> Projektterv
---

> Üzleti folyamatok modellje
---

> Követelmények
---

> Funkcionális terv
---
Rendszerszereplők: </br>
&nbsp;&nbsp;    Rendszergazda(ADMIN) </br>
&nbsp;&nbsp;	Felhasználó </br>

Rendszerhasználati esetek és lefutásaik: </br>
Rendszergazda: </br>
&nbsp;&nbsp;	Beléphet bármilyen szereplőként teljes hozzáférése van a rendszerhez </br>
	
Felhasználó: </br>
&nbsp;&nbsp;	Használhatja a webes alkalmazást, és annak minden funkcióját. </br>
&nbsp;&nbsp;	Képes User-reportot küldeni amiben jelent bármilyen hibát/bugot az alkalmazással kapcsolatban. </br>

> Fizikai környezet
---
Az alkalmazás hordozhatósági/hozzáférhetőségi szempontokból web platformra készül. <br>
A hálózaton található tűzfal <br>
Nincsenek megvásárolt komponenseink <br>
Fejlesztői eszközök: <br>
&nbsp;&nbsp;	Notepad++; <br>
&nbsp;&nbsp;	Visual studio code; <br>

> Architekturális terv
---
Backend:<br>
&nbsp;&nbsp;  A backendben egy python program fog futni amely a számolásokat végzi majd. <br>
Web kliens:<br>
&nbsp;&nbsp;  A web alkalmazás php nyelven készül el. <br>

> Adatbázis terv
---
A számológépünk online felületen lesz elérhető, és mivel előzetes regisztrációt nem igényel, <br>
ezért adatbázisra jelen állás szerint nincsen szükség. Viszont esetleges továbbfejlesztés esetén <br>
elképzelhető, hogy kelleni fog egy adatbázis, akkor elsősorban a felhasználókat kell tárolni, esetleg <br>
a felhasználókhoz tartozó műveleti előzményeket ellehet tárolni. Ez a funkció meggyorsítaná sok <br>
ember munkáját, tehát ezt a lehetőséget mindenképpen szem előtt tartjuk.

Ezeket többféleképpen lehetséges modellezni, mi úgy terveznénk meg, hogy: <br>
A felhasználókat tároló tábla tartalmazná:
+ ID,
+ Felhasználónév,
+ Jelszó,
+ Email cím

A műveleti előzményeket tároló tábla tartalmazná:

+ Felhasználónév,
+ Utolsó 10 művelet

Ezzel a két táblával a létfontosságú adatokat eltudnánk tárolni, így ezt az ötletet nem vetjük el.

> Implementációs terv
---
A webes felület főként php nyelven fog készülni. <br>
Képes lesz felhasználni a Backend részen futó Python nyelven írt számolóprogramot. <br>
Azért a Pythonra esett a választás mert, gyors a benne való program fejlesztés, áttekinthetőbb és könnyebben módosítható mint versenytársai, illetve ezen alkalmazás elkészítésére tökeletes <br>


> Tesztterv
---
Minden alkalmazás életében nagyon fontos a tesztelés. Ezalól a mi számológépünk sem kivétel. <br>
Ezek a teszt esetek pedig nem mások, mint:

1. A backendben futó python program egyes elemei
2. Megfelelően működik-e a php programunk
3. Megnyitható-e a weboldalunk linkje
4. Több felületen is jó-e a megjelenést, nincsenek esetleges elcsúszások
5. Teljes weboldal tesztelés
+ Ebbe minden eddigi beletartozik, csak a végkifejlett lesz tesztelve egyben.

> Telepítési terv
---
Webes alkalmazás:<br>
&nbsp;&nbsp;	A webes felületre fejlesztett alkalmazást bármilyen böngészőben el lehet majd érni. <br>
&nbsp;&nbsp;	Külön szoftver nem kell hozzá.<br>
&nbsp;&nbsp;	A webszerverre közvetlenül az internetről kapcsolódnak rá a kliensek.<br>

> Karbantartási terv
---
