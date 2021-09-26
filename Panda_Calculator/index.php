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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="tutorial.css" rel="stylesheet">
    <script defer src="./javascript/tutorial.js"></script>
    <title>Panda Calculator</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
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
      Ha csak egy számot szeretnél törölni nyomd meg a " &#x232b; " gombot. Ha pedig mindent törölni szeretnél nyomd meg a " CE vagy C " gombot.
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
                    return power(x,y);
                    break;
                case 4:
                    return Addition(x,y);
                    break;
                case 7:
                    return Subtraction(x,y);
                    break;
            }
        }

        function operationCheck(oper) 
        {
            let element;
            
            if (block == -1)
            {
                switch (oper)
                {
                    case 1:
                        element = document.getElementsByClassName("active");
                        if (element.length > 0)
                        {
                            $(".active").removeClass("active");
                            element = document.getElementById("multiplication");
                            element.classList.add("active");
                        }
                        else
                        {
                            element = document.getElementById("multiplication");
                            element.classList.add("active");
                        }
                        x = parseFloat(cal.display.value);
                        operation = 1;
                        last = 1;
                        break;
                    case 2:
                        element = document.getElementsByClassName("active");
                        if (element.length > 0)
                        {
                            $(".active").removeClass("active");
                            element = document.getElementById("division");
                            element.classList.add("active");
                        }
                        else
                        {
                            element = document.getElementById("division");
                            element.classList.add("active");
                        }
                        x = parseFloat(cal.display.value);
                        operation = 2;
                        last = 2;
                        break;
                    case 3:
                        element = document.getElementsByClassName("active");
                        if (element.length > 0)
                        {
                            $(".active").removeClass("active");
                            element = document.getElementById("power");
                            element.classList.add("active");
                        }
                        else
                        {
                            element = document.getElementById("power");
                            element.classList.add("active");
                        }
                        x = parseFloat(cal.display.value);
                        operation = 3;
                        last = 3;
                        break;
                    case 4:
                        element = document.getElementsByClassName("active");
                        if (element.length > 0)
                        {
                            $(".active").removeClass("active");
                            element = document.getElementById("addition");
                            element.classList.add("active");
                        }
                        else
                        {
                            element = document.getElementById("addition");
                            element.classList.add("active");
                        }
                        x = parseFloat(cal.display.value);
                        operation = 4;
                        last = 4;
                        break;
                    case 6:
                        cal.display.value = '';
                        x = 0;
                        last = 0;
                        operation = 0;
                        y = 0;
                        block = -1;
                        break;
                    case 7:
                        element = document.getElementsByClassName("active");
                        if (element.length > 0)
                        {
                            $(".active").removeClass("active");
                            element = document.getElementById("substraction");
                            element.classList.add("active");
                        }
                        else
                        {
                            element = document.getElementById("substraction");
                            element.classList.add("active");
                        }
                        x = parseFloat(cal.display.value);
                        operation = 7;
                        last = 7;
                        break;
                    case 9:
                        cal.display.value = '';
                        break;
                    case 21:
                        cal.display.value = change_sign(parseFloat(cal.display.value)).toString();
                        break;
                }
            }
            else
            {
                operation = operation;
            }       
            if (oper == 10)
            {
                y = parseFloat(cal.display.value);
                cal.display.value = equalat(last);
                $(".active").removeClass("active");
                block = -1;
            }  
        }

        function setActiveOperation(id)
        {
            let el = document.getElementsByClassName("active");
            el.classList.remove("active");

            el = document.getElementById(id);
            el.classList.add("active");
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

        function pointAppend()
        {
            if (cal.display.value == "")
            {
                appendNumber("0.");
            }

            if (!(cal.display.value).includes('.')) 
            {
                appendNumber('.');
            }
        }

        function deleteLastCharacter(){
            
            if(cal.display.value=="NaN" || cal.display.value == "undefined"){
                cal.display.value = "";
            }
            else{
                cal.display.value = (cal.display.value).slice(0, -1);
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
                    <!-- operation code: 21 -->
                    <td><input value="+/-" onClick="operationCheck(21);" type="button" class="button-style shadow"></td>
                    <!-- operation code: 90 -->
                    <td><input value=" 0 " onClick="appendNumber('0');" type="button" class="button-style shadow"></td>
                    <!-- operation code: 100 -->
                    <td><input value=" . " onClick="pointAppend();" type="button" class="button-style shadow"></td>
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
                    <td><input type="button" id="multiplication" value=" X " onClick="operationCheck(1);" class="button-style shadow"></td>
                    <!-- operation code: 2 -->
                    <td><input type="button" id="division" value=" / " onClick="operationCheck(2);" class="button-style shadow"></td>
                    <!-- operation code: 3 -->
                    <td><input type="button" id="power" value="x^y" onClick="operationCheck(3);" class="button-style shadow"></td>
                </tr>
                <tr class="operation-panel-second">
                    <!-- operation code: 4 -->
                    <td><input type="button" id="addition" value=" + " onClick="operationCheck(4);" class="button-style shadow"></td>
                    <!-- operation code: 5 -->
                    <td><input type="button" value="x^2" onClick="cal.display.value = square(parseFloat(cal.display.value)).toString();"class="button-style shadow"></td>
                    <!-- operation code: 6 -->
                    <td><input type="button" value=" C " onClick="operationCheck(6);" class="button-style shadow"></td>
                </tr>
                <tr class="operation-panel-third">
                    <!-- operation code: 7 -->
                    <td><input type="button" id="substraction" value=" - " onClick="operationCheck(7);" class="button-style shadow"></td>
                    <!-- operation code: 8 -->
                    <td><input type="button" value=" √ " onClick="cal.display.value = sqrt(parseFloat(cal.display.value)).toString();"class="button-style shadow"></td>
                    <!-- operation code: 9 -->
                    <td><input type="button" value="CE" onClick="operationCheck(9);" class="button-style shadow"></td>
                </tr>
                <tr class="operation-panel-fourth">
                    <!-- operation code: 10 -->
                    <td><input type="button" value=" = " onClick="operationCheck(10);" id="equal" class="button-style shadow"></td>
                    <!-- operation code: 11 -->
                    <td><input type="button" value="" onClick="deleteLastCharacter()" class="delete-button"></td>
                </tr>
            </table>
        </div>
        

        <div class="panda-logo">
        <a href="javascript:playSound('panda');">
            <img src="panda.png" alt="panda" class="panda-image" /></a> 
            <audio id="panda"  src="./song.mp3" preload="auto"></audio>
        </div>
    </section>
    <section id="section-4" style="height: 200px; text-align:center">
         <div class=reklamsav style="bottom: 50px; right: 0;">
			<a><img src="addholder.png" alt="reklam" width = "500" height= "200"></a>
        </div>
    </section>
</body>
</html>
