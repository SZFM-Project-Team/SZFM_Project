# Funkcionális Specifikáció
>Áttekintés
---
Egy olyan számológépet szeretnénk fejleszeni, ami segít az általános iskolás gyerekeknek a matematika világában. Magát a számításokat külön programozási nyelvekkel implementálva (JavaScript, PHP, HTML, CSS). Mindezt egy webszerveren keresztül a kliens oldalán végrehajtva.
Egy számológép, ami az alapszámításokon kívül képes hatványozásra, és gyökvonásra is hasznos lehet nekik, mivel nem mindenki engedhet meg magának egy tudományos számológépet, az olcsókon pedig nincsenek ilyen funkciók.
Egy ingyenes rendszert alkotunk meg, szóval semmi féle anyagi következményt nem von maga után a weboldal látogatása, és használata. 
Emellett egy szép design-al is ellátjuk a számológépünket, aminek van egy kis hátsó szándéka is. 
Cégünk szeretné felhívni az iskolások figyelmét a természet veszélyezettségére, és erre az egyik legalkalmasabb állatot választottuk, a pandát.
Ez csak egy kis tudat alatti oktatás lenne részünkről, hogy a matek oktatása mellett egy kis természetvédelmet is tanítsunk.
Emellett azt is fontos megemlíteni, hogy minél egyszerűbb legyen a kivitelezés, mivel érthetőnek kell lennie mindenki számára.

>Jelenlegi helyzet
---
A megrendeló  egy olyan számológépet szeretne amely használata egyszerű, átlátható, böngészőfüggetlen ugyanakkor az alapvetó matematikai funkciókkal és műveletekkel rendelkezik (összeadás, kivonás, szorzás, osztás, hatványozás, négyzetgyökvonás), mindemellett legyen versenyképes a piacon.  
Szeretné a műveletek gyors elvégzését illetve az eredmények pontosságát és pontos kerekítését megadott tizedesjegyig.
Ezzel elérve, hogy a diákok egy könnyen átlátható felületen tudjanak dolgozni, így elérve azt, hogy ne viszakozzanak a számolástól és segítséget biztosítani a nehezebb feladatokhoz, illetve szeretnék, hogy a diákok könnyebben adaptálódjanak a XXI. századi automatizált/gépesített világhoz.

>Követelménylista
---
- Funkció összeadás Rendelkezzen egy olyan funkcióval amely képes a "matematikai összeadásra".
- Funkció kivonás Rendelkezzen egy olyan funkcióval amely képes a "matematikai kivonásra".
- Funkció szorzás Rendelkezzen egy olyan funkcióval amely képes a "matematikai szorzásra".
- Funkció osztás Rendelkezzen egy olyan funkcióval amely képes a "matematikai osztásra".
- Funkció négyzetgyökvonás Rendelkezzen egy olyan funkcióval amely képes a négyzetgyököt vonni.
- Funkció gyökvonás rendelkezzen egy funkcióval amely képes tetszésszerű rangú gyököt vonni egy számból.
- Funkció hatványozás Rendelkezzen egy olyan funkcióval amely képes a számokat hatványra emelni.
- Funkció Százalékszámítás Rendelkezzen egy olyan funkcióval amely képes egy tetszőleges számnak tetszőleges százalékát kiszámítani.
- Funkció törlés funkció rendelkezzen egy funkcióval amely képes a bevitt adatok törlésére.
- Funkció gyökvonás rendelkezzen egy funkcióval amely képes tetszésszerű rangú gyököt vonni egy számból.
- Felület Átlátható,könnyen kezelhető Átlátható Könnyen, keresés nélkül kezelhetők az alkalmazás funkciói.
- Felület Díszítés a weboldal jobb alsó sarkában legyen két jel melyek szimbolizálják a megrendelőt, illetve a gyártócéget.
- Felület Tutorial A weboldal jobb felső sarkában legyen egy mezó amely egy képsorohatot tartalmaz, ez megmutatja, hogy kell használni a számológépet.
- Felület Nyilak A Tutorial mező jobb és bal oldalán legyenek nyilak amellyekkel a képsorozatban levő képek között lehet válogatni.
- Biztonság https protocol amellyel biztosítjuk a felhasználó védettségét a weben.
- Számítások kliens oldalon való történése Az alkalmazás a kliensoldalán fog számításokat végezni, hogy kerüljük a weboldal leterheltségét, így sok felhasználó egyidejüleg tudja használni.


