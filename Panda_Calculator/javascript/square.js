//Ez a függvény egy számnak a négyzetre emelését végzi el
function square(a){
    if(typeof(a) == "number"){
        //Négyzetre emelés
        let result = Math.pow(a,2);
        return result;
    }
    else{
        //Hiba lépett fel
        alert("Nem megfelelő input")
    }
}
