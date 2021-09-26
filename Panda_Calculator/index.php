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
    <link href="tutorial.css" rel="stylesheet">
    <script defer src="./javascript/tutorial.js"></script>
    <title>Panda Calculator</title>
</head>
<body>
    
<button id=modbutton data-modal-target="#modal">Tutorial</button>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Tutorial</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <h4>Összeadás</h4>
      Írj be egy számot a baloldali gombok segítségével, majd nyomd meg a " + " gombot, ezután írj be egy másik számot és nyomd meg az " = " gombot.
      <h4>Kivonás</h4>
      Írd be azt a számot amiből kiszeretnél vonni, majd a nyomd meg a " - " gombot, ezután írd be azt a számot amit kiszeretnél vonni és nyomd meg az " = " gombot.
      <h4>Szorzás</h4>
      Írj be egy számot, majd nyomd meg a " * " gombot, ezután írj be egy másik számot és nyomd meg az " = " gombot.  
      <h4>Osztás</h4>
      Írd be azt a számot amit elszeretnél osztani, majd nyomd meg a " / " gombot, ezután írd be azt a számot amivel osztani szeretnél és nyomd meg az " = " gombot.
      <h4>Négyzetre emelés</h4>
      Írj be egy számot, majd nyomd meg a " x^2 " gombot.
      <h4>Négyzetgyök vonás</h4>
      Írj be egy számot, majd nyomd meg a " √ " gombot.
      <h4>Törlés</h4>
      Ha csak egy számot szeretnél törölni nyomd meg a " C " gombot. Ha pedig mindent törölni szeretnél nyomd meg a " CE " gombot.
    </div>
  </div>
  <div id="overlay"></div>

    <script>
        let x = 0;
        let y = 0;
        let last = null;
        let block = -1;
        let operation = 0;

        function equalat(oper)
        {
            switch (oper)
            {
                case 1:
                    return Multiplication(x,y);
                    break;
                case 2:
                    return Division(x,y);
                    break;
                case 3:

                case 4:
                    
                case 5:
                    
                case 6:
                    
                case 7:

                case 8:

                case 9:

                case 10:

                case 11:
            }
        }

        function operationCheck(oper) 
        {
            if (block == -1)
            {
                switch (oper)
                {
                    case 1:
                        x = parseInt(cal.display.value);
                        operation = 1;
                        last = 1;
                        break;
                    case 2:
                        x = parseInt(cal.display.value);
                        operation = 2;
                        last = 2;
                        break;
                }
            }
            else
            {
                operation = operation;
            }       
            if (oper == 10)
            {
                y = parseInt(cal.display.value);
                cal.display.value = equalat(last);
                block = -1;
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
                cal.display.value += number;
                operation = 0;
                block = 1;
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
            <input type="text" id="display" class="shadow">     
        </form>
    </div>
   
    <section id="section-3" style="height: 600px; display: flex;">
        <div class="container1">
            <table class="center">
                <tr class="number-panel-first">
                    <!-- operation code: 97 -->
                    <td><input value=" 7 " onClick="appendNumber('7'); " type="button" class="button-style shadow"></td>
                    <!-- operation code: 98 -->
                    <td><input value=" 8 " onClick="appendNumber('8');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 99 -->
                    <td><input value=" 9 " onClick="appendNumber('9');" type="button" class="button-style shadow"></td>
                </tr>
                <tr class="number-panel-second">
                    <!-- operation code: 94 -->
                    <td><input value=" 4 " onClick="appendNumber('4');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 95 -->
                    <td><input value=" 5 " onClick="appendNumber('5');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 96 -->
                    <td><input value=" 6 " onClick="appendNumber('6');" type="button" class="button-style shadow"></td>
                </tr>
                <tr class="number-panel-third">
                    <!-- operation code: 91 -->
                    <td><input value=" 1 " onClick="appendNumber('1');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 92 -->
                    <td><input value=" 2 " onClick="appendNumber('2');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 93 -->
                    <td><input value=" 3 " onClick="appendNumber('3');" type="button" class="button-style shadow"></td>
                </tr>
                <tr class="number-panel-fourth">
                    <td><input value="+/-" onClick="" type="button" class="button-style"></td>
                    <!-- operation code: 90 -->
                    <td><input value=" 0 " onClick="appendNumber('0');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 100 -->
                    <td><input value=" . " onClick="appendNumber('.');" type="button" class="button-style shadow"></td>
                </tr>
            </table>
        </div>

        <div class="container2" >
        <div class="grey-line"></div>
        </div>

        <div class="container3">
            <table class="center">
                <tr class="operation-panel-first">
                    <!-- operation code: 1 -->
                    <td><input type="button" value=" * " onClick="operationCheck(1); console.log(operation);" class="button-style shadow"></td>
                    <!-- operation code: 2 -->
                    <td><input type="button" value=" / " onClick="operationCheck(2); console.log(operation);" class="button-style shadow"></td>
                    <!-- operation code: 3 -->
                    <td><input type="button" value=" % " onClick="" class="button-style shadow"></td>
                </tr>
                <tr class="operation-panel-second">
                    <!-- operation code: 4 -->
                    <td><input type="button" value=" + " onClick="" class="button-style shadow"></td>
                    <!-- operation code: 5 -->
                    <td><input type="button" value="x^2" onClick="cal.display.value = square(parseInt(cal.display.value)).toString();"class="button-style shadow"></td>
                    <!-- operation code: 6 -->
                    <td><input type="button" value=" C " onClick="" class="button-style shadow"></td>
                </tr>
                <tr class="operation-panel-third">
                    <!-- operation code: 7 -->
                    <td><input type="button" value=" - " onClick="" class="button-style shadow"></td>
                    <!-- operation code: 8 -->
                    <td><input type="button" value=" √ " onClick="cal.display.value = sqrt(parseInt(cal.display.value)).toString();"class="button-style shadow"></td>
                    <!-- operation code: 9 -->
                    <td><input type="button" value=" CE" onClick=""class="button-style shadow"></td>
                </tr>
                <tr class="operation-panel-fourth">
                    <!-- operation code: 10 -->
                    <td><input type="button" value=" = " onClick="" id="equal" class="button-style shadow"></td>
                    <!-- operation code: 11 -->
                    <td><input type="button" value="<x|" onClick="" class="button-style shadow"></td>
                </tr>
            </table>
        </div>

        <div class="panda-logo">
        <a href="javascript:playSound('panda');">
            <img src="panda.png" alt="panda" class="panda-image" /></a> 
            <audio id="panda"  src="./song.mp3" preload="auto"></audio>
        </div>
    </section>
    <section id="section-4" style="height: 200px;">
         <div class=reklamsav style=" position: absolute; bottom: -50px; right: 0;" >
			<a><img src="addholder.png" alt="reklam" width = "500" height= "200"></a>
        </div>
    </section>
</body>
</html>
