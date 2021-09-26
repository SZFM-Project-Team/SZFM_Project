//Ez a függvény egy számnak a négyzetre emelését végzi el
function square(a)
{
    if(typeof(a) == "number")
    {
        //Négyzetre emelés
        let result;
        result = Math.pow(a,2);
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
    else
    {
        //Hiba lépett fel
        alert("Nem megfelelő input");
    }
}