>Jelenlegi üzleti folyamatok modellje
---
Azért, hogy az általános iskolai alsós diákokal megszeretssük a matematikát és annak rejtelmeit létrehozunk egy számológépet amit ingyen használhatnak és nem riasztják el őket az olyan kifejezések mint a log, ln és az exp ami számukra felesleges műveletek. 
A számológépünk csak az alapműveleteket (osztás, szorzás, összeadás, kivonás) a hatványozás és gyökvonás műveletét fogja ismerni ami teljesen lefedi az 1-4 évfolyamos diákok szükséges ismeretét.  

>Igényelt üzleti folyamatok modellje
---
A webszerver üzemeltetése minden webes számológéphez elengedhetetlen folyamat. Ugyanez mondható el a számológép design-jának a megtervezéséről is. Viszont még igényelt elvárás lehet az is, hogy a számológép tudományterület specifikus legyen azaz, be lehessen állítani, hogy milyen műveleteket tudjon végrehajtani egy számmológép. Például egy általános számológépnek nem feltétlen kell tudnia a kettes számrendszerbe átváltani egy számot, még egy programozói számítógépnek alapelvárás. 
>Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
---

>Használati esetek
---

>Képernyő tervek
---
![Panda Calculator Preview](/panda_calculator.png) <br>
- A képernyő legtetején helyezkedik el a webalkalmazásnak a címe, ami lehet végleges de általában ideiglenes cím, ahogy halad előre a projekt.
- A cím sáv alatt helyezkedik el az igazán fontos rész, ahol a számok jelennek meg és az eredmények a műveletek végrhajtása után. Ez egy dinamikusan változó sáv.
- A szám sáv alatti bal területen helyezkedik el maga a szám gomb panel, ahol a szokásos 1-9, 0 és tizedes pont használható.
- Majd a jobb oldalon helyezkednek el csomóba szedve maguk a műveletek, ami kiegészül egy törlés, egyenlőségjel, és törlés funkcióval is (***C***).
- Az alap műveleket mellett helyet kapott még négyzet és négyzetgyök gomb is, de a panel könnyen fejleszthető, hogy más implementációnak is eleget tegyen.
- Az ablak jobb oldalán pedig az ikonikus panda "kabala" foglal helyet, ami motiválja a gyerekeket, akik a szoftvert használják a matematika használatára.

>Forgatókönyv
---

>Funkció - követelmény megfeleltetés
---
A számológép egyik fontos követelménye, hogy képes legyen a négy alapműveletre és a gyökvonás illetve, a hatványozás műveleteire. 
Ezeket a követelményeket a következőképp oldanánk meg:   
- összeadás:  a számológép második sorában található negyedik gombjának megnyomásával  
- kivonás: a számológép harmadik sorában található negyedik gombjának megnyomásával  
- szorzás: a számológép első sorában található negyedik gombjának megnyomásával  
- osztás: a számológép első sorában található ötödik gombjának megnyomásával  
- hatványozás: a számológép második sorában található ötödik gombjának megnyomásával  
- gyökvonás: a számológép harmadik sorában található ötödik gombjának megnyomásával

>Fogalomszótár
---
1. **Reszponzív felület** - Mobilon, Tableten, *PC*-n igazodik a képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül üzemelhet.”
2. **Webszerver** - egy kiszolgáló, mely elérhetővé teszi a helyileg (esetleg más kiszolgálón) tárolt weblapokat a *HTTP* protokollon keresztül.
3. **HTML** - angolul: *HyperText Markup Language*=hiperszöveges jelölőnyelv, egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a *W3C* (World Wide Web Consortium) támogatásával.
4. **CSS** - Cascading Style Sheets, magyarul: lépcsőzetes stíluslapok, a számítástechnikában egy stílusleíró nyelv, mely a *HTML* vagy *XHTML* típusú strukturált dokumentumok megjelenését írja le.
5. **JavaScript** - programozási nyelv egy objektumorientált, prototípus-alapú szkriptnyelv, amelyet weboldalakon elterjedten használnak.
6. **PHP** - egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére.
7. **PNG** - *Portable Network Graphics* képek tárolására, veszteségmentes tömörítésére alkalmas fájlformátum.
8. **JPEG** - *Joint Photographic Experts Group* képek tárolására alkalmas fájlformátum.
9. **HTTPS** - *HyperText Transfer Protocol Safe* egy URI-séma, amely biztonságos http kapcsolatot jelöl.
10. **Kliens** - olyan számítógép vagy azon futó program, amelyik hozzáfér egy *(távoli)* szolgáltatáshoz, amelyet egy számítógép hálózathoz tartozó másik számítógép *(a szerver)* nyújt.