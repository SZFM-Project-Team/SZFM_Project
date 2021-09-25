<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
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
    <script>
        function playSound(animal) 
        {
            document.getElementById(animal).play();
        }

    </script>

    <div class="container">
        <img src="kek_csik.png" class="blue-line" alt="kek_csik">
        <div id="label" class="text-block">
            <h1>PANDA CALCULATOR</h1>
        </div>
    </div>


    <div class="input-line">
        <form name="cal">
            <input type="text" id="display">     
        </form>
    </div>
   
    <section id="section-3" style="height: 600px; display: flex;">
        <div class="container1">
            <table class="middle">
            <tr class="number-panel-first">
                    <td><input value=" 7 " onClick="cal.display.value += '7'" type="button" class="button-style"></td>
                    <td><input value=" 8 " onClick="cal.display.value += '8'" type="button" class="button-style"></td>
                    <td><input value=" 9 " onClick="cal.display.value += '9'" type="button" class="button-style"></td>
                </tr>
                <tr class="number-panel-second">
                    <td><input value=" 4 " onClick="cal.display.value += '4'" type="button" class="button-style"></td>
                    <td><input value=" 5 " onClick="cal.display.value += '5'" type="button" class="button-style"></td>
                    <td><input value=" 6 " onClick="cal.display.value += '6'" type="button" class="button-style"></td>
                </tr>
                <tr class="number-panel-third">
                    <td><input value=" 1 " onClick="cal.display.value += '1'" type="button" class="button-style"></td>
                    <td><input value=" 2 " onClick="cal.display.value += '2'" type="button" class="button-style"></td>
                    <td><input value=" 3 " onClick="cal.display.value += '3'" type="button" class="button-style"></td>
                </tr>
                <tr class="number-panel-fourth">
                    <td><input value="+/-" onClick="cal.display.value = " type="button" class="button-style"></td>
                    <td><input value=" 0 " onClick="cal.display.value += '0'" type="button" class="button-style"></td>
                    <td><input value=" . " onClick="cal.display.value += '.'" type="button" class="button-style"></td>
                </tr>
            </table>
        </div>

        <div class="container2" >
        <div class="grey-line"></div>
        </div>

        <div class="container3" >
            <table class="center">
            <tr class="operation-panel-first">
                    <td><input type="button" value=" x " onClick="x = cal.display.value; cal.display.value = '';"class="button-style"></td>
                    <td><input type="button" value=" / " onClick="" class="button-style"></td>
                    <td><input type="button" value=" % " onClick="" class="button-style"></td>
                </tr>
                <tr class="operation-panel-second">
                    <td><input type="button" value=" + " onClick="" class="button-style"></td>
                    <td><input type="button" value="x^2" onClick="cal.display.value = square(parseInt(cal.display.value)).toString();" class="button-style"></td>
                    <td><input type="button" value=" C " onClick="" class="button-style"></td>
                </tr>
                <tr class="operation-panel-third">
                    <td><input type="button" value=" - " onClick="" class="button-style"></td>
                    <td><input type="button" value=" √ " onClick="cal.display.value = sqrt(parseInt(cal.display.value)).toString();" class="button-style"></td>
                    <td><input type="button" value=" CE" onClick="" class="button-style"></td>
                </tr>
                <tr class="operation-panel-fourth">
                    <td><input type="button" value=" = " onClick="" class="button-style"></td>
                    <td><input type="button" value="<x|" onClick="" class="button-style"></td>
                </tr>
            </table>
        </div>

        <div class="panda-logo">
        <a href="javascript:playSound('panda');"><img src="panda.png" alt="panda" class="panda-image"/></a> 
            <audio id="panda"  src="./song.mp3" preload="auto"></audio>
        </div>
       

    </section>
    
</body>

</html>