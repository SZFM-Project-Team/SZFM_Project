//Ez a függvény a négyzetgyökvonást végzi el
function sqrt(a)
{
    if(typeof(a) == "number" && a >= 0)
    {
        //Négyzetgyökvonás
        let result;
        result = Math.sqrt(a);
        return result;
    }
    else
    {
        //Hiba lépett fel
        alert("Nem megfelelő input");
    }
}
