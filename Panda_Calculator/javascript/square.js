//Ez a függvény egy számnak a négyzetre emelését végzi el
export function square(a){
    if(typeof(a) == "number"){
        //Négyzetre emelés
        let result;
        result = Math.pow(a,2);
        return result;
    }
    else{
        //Hiba lépett fel
        alert("Nem megfelelő input");
    }
}
