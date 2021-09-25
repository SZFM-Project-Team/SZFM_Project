<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Finger+Paint&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <script type="text/javascript" src="./javascript/square.js"></script>
    <script type="text/javascript" src="./javascript/sqrt.js"></script>
    <script type="text/javascript" src="./javascript/Multiplication.js"></script>
    <script type="text/javascript" src="./javascript/Addition.js"></script>
    <script type="text/javascript" src="./javascript/power.js"></script>
    <script type="text/javascript" src="./javascript/negapos.js"></script>
    <script type="text/javascript" src="./javascript/Division.js"></script>
    <script type="text/javascript" src="./javascript/Subtraction.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panda Calculator</title>
</head>

<body>

    <script>
        let x = 0;
        let ans = null;
        let block = -1;
        let operation = 0;


        function operationCheck(oper) 
        {
            if (block == -1)
            {
                switch (oper)
                {
                    case 1:
                        x = parseInt(cal.display.value);
                        operation = 1;
                }
            }
            else
            {
                operation = operation;
            }         
        }

        function appendNumber(number)
        {
            if (operation == 0)
            {
                cal.display.value += number;
            }
            else
            {
                cal.display.value = '';
                ans = x;
                cal.display.value += number;
                operation = 0;
            }
        }


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
        <div class="number-panel" style="width: 27%; height: 600px;">
            <table>
                <tr class="number-panel-first">
                    <!-- operation code: 97 -->
                    <td><input value=" 7 " onClick="appendNumber('7'); " type="button" class="button-style"></td>
                    <!-- operation code: 98 -->
                    <td><input value=" 8 " onClick="appendNumber('8');" type="button" class="button-style"></td>
                    <!-- operation code: 99 -->
                    <td><input value=" 9 " onClick="appendNumber('9');" type="button" class="button-style"></td>
                </tr>
                <tr class="number-panel-second">
                    <!-- operation code: 94 -->
                    <td><input value=" 4 " onClick="appendNumber('4');" type="button" class="button-style"></td>
                    <!-- operation code: 95 -->
                    <td><input value=" 5 " onClick="appendNumber('5');" type="button" class="button-style"></td>
                    <!-- operation code: 96 -->
                    <td><input value=" 6 " onClick="appendNumber('6');" type="button" class="button-style"></td>
                </tr>
                <tr class="number-panel-third">
                    <!-- operation code: 91 -->
                    <td><input value=" 1 " onClick="appendNumber('1');" type="button" class="button-style"></td>
                    <!-- operation code: 92 -->
                    <td><input value=" 2 " onClick="appendNumber('2');" type="button" class="button-style"></td>
                    <!-- operation code: 93 -->
                    <td><input value=" 3 " onClick="appendNumber('3');" type="button" class="button-style"></td>
                </tr>
                <tr class="number-panel-fourth">
                    <td><input value="+/-" onClick="" type="button"></td>
                    <!-- operation code: 90 -->
                    <td><input value=" 0 " onClick="appendNumber('0');" type="button" class="button-style"></td>
                    <!-- operation code: 100 -->
                    <td><input value=" . " onClick="appendNumber('.');" type="button" class="button-style"></td>
                </tr>
            </table>
        </div>

        <div class="container2" >
        <div class="grey-line"></div>
        </div>

        <div class="operation-panel" style="width: 27%; height: 600px;">
            <table>
                <tr class="operation-panel-first">
                    <!-- operation code: 1 -->
                    <td><input type="button" value=" * " onClick="operationCheck(1); console.log(operation);" class="button-style"></td>
                    <!-- operation code: 2 -->
                    <td><input type="button" value=" / " onClick="operationCheck(2); console.log(operation);" class="button-style"></td>
                    <!-- operation code: 3 -->
                    <td><input type="button" value=" % " onClick="" class="button-style"></td>
                </tr>
                <tr class="operation-panel-second">
                    <!-- operation code: 4 -->
                    <td><input type="button" value=" + " onClick="" class="button-style"></td>
                    <!-- operation code: 5 -->
                    <td><input type="button" value="x^2" onClick="cal.display.value = square(parseInt(cal.display.value)).toString();"class="button-style"></td>
                    <!-- operation code: 6 -->
                    <td><input type="button" value=" C " onClick="" class="button-style"></td>
                </tr>
                <tr class="operation-panel-third">
                    <!-- operation code: 7 -->
                    <td><input type="button" value=" - " onClick="" class="button-style"></td>
                    <!-- operation code: 8 -->
                    <td><input type="button" value=" √ " onClick="cal.display.value = sqrt(parseInt(cal.display.value)).toString();"class="button-style"></td>
                    <!-- operation code: 9 -->
                    <td><input type="button" value=" CE" onClick=""class="button-style"></td>
                </tr>
                <tr class="operation-panel-fourth">
                    <!-- operation code: 10 -->
                    <td><input type="button" value=" = " onClick="" class="button-style"></td>
                    <!-- operation code: 11 -->
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