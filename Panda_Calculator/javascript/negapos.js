//Ez a függvény előjelváltást végez
export function change_sign(a){
    if(typeof(a) == "number"){
        //Negatív esetén
        if (a < 0){
            let result;
            result = Math.abs(a);
            return result;
        }
        else if(a > 0){
            let result;
            result = a*(-1);
            return result;
        }
        else{
            return a;
        }
    }
    else{
        //Hiba lépett fel
        alert("Nem megfelelő input")
    }
}
