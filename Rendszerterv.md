# Rendszerterv
> A rendszer célja
---

> Projektterv
---
Projektszerepkörök, felelőségek:

Project manager: Fiedler Norbert Béla

Projektmunkások és felelőségek:

Backend munkálatok: 
- Fiedler Norbert Béla
- Tari Levente
- Horváth István
- Naghi Patrick Mark
- Szakács Ágnes

Feladatuk a számológép műveleteinek implementálása php és JavaScript nyelven. 
  
Frontend munkálatok:
- Fiedler Norbert Béla
- Tari Levente
- Horváth István
- Naghi Patrick Mark
- Szakács Ágnes
  
Feladatuk a számológép kinézetének minél stílusosabb és egyszerűbb kivitelezése CSS és HTML segítségével.

# Ütemterv: 
| Funkció | Feladat | Prioritás | Becslés | Akt. becslés | Eltelt | Hátralévő
| ------ | :------: | :------: | :------: | :------: | :------: | :------: |
| Követelmény specifikáció |  | 0 | 12 | 12 | 12 | 0 |
| Funkcionális specifikáció |  | 0 | 12 | 12 | 12 | 0 |
| Rendszerterv |  | 0 | 18 | 18 | 18 | 0 |
| Műveletek implementálása | Összeadás | 1 | 4 | 4 | 0 | 4 |
|  | Kivonás | 1 | 4 | 4 | 0 | 4 |
|  | Szorzás | 1 | 4 | 4 | 0 | 4 |
|  | Osztás | 1 | 4 | 4 | 0 | 4 |
|  | Gyökvonás | 1 | 4 | 4 | 0 | 4 |
|  | Hatványozás | 1 | 4 | 4 | 0 | 4 |
| Weboldal grafikus megjelenítése| HTML | 1 | 3 | 3 | 0 | 3 |
|  | CSS | 1 | 10 | 10 | 0 | 10 |
| Teszt |  | 1 | 30 | 30 | 0 | 30 |
| Projektvezetés |  | 2 | 30 | 30 | 0 | 30 |
|  |  | Órák: | 139 | 139 | 42 | 97 |
|  |  | Embernap: | 17.375 | 17.375 | 5.25 | 3.75 |
| |  |  |  |  |  |  |
| Napidíj: |  | 28 000 Ft |  |  |  |  |
| Árajánlat: |  | 486 500 Ft |  |  |  |  |
> Üzleti folyamatok modellje
---

> Követelmények
---

> Funkcionális terv
---
Rendszerszereplők:  

+ Rendszergazda (ADMIN)  

+ Felhasználó  


Rendszerhasználati esetek és lefutásaik:  

Rendszergazda:  

+ Beléphet bármilyen szereplőként teljes hozzáférése van a rendszerhez  

	
Felhasználó:  

+ Használhatja a webes alkalmazást, és annak minden funkcióját.  

+ Képes User-reportot küldeni amiben jelent bármilyen hibát/bugot az alkalmazással kapcsolatban.  


> Fizikai környezet
---
Az alkalmazás hordozhatósági/hozzáférhetőségi szempontokból web platformra készül.  

A hálózaton található tűzfal.  

Nincsenek megvásárolt komponenseink.  

Fejlesztői eszközök:  

+ Notepad++;  

+ Visual studio code;  

> Architekturális terv
---
[//]: <> (Backend:)  
[//]: <> (+ A backendben egy python program fog futni amely a számolásokat végzi majd.)
 
[//]: <> (Web kliens:)  

[//]: <> (+ A web alkalmazás php nyelven készül el.  )

> Adatbázis terv
---
A számológépünk online felületen lesz elérhető, és mivel előzetes regisztrációt nem igényel, ezért adatbázisra jelen állás szerint nincsen szükség.  

Viszont esetleges továbbfejlesztés esetén elképzelhető, hogy kelleni fog egy adatbázis, akkor elsősorban a felhasználókat kell tárolni, esetleg a felhasználókhoz tartozó műveleti előzményeket ellehet tárolni.  

Ez a funkció meggyorsítaná sok ember munkáját, tehát ezt a lehetőséget mindenképpen szem előtt tartjuk.  
  
Ezeket többféleképpen lehetséges modellezni, mi úgy terveznénk meg, hogy:  

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
A webes felület főként php nyelven fog készülni.  

Képes lesz felhasználni a Backend részen futó Python nyelven írt számolóprogramot.  

Azért a Pythonra esett a választás mert, gyors a benne való program fejlesztés, áttekinthetőbb és könnyebben módosítható mint versenytársai, illetve ezen alkalmazás elkészítésére tökeletes.  

  
> Tesztterv
---
Minden alkalmazás életében nagyon fontos a tesztelés. Ezalól a mi számológépünk sem kivétel.  

Ezek a teszt esetek pedig nem mások, mint:  
  
1. A backendben futó python program egyes elemei  

2. Megfelelően működik-e a php programunk  

3. Megnyitható-e a weboldalunk linkje  

4. Több felületen is jó-e a megjelenést, nincsenek esetleges elcsúszások  

5. Teljes weboldal tesztelés  

Ebbe minden eddigi beletartozik, csak a végkifejlett lesz tesztelve egyben.  
  
> Telepítési terv
---
A szoftverünk egy webes alkalmazásként kerül megalkotásra így nem szükséges telepíteni semmilyen alkalmazást.  


[//]: <> (Webes alkalmazás:  )

[//]: <> (+ A webes felületre fejlesztett alkalmazást bármilyen böngészőben el lehet majd érni.  )

[//]: <> (+ Külön szoftver nem kell hozzá.  )

[//]: <> (+ A webszerverre közvetlenül az internetről kapcsolódnak rá a kliensek.  )


> Karbantartási terv
---

> Fogalomtár
---
