<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panda Calculator</title>
</head>

<body>

    <script type="text/javascript" src="./javascript/square.js"></script>


    
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
                    <td><input value="7" onClick="cal.display.value += '7'" type="button"></td>
                    <td><input value="8" onClick="cal.display.value = square(parseInt(cal.display.value)).toString();" type="button"></td>
                    <td><input value="9" type="button"></td>
                </tr>
                <tr class="number-panel-second">
                    <td><input value="4" type="button"></td>
                    <td><input value="5" type="button"></td>
                    <td><input value="6" type="button"></td>
                </tr>
                <tr class="number-panel-third">
                    <td><input value="1" type="button"></td>
                    <td><input value="2" type="button"></td>
                    <td><input value="3" type="button"></td>
                </tr>
                <tr class="number-panel-fourth">
                    <td><input value="+/-" type="button"></td>
                    <td><input value="0" type="button"></td>
                    <td><input value="." type="button"></td>
                </tr>
            </table>
        </div>

        <div class="divider" style="width: 6%; height: 600px; background-color: red;">

        </div>

        <div class="operation-panel" style="width: 27%; height: 600px; background-color: purple;">
            <table>
                <tr class="operation-panel-first">
                    <td><button type="button" class="button-x"></button></td>
                    <td><button type="button" class="button-divide"></button></td>
                    <td><button type="button" class="button-percentage"></button></td>
                </tr>
                <tr class="operation-panel-second">
                    <td><button type="button" class="button-addition"></button></td>
                    <td><button type="button" class="button-square"></button></td>
                    <td><button type="button" class="button-clear"></button></td>
                </tr>
                <tr class="operation-panel-third">
                    <td><button type="button" class="button-substract"></button></td>
                    <td><button type="button" class="button-squareroot"></button></td>
                    <td><button type="button" class="button-clearempty"></button></td>
                </tr>
                <tr class="operation-panel-fourth">
                    <td><button type="button" class="button-equal"></button></td>
                    <td><button type="button" class="button-backspace"></button></td>
                </tr>
            </table>
        </div>
    

        <div class="panda-logo" style="width: 40%; height: 600px; background-color: yellow;">
            <img src="panda.png" />
        </div>

    </section>
    
</body>

</html>