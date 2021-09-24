//Ez a függvény a négyzetgyökvonást végzi el
function sqrt(a){
    if(typeof(a) == "number" ){
        //Négyzetgyökvonás
        let result;
        result = Math.sqrt(a);
        return result;
    }
    else{
        //Hiba lépett fel
        alert("Nem megfelelő input");
    }
}
