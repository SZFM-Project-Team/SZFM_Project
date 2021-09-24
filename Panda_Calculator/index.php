<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>
    <meta charset="UTF-8">
    <script type="text/javascript" src="./javascript/square.js"></script>
    <script type="text/javascript" src="./javascript/sqrt.js"></script>
    <script type="text/javascript" src="./javascript/Multiplication.js"></script>
    <script type="text/javascript" src="./javascript/Addition.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panda Calculator</title>
</head>

<body>

    <script>
        let x = 0;
        let y = 0;
        let operation = 0;

        function operationCheck(oper) 
        {
            switch oper:
                case 1:
                    
        }
    </script>

    <h1>PANDA CALCULATOR</h1>

    <div class="input-line">
        <form name="cal">
            <input type="text" name="display">     
        </form>
    </div>
   
    <section id="section-3" style="height: 600px; display: flex;">
        <div class="number-panel" style="width: 27%; height: 600px; background-color: blue;">
            <table>
                <tr class="number-panel-first">
                    <td><input value=" 7 " onClick="cal.display.value += '7'" type="button"></td>
                    <td><input value=" 8 " onClick="cal.display.value += '8'" type="button"></td>
                    <td><input value=" 9 " onClick="cal.display.value += '9'" type="button"></td>
                </tr>
                <tr class="number-panel-second">
                    <td><input value=" 4 " onClick="cal.display.value += '4'" type="button"></td>
                    <td><input value=" 5 " onClick="cal.display.value += '5'" type="button"></td>
                    <td><input value=" 6 " onClick="cal.display.value += '6'" type="button"></td>
                </tr>
                <tr class="number-panel-third">
                    <td><input value=" 1 " onClick="cal.display.value += '1'" type="button"></td>
                    <td><input value=" 2 " onClick="cal.display.value += '2'" type="button"></td>
                    <td><input value=" 3 " onClick="cal.display.value += '3'" type="button"></td>
                </tr>
                <tr class="number-panel-fourth">
                    <td><input value="+/-" onClick="cal.display.value = " type="button"></td>
                    <td><input value=" 0 " onClick="cal.display.value += '0'" type="button"></td>
                    <td><input value=" . " onClick="cal.display.value += '.'" type="button"></td>
                </tr>
            </table>
        </div>

        <div class="divider" style="width: 6%; height: 600px; background-color: red;">

        </div>

        <div class="operation-panel" style="width: 27%; height: 600px; background-color: purple;">
            <table>
                <tr class="operation-panel-first">
                    <td><input type="button" value=" x " onClick="x = cal.display.value; cal.display.value = '';"></td>
                    <td><input type="button" value=" / " onClick=""></td>
                    <td><input type="button" value=" % " onClick=""></td>
                </tr>
                <tr class="operation-panel-second">
                    <td><input type="button" value=" + " onClick=""></td>
                    <td><input type="button" value="x^2" onClick="cal.display.value = square(parseInt(cal.display.value)).toString();"></td>
                    <td><input type="button" value=" C " onClick=""></td>
                </tr>
                <tr class="operation-panel-third">
                    <td><input type="button" value=" - " onClick=""></td>
                    <td><input type="button" value=" √ " onClick="cal.display.value = sqrt(parseInt(cal.display.value)).toString();"></td>
                    <td><input type="button" value=" CE" onClick=""></td>
                </tr>
                <tr class="operation-panel-fourth">
                    <td><input type="button" value=" = " onClick=""></td>
                    <td><input type="button" value="<x|" onClick=""></td>
                </tr>
            </table>
        </div>

        <div class="panda-logo" style="width: 40%; height: 600px; background-color: yellow;">
            <img src="panda.png" />
        </div>

    </section>
    
</body>

</html>