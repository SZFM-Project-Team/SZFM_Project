# Követelmény Specifikáció

>Áttekintés
---
Az alkalmazás célja, hogy legyen egy olyan egyszerű számológép ami bármelyik diák számára néhány kattintással elérhető.  
Ezt legegyszerűbb módon úgy lehet elérni, hogy egy webes felületre készítjük el a számológépet.  Ez által bárki egyszerűen elérheti, feltéve ha van internetkapcsolata.  
A webes felület bármilyen eszközön elérhető, legyen az PC, laptop, mobil telefon stb.  
A felületnek emellett tartalmaz reklám felületet, ahol a Számok kiadó a saját könyveit reklámozhatja.  
Technológiák amiket alkalmazni szeretnénk: html, css, javascript.  

>Jelenlegi helyzet
---
A Számok Kiadó tanítási célból szeretne egy számológépet. 
Kiadónk nagyon híres a matematika könyveiről, mivel erre specializálódtunk.  
Szeretnénk egy ingyenes számítógépes számológép szoftvert kínálni a lelkes diákoknak.
Ezzel szeretnénk ösztönözni őket, hogy a matematika igen is érdekes tud lenni, és számolgassanak nyugodtan.
Ezzel minden bizonnyal el is érjük ezt.

>Vágyálom rendszer
---
A kiadónk szeretne egy olyan számológépet amely képes az alapvető számolások elvégzésére, ebbe beleértve az összeadást, kivonást, szorzást, és az osztást. 
Ezek mellett szeretnénk ha lenne benne hatványozás és gyökvonási lehetőség is, mivel ha a gyerekek megkapják a számológépet azelőtt, hogy tanulnák az iskolában akkor önszorgalomból utánajárhatnak az interneten. 
Mire oda jutnak, hogy tanulják, addigra már többjük elsajátíthatja ezeket az ismereteket. 
Mivel egy általános iskolás diák fogja használni, ezért lehetne hozzá valami kis bevezető amivel elmagyarázzák a használatát a gyerekeknek.

>Funkcionális követelmények
---
A számológép legyen könnyen kezelhető, és érthető legyen a használata. 
A weboldal könnyen kezelhető legyen, és az online megjelenés legyen reszponzív. 
Szóval telefonon, tableten, és számítógépen is működjön makulátlanul.

>Rendszerre vonatkozó törvények, szabályok ajánlások
---
A web felület szabványos eszközökkel készüljön, html/css/javascript/php.
A képek jpeg és png formátumúak lehetnek.

>Jelenlegi üzleti folyamatok modellje
---
Habár sok, számológép van az interneten, a legtöbb túl okos egy általános iskolai alsós diák számára. 
A log, ln, exp és hasonló kifejezések riasztónak hathatnak a kisgyermekek számára, valamint a korukban még teljesen feleslegesek is ezek a műveletek. 
Viszont aza alapműveletek ismerete már a korukban is nagyon fontos a hatványozás és gyökvonás pegig talán a két leggyakoribb művelet az alapműveleteken kívűl, így hasznos lehet ismerkedni velük már azelőtt mielőtt egyáltalán tanulnák.

>Igényelt üzleti folyamatok
---
A számológéphez, szükséges webszervert üzemeltetése, számológép designe-jának megalkotása. 
Ez a két folyamat minden számítógéphez szükséges. 
Ezeken kívül jó lehet ha ki tudja választani a felhasználó, hogy milyen tudományterületen szeretné használni a számítógépet és csak az ebben területben használt műveleteket megjeleníteni.  
<br>
![Üzletimodell képe](/Üzletimodell.png.png)

>Követelménylista
---
- Funkció összeadás Rendelkezzen egy olyan funkcióval amely képes a "matematikai összeadásra".
- Funkció kivonás Rendelkezzen egy olyan funkcióval amely képes a "matematikai kivonásra".
- Funkció szorzás Rendelkezzen egy olyan funkcióval amely képes a "matematikai szorzásra".
- Funkció osztás Rendelkezzen egy olyan funkcióval amely képes a "matematikai osztásra".
- Funkció négyzetgyökvonás Rendelkezzen egy olyan funkcióval amely képes a négyzetgyököt vonni.
- Funkció gyökvonás rendelkezzen egy funkcióval amely képes tetszésszerű rangú gyököt vonni egy számból.
- Funkció hatványozás Rendelkezzen egy olyan funkcióval amely képes a számokat hatványra emelni.
- Funkció törlés funkció rendelkezzen egy funkcióval amely képes a bevitt adatok törlésére.
- Funkció gyökvonás rendelkezzen egy funkcióval amely képes tetszésszerű rangú gyököt vonni egy számból.
- Felület Átlátható, könnyen kezelhető Átlátható Könnyen, keresés nélkül kezelhetők az alkalmazás funkciói.
- Felület Díszítés a weboldal jobb alsó sarkában legyen két jel melyek szimbolizálják a megrendelőt, illetve a gyártócéget.
- Felület Tutorial A weboldal jobb felső sarkában legyen egy mezó amely egy képsorozatot tartalmaz, ez megmutatja, hogy kell használni a számológépet.
- Felület Nyilak A Tutorial mező jobb és bal oldalán legyenek nyilak amelyekkel a képsorozatban levő képek között lehet válogatni.
- Biztonság https protocol amellyel biztosítjuk a felhasználó védettségét a weben.
- Számítások kliens oldalon való történése az alkalmazás a kliens oldalán fog számításokat végezni, hogy kerüljük a szerver leterheltségét, így sok felhasználó egyidejűleg tudja használni.

>Riportok
---
Hogyan kellene működnie a rendszernek?  
Webböngészéből elérhetőnek kell lennie.  
Az oldalon egy egyszerű számológépet kell látnunk.  
Emellet legyen egy reklám felület ahol a Számok kiadó könyvei vannak reklámozva.  
A számoló gépet tudjuk kattintásokkal alkalmazni.  
A számológép jelenítse meg a beírt számokat, majd a művelet eredményét is.


>Fogalomtár
---
1. **Reszponzív felület** - Mobilon, Tableten, *PC*-n igazodik a képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül üzemelhet.”
2. **Webszerver** - egy kiszolgáló, mely elérhetővé teszi a helyileg (esetleg más kiszolgálón) tárolt weblapokat a *HTTP* protokollon keresztül.
3. **HTML** - angolul: *HyperText Markup Language*=hiperszöveges jelölőnyelv, egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a *W3C* (World Wide Web Consortium) támogatásával.
4. **CSS** - Cascading Style Sheets, magyarul: lépcsőzetes stíluslapok, a számítástechnikában egy stílusleíró nyelv, mely a *HTML* vagy *XHTML* típusú strukturált dokumentumok megjelenését írja le.
5. **JavaScript** - programozási nyelv egy objektumorientált, prototípus-alapú szkriptnyelv, amelyet weboldalakon elterjedten használnak.
1. **PHP** - egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére.
2. **PNG** - *Portable Network Graphics* képek tárolására, veszteségmentes tömörítésére alkalmas fájlformátum.
3. **JPEG** - *Joint Photographic Experts Group* képek tárolására alkalmas fájlformátum.
4. **HTTPS** - *HyperText Transfer Protocol Safe* egy URI-séma, amely biztonságos http kapcsolatot jelöl.
5. **Kliens** - olyan számítógép vagy azon futó program, amelyik hozzáfér egy *(távoli)* szolgáltatáshoz, amelyet egy számítógép hálózathoz tartozó másik számítógép *(a szerver)* nyújt.