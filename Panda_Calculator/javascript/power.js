//Ez a függvény egy szám hatványozását végzi el
export function power(a,n){
    if(typeof(a) == "number" && typeof(n) == "number"){
        if (n == 0){
            //Ha a kitevő 0, akkor minden számnál "1" lesz a végeredmény
            let result = 1;
            return result
        }
        else{
            //Akkor teljesül ha a kitevő nem 0, azaz bármilyen egész szám
            let result;
            result = Math.pow(a,n);
            return result;
        }
    }
    else{
        //Hiba lépett fel
        alert("Nem megfelelő input")
    }
}
