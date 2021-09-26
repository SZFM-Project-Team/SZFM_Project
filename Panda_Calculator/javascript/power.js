//Ez a függvény egy szám hatványozását végzi el
function power(a,n)
{
    if(typeof(a) == "number" && typeof(n) == "number")
    {
        if (n == 0)
        {
            //Ha a kitevő 0, akkor minden számnál "1" lesz a végeredmény
            let result = 1;
            return result
        }
        else
        {   
            //Akkor teljesül ha a kitevő nem 0, azaz bármilyen egész szám
            let result;
            result = Math.pow(a,n);
            if (result - Math.round(result) != 0){
                if (result - Math.round(result) < 0){
                    if (result - Math.round(result) < 0 && result - Math.round(result) > -0.001){ 
                        result = Math.round(result);
                        return result;
                    }
                }
                else {
                    if (result - Math.round(result) > 0 && result - Math.round(result) < 0.001){
                        result = Math.round(result);
                        return result;
                    }
                }
            } 
            return result;
        }
    }
    else
    {
        //Hiba lépett fel
        alert("Nem megfelelő input")
    }
}
